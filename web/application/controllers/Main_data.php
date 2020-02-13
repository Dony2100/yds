<?php

if (!defined('BASEPATH')) exit('No direct script access allowed');

class Main_data extends CI_Controller {

    var $view_dir;
    var $class;
    var $status_data;
    var $classification;
    var $upload_path;
    var $thumb_path;

    public function __construct() {
        parent::__construct();

        $classification = array(
            '-' => '-',
            'False Connection' => 'False Connection',
            'False Context' => 'False Context',
            'Satire' => 'Satire',
            'Manipulated Content' => 'Manipulated Content',
            'Misleading Content' => 'Misleading Content',
            'Impostor Content' => 'Impostor Content',
            'Fabricated Content' => 'Fabricated Content',
            'TRUE' => 'TRUE',
            'Clarification' => 'Clarification',
        );
        $this->view_dir = "main_data/";
        $this->class = $this->router->fetch_class();
        $this->status_data = array(0=>"Dalam Proses", 10=>"In Progress", 
                                    1=>"BENAR", 11=>"TRUE", 2=>"SALAH", 12=>"FALSE", 
                                    3=>"Berita", 13=>"News", 4=>"Edukasi", 14=>"Education", 
                                    5=>"Klarifikasi", 15=>"Clarification");
        $this->classification = $classification;
        $this->upload_path = "uploads/";
        $this->thumb_path = $this->upload_path . "thumbnail/";

        $this->load->helper('form');

        $this->load->library('DX_Auth');

        $this->load->model('Maindata_model', 'main');
        $this->load->model('region_model','region');

        $this->dx_auth->check_uri_permissions(TRUE,array("Editor","Author"));
        $this->session->set_flashdata('menu', array('main'=>"data",'sub'=>"antihoax"));
    }

    /**
     * Cotoh penggunaan bootstrap pada codeigniter::index()
     */
    public function index() {
        /*
        $data['message']="Maaf sedang dilaksanakan maintenance,<br/>silahkan coba beberapa saat lagi";
        $data['warning']=TRUE;
        $data['_view'] = 'general/message';
        $this->load->view('layouts/main', $data);
        */
        $last_update = $this->main->last_update();
        $data["last_update"] = $this->date_to_word($last_update)." at ".date_format(date_create($last_update),"H:i:s");
        $data['country'] = 0;
        $data['province'] = 0;
        $data['regency'] = 0;
        $data['_view'] = $this->view_dir . 'index';
        $data['_editor'] = $this->dx_auth->get_role_name()=='Editor' ? TRUE : FALSE; 
        $this->load->view('layouts/main', $data);
    }

    public function add_author($id) {
        $this->load->model('Author_model', 'author');

        $all_author = $this->author->get_all_filtered("nama", "ASC", "id, nama");
        $authors = array();
        foreach($all_author as $val) {
            $authors[$val["id"]]=$val["nama"];
        }

        $to_update = $this->main->get_antihoax($id);
        $author_array = explode(",",$to_update["authors"]);

        $selected = $this->input->post("author");
        if($selected) {
            if(!in_array($selected, $author_array)) {
                $values = $to_update["authors"] ? $to_update["authors"].", ".$selected : $selected;
                $this->main->update_antihoax($id,array('authors'=>$values), false);
                $this->main->append_author($id, $selected);
                redirect($this->class."/add_author/".$id);
            }
        }

        if($id) $data['data_id']= $id;
        $data['form'] = $this->class."/add_author";
        $data['data'] = $this->main->get_antihoax($id);
        $data['authors'] = $authors;
        $data['author_array'] = $author_array;
        $data['thumb_path'] = $this->thumb_path;
        $data['_view'] = $this->view_dir . 'add_author';
        $this->load->view('layouts/main', $data);
    }

    function del_author($data_id,$id) {
        $data = $this->main->get_antihoax($data_id);
        $author_array = explode(",", $data["authors"]);
        $key = array_search($id, $author_array); //echo $key." "; print_r($author_array);
        unset($author_array[$key]);
        $new_author = implode(",", $author_array);
        $this->main->update_antihoax($data_id, array("authors"=>$new_author), false);
        $this->main->detach_author($data_id,$id);
        redirect($this->class."/add_author/$data_id");
    }

    public function ajax_main_1711111320() {
        $this->load->model('Member_model', 'member');

        $list = $this->main->get_datatables();
        $data = array();
        $no = isset($_POST['start']) ? $_POST['start'] : 1;
        foreach ($list as $main) {
            $member = $this->member->get_member($main->user_id, TRUE); //var_dump($member);
            if(is_object($member)) {
                if($member->FirstName) $name = $member->FirstName." ".$member->LastName;
                else $name = "<i class='text-muted'>".$this->get_username ($main->user_id)."</i>";
            }
            else {
               $name = "<i class='text-muted'>".$this->get_username($main->user_id)."</i>";
            }

            $to_check = array('title', 'content', 'fact', 'source_issue', 'conclusion');
            $detail = " <a href='main_data/detail/$main->id'>....</a>"; 
            foreach ($main as $key => $val) {
                if (in_array($key, $to_check)) {
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
            $row = array();
            $row[] = "<a href='$this->class/detail/$main->id'>$no.</a> ".form_checkbox($checkbox);
            $row[] = $name;
            $row[] = $this->status_data[$main->status]."<br/><i class='text-muted'>".$main->classification."</i>";
            $row[] = "<a href='$this->class/detail/$main->id'>$main->title</a>";
            $row[] = $main->content;
            $row[] = date("d/m/Y", strtotime($main->tanggal));
            $row[] = $main->tags;
            $row[] = date_format(date_create($main->updated_at),"j/m/Y H:i:s");
            $row[] = $this->actions($main->id, $main->user_id);

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
    
    function actions($id, $user_id) {
        $user_role = $this->dx_auth->get_role_name();
        if($user_role=="Editor" && $user_id !==$this->dx_auth->get_user_id()) {
            $edit = "<a href=''"
                    ."data-toggle='tooltip' data-placement='left' "
                    ."title='No permission'><span class='fa fa-pencil-square-o'></span> Edit</a>&nbsp;"; 
        }
        else {
            $edit = "<a "
                   ."href='$this->class/edit/$id' "
                   ."data-toggle='tooltip' data-placement='left' "
                   ."title='Edit row'><span class='fa fa-pencil-square-o'></span> Edit</a>&nbsp;";
        }
        $author = "<a "
                 ."href='$this->class/add_author/$id' "
                 ."data-toggle='tooltip' data-placement='left' "
                 ."title='Add Author'><span class='fa fa-anchor'></span> Edit Author</a>&nbsp;";
        $result = ' <div class="btn-group m-r-5 m-b-5">
                        <a href="javascript:;" data-toggle="dropdown" class="btn btn-warning dropdown-toggle">
                            <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu pull-right">
                            <li style="margin-left:10px;">'.$author.'</li>
                            <li class="divider"></li>
                            <li style="margin-left:10px;">'.$edit.'</li>                            
                        </ul>
                    </div>';
        return $result;
    }
    
    /*
     * Adding a new antihoax
     */

    function add() {
        if (isset($_POST) && count($_POST) > 0) {
            $publish =  $this->input->post('btn_publish');
            $draft =  $this->input->post('btn_draft');
            //if($publish) echo "PUBLISH"; if($draft) echo "DRAFT"; exit;
            $country = $this->input->post('country');
            $province = $this->input->post('province');
            $regency = $this->input->post('regency');
            $reg_level=0; $reg_id=0;
            if($country) {$reg_level=1; $reg_id=$country;}
            if($province) {$reg_level=2; $reg_id=$province;}
            if($regency) {$reg_level=3; $reg_id=$regency;}

            $params = array(
                'user_id' => $this->dx_auth->get_user_id()
                ,'authors' => $this->input->post('author')
                ,'status' => $this->input->post('status')
                ,'classification' => $this->input->post('classification')
                ,'references' => $this->input->post('references')
                ,'source_issue' => $this->input->post('source_issue')
                ,'source_link' => $this->input->post('source_link')
                ,'picture1' => $this->input->post('picture1')
                ,'picture2' => $this->input->post('picture2')
                ,'picture3' => $this->input->post('picture3')
                ,'picture4' => $this->input->post('picture4')
                ,'tanggal' => $this->input->post('tanggal')
                ,'tags' => $this->input->post('tags')
                ,'updated_at' => date('Y-m-d H:i:s')
                ,'updated_id' => $this->dx_auth->get_user_id()
                ,'created_at' => date('Y-m-d H:i:s')
                ,'region_id' => $reg_id
                ,'region_level' => $reg_level
                ,'conclusion' => $this->input->post('conclusion')
            );

            $params_content = array(
                'title' => $this->input->post('title'),
                'content' => $this->input->post('content'),
                'fact' => $this->input->post('fact')
            );
            
            if($draft) {
                $draft_id = $this->main->add_draft($params, $params_content);
                $this->main->initiate_colaboration($draft_id, $this->dx_auth->get_user_id());
                $message = "New data as draft added";
                $this->session->set_flashdata('alert', array('state'=>'success','message'=>$message));
                redirect('Draft');
            }
            elseif($publish) {
                //$antihoax_id = 
                $this->main->add_antihoax($params, $params_content);
                $message = "New data was successfuly published";
                $this->session->set_flashdata('alert', array('state'=>'success','message'=>$message));
            }
            redirect($this->class);
        } else {
            $this->load->model('Author_model', 'author');
            $all_author = $this->author->get_all_filtered("nama", "ASC", "id, nama");
            foreach($all_author as $val) {
                $authors[$val["id"]]=$val["nama"];
            }

            $data['countries'] = $this->region->user_countrylist();
            $data['country'] = 0;
            $data['province'] = 0;
            $data['regency'] = 0;
            $data['authors'] = $authors;
            $data["classification"] = $this->classification;
            $data['_view'] = $this->view_dir . 'add';
            $this->load->view('layouts/main', $data);
        }
    }

    /*
     * Editing a antihoax
     */

    function edit($id) {    //if($this->input->post()) print_r($this->input->post()); exit;
        // check if the antihoax exists before trying to edit it
        $data['antihoax'] = $this->main->get_antihoax($id);

        if (isset($data['antihoax']['id'])) {
            if (isset($_POST) && count($_POST) > 0) {
                $country = $this->input->post('country');
                $province = $this->input->post('province');
                $regency = $this->input->post('regency');
                $reg_level=0; $reg_id=0;
                if($country) {$reg_level=1; $reg_id=$country;}
                if($province) {$reg_level=2; $reg_id=$province;}
                if($regency) {$reg_level=3; $reg_id=$regency;}

                $params = array(
                    'status' => $this->input->post('status')
                    ,'classification' => $this->input->post('classification')
                    ,'references' => $this->input->post('references')
                    ,'source_issue' => $this->input->post('source_issue')
                    ,'source_link' => $this->input->post('source_link')
                    ,'picture1' => $this->input->post('picture1')
                    ,'picture2' => $this->input->post('picture2')
                    ,'picture3' => $this->input->post('picture3')
                    ,'picture4' => $this->input->post('picture4')
                    ,'tanggal' => $this->input->post('tanggal')
                    ,'tags' => $this->input->post('tags')
                    ,'updated_at' => date('Y-m-d H:i:s')
                    ,'updated_id' => $this->dx_auth->get_user_id()
                    ,'region_id' => $reg_id
                    ,'region_level' => $reg_level
                    ,'conclusion' => $this->input->post('conclusion')
                );

                $params_content = array(
                    'title' => $this->input->post('title'),
                    'content' => $this->input->post('content'),
                    'fact' => $this->input->post('fact')
                );

                $this->main->update_antihoax($id, $params, $params_content);
                $message = "Data update saved";
                $this->session->set_flashdata('alert', array('state'=>'success','message'=>$message));                
                redirect($this->class);
            } else {
                $regions = $this->region->get_regions($data['antihoax']['region_id'],$data['antihoax']['region_level']);

                $data['countries'] = $this->region->user_countrylist();
                $data['country'] = $regions['country'];
                $data['province'] = $regions['province'];
                $data['regency'] = $regions['regency'];
                $data["classification"] = $this->classification;
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
        $antihoax = $this->main->get_antihoax($id);

        // check if the antihoax exists before trying to delete it
        if (isset($antihoax['id'])) {
            $this->main->delete_antihoax($id);
            redirect($this->class);
        } else
            show_error('The antihoax you are trying to delete does not exist.');
    }

    function delete() {
        $data=$this->input->post('ckbox');
        if(is_array($data)) {
            $result=$this->main->delete_antihoaxs(array_keys($data));
        }
        $message = "Data deleted";
        $this->session->set_flashdata('alert', array('state'=>'success','message'=>$message));           
        redirect ($this->class);
    }

    public function detail($id) {
        $this->load->model('Member_model', 'member');
        $this->load->model('Author_model', 'author');
		$this->load->model('media_model');
        
        $antihoax = $this->main->get_antihoax($id);
        $member = $this->member->get_member($antihoax['user_id'], TRUE);
		$media = $this->media_model->get_media($id);


        if ($this->input->post('input_claim')) {
            //die(var_dump($this->input->post()));
            $this->load->library('form_validation');
            $this->form_validation->set_rules('article_id', 'ID', 'trim|required');
            $this->form_validation->set_rules('claim_date_published', 'Claim Date Published', 'trim|required');
            $this->form_validation->set_rules('claim_url', 'Claim URL', 'trim|required');
            $this->form_validation->set_rules('claim_title', 'Claim Title', 'trim|required');
            $this->form_validation->set_rules('claim_author_name', 'Claim Author Name', 'trim|required');
            $this->form_validation->set_rules('claim_rating_value', 'Claim Rating Value', 'trim|required');
            $this->form_validation->set_rules('claim_author_type', 'Claim Author Type', 'trim|required');
            $this->form_validation->set_rules('claimed_item_author_name', 'Claimed Item Author Name', 'trim|required');
            $this->form_validation->set_rules('claimed_item_author_type', 'Claimed Item Author Type', 'trim|required');
            $this->form_validation->set_rules('claimed_item_url', 'Claimed Item URL', 'trim|required');
            $this->form_validation->set_rules('claimed_item_published_date', 'Claimed Item Published Date', 'trim|required');

            if ($this->form_validation->run()) {
                $data = array(
                    'article_id' => $this->input->post('article_id'),
                    'claim_date_published' => $this->input->post('claim_date_published'),
                    'claim_url' => $this->input->post('claim_url'),
                    'claim_title' => $this->input->post('claim_title'),
                    'claim_author_name' => $this->input->post('claim_author_name'),
                    'claim_rating_value' => $this->input->post('claim_rating_value'),
                    'claim_author_type' => $this->input->post('claim_author_type'),
                    'claimed_item_author_name' => $this->input->post('claimed_item_author_name'),
                    'claimed_item_author_type' => $this->input->post('claimed_item_author_type'),
                    'claimed_item_url' => $this->input->post('claimed_item_url'),
                    'claimed_item_published_date' => $this->input->post('claimed_item_published_date'),
                    'created_at' => date('Y-m-d H:i:s'),
                    'created_by' => $this->dx_auth->get_user_id(),
                    'updated_at' => date('Y-m-d H:i:s'),
                    'updated_by' => $this->dx_auth->get_user_id(),
                );

                if ($this->db->insert('claim_review', $data)) {
                    $this->session->set_flashdata('alert', array('state'=>'success','message'=>"Claim Review berhasil disimpan"));
                    redirect('main_data/detail/'.$this->input->post('article_id'));
                } else {
                    $this->session->set_flashdata('alert', array('state'=>'danger','message'=>"Terjadi error saat menyimpan claim review."));
                }
            }

        }

        if($this->input->post('upload_media')){
            $this->upload_media();
        }



        $data['name'] = is_object($member) ? $member->FirstName." ".$member->LastName : "<i>fulan #".$antihoax['user_id']."</i>";
        $data['antihoax'] = $antihoax;
		$data['media'] = $media;
        $data['status'] = $this->status_data;
        $data['thumb_path'] = $this->thumb_path;
        $data['_view'] = $this->view_dir . 'detail';
        $this->load->view('layouts/main', $data);
    }

    /**
     * @return delete media using ajax request from detail main_data
     */
    public function delete_media()
    {
        $this->dx_auth->check_uri_permissions(true, array("Editor","Author"));
        if ($this->input->server('REQUEST_METHOD') == 'POST') {        

            $this->db->where('id', $this->input->post('id'));
            $this->db->where('article_id', $this->input->post('article_id'));

            $path = $this->input->post('media_path');
            if ($this->db->delete('antihoax_media')) {

                if(file_exists(FCPATH .$path)){
                    unlink(FCPATH.$path);
                }

                $this->session->set_flashdata('alert', array('state'=>'success','message'=>"Media berhasil dihapus."));

                echo json_encode([
                    'status' => 'success',
                    'redirect' => site_url('main_data/detail/'.$this->input->post('article_id')),
                ]);
            } else {

                $this->session->set_flashdata('alert', array('state'=>'danger','message'=>"Terjadi error saat menghapus media."));

                echo json_encode([
                    'status' => 'error',
                    'redirect' => site_url('main_data/detail/'.$this->input->post('article_id')),
                ]);
            }
        } else {
            redirect('main_data/index', 'refresh');
        }
    }

    private function upload_media()
    {
        $media = false; //by default file is not uploaded

        $uploadPath = './uploads/media/'.date('Y').'/'.date('m');
        if (!file_exists($uploadPath)) {
            mkdir($uploadPath, 0755, true);
        }

        $config['upload_path']   = $uploadPath;
        $config['allowed_types'] = 'jpeg|mp4';
        $config['detect_mime'] = true;
        $config['overwrite']     = true;
        //$config['file_name']     = 'media_file_'. uniqid().'_'. date("YmdHis"); renamed below

        $this->load->library('upload', $config);

        //if (isset($_FILES['file_name']['name']) && !empty($_FILES['file_name']['name'])) { //uncomment this to make upload optional
        if (!$this->upload->do_upload('media_file')) {
            $media = strip_tags($this->upload->display_errors());
        } else {
            $media == true;

            $fileData = $this->upload->data();

            $full_path   = $fileData['full_path']; // /path/to/file/image.jpg
            $file_path   = $fileData['file_path']; // /path/to/file/
            $file_ext    = $fileData['file_ext']; // .jpg
            $file_name   = $fileData['file_name']; // image.jpg
            $raw_name    = $fileData['raw_name']; //image

            //$renamed_file_name       = wordwrap(strtolower($raw_name), 1, '-', 0) . time();
            $renamed_file_name = openssl_digest($raw_name, 'sha512');
            $new_file_name      = $renamed_file_name . $file_ext;
            $new_file_name_path = $file_path . $new_file_name;

            //rename uploaded file
            rename($full_path, $new_file_name_path);

            $uploadData['file_name'] = $new_file_name;

            $hash = hash_file('sha512', $new_file_name_path);
        }
        //}

        $this->load->library('form_validation');
        $this->form_validation->set_rules('article_id', 'Article ID', 'trim|required');

        if ($this->form_validation->run() && is_bool($media) === true) {

            //insert to media table
            $data = array(
                'article_id' => $this->input->post('article_id'),
                'media_name' => $raw_name,
                'media_path' => ltrim($uploadPath, './').'/'.$new_file_name,
                'media_hash' => $hash,
                'created_at' => date('Y-m-d H:i:s'),
                'created_by' => $this->dx_auth->get_user_id(),
                'updated_at' => date('Y-m-d H:i:s'),
                'updated_by' => $this->dx_auth->get_user_id(),
            );

            if ($this->db->insert('antihoax_media', $data)) {
                $this->session->set_flashdata('alert', array('state'=>'success','message'=>"Media berhasil disimpan"));
                
            } else {
                $this->session->set_flashdata('alert', array('state'=>'danger','message'=>"Terjadi error saat menyimpan media."));
            }

            redirect('main_data/detail/'.$this->input->post('article_id'));

        } else {

            //either form validation false or image upload false
            $this->form_validation->setFieldData('media_file', $media);
            $this->form_validation->setError('media_file', $media);

            if ($media === false) {
                //unlink the uploaded file
                //die(var_dump($file));
                unlink($file['full_path']);

                $message = 'Do not forget to <b>reattach file</b> it was a proper file.';
                $this->form_validation->setFieldData('media_file', $message);
                $this->form_validation->setError('media_file', $message);
            }
        }
    }

    //id = id main data
    public function claim_review_update($id, $id2) {
        $this->load->model('Member_model', 'member');
        $this->load->model('Author_model', 'author');
        $this->main->get_antihoax($id);
        $antihoax = $this->main->get_antihoax($id);
        $member = $this->member->get_member($antihoax['user_id'], TRUE);

        //query pake sql biasa
        $sql = "SELECT * FROM claim_review WHERE id=?";
        $params = array($id2);
        $query = $this->db->query($sql, $params);
        $claim = $query->row_array();


        if ($this->input->server('REQUEST_METHOD') == 'POST') {
            //die(var_dump($this->input->post()));
            $this->load->library('form_validation');
            $this->form_validation->set_rules('id', 'ID', 'trim|required');
            $this->form_validation->set_rules('article_id', 'ID', 'trim|required');
            $this->form_validation->set_rules('claim_date_published', 'Claim Date Published', 'trim|required');
            $this->form_validation->set_rules('claim_url', 'Claim URL', 'trim|required');
            $this->form_validation->set_rules('claim_title', 'Claim Title', 'trim|required');
            $this->form_validation->set_rules('claim_author_name', 'Claim Author Name', 'trim|required');
            $this->form_validation->set_rules('claim_rating_value', 'Claim Rating Value', 'trim|required');
            $this->form_validation->set_rules('claim_author_type', 'Claim Author Type', 'trim|required');
            $this->form_validation->set_rules('claimed_item_author_name', 'Claimed Item Author Name', 'trim|required');
            $this->form_validation->set_rules('claimed_item_author_type', 'Claimed Item Author Type', 'trim|required');
            $this->form_validation->set_rules('claimed_item_url', 'Claimed Item URL', 'trim|required');
            $this->form_validation->set_rules('claimed_item_published_date', 'Claimed Item Published Date', 'trim|required');

            if ($this->form_validation->run()) {
                $data = array(
                    'article_id' => $this->input->post('article_id'),
                    'claim_date_published' => $this->input->post('claim_date_published'),
                    'claim_url' => $this->input->post('claim_url'),
                    'claim_title' => $this->input->post('claim_title'),
                    'claim_author_name' => $this->input->post('claim_author_name'),
                    'claim_rating_value' => $this->input->post('claim_rating_value'),
                    'claim_author_type' => $this->input->post('claim_author_type'),
                    'claimed_item_author_name' => $this->input->post('claimed_item_author_name'),
                    'claimed_item_author_type' => $this->input->post('claimed_item_author_type'),
                    'claimed_item_url' => $this->input->post('claimed_item_url'),
                    'claimed_item_published_date' => $this->input->post('claimed_item_published_date'),
                    'created_at' => date('Y-m-d H:i:s'),
                    'created_by' => $this->dx_auth->get_user_id(),
                    'updated_at' => date('Y-m-d H:i:s'),
                    'updated_by' => $this->dx_auth->get_user_id(),
                );

                $this->db->where('id', $this->input->post('id'));
                if ($this->db->update('claim_review', $data)) {
                    $this->session->set_flashdata('alert', array('state'=>'success','message'=>"Claim Review berhasil disimpan"));
                    redirect('main_data/detail/'.$this->input->post('article_id'));
                } else {
                    $this->session->set_flashdata('alert', array('state'=>'danger','message'=>"Terjadi error saat menyimpan claim review."));
                }
            }

        }

        $data['name'] = is_object($member) ? $member->FirstName." ".$member->LastName : "<i>fulan #".$antihoax['user_id']."</i>";
        $data['antihoax'] = $antihoax;
        $data['claim'] = $claim;
        $data['status'] = $this->status_data;
        $data['thumb_path'] = $this->thumb_path;
        $data['_view'] = $this->view_dir . 'claim_review_update';
        $this->load->view('layouts/main', $data);
    }

    public function delete_claim_review()
	{
		if($this->input->server('REQUEST_METHOD') == 'POST'){
			$this->db->where('id', $this->input->post('id'));
            if ($this->db->delete('claim_review')) {
                $this->session->set_flashdata('alert', array('state'=>'success','message'=>"Claim Review berhasil dihapus"));
                echo json_encode([
                    'status'   => 'success',
                    'redirect' => site_url('main_data/detail/'.$this->input->post('aid')),
                ]);
            } else {
                $this->session->set_flashdata('alert', array('state'=>'danger','message'=>"Claim Review gagal dihapus"));
                echo json_encode([
                    'status'   => 'error',
                    'redirect' => site_url('main_data/detail/'.$this->input->post('aid')),
                ]);
            }

		}else{
			redirect('Main_data/index');
		}
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

    function get_username($id) {
        $this->load->model('Users_model', 'user');
        $data_user = $this->user->get_user($id);
        $name = "<i>";
        $name.= $data_user['username'] ? $data_user['username'] : "~admin~";
        $name.= "</i>";
        return $name;
    }

    function get_region_ajax() {
        $country =$this->input->post('country');
        $province=$this->input->post('province');
        $selected=$this->input->post('selected')?:0;
        $id = $province ? : $country;
        $level = $province ? 2 : 1; 
        $levels = array(1=>'country',2=>'province',3=>'regency');

        $child = $levels[$level+1];
        $list=$this->region->get_childs($id);
        $options = array();
        if($list) {
            $options['0']="<< Select ".ucfirst($child)." (optional) >>";
            foreach($list as $val) {
                $options[$val->true_id]=$val->name;
            }
        }
        $region = array(
                'name' => $levels[$level],
                'id' => substr($child,0,-4),
                'class' => 'form-control',
        );
        $listbox = form_dropdown($child,$options,$selected,$region);
        if($options) {
            echo form_label(ucfirst($child), $region['id'], array('class'=>'col-md-4 control-label'));
            echo "<br/><div class='col-md-8'>".$listbox."</div>";
        }
    }

}

# nama file home.php
# folder apllication/controller/