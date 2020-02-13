<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Users_model extends CI_Model {

    var $table = 'users';
    var $column_order = array(null, 'role_id', 'username', 'password', 'email', 'banned', 'ban_reason', 'newpass', 'newpass_key', 'newpass_time', 'last_ip', 'last_login', 'created', 'modified'); //set column field database for datatable orderable 
    var $column_search = array('username', 'email', 'banned', 'ban_reason', 'last_ip'); //set column field database for datatable searchable 
    var $order = array('id' => 'asc'); // default order 

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function login($username, $password) {
        $this->db->select('*');
        $this->db->from('users');
        $this->db->where('username', $username);
        $query = $this->db->get();
        if ($query->num_rows() == 1) {
            $result = $query->result();
            return $result[0]->id;
        }
        return false;
    }

    /**
     *
     */
    public function read() {
        $query = $this->db->query("select * from `tbl_user`");
        return $query->result_array();
    }

    public function insert($data) {
        $this->user_name = $data['name']; // please read the below note
        $this->user_password = $data['pass'];
        $this->user_type = $data['type'];
        if ($this->db->insert('tbl_user', $this)) {
            return 'Data is inserted successfully';
        } else {
            return "Error has occured";
        }
    }

    public function update($id, $data) {

        $this->user_name = $data['name']; // please read the below note

        $this->user_password = $data['pass'];

        $this->user_type = $data['type'];

        $result = $this->db->update('tbl_user', $this, array('user_id' => $id));

        if ($result) {

            return "Data is updated successfully";
        } else {

            return "Error has occurred";
        }
    }

    public function delete($id) {

        $result = $this->db->query("delete from `tbl_user` where user_id = $id");

        if ($result) {

            return "Data is deleted successfully";
        } else {

            return "Error has occurred";
        }
    }

    private function _get_datatables_query() {

        $this->db->from($this->table);

        $i = 0;

        foreach ($this->column_search as $item) { // loop column 
            if (isset($_POST['search']['value'])) { // if datatable send POST for search

                if ($i === 0) { // first loop
                    $this->db->group_start(); // open bracket. query Where with OR clause better with bracket. because maybe can combine with other WHERE with AND.
                    $this->db->like($item, $_POST['search']['value']);
                } else {
                    $this->db->or_like($item, $_POST['search']['value']);
                }

                if (count($this->column_search) - 1 == $i) //last loop
                    $this->db->group_end(); //close bracket
            }
            $i++;
        }

        if (isset($_POST['order'])) { // here order processing
            $this->db->order_by($this->column_order[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
        } else if (isset($this->order)) {
            $order = $this->order;
            $this->db->order_by(key($order), $order[key($order)]);
        }
    }

    function get_datatables() {
        $this->_get_datatables_query();
        if (isset($_POST['length']) && $_POST['length'] != -1)
            $this->db->limit($_POST['length'], $_POST['start']);
        $query = $this->db->get();
        return $query->result();
    }

    function count_filtered() {
        $this->_get_datatables_query();
        $query = $this->db->get();
        return $query->num_rows();
    }

    public function count_all() {
        $this->db->from($this->table);
        return $this->db->count_all_results();
    }

    /*
     * Get user by id
     */

    function get_user($id) {
        return $this->db->get_where($this->table, array('id' => $id))->row_array();
    }

    /*
     * function to update user
     */

    function update_user($id, $params) {
        $this->db->where('id', $id);
        return $this->db->update($this->table, $params);
    }

    /*
     * Ban/Unban user by id list
     */

    function ban($list, $reason = "") {
        $params = array(
            'banned' => $reason ? 1 : 0,
            'ban_reason' => $reason ?: NULL
        );
        $this->db->where_in('id', $list);
        return $this->db->update($this->table, $params);
    }
    
    function get_user_region() {
        $CI =& get_instance();
        $CI->load->library('DX_Auth');
        $this->db->select("region_id as id, region_level as level");
        $this->db->from($this->table);
        $this->db->where("id", $this->dx_auth->get_user_id());
        return $this->db->get()->row();
    }

}
