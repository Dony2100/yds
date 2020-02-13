<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Region_model extends CI_Model
{

    var $table = 'region'; 
    var $column_order = array(null, 'true_id', 'level','country','province','regency','name','status','latitude','longitude','created_id','updated_at','created_at'); //set column field database for datatable orderable 
    var $column_search = array('name','status','created_id','updated_at'); //set column field database for datatable searchable 
    var $order = array('id' => 'asc'); // default order s 
    var $level = array(1=>'country',2=>'province',3=>'regency');
	
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
        if($select) {
            if(is_array($select)) {
                $selects="";
                foreach ($select as $val) {
                    $selects.=",".$val;
                }
                $this->db->select($selects);
            }
            else $this->db->select($select);
        }
        $this->db->order_by($orderby, $sort);
        return $this->db->get($this->table)->result_array();
    }
    
    /*
     * get filtered data
     * 
     * orderby: sort by which column, sort: sort method
     * select: select which field or several fields [use: array('field1, field2, ...')]
     * where: filtering by certain or many fields [use: array('field1'=>3,'field2'=>'abs',...)]
     * 
     * return array
     */
    
    function get_filtered($orderby="id", $sort="DESC", $select="", $where="")
    {
        if($select) {
            if(is_array($select)) {
                $selects="";
                foreach ($select as $val) {
                    $selects.=",".$val;
                }
                $this->db->select($selects);
            }
            else $this->db->select($select);
        }
        if($where) {
            if(is_array($where)) {
                foreach ($where as $key => $val) {
                    if($key=='true_id' && $val!=0) $this->db->like($key, $val, 'after');
                    elseif($val!=0) $this->db->where($key,$val);
                }
            }
            else $this->db->where('id',$where);
        }
        $this->db->order_by($orderby, $sort);
        $result = $this->db->get($this->table)->result_array();
        return  $result; //$this->db->last_query();
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
    
    function get_childs($id) {
        
        $check = $this->get_one($id, 'true_id');
        
        $level = $check['level'];
        $parent = $level == 1 ? 'country' : 'province';   
        if($level && $level<3) {
            $data = $this->db->get_where($this->table,array('level'=>$level+1,$parent=>$id));
        }

        return $data->result();
    }
    
    function get_regions($id=0, $level=0) {
        $lowest =0; $higher=0; $highest=0;
        if($id>0) {
            $read = $this->get_one($id, 'true_id');
            $lowest = $read['true_id']; //$lowest_txt = $read['name'];
            $level--;
            if($level>0) {
                $parent = substr($id, 0, -2);
                $read = $this->get_one($parent, 'true_id');
                $higher = $read['true_id']; //$higher_txt = $read['name'];
                $level--;
                if($level>0) {
                    $parent = substr($parent, 0, -2);
                    $read = $this->get_one($parent, 'true_id');
                    $highest = $read['true_id']; //$highest_txt = $read['name'];
                }
            } 
        }
        $country    = $highest ? : $higher ? : $lowest ? : 0;
        $province   = $higher ? : $lowest ? : 0;
        $regency    = $lowest ? : 0;
        return array('country'=>$country,'province'=>$province,'regency'=>$regency);
    }
    
    function user_countrylist() {
        $CI =& get_instance();
        $CI->load->model('users_model','user');
        $region = $this->user->get_user_region();
        $country_id = strlen($region->id) > 4 ? strlen($region->id) > 6 ? substr($region->id, 0, -4) : substr($region->id, 0, -2) : $region->id;
        $other = array('true_id'=>$country_id ?: 0,
                'level'=>$region->level ?: 1,
                'status'=>'1'
            );
        $for_listbox = $this->get_filtered('name','asc',array('true_id','name'),$other);
        if(count($for_listbox)>1) $countries['0']="<< Select Country (optional) >>";
        foreach($for_listbox as $val) { $countries[$val['true_id']] = strtoupper($val['name']); }   
        return $countries;
    }
 
}