<?php

if (!defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

    var $view_dir = "";

    public function __construct() {
        parent::__construct();

        $this->load->library('DX_Auth');
        $this->load->helper('html');
        $this->load->model('client_model', 'clients');
    }

    /**
     * Cotoh penggunaan bootstrap pada codeigniter::index()
     */
    public function index() {
        if($this->dx_auth->is_logged_in()) redirect('dashboard');
        //$this->load->view('home');
        $data['_view'] = 'home';
        $this->load->view('layouts/main', $data);
    }

}

# nama file home.php
# folder apllication/controller/