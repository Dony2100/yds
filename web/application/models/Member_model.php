<?php defined('BASEPATH') OR exit('No direct script access allowed'); 
 
class Member_model extends CI_Model { 
    var $table = 'user_profile'; 
    var $column_order = array(null, 'FirstName','LastName','birthplace','birthdate','phone','address','city','country','updated_at'); //set column field database for datatable orderable 
    var $column_search = array('FirstName','LastName','birthplace','phone','address','city','country'); //set column field database for datatable searchable 
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
            if($_POST['search']['value']) // if datatable send POST for search
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
        $this->db->where('FirstName !=','');
        if($_POST['length'] != -1)
        $this->db->limit($_POST['length'], $_POST['start']);
        $query = $this->db->get();
        return $query->result();
    }
 
    function count_filtered()
    {
        $this->_get_datatables_query();
        $this->db->where('FirstName !=','');
        $query = $this->db->get();
        return $query->num_rows();
    }

    public function count_all()
    {
        $this->db->from($this->table);
        $this->db->where('FirstName !=','');
        return $this->db->count_all_results();
    }
    
    function get_member($id, $user_id=FALSE) {
        $where = $user_id ? array('user_id' => $id) : array('id' => $id);
        return $this->db->get_where($this->table, $where)->row();
    }
    
    function update($id,$params) {
        $this->db->where('id',$id);
        return $this->db->update($this->table,$params);        
    }
    
    function insert($user_id,$params) {
        $params['user_id']  = $user_id;
        $params['updated_at'] = date('Y-m-d H:i:s');
        $this->db->insert($this->table,$params);
        return $this->db->insert_id();        
    }
    
    function last_update() {
        $this->db->select_max("updated_at");
        $query = $this->db->get($this->table);
        $result = $query->result();
        return $result[0]->updated_at;
    }
 
}