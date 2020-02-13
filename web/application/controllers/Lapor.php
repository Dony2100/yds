<?php

if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class Lapor extends CI_Controller
{
    public $view_dir;
    public $class;
    public $status_laporan; //dropdown status laporan
    public $prioritas_laporan; //dropdown prioritas laporan
    public $upload_path;
    public $lapor_path;

    public function __construct()
    {
        parent::__construct();

        $this->status_laporan = array(
            '1' => 'Open',
            '2' => 'In Progress',
            '3' => 'Done',
        );

        $this->prioritas_laporan = array(
            '1' => 'Normal',
            '2' => 'Medium',
            '3' => 'High',
        );
        $this->view_dir = "lapor/";
        $this->class = $this->router->fetch_class();


        $klasifikasi = array(
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
        $this->klasifikasi = $klasifikasi;

        $this->status_data = array("BARU", "BENAR", "SALAH", "BARU");
        $this->thumb_path = $this->upload_path . "thumbnail/";



        $this->upload_path = "uploads/";
        $this->lapor_path = $this->upload_path . "lapor/";

        $this->load->helper('form');
        $this->load->helper('url');

        $this->load->library('DX_Auth');

        $this->load->model('lapor_model');

        //pindah ke masing2 fungsi
        //$this->dx_auth->check_uri_permissions(TRUE,array("Editor","Author"));
        $this->session->set_flashdata('menu', array('main'=>"lapor",'sub'=>"laporan"));
    }

    /**
     * Contoh penggunaan bootstrap pada codeigniter::index()
     */
    public function index()
    {
        //$this->dx_auth->check_uri_permissions(TRUE,array("Editor","Author"));
        $last_update = $this->lapor_model->last_update();
        $data["last_update"] = $this->date_to_word($last_update)." at ".date_format(date_create($last_update), "H:i:s");
        $data['_view'] = $this->view_dir . (($this->dx_auth->get_user_id() == null) ? 'public' : 'index');
        $data['_editor'] = $this->dx_auth->get_role_name()=='Editor' ? true : false;
        $this->load->view('layouts/main', $data);
    }

    /**
     * ambil data laporan untuk user yg sedang login
     * @return [type] [description]
     */
    public function ajax_main_1711111320()
    {
        $this->dx_auth->check_uri_permissions(true, array("Editor","Author"));
        $this->load->model('lapor_model');

        $list = $this->lapor_model->get_datatables();
        $data = array();
        $no = isset($_POST['start']) ? $_POST['start'] : 1;
        $user_role = $this->dx_auth->get_role_name();

        foreach ($list as $r) {
            $detail = " <a href='lapor/detail/$r->id'>....</a>";

            $no++;
            $checkbox=array(
              'name' => 'ckbox['.$r->id.']',
              'value' => $r->id,
              'class' => "no class"
            );

            //hanya bisa dibuka jika administrator, atau user yang diassign
            $user_id = $this->dx_auth->get_user_id();
            $assignee = false;
            $find = $this->db->select()->where('author_id', $user_id)->where('lapor_id', $r->id)->from('lapor_assignment')->get();
            if ($find->num_rows() == 1) {
                $assignee = true;
            }

            if (! ($this->dx_auth->get_role_name()=='Admin' || $assignee)) {
                $edit = "<a class='fa fa-pencil-square-o' data-toggle='tooltip' data-placement='left' title='No permission'> Edit</a>&nbsp;";
            } else {
                $edit = '<a href="'.site_url('lapor/edit/'.$r->id).'" data-toggle="tooltip" data-placement="left" title="Edit"><i class="fa fa-pencil-square-o"></i> Edit</a>';
            }


            //$edit = "<a class='fa fa-pencil-square-o' href='lapor_data/edit/$r->id' data-toggle='tooltip' data-placement='left' title='Edit row'><i>edit</i></a>&nbsp;";
            //$add_author = "<a class='fa fa-plus' href='$this->class/add_author/$r->id' data-toggle='tooltip' data-placement='left' title='Add Author'><i>Author</i></a>&nbsp;";
            $row = array();
            $row[] = $no;
            $row[] = form_checkbox($checkbox);
            $row[] = "<a href='".site_url($this->class."/detail/".$r->id)."'>".$r->judul."</a>";
            $row[] = $r->nama;
            $row[] = $r->email;
            $row[] = $r->status;
            $row[] = $r->assignee;
            $row[] = $r->prioritas;
            $row[] = $edit;
            $data[] = $row;
        }

        $draw = isset($_POST['draw']) ? $_POST['draw'] : 0;

        $output = array(
            "draw" => $draw,
            "recordsTotal" => $this->lapor_model->count_all(),
            "recordsFiltered" => $this->lapor_model->count_filtered(),
            "data" => $data,
        );
        //output to json format
        echo json_encode($output);
    }

    /**
     * mengambil data laporan publik / tidak login
     * @return json
     */
    public function get_laporan()
    {
        if (! $this->input->is_ajax_request()) {
            redirect('lapor');
        }
        $this->load->model('lapor_model');
        $list = $this->lapor_model->get_datatables();
        $data = array();
        $no = $_POST['start'];
        foreach ($list as $r) {
            $no++;
            $row = array();
            $row[] = $no;
            $row[] = "<a href='".site_url($this->class."/detail/".$r->id)."'>".$r->judul."</a>";
            $row[] = $r->nama;
            $row[] = $r->email;
            $row[] = $r->status;
            $row[] = $r->assignee;
            $row[] = $r->prioritas;
 
            $data[] = $row;
        }
 
        $output = array(
            "draw" => $_POST['draw'],
            "recordsTotal" => $this->lapor_model->count_all(),
            "recordsFiltered" => $this->lapor_model->count_filtered(),
            "data" => $data,
        );
        //output to json format
        echo json_encode($output);
    }


    public function add_public()
    {
        $this->session->set_flashdata('menu', array('main'=>"lapor",'sub'=>"inputlap"));
        $this->load->library('recaptcha');
        $uploadPath = './uploads/lapor/';
        $config['upload_path'] = $uploadPath;
        $config['detect_mime'] = true; // baik nya tetep true
        $config['allowed_types'] = 'gif|jpg|jpeg|png|jpe|bmp'; //entah kenapa ga jalan
        //$config['allowed_types'] = '*';

        $this->load->library('upload', $config);
        $status_upload = array();
        $error_upload = array();
        if ($this->input->server('REQUEST_METHOD') == 'POST') {
            $this->load->library('form_validation');
            $this->form_validation->set_rules('nama', 'Nama', 'alpha|trim|required');
            $this->form_validation->set_rules('email', 'Email', 'valid_emails|trim|required');
            $this->form_validation->set_rules('judul', 'Judul', 'alpha_numeric_spaces|trim|required');
            $this->form_validation->set_rules('teks_hoax', 'Teks Hoax', 'trim|required');
            $this->form_validation->set_rules('pesan', 'Pesan', 'trim|required');
            $this->form_validation->set_rules('prioritas', 'Prioritas', 'trim|required');
            $this->form_validation->set_rules('status', 'Status', 'trim|required');
            $this->form_validation->set_rules('g-recaptcha-response', 'Captcha', 'callback__recaptcha'); //method _recaptcha available in controller

            $this->form_validation->set_message('required', '{field} harus diisi.');

            if ($this->form_validation->run()) {
                if (!empty($_FILES['userFiles']['name'])) { //ini ga akan pernah empty karena di form ada
                    //die(var_dump($_FILES['userFiles']['name']));
                    $filesCount = count($_FILES['userFiles']['name']);
                    //die(var_dump($_FILES['userFiles']['name']));

                    for ($i = 0; $i < $filesCount; $i++) {
                        if ($_FILES['userFiles']['name'][$i] !== "") {
                            $_FILES['userFile']['name'] = $_FILES['userFiles']['name'][$i];
                            $_FILES['userFile']['type'] = $_FILES['userFiles']['type'][$i];
                            $_FILES['userFile']['tmp_name'] = $_FILES['userFiles']['tmp_name'][$i];
                            $_FILES['userFile']['error'] = $_FILES['userFiles']['error'][$i];
                            $_FILES['userFile']['size'] = $_FILES['userFiles']['size'][$i];


                            $this->upload->initialize($config);
                            if ($this->upload->do_upload('userFile')) {
                                $fileData = $this->upload->data();

                                $full_path   = $fileData['full_path']; // /path/to/file/image.jpg
                                $file_path   = $fileData['file_path']; // /path/to/file/
                                $file_ext    = $fileData['file_ext']; // .jpg
                                $file_name   = $fileData['file_name']; // image.jpg
                                $raw_name    = $fileData['raw_name']; //image

                                $renamed_file_name       = wordwrap(strtolower($raw_name), 1, '-', 0) . time();
                                $new_file_name      = $renamed_file_name . $file_ext;
                                $new_file_name_path = $file_path . $new_file_name;

                                //rename uploaded file
                                rename($full_path, $new_file_name_path);

                                $uploadData[$i]['file_name'] = $new_file_name;

                                $status_upload[$i] = true;
                                $error_upload[$i] = $this->upload->display_errors("", "");
                            } else {
                                $status_upload[$i] = false;
                                $error_upload[$i] = $this->upload->display_errors("", "");
                            }
                        }
                    }

                    $check = false;
                    if (empty($status_upload) || !(in_array(false, $status_upload))) {
                        $check = true;
                    }

                    if ($check) {
                        $data = array(
                            'nama' => $this->input->post('nama'),
                            'email' => $this->input->post('email'),
                            'judul' => $this->input->post('judul'),
                            'teks_hoax' => htmlspecialchars($this->input->post('teks_hoax')),
                            'pesan' => htmlspecialchars($this->input->post('pesan')),
                            'prioritas' => $this->input->post('prioritas'),
                            'status' => $this->input->post('status'),
                            'screenshot_1' => isset($uploadData[0]['file_name']) ? $uploadData[0]['file_name'] : null,
                            'screenshot_2' => isset($uploadData[1]['file_name']) ? $uploadData[1]['file_name'] : null,
                            //'screenshot_3' => isset($uploadData[2]['file_name']) ? $uploadData[2]['file_name'] : null,
                            //'screenshot_4' => isset($uploadData[3]['file_name']) ? $uploadData[3]['file_name'] : null,
                            'is_data_yudistira' => $this->input->post('is_data_yudistira'),
                            'status_record' => 1,
                            'created_at' => date('Y-m-d H:i:s'),
                            'created_by' => $this->dx_auth->get_user_id(),
                            'updated_at' => date('Y-m-d H:i:s'),
                            'updated_by' => $this->dx_auth->get_user_id(),
                        );

                        if ($this->db->insert('lapor', $data)) {
                            $this->session->set_flashdata('alert', array('state'=>'success','message'=>"Terima kasih atas Laporan yang Anda berikan. Kami akan memproses laporan ini lebih lanjut"));
                            redirect('lapor/add_public');
                        } else {
                            $this->session->set_flashdata('alert', array('state'=>'danger','message'=>"Laporan gagal disubmit."));
                        }
                    }
                }
            }
        }

        $data["status_laporan"] = $this->status_laporan;
        $data["prioritas_laporan"] = $this->prioritas_laporan;
        $data['_view'] = $this->view_dir . 'add_public';
        $data['recaptcha_widget'] = $this->recaptcha->getWidget();
        $data['recaptcha_script'] = $this->recaptcha->getScriptTag();
        $data['status_upload'] = $status_upload;
        $data['error_upload'] = $error_upload;

        $this->load->view('layouts/main', $data);
    }

    public function _recaptcha($row)
    {
        $recaptcha = $this->input->post('g-recaptcha-response');
        if (!empty($recaptcha)) {
            $response = $this->recaptcha->verifyResponse($recaptcha);
            if (isset($response['success']) and $response['success'] === true) {
                return true;
            }
        }

        $this->form_validation->set_message('_recaptcha', 'Buktikan bahwa Anda bukanlah robot.');
        return false;
    }

    public function add()
    {
        $this->dx_auth->check_uri_permissions(true, array("Editor","Author"));

        $this->load->library('recaptcha');
        $uploadPath = './uploads/lapor/';
        $config['upload_path'] = $uploadPath;
        $config['detect_mime'] = true; // baik nya tetep true
        $config['allowed_types'] = 'gif|jpg|jpeg|png|jpe|bmp'; //entah kenapa ga jalan
        //$config['allowed_types'] = '*';

        $this->load->library('upload', $config);
        $status_upload = array();
        $error_upload = array();
        if ($this->input->server('REQUEST_METHOD') == 'POST') {
            $this->load->library('form_validation');
            $this->form_validation->set_rules('nama', 'Nama', 'trim|required');
            $this->form_validation->set_rules('email', 'Email', 'trim|required');
            $this->form_validation->set_rules('judul', 'Judul', 'trim|required');
            $this->form_validation->set_rules('teks_hoax', 'Teks Hoax', 'trim|required');
            $this->form_validation->set_rules('pesan', 'Pesan', 'trim|required');
            $this->form_validation->set_rules('prioritas', 'Prioritas', 'trim|required');
            $this->form_validation->set_rules('status', 'Status', 'trim|required');

            $this->form_validation->set_message('required', '{field} harus diisi.');

            if ($this->form_validation->run()) {
                if (!empty($_FILES['userFiles']['name'])) { //ini ga akan pernah empty karena di form ada
                    //die(var_dump($_FILES['userFiles']['name']));
                    $filesCount = count($_FILES['userFiles']['name']);
                    //die(var_dump($_FILES['userFiles']['name']));
                    $status_upload = array();
                    for ($i = 0; $i < $filesCount; $i++) {
                        if ($_FILES['userFiles']['name'][$i] !== "") {
                            $_FILES['userFile']['name'] = $_FILES['userFiles']['name'][$i];
                            $_FILES['userFile']['type'] = $_FILES['userFiles']['type'][$i];
                            $_FILES['userFile']['tmp_name'] = $_FILES['userFiles']['tmp_name'][$i];
                            $_FILES['userFile']['error'] = $_FILES['userFiles']['error'][$i];
                            $_FILES['userFile']['size'] = $_FILES['userFiles']['size'][$i];


                            $this->upload->initialize($config);
                            if ($this->upload->do_upload('userFile')) {
                                $fileData = $this->upload->data();

                                $full_path   = $fileData['full_path']; // /path/to/file/image.jpg
                                $file_path   = $fileData['file_path']; // /path/to/file/
                                $file_ext    = $fileData['file_ext']; // .jpg
                                $file_name   = $fileData['file_name']; // image.jpg
                                $raw_name    = $fileData['raw_name']; //image

                                $renamed_file_name       = wordwrap(strtolower($raw_name), 1, '-', 0) . time();
                                $new_file_name      = $renamed_file_name . $file_ext;
                                $new_file_name_path = $file_path . $new_file_name;

                                //rename uploaded file
                                rename($full_path, $new_file_name_path);

                                $uploadData[$i]['file_name'] = $new_file_name;

                                $status_upload[$i] = true;
                                $error_upload[$i] = $this->upload->display_errors("", "");
                            } else {
                                $status_upload[$i] = false;
                                $error_upload[$i] = $this->upload->display_errors("", "");
                            }
                        }
                    }

                    $check = false;
                    if (empty($status_upload) || !(in_array(false, $status_upload))) {
                        $check = true;
                    }

                    if ($check) {
                        $data = array(
                            'nama' => $this->input->post('nama'),
                            'email' => $this->input->post('email'),
                            'judul' => $this->input->post('judul'),
                            'teks_hoax' => $this->input->post('teks_hoax'),
                            'pesan' => $this->input->post('pesan'),
                            'prioritas' => $this->input->post('prioritas'),
                            'status' => $this->input->post('status'),
                            'screenshot_1' => isset($uploadData[0]['file_name']) ? $uploadData[0]['file_name'] : null,
                            'screenshot_2' => isset($uploadData[1]['file_name']) ? $uploadData[1]['file_name'] : null,
                            //'screenshot_3' => isset($uploadData[2]['file_name']) ? $uploadData[2]['file_name'] : null,
                            //'screenshot_4' => isset($uploadData[3]['file_name']) ? $uploadData[3]['file_name'] : null,
                            'is_data_yudistira' => $this->input->post('is_data_yudistira'),
                            'status_record' => 1,
                            'created_at' => date('Y-m-d H:i:s'),
                            'created_by' => $this->dx_auth->get_user_id(),
                            'updated_at' => date('Y-m-d H:i:s'),
                            'updated_by' => $this->dx_auth->get_user_id(),
                        );

                        if ($this->db->insert('lapor', $data)) {
                            $this->session->set_flashdata('alert', array('state'=>'success','message'=>"Terima kasih atas Laporan yang Anda berikan. Kami akan memproses laporan ini lebih lanjut"));
                            redirect('lapor/index');
                        } else {
                            $this->session->set_flashdata('alert', array('state'=>'danger','message'=>"Laporan gagal disubmit."));
                        }
                    }
                }
            }
        }

        $data["status_laporan"] = $this->status_laporan;
        $data["prioritas_laporan"] = $this->prioritas_laporan;
        $data['_view'] = $this->view_dir . 'add';
        $data['status_upload'] = $status_upload;
        $data['error_upload'] = $error_upload;

        $this->load->view('layouts/main', $data);
    }

    /**
     * untuk mengassign author pada laporan
     * @param  int $id id laporan
     * @return redirect
     */
    public function _assign_author()
    {
        $this->dx_auth->check_uri_permissions(true, array("Editor","Author"));

        if ($this->dx_auth->get_role_name() !== 'Admin') {
            show_error('Anda tidak memiliki akses ke halaman ini.');
        }

        if ($this->input->server('REQUEST_METHOD') == 'POST') {
            $this->load->library('form_validation');
            $this->form_validation->set_rules('lapor_id', 'Laporan', 'trim|required');
            $this->form_validation->set_rules('author_id', 'Author', 'trim|required');

            $this->form_validation->set_message('required', '{field} harus dipilih.');

            if ($this->form_validation->run()) {
                //jika sudah ada di tabel lapor_assignment -> update
                $find = $this->db->select()->where('lapor_id', $this->input->post('lapor_id'))->where('author_id', $this->input->post('author_id'))->from('lapor_assignment')->get();
                if ($find->num_rows() >= 1) {
                    //update
                    $data = [
                        'lapor_id' => $this->input->post('lapor_id'),
                        'author_id' => $this->input->post('author_id'),
                        'updated_at' => date('Y-m-d H:i:s')
                    ];
                    $this->db->where('id', $find->id);
                    $this->db->update('lapor_assignment', $data);
                } else {
                    //insert
                    $data = [
                        'lapor_id' => $this->input->post('lapor_id'),
                        'author_id' => $this->input->post('author_id'),
                        'updated_at' => date('Y-m-d H:i:s')
                    ];
                    $this->db->insert('lapor_assignment', $data);
                }

                redirect('lapor/detail/'.$this->input->post('lapor_id'));
            }
        }
    }

    /**
     * untuk menambahkan notes pada laporan
     * @param  int $id id laporan
     * @return redirect
     */
    public function _add_notes()
    {
        $this->dx_auth->check_uri_permissions(true, array("Editor","Author"));

        if ($this->input->server('REQUEST_METHOD') == 'POST') {
            $this->load->library('form_validation');
            $this->form_validation->set_rules('lapor_id', 'Laporan', 'trim|required');
            $this->form_validation->set_rules('notes', 'Notes', 'trim|required');

            $this->form_validation->set_message('required', '{field} harus diisi.');

            if ($this->form_validation->run()) {

                //hanya admin atau user yang diasssign
                $this->check_privilege($this->input->post('lapor_id'));

                //insert
                $data = [
                    'lapor_id' => $this->input->post('lapor_id'),
                    'notes' => $this->input->post('notes'),
                    'created_at' => date('Y-m-d H:i:s'),
                    'created_by' => $this->dx_auth->get_user_id()
                ];
                $this->db->insert('lapor_notes', $data);

                redirect('lapor/detail/'.$this->input->post('lapor_id'));
            }
        }
    }

    /*
     * Editing a antihoax
     */
    public function edit($id)
    {
        $this->dx_auth->check_uri_permissions(true, array("Editor","Author"));

        //hanya bisa dibuka jika administrator, atau user yang diassign
        $this->check_privilege($id);

        $this->load->model('lapor_model');
        $lapor = $this->lapor_model->find($id);

        $this->load->library('recaptcha');
        $uploadPath = './uploads/lapor/';
        $config['upload_path'] = $uploadPath;
        $config['detect_mime'] = true; // baik nya tetep true
        $config['allowed_types'] = 'gif|jpg|jpeg|png|jpe|bmp'; //entah kenapa ga jalan
        //$config['allowed_types'] = '*';

        $this->load->library('upload', $config);
        $status_upload = array();
        $error_upload = array();
        if ($this->input->server('REQUEST_METHOD') == 'POST') {
            $this->load->library('form_validation');
            $this->form_validation->set_rules('id', 'ID', 'trim|required');
            $this->form_validation->set_rules('nama', 'Nama', 'trim|required');
            $this->form_validation->set_rules('email', 'Email', 'trim|required');
            $this->form_validation->set_rules('judul', 'Judul', 'trim|required');
            $this->form_validation->set_rules('teks_hoax', 'Teks Hoax', 'trim|required');
            $this->form_validation->set_rules('pesan', 'Pesan', 'trim|required');
            $this->form_validation->set_rules('prioritas', 'Prioritas', 'trim|required');
            $this->form_validation->set_rules('status', 'Status', 'trim|required');

            $this->form_validation->set_message('required', '{field} harus diisi.');

            if ($this->form_validation->run()) {
                if (!empty($_FILES['userFiles']['name'])) { //ini ga akan pernah empty karena di form ada
                    //die(var_dump($_FILES['userFiles']['name']));
                    $filesCount = count($_FILES['userFiles']['name']);
                    //die(var_dump($_FILES['userFiles']['name']));
                    $status_upload = array();
                    for ($i = 0; $i < $filesCount; $i++) {
                        if ($_FILES['userFiles']['name'][$i] !== "") {
                            $_FILES['userFile']['name'] = $_FILES['userFiles']['name'][$i];
                            $_FILES['userFile']['type'] = $_FILES['userFiles']['type'][$i];
                            $_FILES['userFile']['tmp_name'] = $_FILES['userFiles']['tmp_name'][$i];
                            $_FILES['userFile']['error'] = $_FILES['userFiles']['error'][$i];
                            $_FILES['userFile']['size'] = $_FILES['userFiles']['size'][$i];

                            $this->upload->initialize($config);
                            if ($this->upload->do_upload('userFile')) {
                                $fileData = $this->upload->data();

                                $full_path   = $fileData['full_path']; // /path/to/file/image.jpg
                                $file_path   = $fileData['file_path']; // /path/to/file/
                                $file_ext    = $fileData['file_ext']; // .jpg
                                $file_name   = $fileData['file_name']; // image.jpg
                                $raw_name    = $fileData['raw_name']; //image

                                $renamed_file_name       = wordwrap(strtolower($raw_name), 1, '-', 0) . time();
                                $new_file_name      = $renamed_file_name . $file_ext;
                                $new_file_name_path = $file_path . $new_file_name;

                                //rename uploaded file
                                rename($full_path, $new_file_name_path);

                                $uploadData[$i]['file_name'] = $new_file_name;

                                $status_upload[$i] = true;
                                $error_upload[$i] = $this->upload->display_errors("", "");
                            } else {
                                $status_upload[$i] = false;
                                $error_upload[$i] = $this->upload->display_errors("", "");
                            }
                        }
                    }

                    $check = false;
                    if (empty($status_upload) || !(in_array(false, $status_upload))) {
                        $check = true;
                    }

                    if ($check) {
                        $data = array(
                            'id' => $this->input->post('id'),
                            'nama' => $this->input->post('nama'),
                            'email' => $this->input->post('email'),
                            'judul' => $this->input->post('judul'),
                            'teks_hoax' => $this->input->post('teks_hoax'),
                            'pesan' => $this->input->post('pesan'),
                            'prioritas' => $this->input->post('prioritas'),
                            'status' => $this->input->post('status'),
                            'is_data_yudistira' => $this->input->post('is_data_yudistira'),
                            'status_record' => 1,
                            'created_at' => date('Y-m-d H:i:s'),
                            'created_by' => $this->dx_auth->get_user_id(),
                            'updated_at' => date('Y-m-d H:i:s'),
                            'updated_by' => $this->dx_auth->get_user_id(),
                        );

                        if (isset($uploadData[0]['file_name'])) {
                            $data['screenshot_1'] = $uploadData[0]['file_name'];
                            if (is_file(FCPATH.'uploads/lapor/'.$lapor->screenshot_1)) {
                                unlink(FCPATH.'uploads/lapor/'.$lapor->screenshot_1);
                            }
                        }

                        if (isset($uploadData[1]['file_name'])) {
                            $data['screenshot_2'] = $uploadData[1]['file_name'];
                            if (is_file(FCPATH.'uploads/lapor/'.$lapor->screenshot_2)) {
                                unlink(FCPATH.'uploads/lapor/'.$lapor->screenshot_2);
                            }
                        }

                        if (isset($uploadData[2]['file_name'])) {
                            $data['screenshot_3'] = $uploadData[2]['file_name'];
                            if (is_file(FCPATH.'uploads/lapor/'.$lapor->screenshot_3)) {
                                unlink(FCPATH.'uploads/lapor/'.$lapor->screenshot_3);
                            }
                        }

                        if (isset($uploadData[3]['file_name'])) {
                            $data['screenshot_4'] = $uploadData[3]['file_name'];
                            if (is_file(FCPATH.'uploads/lapor/'.$lapor->screenshot_4)) {
                                unlink(FCPATH.'uploads/lapor/'.$lapor->screenshot_4);
                            }
                        }

                        $this->db->where('id', $this->input->post('id'));
                        if ($this->db->update('lapor', $data)) {
                            //$this->session->set_flashdata('success', 'Kategori '. $this->input->post('judul') .' berhasil dibuat');
                            redirect('lapor/detail/'.$this->input->post('id'));
                        } else {
                            //$this->session->set_flashdata('error', 'Kategori '. $this->input->post('judul') .' gagal dibuat');
                        }
                    }
                }
            }
        }



        $data['lapor'] = $lapor;
        $data["status_laporan"] = $this->status_laporan;
        $data["prioritas_laporan"] = $this->prioritas_laporan;
        $data['_view'] = $this->view_dir . 'edit';
        $data['status_upload'] = $status_upload;
        $data['error_upload'] = $error_upload;

        $this->load->view('layouts/main', $data);
    }

    public function close($id)
    {
        $this->dx_auth->check_uri_permissions(true, array("Editor","Author"));

        //hanya bisa dibuka jika administrator, atau user yang diassign
        $this->check_privilege($id);

        if ($this->input->server('REQUEST_METHOD') == 'POST') {
            $this->load->library('form_validation');
            $this->form_validation->set_rules('author', 'Author', 'trim|required');
            $this->form_validation->set_rules('status', 'Status', 'trim|required');
            $this->form_validation->set_rules('klasifikasi', 'Klasifikasi', 'trim|required');
            $this->form_validation->set_rules('kesimpulan', 'Kesimpulan', 'trim|required');
            $this->form_validation->set_rules('isi', 'Isi', 'trim|required');
            $this->form_validation->set_rules('fakta', 'Fakta', 'trim|required');
            $this->form_validation->set_rules('rujukan', 'Rujukan', 'trim|required');
            $this->form_validation->set_rules('sumber', 'Sumber', 'trim|required');

            $this->form_validation->set_message('required', '{field} harus diisi.');

            if ($this->form_validation->run()) {
                $params = array(
                    'user_id' => $this->dx_auth->get_user_id(),
                    'authors' => $this->input->post('author'),
                    'status' => $this->input->post('status'),
                    'klasifikasi' => $this->input->post('klasifikasi'),
                    'kesimpulan' => $this->input->post('kesimpulan'),
                    'isi' => $this->input->post('isi'),
                    'fakta' => $this->input->post('fakta'),
                    'rujukan' => $this->input->post('rujukan'),
                    'sumber' => $this->input->post('sumber'),
                    'tanggal' => $this->input->post('tanggal'),
                    'tags' => $this->input->post('tags'),
                    'updated_at' => date('Y-m-d H:i:s'),
                    'updated_id' => $this->dx_auth->get_user_id(),
                    'created_at' => date('Y-m-d H:i:s')
                );


                $params['gambar1'] = base_url().$this->lapor_path.$this->input->post('gambar1');

                $params['gambar2'] = base_url().$this->lapor_path.$this->input->post('gambar2');

                $this->load->model('Maindata_model', 'main');
                $antihoax_id = $this->main->add_antihoax($params);

                //update status di tabel laporan
                $this->db->where('id', $id);
                $data = array(
                    'status' => 3,
                    'is_data_yudistira' => 1,
                    'updated_at' => date('Y-m-d H:i:s'),
                    'updated_by' => $this->dx_auth->get_user_id(),
                );
                if ($this->db->update('lapor', $data));

                $this->session->set_flashdata('alert', array('state'=>'success','message'=>'Laporan berhasil dipindahkan ke data Yudistira'));                  
                redirect('lapor/detail/'.$id);
            }
        }


        $this->load->model('lapor_model');
        $lapor = $this->lapor_model->find($id);

        $this->load->model('Author_model', 'author');
        $all_author = $this->author->get_all_filtered("nama", "ASC", "id, nama");
        foreach ($all_author as $val) {
            $authors[$val["id"]]=$val["nama"];
        }

        $data['authors'] = $authors;
        $data["klasifikasi"] = $this->klasifikasi;

        $data['lapor'] = $lapor;
        $data['_view'] = $this->view_dir . 'close';
        $this->load->view('layouts/main', $data);
    }

    public function delete()
    {
        $this->dx_auth->check_uri_permissions(true, array("Editor","Author"));
        $data=$this->input->post('ckbox');
        if (is_array($data)) {
            $result=$this->lapor_model->delete(array_keys($data));
        }
        redirect($this->class);
    }

    public function delete_assignment()
    {
        $this->dx_auth->check_uri_permissions(true, array("Editor","Author"));
        if ($this->input->server('REQUEST_METHOD') == 'POST') {
            $this->check_privilege($this->input->post('id_lapor'));

            $this->db->where('id', $this->input->post('id_lapor_assignment'));
            if ($this->db->delete('lapor_assignment')) {
                echo json_encode([
                    'status' => 'success',
                    'redirect' => site_url('lapor/detail/'.$this->input->post('id_lapor')),
                ]);
            } else {
                echo json_encode([
                    'status' => 'error',
                    'redirect' => site_url('lapor/detail/'.$this->input->post('id_lapor')),
                ]);
            }
        } else {
            redirect('lapor/index', 'refresh');
        }
    }

    public function detail($id)
    {
        if ($this->input->post('assign_author')) {
            $this->dx_auth->check_uri_permissions(true, array("Editor","Author"));
            $this->_assign_author();
        }

        if ($this->input->post('add_notes')) {
            $this->dx_auth->check_uri_permissions(true, array("Editor","Author"));
            $this->_add_notes();
        }

        $this->load->model('lapor_model');
        $lapor = $this->lapor_model->find($id);

        $data['lapor'] = $lapor;
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
    public function trim_text($input, $length, $strip_html = true)
    {
        if ($strip_html) {
            $input = strip_tags($input);
        }
        return (strlen($input) < $length) ? $input : substr($input, 0, strrpos(substr($input, 0, $length), ' '));
    }

    public function date_to_word($date)
    {
        $date_exp = explode(" ", $date);
        $today = date("Y-m-d");

        if ($date_exp[0] == $today) {
            $result="today";
        } elseif ($date_exp[0] == date('Y-m-d', strtotime("yesterday"))) {
            $result="yesterday";
        } elseif ($date_exp[0] > date('Y-m-d', strtotime("last month"))) {
            $result=$this->DateDiff($date)." days ago";
        } else {
            $result = date_format(date_create($date), "j M Y");
        }

        return $result;
    }

    public function DateDiff($start, $end=null, $type=null)
    {
        $date1=  new DateTime($start);
        $date2= $end ? new DateTime($end) : new DateTime();

        switch ($type) {
            default:
                $result=$date1->diff($date2)->format("%d");
        }

        return $result;
    }

    public function check_privilege($id)
    {
        $this->dx_auth->check_uri_permissions(true, array("Editor","Author"));
        //hanya bisa dibuka jika administrator, atau user yang diassign
        $user_id = $this->dx_auth->get_user_id();
        $assignee = false;
        $find = $this->db->select()->where('author_id', $user_id)->where('lapor_id', $id)->from('lapor_assignment')->get();
        if ($find->num_rows() == 1) {
            $assignee = true;
        }

        if (! ($this->dx_auth->get_role_name()=='Admin' || $assignee)) {
            show_error('Laporan you are trying to edit does not exist.');
        }
    }
}
