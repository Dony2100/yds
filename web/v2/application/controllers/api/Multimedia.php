<?php

defined('BASEPATH') or exit('No direct script access allowed');

require APPPATH . 'libraries/REST_Controller.php';

/**
 * API Search
 * POST api/multimedia
 * params:
 * key: asyHZFtB1vcnqGB1KYioi4p1uDIq0064f2e93d6020f46c81a38bf228773d
 * type: hash / image / audio
 * value: string hash (type: hash) / string url (type: image/audio)
 * option: media-only (output hanya url image) / full (output full data antihoax)
 * 
 */
class Multimedia extends REST_Controller
{
    public function __construct($config = 'rest')
    {
        parent::__construct($config);
        $this->load->database();
        $this->load->library('DX_Auth');
        $this->load->model('media_model');
        $this->load->model('antihoax_model');
    }

    public function index_post()
    {

        $key = $this->input->post('key');
        $ip = $this->input->ip_address();

        if ($ip == "::1") {
            $ip = "127.0.0.1";
        }

        $this->load->library('form_validation');
        $this->form_validation->set_rules('key', 'Key', 'trim|required');
        $this->form_validation->set_rules('value', 'Value', 'trim|required');

        if (!$this->form_validation->run()) {
            $this->response('Access failed', 404);
        }

        $data=array("ip"=>$ip, "key"=>$key);
        $error = $this->authenticate($data);
        if (!$error) {

            $type = $this->input->post('type');
            $value = $this->input->post('value');
            $option = $this->input->post('option');
            
            if($type == 'hash'){

                $result = $this->media_model->get_media_by_hash($value);
                if(empty($result)){
                    $this->response(array(), 200);
                }else{

                    if(!isset($option) || $option == 'media-only'){
                        $this->response($result);
                    }else{
                        $data = [];
                        $i = 0;
                        foreach ($result as $r) {
                            $data[$i] = $this->antihoax_model->find_api($r->article_id);
                            $i++;
                        }

                        $this->response($data);
                    }
                    
                }
                

            }else if($type == 'image'){
                $this->response('Not implemented yet', 404);
            }else if($type == 'audio'){
                $this->response('Not implemented yet', 404);
            }else{
                $this->response('Access failed', 404);
            }

        } else {
            $this->response($error);
        }
    }

    public function index_get()
    {
        $ip = $this->input->ip_address();

        if ($ip == "::1") {
            $ip = "127.0.0.1";
        }

        $segment = $this->uri->total_segments();
        if ($segment === 3) { //get all
            $key = $this->uri->segment(3);
            $data=array("ip"=>$ip, "key"=>$key);
            $error = $this->authenticate($data);
            if (!$error) {
                $this->response('Please refer to documentation', 200);
            } else {
                $this->response($error);
            }
        } else {
            $this->response('Access failed');
        }
    }

    public function authenticate($data)
    {
        $ip = $data['ip'];
        $key = $data['key'];
        
        if ($ip) {
            if ($key) {
                $CI =& get_instance();
                $CI->load->model('client_model');
                if ($this->client_model->authenticate($key, $ip, true)) {
                    $error=null;
                } else {
                    $error = "Access failed";
                }
            } else {
                $error = "Need public key";
            }
        } else {
            $error = "Can't detect IP adress";
        }
        
        return $error;
    }
}
