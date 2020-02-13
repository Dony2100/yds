<?php defined('BASEPATH') OR exit('No direct script access allowed'); 
 
class Api_model extends CI_Model { 
    var $table = 'antihoax'; 
    var $column_order = array(null, 'user_id','authors','status','classification','title','content','fact','references','source_issue','source_link','picture1','picture2','picture3','picture4','tanggal','tags','updated_at','updated_id','created_at','region_id','region_level','conclusion'); //set column field database for datatable orderable 
    var $column_search = array('antihoax.id','authors','status', 'classification', 'title', 'content', 'fact', 'references', 'source_issue', 'source_link', 'picture1', 'picture2', 'tanggal','tags','conclusion'); //set column will be provided 
    var $allowed_search = array("random","latest","page","antihoax.id", "title", "source", "source_issue", "source_link", "content", "tags", "count");
    var $order = array('antihoax.id' => 'desc'); // default order
    var $tbl_authorlink = "author_link";
    var $limit = 10;
 
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        //$this->ci =& get_instance();
        //$this->ci->load->model('client_model', 'client');
    }
 
    public function count_all($data=array())
    {
        $this->db->from($this->table);
        if($data) $this->db->where_in('antihoax.id', $data);
        return $this->db->count_all_results();
    }
    
    /*
     * Get filtered antihoax
     */

    function get_filtered($where="", $value="") {
        if(is_array($where)) {
            if($where["method"]=="random") {
                if ($value > $this->limit) $value=$this->limit;
                $this->db->limit($value);
		$this->db->order_by('id','RANDOM');
            }
            elseif($where["method"]=="latest") {
                if ($value > $this->limit) $value=$this->limit;
                $this->db->limit($value);
                $this->db->order_by('id', 'desc');
            }
            elseif($where["method"]=="page") {
                if ($value > $this->limit) $value=$this->limit;
                $page = $where["page"] ?: 0;
                $this->db->limit($value, ($page ? $page-1 : 0) * $value);
                $this->db->order_by('id', 'desc');
            }
            elseif($where["method"]=="like") {
                if($where["column"]=="source") {
                    $this->db->like("source_issue", $value);
                    $this->db->or_like("source_link", $value);
                }
                else {
                    $this->db->like($where["column"], $value);
                }
            }
            else {
                $this->db->where($where["column"], $value);
            }
            
            if($where['region']) $this->db->like('region_id', $where["region"], 'after');
        }
        
        $this->db->select($this->column_search); 
        //$result = $this->db->get($this->table)->result(); 
        //echo $this->db->last_query()."<br/>"; //var_dump($result);
        $this->db->join('antihoax_content', 'antihoax.id=antihoax_content.antihoax_id', 'left');
        $result = $this->db->get($this->table)->result();
        return $result; //$this->db->last_query();
    }

    
    function get($id) {
        return $this->db->get_where($this->table, array('antihoax.id' => $id))->row();
    }

    /*
     * Get all antihoax
     */

    function get_all($limit=0, $offset=0) {
        $this->db->order_by('antihoax.id', 'desc');
        if($limit) $this->db->limit($limit, $offset);
        return $this->db->get($this->table)->result();
    }

    /*
     * retrieve icon list
     */   
    function get_authorlink($id, $get="data", $max=FALSE) {
        if($get == "authors") {
            $id_to = "data_id";
            if($max) {
                $this->db->select_max('urutan', 'max');
            }
            $this->db->order_by('urutan','asc');
        }
        else {
            $id_to = "author_id";
            $this->db->order_by('data_id','desc');
        }
        
        $result = $this->db->get_where($this->tbl_authorlink, array($id_to => $id));
        return $max ? $result->row_array() : $result->result_array();
    }
    
    function last_update() {
        $this->db->select_max("updated_at");
        $query = $this->db->get($this->table);
        $result = $query->result();
        return $result[0]->updated_at;
    }
    
    function authenticate($data) {
        $ip = $data['ip'];
        $column = $data['column'];
        $value = $data['value'];
        $key = $data['key'];
        
        if ($ip) {
            if ($key) {
                if ($column) {
                    if (in_array($column, $this->allowed_search)) {
                        if ($value) {
                            $CI =& get_instance();
                            $CI->load->model('client_model');
                            if ($this->client_model->authenticate($key, $ip, TRUE)) {
                                $error=null;
                            } else
                                $error = "Access failed";
                        } else
                            $error = "Method value must be supplied";
                    } else
                        $error = "Method use is not allowed";
                } else
                    $error = "Method must be supplied";
            } else
                $error = "Need public key";
        } else
            $error = "Can't detect IP adress";
        
        return $error;
    }
}