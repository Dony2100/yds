<?php

defined('BASEPATH') or exit('No direct script access allowed');

require APPPATH . 'libraries/REST_Controller.php';

/**

 * API Report
 * GET api/report/get_total/[key]
 * GET api/report/[key] eg: http://localhost/yudistira/api/report/1234567890123456
 * GET api/report/10/offset/0/[key] -> 10 pertama eg:http://localhost/yudistira/api/report/10/offset/0/1234567890123456
 * GET api/report/10/offset/10[key] -> 11 sampai 20 sda
 * GET api/report/1/[key] -> where id = 1 eg: http://localhost/yudistira/api/report/1/1234567890123456
 * GET api/report/status/{open/in-progress/done}/num/offset/0
 * GET api/report/priority/{normal/medium/high}/num/offset/10
 *
 * POST api/report
 * PUT api/report/1 -> where id=1
 * DELETE api/report/1 -> where id=1
 */

class Report extends REST_Controller
{
    public function __construct($config = 'rest')
    {
        parent::__construct($config);
        $this->load->database();
        $this->load->library('DX_Auth');
        $this->load->model('lapor_model');
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
            $result = $this->lapor_model->count_all();
            $this->response($result, 200);
        } else {

            $this->response($error);
        }

    }

    public function index_get()
    {
        //die(var_dump($this->uri->total_segments()));
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
                $result = $this->lapor_model->get_all();
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
                $result = $this->lapor_model->find_api($id);
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
                $result = $this->lapor_model->get_all($limit, $offset);
                $this->response($result, 200);
            } else {

                $this->response($error);
            }

        } else {

            $this->response('Access failed');
        }

    }

    public function index_post()
    {
        //die(var_dump($this->input->post()));
        //die(var_dump($this->uri->total_segments()));
        $ip = $this->input->ip_address();

        if ($ip == "::1") {
            $ip = "127.0.0.1";
        }

        $segment = $this->uri->total_segments();
        if ($segment === 3) { //insert

            $key = $this->uri->segment(3);
            $data=array("ip"=>$ip, "key"=>$key);
            $error = $this->authenticate($data);
            if (!$error) {

                $result = $this->_insert();
                $this->response($result, 200);
            } else {

                $this->response($error);
            }

        } elseif ($segment === 4) { //update

            $id = filter_var($this->uri->segment(3), FILTER_SANITIZE_NUMBER_INT);
            $key = $this->uri->segment(4);
            $data=array("ip"=>$ip, "key"=>$key);
            $error = $this->authenticate($data);
            if (!$error) {

                $find = $this->db->select()->where('id', $id)->where('status_record', 1)->from('lapor')->get();
                if ($find->num_rows() == 1) {

                    $result = $this->_update($id);
                    $this->response($result, 200);
                } else {
                    $this->response('Report not found.');
                }

            } else {
                $this->response($error);
            }

        } else {
            $this->response('Access failed');
        }

    }

    public function _insert()
    {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('nama', 'Nama', 'trim|required');
        $this->form_validation->set_rules('email', 'Email', 'trim|required');
        $this->form_validation->set_rules('judul', 'Judul', 'trim|required');
        $this->form_validation->set_rules('teks_hoax', 'Teks Hoax', 'trim|required');
        $this->form_validation->set_rules('pesan', 'Pesan', 'trim|required');
        $this->form_validation->set_rules('prioritas', 'Prioritas', 'trim|required|in_list[Normal,Medium,High]');
        $this->form_validation->set_rules('status', 'Status', 'trim|required|in_list[Open,In Progress,Done]');


        //$this->form_validation->set_message('required', '{field} harus diisi.');
        // $url = 'http://fc04.deviantart.net/fs71/f/2010/227/4/6/PNG_Test_by_Destron23.png';
        // $mime = mime_content_type($url);
        // die(var_dump($mime));
        // $img = '/my/folder/flower.gif';
        // file_put_contents($img, file_get_contents($url));

        if ($this->form_validation->run()) {

            $data = array(
                'nama' => $this->input->post('nama'),
                'email' => $this->input->post('email'),
                'judul' => $this->input->post('judul'),
                'teks_hoax' => $this->input->post('teks_hoax'),
                'pesan' => $this->input->post('pesan'),
                'prioritas' => $this->lapor_model->get_prioritas_id($this->input->post('prioritas')),
                'status' => $this->lapor_model->get_status_id($this->input->post('status')),
                'status_record' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                //'updated_by' => $this->dx_auth->get_user_id(),
            );


            $this->load->helper('string');
            if ($this->input->post('screenshot_1')) {

                $url = $this->input->post('screenshot_1');
                $image = $this->_validImage($url);

                if ($image) {
                    $data['screenshot_1'] = random_string('alnum', 16).'.'.$image;
                    $img = FCPATH.'uploads/lapor/'.$data['screenshot_1'];
                    file_put_contents($img, file_get_contents($url));
                }
            }

            if ($this->input->post('screenshot_2')) {

                $url = $this->input->post('screenshot_2');
                $image = $this->_validImage($url);

                if ($image) {
                    $data['screenshot_2'] = random_string('alnum', 16).'.'.$image;
                    $img = FCPATH.'uploads/lapor/'.$data['screenshot_2'];
                    file_put_contents($img, file_get_contents($url));
                }

            }

            if ($this->db->insert('lapor', $data)) {
                return 'Report saved successfully';
            } else {
                return 'Error when saving report';
            }

        } else {
            return validation_errors('<span>', '</span>');
        }

    }



    public function _update($id)
    {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('nama', 'Nama', 'trim|required');
        $this->form_validation->set_rules('email', 'Email', 'trim|required');
        $this->form_validation->set_rules('judul', 'Judul', 'trim|required');
        $this->form_validation->set_rules('teks_hoax', 'Teks Hoax', 'trim|required');
        $this->form_validation->set_rules('pesan', 'Pesan', 'trim|required');
        $this->form_validation->set_rules('prioritas', 'Prioritas', 'trim|required|in_list[Normal,Medium,High]');
        $this->form_validation->set_rules('status', 'Status', 'trim|required|in_list[Open,In Progress,Done]');

        //$this->form_validation->set_message('required', '{field} harus diisi.');

        if ($this->form_validation->run()) {

            $data = array(
                'nama' => $this->input->post('nama'),
                'email' => $this->input->post('email'),
                'judul' => $this->input->post('judul'),
                'teks_hoax' => $this->input->post('teks_hoax'),
                'pesan' => $this->input->post('pesan'),
                'prioritas' => $this->lapor_model->get_prioritas_id($this->input->post('prioritas')),
                'status' => $this->lapor_model->get_status_id($this->input->post('status')),
                'status_record' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            );


            $this->load->helper('string');
            if ($this->input->post('screenshot_1')) {

                $url = $this->input->post('screenshot_1');
                $image = $this->_validImage($url);

                if ($image) {

                    $data['screenshot_1'] = random_string('alnum', 16).'.'.$image;
                    $img = FCPATH.'uploads/lapor/'.$data['screenshot_1'];
                    file_put_contents($img, file_get_contents($url));
                }

            }



            if ($this->input->post('screenshot_2')) {

                $url = $this->input->post('screenshot_2');
                $image = $this->_validImage($url);

                if ($image) {

                    $data['screenshot_2'] = random_string('alnum', 16).'.'.$image;
                    $img = FCPATH.'uploads/lapor/'.$data['screenshot_2'];
                    file_put_contents($img, file_get_contents($url));
                }

            }

            $this->db->where('id', $id);
            if ($this->db->update('lapor', $data)) {
                return 'Report updated successfully';
            } else {
                return 'Error when saving report';
            }

        } else {
            return validation_errors('<span>', '</span>');
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

    public function _validImage($file)
    {
        $size = getimagesize($file);
        if (strtolower(substr($size['mime'], 0, 5)) == 'image') {
            $extension = explode('/', $size['mime']);
            return $extension[1];
        }

        return false;

    }

}

