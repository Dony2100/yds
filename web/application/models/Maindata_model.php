<?php defined('BASEPATH') OR exit('No direct script access allowed'); 
 
class Maindata_model extends CI_Model { 
    var $table = 'antihoax';
    var $column_order = array(null, 'authors','status','title','claim','tanggal','tags','updated_at'); //set column field database for datatable orderable 
    var $column_search = array('status','classification','title','content','fact','source_issue','tanggal','tags','conclusion'); //set column field database for datatable searchable 
    var $order = array('antihoax.id' => 'desc'); // default order 
    
    var $tbl_authorlink = "author_link";
    //var $col_authorlink = array('id', 'data_id', 'author_id', 'urutan', 'updated_at');
 
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }
    
    private function _get_datatables_query()
    {
        $this->db->select('antihoax.id,user_id,authors,status,classification,title,content,fact,references,source_issue,source_link,picture1,picture2,picture3,picture4,tanggal,tags,updated_at,updated_id,created_at,region_id,region_level,conclusion');
        $this->db->from($this->table);
        $this->db->join('antihoax_content', 'antihoax.id=antihoax_content.antihoax_id', 'left');
 
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
        $this->db->select('antihoax.id,user_id,authors,status,classification,title,content,fact,references,source_issue,source_link,picture1,picture2,picture3,picture4,tanggal,tags,updated_at,updated_id,created_at,region_id,region_level,conclusion');
        $this->db->join('antihoax_content', 'antihoax.id=antihoax_content.antihoax_id', 'left');
        return $this->db->get_where($this->table, array('antihoax.id' => $id))->row_array();
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

    function add_antihoax($params, $params_content) {
        $this->db->trans_start();

        $this->db->insert($this->table, $params);
        $check = $this->db->insert_id();
        if($check){
            $params_content['antihoax_id'] = $check;
            $this->db->insert('antihoax_content', $params_content);

            $this->append_author($check, $params['authors']);
        }
        $this->db->trans_complete();

        if ($this->db->trans_status()) {
            return $check;
        }else{
            show_error('Terjadi kesalahan saat menyimpan data');
        }
    }

    function add_draft($params, $params_content) {
        $this->db->trans_start();

        $this->db->insert($this->table."_draft", $params);
        $check = $this->db->insert_id();
        if($check){
            $params_content['antihoax_id'] = $check;
            $this->db->insert('antihoax_draft_content', $params_content);

            $this->append_author($check, $params['authors']);
        }
        $this->db->trans_complete();

        if ($this->db->trans_status()) {
            return $check;
        }else{
            show_error('Terjadi kesalahan saat menyimpan data');
        }
    }

    function initiate_colaboration($id, $user_id) {
        $params = array('type'=>'draft_main','type_id'=>$id,'role'=>'1','user_id'=>$user_id,'created_at'=>date('Y-m-d H:i:s'));
        return $this->db->insert('colaboration', $params);       
    }    

    /*
     * function to update antihoax
     */

    function update_antihoax($id, $params, $params_content) {
        $this->db->trans_start();

        $this->db->where('id', $id);
        $this->db->update($this->table, $params);

        if($params_content !== false){
            $this->db->where('antihoax_id', $id);
            $this->db->update('antihoax_content', $params_content);
        }
        
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

    function delete_antihoax($id) {
        $this->db->trans_start();
        
        $this->db->delete($this->table, array('id' => $id));
        $this->db->delete('antihoax_content', array('antihoax_id' => $id));
        
        $this->db->trans_complete();

        if ($this->db->trans_status()) {
            return true;
        }else{
            show_error('Terjadi kesalahan saat menghapus data');
        }
    }
    
    function delete_antihoaxs($list)
    {
        $this->db->trans_start();

        $this->db->where_in('id',$list);
        $this->db->delete($this->table);
        //return $this->db->affected_rows();
        
        $this->db->where_in('antihoax_id',$list);
        $this->db->delete('antihoax_content');
        
        $this->db->trans_complete();

        if ($this->db->trans_status()) {
            return true;
        }else{
            show_error('Terjadi kesalahan saat menghapus data');
        }
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
    
    function statistizer($type = "") {
        $sel = $type == 'author' ? 'id' : "count(id) as jml";
        $this->db->select($sel);
        switch ($type) {
            case "jumlah":
                $this->db->select('YEAR(`created_at`) as thn, MONTH(`created_at`) as bln');
                $this->db->group_by('YEAR(`created_at`), MONTH(`created_at`)');
                $this->db->order_by('thn', 'desc');
                $this->db->order_by('bln', 'desc');
                $this->db->limit(15);
                $result = $this->db->get($this->table)->result_array();
                break;
            case "klasifikasi":
                $this->db->select('classification as class');
                $this->db->group_by('classification');
                $this->db->order_by('jml', 'desc');
                $this->db->where('classification !=', '-');
                $result = $this->db->get($this->table)->result_array();
                break;
            case "author":
                $this->db->select('authors')->where('authors !=', '')->or_where('authors !=', "'admin'");
                $data = $this->db->get($this->table)->result_array();

                $this->db->select('id, nama');
                $authors = $this->db->get('author')->result_array();
                $result = [];
                foreach ($authors as $k => $val) {
                    $result[$val['nama']] = $result[$val['nama']] ?? 0;
                    foreach ($data as $dt) {
                        $arr = explode(',', $dt['authors']);
                        if ($arr[0] == "'admin'")
                            $arr[0] = 0;
                        if (in_array($val['id'], $arr)) {
                            $result[$val['nama']] += 1;
                        }
                        unset($arr);
                    }
                }
                ksort($result); //sort by key asc
                arsort($result); //sort by value asc
                if (isset($result['Mafindo']))
                    unset($result['Mafindo']);
                $result = array_slice($result, 0, 15); // return the first ten elements
                break;
            case "status":
                $this->db->select('status, count(*) as jml')->group_by('status')->order_by('jml', 'desc');
                //$this->db->where('status', '2')->or_where('status', '12')->or_where('status', '1')->or_where('status', '11');
                $result = $this->db->get($this->table)->result_array();
                break;
            default:
        }

        return $result;
    }
}