<?php

if (!defined('BASEPATH')) exit('No direct script access allowed');

class Dashboard extends CI_Controller {
    
    var $view_dir = NULL;
    var $status_data;

    public function __construct() {
        parent::__construct();

        $this->load->library('DX_Auth');
        $this->load->model('Maindata_model', 'main');

        $this->dx_auth->check_uri_permissions(FALSE);
        $this->session->set_flashdata('menu', array('main'=>"dashboard"));
        
        $this->status_data = array(0=>"In Progress", 10=>"In Progress", 
                                    1=>"True", 11=>"True", 
                                    2=>"False", 12=>"False", 
                                    3=>"News", 13=>"News", 
                                    4=>"Education", 14=>"Education", 
                                    5=>"Clarification", 15=>"Clarification");        
    }
    
    /**
     * Index: gathering statistical data
     */
    public function index() {
        $content['stadta'] = $this->status_data;
        $content['jmlvsbln'] = $this->main->statistizer('jumlah');
        $content['jmlvsclass'] = $this->main->statistizer('klasifikasi');
        $content['jmlvsauthor'] = $this->main->statistizer('author');
        $content['jmlvsstatus'] = $this->main->statistizer('status');
        $content['_view'] = 'dashboard';
        $this->load->view('layouts/main', $content);
    }

}

# nama file home.php
# folder apllication/controller/