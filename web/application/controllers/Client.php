<?php

if (!defined('BASEPATH')) exit('No direct script access allowed');

class Client extends CI_Controller {

    var $view_dir = "client/";

    public function __construct() {
        parent::__construct();

        $this->load->helper('form');
        $this->load->helper('url');
        $this->load->library('DX_Auth');
        $this->load->model('client_model', 'clients');

        $this->dx_auth->check_uri_permissions();
        $this->session->set_flashdata('menu', array('main'=>"account",'sub'=>"client"));
    }

    /**
     * Bootstrap Datatables
     */
    public function index() {
        $data['_view'] = $this->view_dir . 'index';
        $this->load->view('layouts/main', $data);
    }

    public function ajax_client_1711110534() {
        $this->load->model('Member_model', 'member');
         
        $list = $this->clients->get_datatables();
        $data = array();
        $no = isset($_POST['start']) ? $_POST['start'] : 1;
        foreach ($list as $client) {
            $no++;
            
            $member = $this->member->get_member($client->user_id, TRUE); //echo $member->FirstName."<br/>"; var_dump($member);
            $name = is_object($member) ? $member->FirstName." ".$member->LastName : "<i>".$this->dx_auth->get_username()."</i>";
            
            $checkbox=array(
              'name'=> 'ckbox['.$client->id.']',
              'class' => "no class"
            );
       
            $row = array();
            $row[] = $no;
            $row[] = form_checkbox($checkbox);
            $row[] = $name;
            $row[] = $client->email;
            $row[] = $client->domain;
            $row[] = $client->ip;
            $row[] = $client->quota;
            $row[] = $client->status;
            $row[] = date_format(date_create($client->expired_at),"j-M-Y");
            $row[] = date_format(date_create($client->accessed_at),"j/m/Y H:i:s");
            $row[] = date_format(date_create($client->updated_at),"j/m/Y H:i:s");
            $row[] = "<a href='Client/edit/$client->id' data-toggle='tooltip' "
                    . "data-placement='left' title='Edit row'><span class='fa fa-pencil-square-o'></span> Edit</a>&nbsp;";
            $data[] = $row;
        }
        
        $draw = isset($_POST['draw']) ? $_POST['draw'] : 0; 

        $output = array(
            "draw" => $draw,
            "recordsTotal" => $this->clients->count_all(),
            "recordsFiltered" => $this->clients->count_filtered(),
            "data" => $data,
        );
        //output to json format
        echo json_encode($output);
    }

    /*
     * Adding a new client
     */

    function add() {
        $this->load->library('form_validation');

        $this->form_validation->set_rules('email', 'Email', 'valid_email|required');
        $this->form_validation->set_rules('ip', 'Ip', 'valid_ip|required');
        $this->form_validation->set_rules('key', 'Key', 'min_length[16]|required');
        $this->form_validation->set_rules('quota', 'Quota', 'integer');

        if ($this->form_validation->run()) {
            $params = array(
                'status' => 'active', //$this->input->post('status'),
                'user_id' => $this->dx_auth->get_user_id(),
                'email' => $this->input->post('email'),
                'domain' => $this->input->post('domain'),
                'ip' => $this->input->post('ip'),
                'key' => $this->dx_auth->kocok($this->input->post('key')),
                'quota' => $this->input->post('quota'),
                'daily_request' => 0,
                'expired_at' => "2100-12-31", //$this->input->post('expired_at'),
                'accessed_at' => "2000-01-01 00:00;00",
                'updated_at' => date('Y-m-d H:i:s'),
                'updated_id' => 1,
                'created_at' => date('Y-m-d H:i:s'),
            );

            $client_id = $this->clients->add_client($params);
            redirect('client');
        } else {
            //$data['main'] = "Mainan";         
            $data['_view'] = $this->view_dir . 'add';
            $this->load->view('layouts/main', $data);
        }
    }

    /*
     * Editing a client
     */

    function edit($id) {
        // check if the client exists before trying to edit it
        $data['client'] = $this->clients->get_client($id);

        if (isset($data['client']['id'])) {
            $this->load->library('form_validation');

            $this->form_validation->set_rules('email', 'Email', 'valid_email|required');
            $this->form_validation->set_rules('ip', 'Ip', 'valid_ip|required');
            $this->form_validation->set_rules('key', 'Key', 'min_length[16]|required');
            $this->form_validation->set_rules('quota', 'Quota', 'integer');

            if ($this->form_validation->run()) {
                $params = array(
                    'status' => $this->input->post('status'),
                    'user_id' => $this->dx_auth->get_user_id(),
                    'email' => $this->input->post('email'),
                    'domain' => $this->input->post('domain'),
                    'ip' => $this->input->post('ip'),
                    'key' => $this->dx_auth->kocok($this->input->post('key')),
                    'quota' => $this->input->post('quota'),
                    //'daily_request' => $this->input->post('daily_request'),
                    'expired_at' => "2100-12-31", //$this->input->post('expired_at'),
                    //'accessed_at' => $this->input->post('accessed_at'),
                    'updated_at' => date('Y-m-d H:i:s'),
                    'updated_id' => 1,
                        //'created_at' => $this->input->post('created_at'),
                );

                $this->clients->update_client($id, $params);
                redirect('client');
            } else {
                $data['_view'] = $this->view_dir . 'edit';
                $this->load->view('layouts/main', $data);
            }
        } else
            show_error('The client you are trying to edit does not exist.');
    }

    /*
     * Deleting client
     */

    function remove($id) {
        $client = $this->clients->get_client($id);

        // check if the client exists before trying to delete it
        if (isset($client['id'])) {
            $this->clients->delete_client($id);
            redirect('client');
        } else
            show_error('The client you are trying to delete does not exist.');
    }
    
    function delete() {
        $data=$this->input->post('ckbox');
        if(is_array($data)) {
            $result=$this->clients->delete_clients(array_keys($data));
        }
        redirect ('client');
    }

}

# nama file home.php
# folder apllication/controller/