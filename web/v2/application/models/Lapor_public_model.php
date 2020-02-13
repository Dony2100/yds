<?php defined('BASEPATH') OR exit('No direct script access allowed'); 
 
class Lapor_public_model extends CI_Model { 
    var $table = 'lapor'; 
    var $column_order = array(null, 'judul','nama', 'email', 'status', 'assignee', 'prioritas'); //set column field database for datatable orderable 
    var $column_search = array('judul','nama', 'email', 'status', 'assignee', 'prioritas'); //set column field database for datatable searchable 
    var $order = array('status' => 'desc'); // default order 
 
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }
 
    private function _get_datatables_query()
    {
        //add custom filter here
        if($this->input->post('judul'))
        {
            $this->db->where('judul', $this->input->post('judul'));
        }
        if($this->input->post('nama'))
        {
            $this->db->like('nama', $this->input->post('nama'));
        }
        if($this->input->post('email'))
        {
            $this->db->like('email', $this->input->post('email'));
        }
        if($this->input->post('status'))
        {
            $this->db->like('status', $this->input->post('status'));
        }
        if($this->input->post('prioritas'))
        {
            $this->db->like('prioritas', $this->input->post('prioritas'));
        }
        if($this->input->post('assignee'))
        {
            $this->db->like('assignee', $this->input->post('assignee'));
        }
        
        //$this->db->select('judul, nama, email, status,');
        //$this->db->from($this->table);
        
        /*$this->db->select("l.id, l.judul, l.nama, l.email,  
            IF(l.status=1, 'Open', IF(l.status=2, 'In Progress', IF(l.status=3, 'Done', '-'))) as status, 
            IF(l.prioritas = 1,'Normal', IF( l.prioritas = 2, 'Medium', IF ( l.prioritas = 3, 'High', '-' ) ) ) AS prioritas,
            (
                SELECT GROUP_CONCAT(username) 
                FROM ( 
                    SELECT author_id, FirstName, LastName, user_id, username, lapor_id FROM lapor_assignment la LEFT JOIN user_profile up ON up.user_id=la.author_id LEFT JOIN users u ON u.id=up.user_id
                ) as x WHERE lapor_id=l.id
            ) as assignee
            ");
        $query = $this->db->from('lapor l');*/

        $sql = "x.id, x.judul, x.nama, x.email, x.status, x.prioritas, x.assignee FROM
                (
                SELECT `l`.`id`, `l`.`judul`, `l`.`nama`, `l`.`email`, IF(l.status=1, 'Open', IF(l.status=2, 'In Progress', IF(l.status=3, 'Done', '-'))) as status, IF(l.prioritas = 1, 'Normal', IF( l.prioritas = 2, 'Medium', IF ( l.prioritas = 3, 'High', '-' ) ) ) AS prioritas, (
                                SELECT GROUP_CONCAT(username) 
                                FROM ( 
                                    SELECT author_id, `FirstName`, `LastName`, `user_id`, `username`, lapor_id FROM lapor_assignment la LEFT JOIN user_profile up ON up.user_id=la.author_id LEFT JOIN users u ON u.id=up.user_id
                                ) as x WHERE lapor_id=l.id
                            ) as assignee
                FROM `lapor` `l`
                ) as x";
        $query = $this->db->select($sql);
        
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
            //var_dump($_POST['order']);
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
        if($_POST['length'] != -1)
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
    
    function find($id) {
        /*$where = $user_id ? array('created_by' => $id) : array('id' => $id);
        return $this->db->get_where($this->table, $where)->row();*/

        $find = $this->db->select()->where('id', $id)->where('status_record', 1)->from($this->table)->get();
        if ($find->num_rows() == 1) {
            return $find->row();
        } else {
            show_error('Laporan yang Anda cari tidak ditemukan.');
        }
    }
    
    function last_update() {
        $this->db->select_max("updated_at");
        $query = $this->db->get($this->table);
        $result = $query->result();
        return $result[0]->updated_at;
    }
 
}