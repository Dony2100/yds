<?php

if (!defined('BASEPATH')) exit('No direct script access allowed');

class Temp_data extends CI_Controller {

    var $view_dir = "temp_data/";
    var $status_data = array("No Data", "TRUE", "FALSE", "HALF-TRUE");

    public function __construct() {
        parent::__construct();

        $this->load->helper('form');
        $this->load->helper('url');

        $this->load->library('DX_Auth');

        $this->load->model('Tempdata_model', 'tempdata');

        $this->dx_auth->check_uri_permissions(TRUE,array("Editor","Author"));
        $this->session->set_flashdata('menu', array('main'=>"data",'sub'=>"datainput"));
    }

    /**
     * Cotoh penggunaan bootstrap pada codeigniter::index()
     */
    public function index() {
        $last_update = $this->tempdata->last_update();
        $data["last_update"] = $this->date_to_word($last_update)." at ".date_format(date_create($last_update),"H:i:s");
        $data['_view'] = $this->view_dir . 'index';
        $data['_editor'] = $this->dx_auth->get_role_name()=='Editor' ? TRUE : FALSE; 
        $this->load->view('layouts/main', $data);
    }

    public function ajax_temp_2822222431() {
        $this->load->model('Member_model', 'member');
        
        $list = $this->tempdata->get_datatables();
        $data = array();
        $no = isset($_POST['start']) ? $_POST['start'] : 1;
        $user_role = $this->dx_auth->get_role_name();
        
        foreach ($list as $main) {
            $member = $this->member->get_member($main->user_id, TRUE); //echo $member->FirstName."<br/>"; var_dump($member);
            $name = is_object($member) ? $member->FirstName." ".$member->LastName : "<i>".$this->dx_auth->get_username()."</i>";
            
            $to_check = array('kesimpulan', 'isi', 'fakta', 'rujukan', 'sumber', 'subklarifikasi');
            $detail = " <a href='temp_data/detail/$main->id'>....</a>"; 
            foreach ($main as $key => $val) {
                if (in_array($key, $to_check)) {    //echo "$key => ".strlen($val)." <br/>";
                    
                    if(strlen($val)>70) {
                        $main->$key=$this->trim_text($val,70,FALSE).$detail;
                    }
                }
            }
            $no++;
            $checkbox=array(
              'name'=> 'ckbox['.$main->id.']',
              'class' => "no class"
            );
            
            if($user_role=="Editor" && $main->user_id !==$this->dx_auth->get_user_id()) {
                $edit = "<a class='fa fa-pencil-square-o' data-toggle='tooltip' data-placement='left' title='No permission'><i>edit</i></a>&nbsp;"; 
            }
            else
            $edit = "<a class='fa fa-pencil-square-o' href='Temp_data/edit/$main->id' data-toggle='tooltip' data-placement='left' title='Edit row'><i>edit</i></a>&nbsp;";
            $row = array();
            $row[] = "<a href='temp_data/detail/$main->id'>$no</a>";
            $row[] = form_checkbox($checkbox);
            $row[] = $name;
            $row[] = $this->status_data[$main->status];
            $row[] = $main->klasifikasi;
            $row[] = $main->kesimpulan;
            $row[] = $main->isi;
            $row[] = $main->fakta;
            $row[] = $main->rujukan;
            $row[] = $main->sumber;
            $row[] = substr($main->gambar1,0,50).$detail;
            $row[] = substr($main->gambar2,0,50).$detail;
            //$row[] = $main->subklarifikasi;
            $row[] = date_format(date_create($main->tanggal),"j-M-Y");
            $row[] = $main->tags;
            $row[] = date_format(date_create($main->updated_at),"j/m/Y H:i:s");
            $row[] = $edit;

            $data[] = $row;
        }
        
        $draw = isset($_POST['draw']) ? $_POST['draw'] : 0; 

        $output = array(
            "draw" => $draw,
            "recordsTotal" => $this->tempdata->count_all(),
            "recordsFiltered" => $this->tempdata->count_filtered(),
            "data" => $data,
        );
        //output to json format
        echo json_encode($output);
    }
    
    /*
     * Adding a new antihoax
     */

    function add() {
        if (isset($_POST) && count($_POST) > 0) {
            $params = array(
                'user_id' => $this->dx_auth->get_user_id(),
                'status' => $this->input->post('status'),
                'klasifikasi' => $this->input->post('klasifikasi'),
                'kesimpulan' => $this->input->post('kesimpulan'),
                'isi' => $this->input->post('isi'),
                'fakta' => $this->input->post('fakta'),
                'rujukan' => $this->input->post('rujukan'),
                'sumber' => $this->input->post('sumber'),
                'gambar1' => $this->input->post('gambar1'),
                'gambar2' => $this->input->post('gambar2'),
                'subklarifikasi' => $this->input->post('subklarifikasi'),
                'tanggal' => $this->input->post('tanggal'),
                'tags' => $this->input->post('tags'),
                'updated_at' => date('Y-m-d H:i:s'),
                'updated_id' => $this->dx_auth->get_user_id(),
                'created_at' => date('Y-m-d H:i:s')
            );

            $antihoax_id = $this->tempdata->add_antihoax($params);
            redirect('temp_data');
        } else {
            $data['_view'] = $this->view_dir . 'add';
            $this->load->view('layouts/main', $data);
        }
    }

    /*
     * Editing a antihoax
     */

    function edit($id) {    //if($this->input->post()) print_r($this->input->post()); exit;
        // check if the antihoax exists before trying to edit it
        $data['antihoax'] = $this->tempdata->get_antihoax($id);

        if (isset($data['antihoax']['id'])) {
            if (isset($_POST) && count($_POST) > 0) {
                $params = array(
                    'status' => $this->input->post('status'),
                    'klasifikasi' => $this->input->post('klasifikasi'),
                    'kesimpulan' => $this->input->post('kesimpulan'),
                    'isi' => $this->input->post('isi'),
                    'fakta' => $this->input->post('fakta'),
                    'rujukan' => $this->input->post('rujukan'),
                    'sumber' => $this->input->post('sumber'),
                    'gambar1' => $this->input->post('gambar1'),
                    'gambar2' => $this->input->post('gambar2'),
                    'subklarifikasi' => $this->input->post('subklarifikasi'),
                    'tanggal' => $this->input->post('tanggal'),
                    'tags' => $this->input->post('tags'),
                    'updated_at' => date('Y-m-d H:i:s'),
                    'updated_id' => $this->dx_auth->get_user_id()
                );

                $this->tempdata->update_antihoax($id, $params);
                redirect('temp_data');
            } else {
                $data['_view'] = $this->view_dir . 'edit';
                $this->load->view('layouts/main', $data);
            }
        } else
            show_error('The antihoax you are trying to edit does not exist.');
    }

    /*
     * Deleting antihoax
     */

    function remove($id) {
        $antihoax = $this->tempdata->get_antihoax($id);

        // check if the antihoax exists before trying to delete it
        if (isset($antihoax['id'])) {
            $this->tempdata->delete_antihoax($id);
            redirect('temp_data');
        } else
            show_error('The antihoax you are trying to delete does not exist.');
    }
    
    function delete() {
        $data=$this->input->post('ckbox');
        if(is_array($data)) {
            $result=$this->tempdata->delete_antihoaxs(array_keys($data));
        }
        redirect ('temp_data');
    }
    
    public function detail($id) {
        $data['antihoax'] = $this->tempdata->get_antihoax($id);
        $data['_view'] = $this->view_dir . 'detail';
        $this->load->view('layouts/main', $data);
    }
    
    /**
     * trims text to a space
     * @param string $input text to trim
     * @param int $length in characters to trim to
     * @param bool $strip_html if html tags are to be stripped
     * @return string 
     */ 
    function trim_text($input, $length, $strip_html = true) {
        if ($strip_html) $input = strip_tags($input);
        return (strlen($input) < $length) ? $input : substr($input, 0, strrpos(substr($input, 0, $length), ' '));
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

# nama file home.php
# folder apllication/controller/