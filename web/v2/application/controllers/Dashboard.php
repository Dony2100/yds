<?php

if (!defined('BASEPATH')) exit('No direct script access allowed');

class Dashboard extends CI_Controller {
    
    var $view_dir = NULL;

    public function __construct() {
        parent::__construct();

        $this->load->library('DX_Auth');

        $this->dx_auth->check_uri_permissions(FALSE);
        $this->session->set_flashdata('menu', array('main'=>"dashboard"));
    }
    
    /**
     * Cotoh penggunaan bootstrap pada codeigniter::index()
     */
    public function index() {
        $data['_view'] = 'dashboard';
        $this->load->view('layouts/main', $data);
    }

}

# nama file home.php
# folder apllication/controller/