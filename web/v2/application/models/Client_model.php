<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Client_model extends CI_Model
{

    var $table = 'clients'; 
    var $column_order = array(null, 'user_id', 'email','domain','ip','key','quota','daily_request','status','expired_at','accessed_at','updated_at','updated_id','created_at'); //set column field database for datatable orderable 
    var $column_search = array('email','domain','ip','quota','status'); //set column field database for datatable searchable 
    var $order = array('id' => 'asc'); // default order 
	
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
    
    public function authenticate($key, $ip = "", $keyonly) {
        $encrypted= $this->dx_auth->kocok($key,11);
        //die($encrypted);
        if($keyonly) {
            $this->db->from($this->table);
            $this->db->where("key",$encrypted);
            //$this->db->where("key",$key);
            //die(var_dump($this->db->count_all_results()));
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
     * Get client by id
     */
    function get_client($id)
    {
        return $this->db->get_where($this->table,array('id'=>$id))->row_array();
    }
        
    /*
     * Get all clients
     */
    function get_all_clients()
    {
        $this->db->order_by('id', 'desc');
        return $this->db->get($this->table)->result_array();
    }
        
    /*
     * function to add new client
     */
    function add_client($params)
    {
        $this->db->insert($this->table,$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update client
     */
    function update_client($id,$params)
    {
        $this->db->where('id',$id);
        return $this->db->update($this->table,$params);
    }
    
    /*
     * function to delete client
     */
    function delete_client($id)
    {
        return $this->db->delete($this->table,array('id'=>$id));
    }
    
    function delete_clients($list)
    {   
        $this->db->where_in('id',$list);
        $this->db->delete($this->table);
        return $this->db->affected_rows();
    }
}