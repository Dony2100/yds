<?php defined('BASEPATH') OR exit('No direct script access allowed'); 
 
class Draft_model extends CI_Model { 
    var $table = 'antihoax_draft';
    var $table2 = 'colaboration';
    var $column_order = array(null, 'user_id','authors','status','classification','title','content','fact','references','source_issue','source_link','picture1','picture2','picture3','picture4','tanggal','tags','updated_at','updated_id','created_at','region_id','region_level','conclusion'); //set column field database for datatable orderable 
    var $column_search = array('status','classification','title','content','fact','source_issue','tanggal','tags','conclusion'); //set column field database for datatable searchable 
    var $order = array('antihoax_draft.id' => 'desc'); // default order 
    
    var $tbl_authorlink = "author_link";
    //var $col_authorlink = array('id', 'data_id', 'author_id', 'urutan', 'updated_at');
 
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }
    
    private function _get_datatables_query()
    {
        $this->db->select('antihoax_draft.id,user_id,authors,status,classification,title,content,fact,references,source_issue,source_link,picture1,picture2,picture3,picture4,tanggal,tags,updated_at,updated_id,created_at,region_id,region_level,conclusion');
        $this->db->from($this->table);
        $this->db->join('antihoax_draft_content', 'antihoax_draft.id=antihoax_draft_content.antihoax_id', 'left');
 
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
 
    function get_datatables($data=array())
    {
        $this->_get_datatables_query();
        if($data) $this->db->where_in('antihoax_draft.id', $data);
        if(isset($_POST['length']) && $_POST['length'] != -1)
        if(isset($_POST['start'])) $this->db->limit($_POST['length'], $_POST['start']);
        $query = $this->db->get();//->result(); //echo $this->db->last_query(); exit;
        return $query->result();
    }
 
    function count_filtered($data=array())
    {
        $this->_get_datatables_query();
        if($data) $this->db->where_in('antihoax_draft.id', $data);
        $query = $this->db->get();
        return $query->num_rows();
    }

    public function count_all($data=array())
    {
        $this->db->from($this->table);
        if($data) $this->db->where_in('antihoax_draft.id', $data);
        return $this->db->count_all_results();
    }
    
    function get_one($id) {
        $this->db->select('antihoax_draft.id,user_id,authors,status,classification,title,content,fact,references,source_issue,source_link,picture1,picture2,picture3,picture4,tanggal,tags,updated_at,updated_id,created_at,region_id,region_level,conclusion');
        $this->db->join('antihoax_draft_content', 'antihoax_draft.id=antihoax_draft_content.antihoax_id', 'left');
        return $this->db->get_where($this->table, array('antihoax_draft.id' => $id))->row_array();
    }

    /*
     * Get all antihoax
     */

    function get_all() {
        $this->db->order_by('id', 'desc');
        return $this->db->get($this->table)->result_array();
    }
  
    /*
     * function to update antihoax
     */

    function update($id, $params, $params_content) {
        $this->db->trans_start();

        $this->db->where('id', $id);
        $this->db->update($this->table, $params);

        $this->db->where('antihoax_id', $id);
        $this->db->update('antihoax_draft_content', $params_content);

        $this->db->trans_complete();

        if ($this->db->trans_status()) {
            return true;
        }else{
            show_error('Terjadi kesalahan saat menyimpan data');
        }
    }

    /*
     * function to delete antihoax
     */

    function delete($id) {
        $this->db->trans_start();
        
        $this->db->delete($this->table, array('id' => $id));
        $this->db->delete('antihoax_draft_content', array('antihoax_id' => $id));
        
        $this->db->trans_complete();

        if ($this->db->trans_status()) {
            return true;
        }else{
            show_error('Terjadi kesalahan saat menghapus data');
        }
    }
    
    function delete_all($list)
    {   
        $this->db->trans_start();

        $this->db->where_in('id',$list);
        $this->db->delete($this->table);
        //return $this->db->affected_rows();
        
        $this->db->where_in('antihoax_id',$list);
        $this->db->delete('antihoax_draft_content');
        
        $this->db->trans_complete();

        if ($this->db->trans_status()) {
            return true;
        }else{
            show_error('Terjadi kesalahan saat menghapus data');
        }
    }

    function cleanup($list)
    {   
        $this->db->where_in('type_id',$list);
        $this->db->delete($this->table2);
        return $this->db->affected_rows();
    }
    
    function append_author($data_id, $author_id) {      
        if(!$this->db->get_where($this->tbl_authorlink, 
                                array('data_id' => $data_id, 'author_id' => $author_id))
                                ->row_array()) 
        {
            $urutan = $this->get_authorlink($data_id,"authors",TRUE);
            $params=array('data_id'=>$data_id,'author_id'=>$author_id,'urutan'=>$urutan['max']+1,'updated_at'=>date('Y-m-d H:i:s'));
            $this->db->insert($this->tbl_authorlink, $params);
        }
        if ($this->db->insert_id()) return $this->db->insert_id();        
    }
    
    function detach_author($data_id, $author_id) {
        return $this->db->delete($this->tbl_authorlink, array('data_id' => $data_id, 'author_id' => $author_id));
    }
    
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
    
    function get_colaboration($user_id) {
        $query = $this->db->select('type_id')->get_where($this->table2, array('user_id' => $user_id));

        $result= array(0);
        foreach ($query->result_array() as $value) {
            array_push($result, $value['type_id']);
        }
        return $result;
    }
    
    function publish($list)
    {
        $get = $this->db->where_in('id',$list)->get($this->table);
        $to_insert = $get->result_array();           //echo "LIST = "; print_r($to_insert); exit;
        $insert = $this->insert_antihoax($to_insert);
        return $insert;
    }
    
    function insert_antihoax($data) {
        $target = "antihoax";
        $cols = $this->db->list_fields($target);    //print_r($cols); exit;
        return $this->insert_bulk($target, $cols, $data);
    }

    function insert_bulk($table_name, $column_names, $rows, $escape = true)
    {
        /* Build a list of column names */
        $columns    = array_walk($column_names, array($this, 'prepare_column_name') );
        $columns    = implode(',', $column_names);

        /* Escape each value of the array for insertion into the SQL string */
        if( $escape ) array_walk_recursive( $rows, array( $this, 'escape_value' ) );

        /* Collapse each rows of values into a single string */
        $length = count($rows); $empty_date="'2000-01-01'";
        for($i = 0; $i < $length; $i++) {
            $rows[$i]['id'] = "NULL";
            if(!$rows[$i]['tanggal'] OR $rows[$i]['tanggal']=="''" OR is_null($rows[$i]['tanggal'])) { $rows[$i]['tanggal']=$empty_date;  }
            $rows[$i] = implode(',', $rows[$i]);
        }

        $values = "(" . implode( '),(', $rows ) . ")";

        $sql = "INSERT INTO $table_name ( $columns ) VALUES $values"; //echo $sql; exit;

        return $this->db->simple_query($sql); 
    }
    function escape_value(& $value)
    {
        if( is_string($value) )
        {
            $value = "'" . htmlspecialchars( strip_tags( addslashes($value) ) ) . "'";
        }
        if( is_null($value) ) {
            $value = "''";
        }
    }
    function prepare_column_name(& $name)
    {
        $name = "`$name`";
    }

}