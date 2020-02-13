<?php

if (!defined('BASEPATH')) exit('No direct script access allowed');

class Draft extends CI_Controller {

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
            'TRUE' => 'TRUE'
        );
        $this->view_dir = "draft/";
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

        $this->load->model('Draft_model', 'main');
        $this->load->model('region_model','region');

        $this->dx_auth->check_uri_permissions(TRUE,array("Editor","Author"));
        $this->session->set_flashdata('menu', array('main'=>"data",'sub'=>"draft"));
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
        $data['alert'] = array('state'=>'','message'=>'Draft data are not available at cekfakta.com before published');
        $this->load->view('layouts/main', $data);
    }
    
    public function add_author($id) {
        $this->load->model('Author_model', 'author');
        
        $all_author = $this->author->get_all_filtered("nama", "ASC", "id, nama");
        $authors = array();
        foreach($all_author as $val) {
            $authors[$val["id"]]=$val["nama"];
        }
        
        $to_update = $this->main->get_one($id);
        $author_array = explode(",",$to_update["authors"]);
        
        $selected = $this->input->post("author");
        if($selected) {
            if(!in_array($selected, $author_array)) {
                $values = $to_update["authors"] ? $to_update["authors"].", ".$selected : $selected;
                $this->main->update($id,array('authors'=>$values));
                $this->main->append_author($id, $selected);
                redirect($this->class."/add_author/".$id);
            }
        }
        
        if($id) $data['data_id']= $id;
        $data['form'] = $this->class."/add_author";
        $data['data'] = $this->main->get_one($id);
        $data['authors'] = $authors;
        $data['author_array'] = $author_array;
        $data['thumb_path'] = $this->thumb_path;
        $data['_view'] = $this->view_dir . 'add_author';
        $this->load->view('layouts/main', $data);       
    }
    
    function del_author($data_id,$id) {
        $data = $this->main->get_one($data_id);
        $author_array = explode(",", $data["authors"]);
        $key = array_search($id, $author_array); //echo $key." "; print_r($author_array);
        unset($author_array[$key]);
        $new_author = implode(",", $author_array);
        $this->main->update($data_id, array("authors"=>$new_author));
        $this->main->detach_author($data_id,$id);
        redirect($this->class."/add_author/$data_id");
    }

    public function ajax_main_1811132138() {
        $this->load->model('Member_model', 'member');
        
        $params = $this->main->get_colaboration($this->dx_auth->get_user_id());
        
        $list = $this->main->get_datatables($params);
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
            "recordsTotal" => $this->main->count_all($params),
            "recordsFiltered" => $this->main->count_filtered($params),
            "data" => $data,
        );
        //output to json format
        echo json_encode($output);
    }
    
    function actions($id, $user_id) {
        $user_role = $this->dx_auth->get_role_name();
        if($user_role=="Editor" && $user_id !==$this->dx_auth->get_user_id()) {
            $edit = "<a class='fa fa-pencil-square-o' "
                    ."data-toggle='tooltip' data-placement='left' "
                    ."title='No permission'><i> Edit</i></a>&nbsp;"; 
        }
        else {
            $edit = "<a class='fa fa-pencil-square-o' "
                   ."href='$this->class/edit/$id' "
                   ."data-toggle='tooltip' data-placement='left' "
                   ."title='Edit row'> Edit</a>&nbsp;";
        }
        $author = "<a class='fa fa-plus' "
                 ."href='$this->class/add_author/$id' "
                 ."data-toggle='tooltip' data-placement='left' "
                 ."title='Add Author'> Add Author</a>&nbsp;";
        $publish = $user_id == $this->dx_auth->get_user_id() ? "<a class='fa fa-check' "
                 ."href='$this->class/publish/$id' "
                 ."data-toggle='tooltip' data-placement='left' "
                 ."title='Add Author'> Publish</a>&nbsp;" : "Publish";        
        $result = ' <div class="btn-group m-r-5 m-b-5">
                        <a href="javascript:;" data-toggle="dropdown" class="btn btn-warning dropdown-toggle">
                            <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu pull-right">
                            <li>'.$author.'</li>
                            <li class="divider"></li>
                            <li>'.$edit.'</li>
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
                ,'tanggal' => $this->input->post('date_issued')
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
                $message = "New data was saved as draft";
                $this->session->set_flashdata('alert', array('state'=>'success','message'=>$message));                
                redirect('Draft');
            }
            elseif($publish) {
                //$antihoax_id = 
                $this->main->add_antihoax($params, $params_content);
                $message = "New data was saved and published";
                $this->session->set_flashdata('alert', array('state'=>'success','message'=>$message));                  
                redirect($this->class);
            }
            
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
        $data['antihoax'] = $this->main->get_one($id);

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

                $this->main->update($id, $params, $params_content);
                $message = "Data updated";
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
        $antihoax = $this->main->get_one($id);

        // check if the antihoax exists before trying to delete it
        if (isset($antihoax['id'])) {
            $this->main->delete($id);
            redirect($this->class);
        } else
            show_error('The antihoax you are trying to delete does not exist.');
    }
    
    function delete() {
        $data = $this->input->post('ckbox');
        if(count($data)>10) {
            $this->session->set_flashdata('alert', array('state'=>'danger','message'=>"Cannot publish more than 10 data in one process, try to select less"));
            return redirect($this->class);
        }

        if(is_array($data)) {
            if($this->input->post('publish')) {
                $inserted = $this->main->publish(array_keys($data));               
            }            
            if($this->input->post('delete') || $inserted) { $deleted = $this->main->delete_all(array_keys($data)); }
            if($deleted) { $this->main->cleanup(array_keys($data)); }
        }
        if($this->input->post('publish') && count($data)) {
            if($inserted) {
                $pbl_message = "The selected data has sucessfully published";
                $pbl_state = "success";
                $redir = "Main_data";
            }
            else {
                $pbl_message = "Whoops something went wrong, selected data were not published yet";
                $pbl_state = "danger";
                $redir = "$this->class";               
            }
            $this->session->set_flashdata('alert', array('state'=>$pbl_state,'message'=>$pbl_message));    
            redirect($redir);
        }
        else { 
            if($deleted) {
                $del_message = "The selected data has sucessfully deleted";
                $this->session->set_flashdata('alert', array('state'=>'success','message'=>$del_message));
            }
            redirect ($this->class);            
        }
    }
    
    public function detail($id) {
        $this->load->model('Member_model', 'member');
        $this->load->model('Author_model', 'author');
        $this->main->get_one($id);
        $antihoax = $this->main->get_one($id);
        $member = $this->member->get_member($antihoax['user_id'], TRUE);
        
        $data['name'] = is_object($member) ? $member->FirstName." ".$member->LastName : "<i>fulan #".$antihoax['user_id']."</i>";
        $data['antihoax'] = $antihoax;
        $data['status'] = $this->status_data;
        $data['thumb_path'] = $this->thumb_path;
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