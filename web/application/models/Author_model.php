<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Author_model extends CI_Model
{

    var $table = 'author'; 
    var $column_order = array(null, 'nama', 'deskripsi','website','tags','icon','updated_at','update_id','created_at'); //set column field database for datatable orderable 
    var $column_search = array('nama','tags','updated_at','update_id'); //set column field database for datatable searchable 
    var $order = array('id' => 'asc'); // default order s 
	
    public function __construct() {
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
        $this->db->limit($_POST['length'], $_POST['start']);
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
    
    function authenticate($key, $ip = "", $keyonly) { 
        $encrypted= $this->dx_auth->kocok($key,11);
        if($keyonly) {
            $this->db->from($this->table);
            $this->db->where("key",$encrypted);
            if($this->db->count_all_results()) return TRUE;
        }
        else {
            $this->db->select("key");
            $this->db->from($this->table);
            $this->db->where("ip",$ip);
            $query = $this->db->get();
            $result=$query->result();
            return hash_equals ($result[0]->key, $encrypted);
        }     
    }
	
    /*
     * Get one by id
     */
    function get_one($var, $field='id')
    {
        return $this->db->get_where($this->table,array($field=>$var))->row_array();
    }
    
    /*
     * Get many where id in list
     */
    function get_many($list, $field, $select)
    {
        if(!$field) $field="id";
        if($select) $this->db->select($select);
        $this->db->where_in($field, $list);
        return $this->db->get($this->table)->result_array();
    }
        
    /*
     * Get all rows
     */
    function get_all($orderby="id", $sort="DESC")
    {
        $this->db->order_by($orderby, $sort);
        return $this->db->get($this->table)->result_array();
    }
    
        /*
     * Get all rows
     */
    function get_all_filtered($orderby="id", $sort="DESC", $select="")
    {
        if($select) $this->db->select($select);
        $this->db->order_by($orderby, $sort);
        return $this->db->get($this->table)->result_array();
    }
    
    function delete_icons($ids=array(), $paths) {
        foreach($ids as $id) { echo $id."<br/>";
            $this->db->select("icon");
            $this->db->where("id", $id);
            $data = $this->db->get($this->table)->row_array();
            if($data["icon"]) {
                if(file_exists("./".$paths['upload_path']."/".$data['icon'])) {
                    unlink($paths["upload_path"] . $data["icon"]); 
                    //echo $paths["upload_path"].$data["icon"]." deleted";
                }
                if(file_exists("./".$paths['thumb_path']."/".$data['icon'])) {
                    unlink($paths["thumb_path"] . $data["icon"]);  
                    //echo "<br/>".$paths["thumb_path"].$data["icon"]." deleted";
                }
            }
            
        }
    }
        
    /*
     * function to add new row
     */
    function add($params)
    {
        $this->db->insert($this->table,$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update row
     */
    function update($id,$params)
    {
        $this->db->where('id',$id);
        return $this->db->update($this->table,$params);
    }
    
    /*
     * function to delete one row
     */
    function delete_one($id)
    {
        return $this->db->delete($this->table,array('id'=>$id));
    }
    
    /*
     * function to delete many row
     */ 
    function delete_many($list)
    {   
        $this->db->where_in('id',$list);
        $this->db->delete($this->table);
        return $this->db->affected_rows();
    }
    
    function random_code($raw)
    {
        return hash('haval128,3', $raw);
    }
    
    function is_exist($name) {
        $result=$this->db->get_where($this->table,array('nama'=>$name))->row_array();
        if(count($result)) return TRUE;
    }
 
}