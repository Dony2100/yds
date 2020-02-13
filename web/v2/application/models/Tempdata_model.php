<?php defined('BASEPATH') OR exit('No direct script access allowed'); 
 
class Tempdata_model extends CI_Model { 
    var $table = 'antihoax_temp'; 
    var $column_order = array(null, 'member_id','status','klasifikasi','kesimpulan','isi','fakta','rujukan','sumber','gambar1','gambar2','subklarifikasi','tanggal','tags','updated_at','updated_id','created_at'); //set column field database for datatable orderable 
    var $column_search = array('status','klasifikasi','kesimpulan','isi','fakta','rujukan','sumber','gambar1','gambar2','tanggal','tags'); //set column field database for datatable searchable 
    var $order = array('id' => 'asc'); // default order 
 
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }
 
    private function _get_datatables_query()
    {
         
        $this->db->from($this->table);
 
        $i = 0;
     
        foreach ($this->column_search as $item) // loop column 
        {
            if(isset($_POST['search']) && $_POST['search']['value']) // if datatable send POST for search
           {

               if($i===0) // first loop
               {
                   $this->db->group_start(); // open bracket. query Where with OR clause better with bracket. because maybe can combine with other WHERE with AND.
                   $this->db->like($item, $_POST['search']['value']);
               }
               else
               {
                   $this->db->or_like($item, $_POST['search']['value']);
               }

               if(count($this->column_search) - 1 == $i) //last loop
                   $this->db->group_end(); //close bracket
           }

            $i++;
        }
         
        if(isset($_POST['order'])) // here order processing
        {
            $this->db->order_by($this->column_order[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
        } 
        else if(isset($this->order))
        {
            $order = $this->order;
            $this->db->order_by(key($order), $order[key($order)]);
        }
    }
 
    function get_datatables()
    {
        $this->_get_datatables_query();
        if(isset($_POST['length']) && $_POST['length'] != -1)
        if(isset($_POST['start'])) $this->db->limit($_POST['length'], $_POST['start']);
        $query = $this->db->get();
        return $query->result();
    }
 
    function count_filtered()
    {
        $this->_get_datatables_query();
        $query = $this->db->get();
        return $query->num_rows();
    }

    public function count_all()
    {
        $this->db->from($this->table);
        return $this->db->count_all_results();
    }
    
    function get_antihoax($id) {
        return $this->db->get_where($this->table, array('id' => $id))->row_array();
    }

    /*
     * Get all antihoax
     */

    function get_all_antihoax() {
        $this->db->order_by('id', 'desc');
        return $this->db->get($this->table)->result_array();
    }

    /*
     * function to add new antihoax
     */

    function add_antihoax($params) {
        $this->db->insert($this->table, $params);
        return $this->db->insert_id();
    }

    /*
     * function to update antihoax
     */

    function update_antihoax($id, $params) {
        $this->db->where('id', $id);
        return $this->db->update($this->table, $params);
    }

    /*
     * function to delete antihoax
     */

    function delete_antihoax($id) {
        return $this->db->delete($this->table, array('id' => $id));
    }
    
    function delete_antihoaxs($list)
    {   
        $this->db->where_in('id',$list);
        $this->db->delete($this->table);
        return $this->db->affected_rows();
    }
    
    function last_update() {
        $this->db->select_max("updated_at");
        $query = $this->db->get($this->table);
        $result = $query->result();
        return $result[0]->updated_at;
    }

}