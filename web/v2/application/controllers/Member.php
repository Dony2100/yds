<?php

defined('BASEPATH') OR exit('No direct script access allowed');

error_reporting(E_PARSE | E_ERROR);

class Member extends CI_Controller {

    var $view_dir = "member/";

    public function __construct() {
        parent::__construct();
        $this->load->model('member_model', 'members');
        $this->load->model('dx_auth/Users', 'user');

        $this->load->library('DX_Auth');
        $this->session->set_flashdata('menu', array('main'=>"account",'sub'=>"profile"));
    }

    public function index() {
        $this->dx_auth->check_uri_permissions();
        $this->load->helper('url');
        $last_update = $this->members->last_update();
        $data["last_update"] = $this->date_to_word($last_update)." at ".date_format(date_create($last_update),"H:i:s");
        $data['_view'] = $this->view_dir . 'index';
        $this->load->view('layouts/main', $data);       
    }

    public function ajax_list() {
        $this->dx_auth->check_uri_permissions();
        $list = $this->members->get_datatables();
        $data = array();
        $no = $_POST['start'];
        
        foreach ($list as $member) {
            $no++;
            $birthplace = $member->birthplace ? $member->birthplace."/" : "";
            $row = array();
            $row[] = $no;
            $row[] = $member->FirstName;
            $row[] = $member->LastName;
            $row[] = $birthplace.$member->birthdate;
            $row[] = $member->phone;
            $row[] = $member->address;
            $row[] = $member->city;
            $row[] = $member->country;

            $data[] = $row;
        }

        $output = array(
            "draw" => $_POST['draw'],
            "recordsTotal" => $this->members->count_all(),
            "recordsFiltered" => $this->members->count_filtered(),
            "data" => $data,
        );
        //output to json format
        echo json_encode($output);
    }
    
    public function profile() {
        $this->dx_auth->check_uri_permissions(TRUE,array("Editor","Author"));
        if($this->dx_auth->is_logged_in()) {
            $user_id=$this->dx_auth->get_user_id();
            $user = $this->user->get_user_by_id($user_id,"email,last_ip,last_login,created");
            $data['member'] = $this->members->get_member($user_id, TRUE);
            $data['user'] = $user->row();
            $data['_view'] = $this->view_dir . 'detail';
            $this->load->view('layouts/main', $data);
        }
        else {
            show_error('Please login.');
        }
    }
    
    function edit() {
        $this->dx_auth->check_uri_permissions(TRUE,array("Editor","Author"));
        $this->load->helper(array('url','form'));
        $user_id=$this->dx_auth->get_user_id();

        if ($this->dx_auth->is_logged_in()) {
            $member = $this->members->get_member($user_id, TRUE);
            $data['member'] = (array)$member;
            
            if (isset($_POST) && count($_POST) > 0) {
                $params = array(
                    'FirstName' => $this->input->post('FirstName'),
                    'LastName' => $this->input->post('LastName'),
                    'birthplace' => $this->input->post('birthplace'),
                    'birthdate' => $this->input->post('birthdate'),
                    'phone' => $this->input->post('phone'),
                    'address' => $this->input->post('address'),
                    'city' => $this->input->post('city'),
                    'country' => $this->input->post('country')
                );

                if($data['member']['id']) {
                    $this->members->update($data['member']['id'], $params);
                }
                else {
                    $this->members->insert($user_id,$params);
                }
                redirect('Member/profile');
            } else {
                $data['_view'] = $this->view_dir . 'edit';
                $this->load->view('layouts/main', $data);
            }
        } else
            show_error('Please login.');
    }
    
    function date_to_word($date) {
        $date_exp = explode(" ",$date);
        $today = date("Y-m-d");
        
        if($date_exp[0] == $today) $result="today";
        elseif($date_exp[0] == date('Y-m-d', strtotime("yesterday"))) $result="yesterday";
        elseif($date_exp[0] > date('Y-m-d', strtotime("last month"))) $result=$this->DateDiff($date)." days ago";
        else $result = date_format(date_create($date),"j M Y");
        
        return $result;
    }
    
    function DateDiff($start, $end=null, $type=null) {
        $date1=  new DateTime($start);
        $date2= $end ? new DateTime($end) : new DateTime();
        
        switch ($type) {
            default:
                $result=$date1->diff($date2)->format("%d");
        }

        return $result;
    }
    
}
