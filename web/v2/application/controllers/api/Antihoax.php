<?php

defined('BASEPATH') or exit('No direct script access allowed');

require APPPATH . 'libraries/REST_Controller.php';

/**
 * API Antihoax
 * GET api/antihoax/[key] -> 10 data latest
 * GET api/antihoax/random/[key] -> 10 data random
 * GET api/antihoax/get_total/[key] -> total main data
 * GET api/antihoax/10/offset/0/[key] -> 10 pertama
 * GET api/antihoax/10/offset/10/[key] -> 11 sampai 20 (sda)
 * GET api/antihoax/1/[key] -> detail where id = 1
 * GET api/antihoax/search/[method]/[value]/[key] -> where [author, title, source_link, content, tags, status]
 * GET api/antihoax/search/[method]/[value]/10/offset/0/[key] -> where [author, title, source_link, content, tags, ] -> 10 data pertama
 * GET api/antihoax/search/[method]/[value]/10/offset/10/[key] -> where [author, title, source_link, content, tags, ]
 * GET api/antihoax/search/[method]/[value]/10/offset/10/[key] -> where [author, title, source_link, content, tags, ]
 * khusus search status value nya harus benar | salah
 * GET api/antihoax/search/[method]/[value]/total/[key] -> result total search -> where [title, source_link, content, tags, ]
 * GET api/antihoax/authorlink/4/[key] -> author link, where data_id = 4 
 * GET api/antihoax/get_authors/[key] -> semua author
 * GET api/antihoax/author/4/[key] -> detail author 
 * 
 */


/**
antihoax
key
limit - optional
offset - optional
id - optional / must be provided to see detail data

antihoax/get_authorlink
key
id (id of data antihoax)

antihoax/search: mencari main data berdasarkan method
key
method (author, title, source_link, content, tags, status)
value 
total (true - return jumlah hasil pencarian / false - return record) - optional
limit
offset


antihoax/get_total: total main_data
key

antihoax/random: random 10 data
key

antihoax/get_authors: list of all authors
key

antihoax/get_author: detail author
key
id (id of author)
 */
class Antihoax extends REST_Controller
{
    public function __construct($config = 'rest')
    {
        parent::__construct($config);
        $this->load->database();
        $this->load->library('DX_Auth');
        $this->load->model('antihoax_model');
    }

    public function search_get()
    {
        $segment = $this->uri->total_segments();
        if( ($segment != 6) && ($segment != 7) && ($segment != 9) ){
            $this->response('Access failed');
        }

        $search = $this->uri->segment(3);
        $method = $this->uri->segment(4);
        $value = $this->uri->segment(5);

        //used in 7 segment
        $total = false;

        //used in 8 segment
        $limit = null;
        $offset = null;

        if($segment == 6){
            $key = $this->uri->segment(6);
        }else if($segment == 7){
            $key = $this->uri->segment(7);
            
            if($this->uri->segment(6) == 'total'){
                $total = true;
            }else{
                $this->response('Access failed', 200);
            }
        }else if($segment == 9){

            if($this->uri->segment(7) != 'offset'){
                $this->response('Access failed', 200);
            }

            $key = $this->uri->segment(9);
            $limit = $this->uri->segment(6);
            $offset = $this->uri->segment(8);
        }
        
        $ip = $this->input->ip_address();
        if ($ip == "::1") {
            $ip = "127.0.0.1";
        }
        $data=array("ip"=>$ip, "key"=>$key);
        $error = $this->authenticate($data);
        if (!$error) {
            //id, title, source_link, content, tags

            if($method == 'author'){
                $result = $this->antihoax_model->get_data_link($value);
            }else if($method == 'title'){
                $result = $this->antihoax_model->get_data_where($total, $method, $value, $limit, $offset);
            }else if($method == 'source_link'){
                $result = $this->antihoax_model->get_data_where($total, $method, $value, $limit, $offset);
            }else if($method == 'content'){
                $result = $this->antihoax_model->get_data_where($total, $method, $value, $limit, $offset);
            }else if($method == 'tags'){
                $result = $this->antihoax_model->get_data_where($total, $method, $value, $limit, $offset);
            }else if($method == 'status'){
                $result = $this->antihoax_model->get_data_where($total, $method, $value, $limit, $offset);
            }else{
                $this->response('Access failed', 200);
            }

            $this->response($result, 200);
        } else {
            $this->response($error);
        }
    }

    public function get_total_get()
    {
        $key = $this->uri->segment(4);
        $ip = $this->input->ip_address();
        if ($ip == "::1") {
            $ip = "127.0.0.1";
        }
        $data=array("ip"=>$ip, "key"=>$key);
        $error = $this->authenticate($data);
        if (!$error) {
            $result = $this->antihoax_model->count_all();
            $this->response($result, 200);
        } else {
            $this->response($error);
        }
    }

    public function get_authors_get()
    {
        $key = $this->uri->segment(4);
        $ip = $this->input->ip_address();
        if ($ip == "::1") {
            $ip = "127.0.0.1";
        }
        $data=array("ip"=>$ip, "key"=>$key);
        $error = $this->authenticate($data);
        if (!$error) {
            $result = $this->antihoax_model->get_authors();
            $this->response($result, 200);
        } else {
            $this->response($error);
        }
    }

    public function random_get()
    {
        $key = $this->uri->segment(4);
        $ip = $this->input->ip_address();
        if ($ip == "::1") {
            $ip = "127.0.0.1";
        }
        $data=array("ip"=>$ip, "key"=>$key);
        $error = $this->authenticate($data);
        if (!$error) {
            $result = $this->antihoax_model->get_all(10, 0, true);
            $this->response($result, 200);
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
                $result = $this->antihoax_model->get_all();
                $this->response($result, 200);
            } else {
                $this->response($error);
            }
        } elseif ($segment === 4) { //detail
            $id = filter_var($this->uri->segment(3), FILTER_SANITIZE_NUMBER_INT);
            $key = $this->uri->segment(4);
            $data=array("ip"=>$ip, "key"=>$key);
            $error = $this->authenticate($data);
            if (!$error) {
                if($this->uri->segment(3) == 'author'){
                    $result = $this->antihoax_model->get_author_link($id);
                }else{
                    $result = $this->antihoax_model->find_api($id);  
                }
                $this->response($result, 200);
            } else {
                $this->response($error);
            }
        } elseif ($segment === 5) { //author
            if($this->uri->segment(3) != 'author' && $this->uri->segment(3) != 'authorlink'){
                $this->response('Access failed');
            }

            $id = filter_var($this->uri->segment(4), FILTER_SANITIZE_NUMBER_INT);
            $key = $this->uri->segment(5);
            $data=array("ip"=>$ip, "key"=>$key);
            $error = $this->authenticate($data);
            if (!$error) {
                if($this->uri->segment(3) === 'author'){
                    $result = $this->antihoax_model->get_author($id);
                }elseif($this->uri->segment(3) === 'authorlink'){
                    $result = $this->antihoax_model->get_author_link($id);
                }
                $this->response($result, 200);
            } else {
                $this->response($error);
            }
        } elseif ($segment === 6) { //with offset
            $limit = filter_var($this->uri->segment(3), FILTER_SANITIZE_NUMBER_INT);
            $offset = filter_var($this->uri->segment(5), FILTER_SANITIZE_NUMBER_INT);
            $offset_uri = filter_var($this->uri->segment(4), FILTER_SANITIZE_STRING);
            $key = $this->uri->segment(6);

            if ($offset_uri !== 'offset') {
                $this->response('Access failed');
            }

            $data=array("ip"=>$ip, "key"=>$key);
            $error = $this->authenticate($data);
            if (!$error) {
                $result = $this->antihoax_model->get_all($limit, $offset);
                $this->response($result, 200);
            } else {
                $this->response($error);
            }
        } else {
            $this->response('Access failed');
        }
    }


    // POST METHOD
    
    public function index_post()
    {
        $ip = $this->input->ip_address();
        if ($ip == "::1") {
            $ip = "127.0.0.1";
        }

        $key = $this->input->post('key');
        $limit = $this->input->post('limit');
        $offset = $this->input->post('offset');
        $id = $this->input->post('id');

        //die(var_dump(empty($id)));

        if(empty($key)){
            $this->response('Access failed', 200);
        }else if(empty($limit)){
            $limit = 10;
        }else if(empty($offset)){
            $offset = 0;
        }

        //die(var_dump($this->input->post()));

        $data=array("ip"=>$ip, "key"=>$key);
        $error = $this->authenticate($data);

        if (!$error) {
            if(empty($id) === true){ // return more record
                $result = $this->antihoax_model->get_all($limit, $offset);
                $this->response($result, 200);
            }else{ //detail 1 record
                $result = $this->antihoax_model->find_api($id);
                $this->response($result, 200);
            }
        }else{
            $this->response($error);
        }
    }


    public function search_post()
    {
        $ip = $this->input->ip_address();
        if ($ip == "::1") {
            $ip = "127.0.0.1";
        }

        $key = $this->input->post('key');
        $method = $this->input->post('method');
        $value = $this->input->post('value');
        $total = $this->input->post('total');
        $limit = $this->input->post('limit');
        $offset = $this->input->post('offset');

        if(empty($total)){
            $total = 10;
        }

        $allow_method = array('author', 'title', 'source_link', 'content', 'tags', 'status');
        if(empty($key)){
            $this->response('Access failed', 200);
        }else if(!in_array($method, $allow_method)){
            $this->response('Access failed', 200);
        }else if(empty($value)){
            $this->response('Access failed', 200);
        }

        //die(var_dump($this->input->post()));

        $data=array("ip"=>$ip, "key"=>$key);
        $error = $this->authenticate($data);

        if(!$error){

            if($method == 'author'){
                $result = $this->antihoax_model->get_data_link($value);
            }else if($method == 'title'){
                $result = $this->antihoax_model->get_data_where($total, $method, $value, $limit, $offset);
            }else if($method == 'source_link'){
                $result = $this->antihoax_model->get_data_where($total, $method, $value, $limit, $offset);
            }else if($method == 'content'){
                $result = $this->antihoax_model->get_data_where($total, $method, $value, $limit, $offset);
            }else if($method == 'tags'){
                $result = $this->antihoax_model->get_data_where($total, $method, $value, $limit, $offset);
            }else if($method == 'status'){
                $result = $this->antihoax_model->get_data_where($total, $method, $value, $limit, $offset);
            }else{
                $this->response('Access failed', 200);
            }

            $this->response($result, 200);
        }else{
            $this->response($error);
        }
    }

    public function get_total_post()
    {
        $ip = $this->input->ip_address();
        if ($ip == "::1") {
            $ip = "127.0.0.1";
        }

        $key = $this->input->post('key');
     
        if(empty($key)){
            $this->response('Access failed', 200);
        }

        $data=array("ip"=>$ip, "key"=>$key);
        $error = $this->authenticate($data);

        if(!$error){
            $result = $this->antihoax_model->count_all();
            $this->response($result, 200);
        } else {
            $this->response($error);
        }
    }

    public function get_authors_post()
    {
        $ip = $this->input->ip_address();
        if ($ip == "::1") {
            $ip = "127.0.0.1";
        }

        $key = $this->input->post('key');
     
        if(empty($key)){
            $this->response('Access failed', 200);
        }

        $data=array("ip"=>$ip, "key"=>$key);
        $error = $this->authenticate($data);

        if(!$error){
            $result = $this->antihoax_model->get_authors();
            $this->response($result, 200);
        } else {
            $this->response($error);
        }
    }

    public function get_authorlink_post()
    {
        $ip = $this->input->ip_address();
        if ($ip == "::1") {
            $ip = "127.0.0.1";
        }

        $key = $this->input->post('key');
        $id = $this->input->post('id');
     
        if(empty($key)){
            $this->response('Access failed', 200);
        }else if(empty($id)){
            $this->response('Access failed', 200);
        }

        $data=array("ip"=>$ip, "key"=>$key);
        $error = $this->authenticate($data);

        if(!$error){
            $result = $this->antihoax_model->get_author_link($id);
            $this->response($result, 200);
        } else {
            $this->response($error);
        }
    }


    public function get_author_post()
    {
        $ip = $this->input->ip_address();
        if ($ip == "::1") {
            $ip = "127.0.0.1";
        }

        $key = $this->input->post('key');
        $id = $this->input->post('id');
     
        if(empty($key)){
            $this->response('Access failed', 200);
        }else if(empty($id)){
            $this->response('Access failed', 200);
        }

        $data=array("ip"=>$ip, "key"=>$key);
        $error = $this->authenticate($data);

        if(!$error){
            $result = $this->antihoax_model->get_author($id);
            $this->response($result, 200);
        } else {
            $this->response($error);
        }
    }

    public function random_post()
    {
        $ip = $this->input->ip_address();
        if ($ip == "::1") {
            $ip = "127.0.0.1";
        }

        $key = $this->input->post('key');
     
        if(empty($key)){
            $this->response('Access failed', 200);
        }

        $data=array("ip"=>$ip, "key"=>$key);
        $error = $this->authenticate($data);

        if(!$error){
            $result = $this->antihoax_model->get_all(10, 0, true);
            $this->response($result, 200);
        } else {
            $this->response($error);
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
