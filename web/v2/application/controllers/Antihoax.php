<?php

defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . 'libraries/REST_Controller.php';

class Antihoax extends REST_Controller {

    var $allowed_search = array("id", "title", "source", "source_issue", "source_link", "content", "tags");
    var $cekfakta = "35.198.219.15";

    function __construct($config = 'rest') {
        parent::__construct($config);
        $this->load->database();

        $this->load->library('DX_Auth');
        $this->load->model('Api_model', 'api');
    }

    //Menampilkan data berita
    function index_get() {
        $ip = $this->input->ip_address();
        if ($ip == "::1") {
            $ip = "127.0.0.1";
        }
        $column = $this->uri->segment(2);
        $value = $this->uri->segment(3);
        
        $data=array("ip"=>$ip, "column"=>$column, "value"=>$value, "key"=>$this->uri->segment(4)); //print_r($data); exit;
        $error = $this->api->authenticate($data);    //echo "<br/>".$error; exit;
        
        if (!$error && $column!="count") {
            if (is_numeric($value) && $column!="page") {
                $value = (filter_var($value, FILTER_SANITIZE_NUMBER_INT));
            } else {
                $value = (filter_var(urldecode(stripslashes($value)), FILTER_SANITIZE_STRING));
            }
            $filter = array();
            $filter['region'] = filter_var($this->uri->segment(5), FILTER_SANITIZE_NUMBER_INT) ?: 0;
            
            if($column=="random") {
                $filter["method"]="random";
            }elseif($column=="latest") {
                $filter["method"]="latest";
            }elseif($column=="page") {
                $filter["method"]="page";
                $param = explode(".",$value);
                if(isset($param[1])) {
                    if(!is_numeric($param[1])) {
                        preg_match("~^(\d+)~", $param[1], $num);
                        $page = $num[1];
                    }
                    else $page = $param[1]; 
                }
                $value = $param[0];  
                $filter["page"]=$page;  //echo $offset."<br/>";//var_dump ($param); exit;
            }
            elseif ($column == "content" || 
                    $column == "tags" || 
                    $column == "title" || 
                    $column == "source" || 
                    $column == "source_issue" || 
                    $column == "source_link") {
                $filter["method"]="like";
                $filter["column"]=$column;
            }
            else {
                $filter["method"]="where";
                $filter["column"]=$column;                                    
            }
            $result = $this->api->get_filtered($filter, $value);
            
            $this->response($result, 200);
        }
        elseif (!$error && $column=="count") {
            $result = $this->api->count_all();            
            $this->response($result, 200);           
        } else
            $this->response($error);
    }

    function index_post() {
        $ip = $this->input->ip_address();
        if ($ip == "::1") {
            $ip = "127.0.0.1";
        }
        $column = $this->post('method');
        $value  = $this->post('value');        
        $data=array("ip"=>$ip, "column"=>$column, "value"=>$value, "key"=>$this->post('apikey')); //$this->response($data, 200); /*
        $error = $this->api->authenticate($data);
        if (!$error) {
            if (is_numeric($value)) {
                $value = (filter_var($value, FILTER_SANITIZE_NUMBER_INT));
            } else {
                $value = (filter_var(urldecode(stripslashes($value)), FILTER_SANITIZE_STRING));
            }
            $filter = array();
            if($column=="random") $filter["method"]="random";
            elseif($column=="latest") $filter["method"]="latest";
            elseif ($column == "content" || $column == "tags" || $column == "title") {
                $filter["method"]="like";
                $filter["column"]=$column;
            }
            else {
                $filter["method"]="where";
                $filter["column"]=$column;                                    
            }
            $result = $this->api->get_filtered($filter, $value);
            
            $this->response($result, 200);
        } else
            $this->response($error);//*/
    }
    
    /*
    //Memperbarui data yang telah ada
    function index_put() {
        $id = $this->put('id');
        $data = array(
            'id' => $id,
            'source_id' => $this->put('source_id'),
            'news' => $this->put('news'),
            'status' => $this->put('status'),
            'created_id' => 1,
            'updated_at' => date('Y-m-d H:i:s'),
            'created_at' => date_create('now')->format('Y-m-d H:i:s')
        );
        $this->db->where('id', $id);
        $update = $this->db->update('antihoax', $data);
        if ($update) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
    }

    //Menghapus salah satu data berita
    function index_delete() {
        $id = $this->delete('id');
        $this->db->where('id', $id);
        $delete = $this->db->delete('antihoax');
        if ($delete) {
            $this->response(array('status' => 'success'), 201);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
    }
    */

}
