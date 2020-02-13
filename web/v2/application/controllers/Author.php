<?php

if (!defined('BASEPATH')) exit('No direct script access allowed');

class Author extends CI_Controller {

    var $view_dir;
    var $class;
    var $upload_path;
    var $thumb_path;
    var $gallery_path;
    var $gallery_path_url;
    var $max_image_size;
    var $thumb_size;
    var $valid_extensions;

    public function __construct() {
        parent::__construct();

        $this->view_dir = "author/";
        $this->class = $this->router->fetch_class();
        $this->upload_path = "uploads/";
        $this->thumb_path = $this->upload_path . "thumbnail/";
        $this->max_image_size = 2048;
        $this->thumb_size = array("heigth" => 55, "width" => 200);
        $this->valid_extensions = array("jpg", "png", "gif");
        
       //$this->gallery_path = realpath(APPPATH . '../uploads/thumbnail/');
       // $this->gallery_path_url = base_url() . 'uploads/thumbnail/';
        
        $this->load->helper(array('form','directory'));
        $this->load->library(array('DX_Auth'));
        $this->load->model('Author_model', 'main');

        $this->dx_auth->check_uri_permissions();
        $this->session->set_flashdata('menu', array('main'=>"data",'sub'=>"author"));
    }

    /**
     * Bootstrap Datatables
     */
    public function index() {
        $data['_view'] = $this->view_dir . 'index';
        $this->load->view('layouts/main', $data);
    }

    public function ajax_ins_1804281050() {
        $this->load->model('Member_model', 'member');
         
        $list = $this->main->get_datatables();
        $data = array();
        $no = isset($_POST['start']) ? $_POST['start'] : 1;
        
        foreach ($list as $var) {
            $no++;
            
            $member = $this->member->get_member($var->update_id, TRUE); //echo $member->FirstName."<br/>"; var_dump($member);
            $name = is_object($member) ? $member->FirstName." ".$member->LastName : "<i>".$this->dx_auth->get_username()."</i>";
            
            $checkbox=array(
              'name'=> 'ckbox['.$var->id.']',
              'class' => "no class"
            );
            
            $deskripsi = strlen($var->deskripsi)>100 ?$this->trim_text($var->deskripsi,99,FALSE)."..." : $var->deskripsi;
       
            $row = array();
            $row[] = $no;
            $row[] = form_checkbox($checkbox);
            $row[] = $var->nama."<br/><img src='".base_url($this->thumb_path)."/".$var->icon."' alt=''>";
            $row[] = $deskripsi;
            $row[] = $var->website;
            $row[] = $name;
            $row[] = date_format(date_create($var->updated_at),"j/m/Y H:i:s");
            $row[] = $this->actions($var->id);
            $data[] = $row;
        }
        
        $draw = isset($_POST['draw']) ? $_POST['draw'] : 0; 

        $output = array(
            "draw" => $draw,
            "recordsTotal" => $this->main->count_all(),
            "recordsFiltered" => $this->main->count_filtered(),
            "data" => $data,
        );
        //output to json format
        echo json_encode($output);
    }
    
    function actions($id) {
        $user_role = $this->dx_auth->get_role_name();

        $edit = "<a class='fa fa-pencil-square-o' "
               ."href='$this->class/edit/$id' "
               ."data-toggle='tooltip' data-placement='left' "
               ."title='Edit row'> Edit</a>&nbsp;";
        $delete = "<a class='fa fa-trash' "
                 ."href='$this->class/remove/$id' "
                 ."data-toggle='tooltip' data-placement='left' "
                 ."title='Add Author'> Delete</a>&nbsp;";
        $result = ' <div class="btn-group m-r-5 m-b-5">
                        <a href="javascript:;" data-toggle="dropdown" class="btn btn-warning dropdown-toggle">
                            <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu pull-right">
                            <li>'.$edit.'</li>
                            <li class="divider"></li>
                            <li>'.$delete.'</li>                            
                        </ul>
                    </div>';
        return $result;
    }
        

    /*
     * Adding a new row
     */

    function add() {
        $this->load->library('form_validation');
        
        $this->form_validation->set_rules('nama', 'Nama', 'min_length[3]|required');
        $this->form_validation->set_rules('deskripsi', 'Deskripsi', 'min_length[9]');
        $is_exist = $this->main->get_one($this->input->post('nama'), "nama");

        if ($this->form_validation->run() && !$is_exist) {

            $filename = $_FILES['image']['name'];
            $extension = $this->findexts($filename);
            $img_name = $this->main->random_code($filename.time());
            $uploaded_file = "";
            
            if(in_array($extension, $this->valid_extensions)) {
              $config['upload_path']    = $this->upload_path; 
              $config['allowed_types']  = "*";
              $config['overwrite']      = TRUE;
              $config['max_size']       = $this->max_image_size;
              $config['file_name']      = $img_name;
              $this->load->library('upload', $config);
              
              if ( !$this->upload->do_upload('image')) {
                $error = array('error' => $this->upload->display_errors(), 'file'=> $this->upload_path.$filename); 
                $data['form'] = $this->class."/add";
                $data['error'] = $error;
                $data['_view'] = $this->view_dir . 'add';
                $this->load->view('layouts/main', $data);
              }else { 
                $uploadedImage = $this->upload->data();
                $this->resizeImage($img_name.".".$extension);
                $uploaded_file = $uploadedImage['file_name'];
              }
            } 
            $params = array(
              'nama' => $this->input->post('nama'),
              'deskripsi' => $this->input->post('deskripsi'),
              'website' => $this->input->post('website'),
              'icon' => $uploaded_file,
              'updated_at' => date('Y-m-d H:i:s'),
              'update_id' => $this->dx_auth->get_user_id(),
              'created_at' => date('Y-m-d H:i:s'),
            );
            $this->main->add($params);
            redirect($this->class);
        } else {
            $data['form'] = $this->class."/add";
            $data["max_size"] = $this->max_image_size;
            $data['error'] = $is_exist ? 'Nama institusi sudah digunakan!!' : "";
            $data['_view'] = $this->view_dir . 'add';
            $this->load->view('layouts/main', $data);
        }
    }

    /*
     * Editing a row
     */

    function edit($id) {
        // check if the row id exists before trying to edit it
        $data['data'] = $this->main->get_one($id);

        if (isset($data['data']['id'])) {
            $this->load->library('form_validation');

            $this->form_validation->set_rules('nama', 'Nama', 'min_length[3]|required');
            $this->form_validation->set_rules('deskripsi', 'Deskripsi', 'min_length[9]');

            if ($this->form_validation->run()) {
                
                $filename = $_FILES['image']['name'];
                $extension = $this->findexts($filename);
                $img_name = $this->main->random_code($filename.time());
                $uploaded_file = "";

                if(in_array($extension, $this->valid_extensions)) {
                  $config['upload_path']    = $this->upload_path; 
                  $config['allowed_types']  = "*";
                  $config['overwrite']      = TRUE;
                  $config['max_size']       = $this->max_image_size;
                  $config['file_name']      = $img_name;
                  $this->load->library('upload', $config);

                  if ( !$this->upload->do_upload('image')) {
                    $error = array('error' => $this->upload->display_errors(), 'file'=> $this->upload_path.$filename); 
                    $data['form'] = $this->class."/add";
                    $data['error'] = $error;
                    $data['_view'] = $this->view_dir . 'add';
                    $this->load->view('layouts/main', $data);
                  }else {
                    if($data["data"]["icon"]) {
                        if(file_exists("./".$this->upload_path."/".$data["data"]['icon'])) {
                            unlink($this->upload_path . $data["data"]["icon"]);
                        }
                        if(file_exists("./".$this->thumb_path."/".$data["data"]['icon'])) {
                            unlink($this->thumb_path . $data["data"]["icon"]);
                        }
                    }
                    $uploadedImage = $this->upload->data();
                    $this->resizeImage($img_name.".".$extension);
                    $uploaded_file = $uploadedImage['file_name'];
                  }
                }            
                
                $params = array(
                    'nama' => $this->input->post('nama'),
                    'deskripsi' => $this->input->post('deskripsi'),
                    'website' => $this->input->post('website'),
                    'icon' => $uploaded_file ? $uploaded_file : $this->input->post('icon'),
                    'updated_at' => date('Y-m-d H:i:s'),
                    'update_id' => $this->dx_auth->get_user_id(),
                );

                $this->main->update($id, $params);
                redirect($this->class);
            } else {
                $data['form'] = $this->class."/edit/";
                $data["thumb_path"] = $this->thumb_path;                
                $data["max_size"] = $this->max_image_size;
                $data['_view'] = $this->view_dir . 'edit';
                $this->load->view('layouts/main', $data);
            }
        } else
            show_error('Data id you are trying to edit does not exist.');
    }

    /*
     * Deleting a row
     */

    function remove($id) {
        $data = $this->main->get_one($id);        //print_r($data); exit;
        // check if the id exists before trying to delete it
        if (isset($data['id'])) {
            unlink($this->upload_path . $data["icon"]);
            unlink($this->thumb_path . $data["icon"]);
            $this->main->delete_one($id);
            redirect($this->class);
        } else
            show_error('Data id you are trying to delete does not exist.');
    }
    
    /*
     * Deleting many rows
     */
    
    function delete() {
        $data=$this->input->post('ckbox');   //print_r($data);     print_r(array_flip($data)); exit;
        if(is_array($data)) {
            $this->main->delete_icons(array_keys($data),array("upload_path"=>$this->upload_path,"thumb_path"=>$this->thumb_path));
            $this->main->delete_many(array_keys($data));
        } //exit;
        redirect ($this->class);
    }

    function upload() {

        $config['upload_path'] = $this->gallery_path;
        $config['allowed_types'] = 'gif|jpg|png';
        $config['overwrite'] = TRUE;
        $config['max_size'] = '2500';
        $config['max_width'] = '2100';
        $config['max_height'] = '3000';
        $config['file_name'] = $file_name;

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload()) {
            $error['error'] = "Please try again: " . $this->upload->display_errors();
            $error['heading'] = 'Upload Banner';
            $error['slot'] = $this->banners->slot_banner();
            $error['title'] = 'Upload Banner';
            $error['form'] = "banner/do_upload";
            $error['view'] = "admin/banner_form";
            $error['button'] = "update";
            $error['button_cap'] = "Update";
            $this->load->view('general/body_content', $error);
        } else {
            $image_data = $this->upload->data();
            $data['slot'] = $slot;
            $data['title'] = $this->input->post('title');
            $data['description'] = $this->input->post('description');
            $data['ext'] = $ext;
            $data['linkd'] = $this->input->post('linkd');
            $data['user_id'] = $user_id;
            $data['created'] = mdate('%Y-%m-%d %H:%i:%s', time());
            $this->banners->save($data);

            $data['path'] = realpath(APPPATH . '../img/banners');
            $data['name'] = $slot . "." . $ext;
            $data['height'] = 410;
            $data['width'] = 300;
            $this->banners->resize($data);
            $this->session->set_flashdata('upload', 'success');
            redirect($this->class);

        }
    }

    /**
     * Manage uploadImage
     *
     * @return Response
    */
    public function resizeImage($filename)
    {
       $source_path = $this->upload_path . $filename;
       $target_path = $this->thumb_path;
       $config_manip = array(
           'image_library' => 'gd2',
           'source_image' => $source_path,
           'new_image' => $target_path,
           'maintain_ratio' => TRUE,
           'create_thumb' => TRUE,
           'thumb_marker' => '',
           'width' => $this->thumb_size["width"],
           'height' => $this->thumb_size["heigth"]
       );


       $this->load->library('image_lib', $config_manip);
       if (!$this->image_lib->resize()) {
           echo $this->image_lib->display_errors(); exit;
       }


       $this->image_lib->clear();
    }
    
    /*
     * get file extension
     */
   
    function findexts($raw) {
        $filename = strtolower($raw);
        $exts = explode(".", $filename);
        $n = count($exts) - 1;
        return $exts[$n];
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
    
}