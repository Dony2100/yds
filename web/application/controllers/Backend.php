<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Backend extends CI_Controller {

	var $min_username = 8;
	var $max_username = 20;
	var $min_password = 8;
	var $max_password = 20;
        var $view_dir = "backend/";
        var $class;

	function __construct()
	{
		parent::__construct();
                
                $this->load->helper(array('url','form'));
		
		$this->load->library(array('Table','DX_Auth'));	
                $this->load->library('Form_validation');
                	
		$this->load->model('users_model','backend');
                $this->load->model('region_model','region');
		$this->class = $this->router->fetch_class();
                
		// Protect entire controller so only admin, 
		// and users that have granted role in permissions table can access it.
		$this->dx_auth->check_uri_permissions();
                $this->session->set_flashdata('menu', array('main'=>"account",'sub'=>"user"));
	}
	
	function index()
	{
		$this->users();
	}
	
	function users()
	{
		$this->load->model('dx_auth/users', 'users');			
		
		// Search checkbox in post array
		foreach ($_POST as $key => $value)
		{
			// If checkbox found
			if (substr($key, 0, 9) == 'checkbox_')
			{
				// If ban button pressed
				if (isset($_POST['ban']))
				{
					// Ban user based on checkbox value (id)
					$this->users->ban_user($value);
				}
				// If unban button pressed
				else if (isset($_POST['unban']))
				{
					// Unban user
					$this->users->unban_user($value);
				}
				else if (isset($_POST['reset_pass']))
				{
					// Set default message
					$data['reset_message'] = 'Reset password failed';
				
					// Get user and check if User ID exist
					if ($query = $this->users->get_user_by_id($value) AND $query->num_rows() == 1)
					{		
						// Get user record				
						$user = $query->row();
						
						// Create new key, password and send email to user
						if ($this->dx_auth->forgot_password($user->username))
						{
							// Query once again, because the database is updated after calling forgot_password.
							$query = $this->users->get_user_by_id($value);
							// Get user record
							$user = $query->row();
														
							// Reset the password
							if ($this->dx_auth->reset_password($user->username, $user->newpass_key))
							{							
								$data['reset_message'] = 'Reset password success';
							}
						}
					}
				}
			}				
		}
		
		/* Showing page to user */
		
		// Get offset and limit for page viewing
		//$offset = (int) $this->uri->segment(3);
		
		// Number of record showing per page
		//$row_count = 10;
		
		// Get all users
		//$data['users'] = $this->users->get_all($offset, $row_count)->result();
		
		// Pagination config
		$p_config['base_url'] = '/backend/users/';
		$p_config['uri_segment'] = 3;
		$p_config['num_links'] = 2;
		//$p_config['total_rows'] = $this->users->get_all()->num_rows();
		//$p_config['per_page'] = $row_count;
				
		// Init pagination
		//$this->pagination->initialize($p_config);		
		// Create pagination links
		//$data['pagination'] = $this->pagination->create_links();
		
		// Load view
		//$this->load->view($this->view_dir.'index', $data);
        $data['_view'] = $this->view_dir.'index';
        $this->load->view('layouts/main',$data);
	}
	
	function unactivated_users()
	{
		$this->load->model('dx_auth/user_temp', 'user_temp');
		
		/* Database related */
		
		// If activate button pressed
		if ($this->input->post('activate'))
		{
			// Search checkbox in post array
			foreach ($_POST as $key => $value)
			{
				// If checkbox found
				if (substr($key, 0, 9) == 'checkbox_')
				{
					// Check if user exist, $value is username
					if ($query = $this->user_temp->get_login($value) AND $query->num_rows() == 1)
					{
						// Activate user
						$this->dx_auth->activate($value, $query->row()->activation_key);
					}
				}				
			}
		}
		
		/* Showing page to user */
		
		// Get offset and limit for page viewing
		$offset = (int) $this->uri->segment(3);
		// Number of record showing per page
		$row_count = 10;
		
		// Get all unactivated users
		$data['users'] = $this->user_temp->get_all($offset, $row_count)->result();
		
		// Pagination config
		$p_config['base_url'] = '/backend/unactivated_users/';
		$p_config['uri_segment'] = 3;
		$p_config['num_links'] = 2;
		$p_config['total_rows'] = $this->user_temp->get_all()->num_rows();
		$p_config['per_page'] = $row_count;
				
		// Init pagination
		$this->pagination->initialize($p_config);		
		// Create pagination links
		$data['pagination'] = $this->pagination->create_links();
		
		// Load view
		$this->load->view('backend/unactivated_users', $data);
	}
	
	function roles()
	{		
		$this->load->model('dx_auth/roles', 'roles');
		
		/* Database related */
					
		// If Add role button pressed
		if ($this->input->post('add'))
		{
			// Create role
			$this->roles->create_role($this->input->post('role_name'), $this->input->post('role_parent'));
		}
		else if ($this->input->post('delete'))
		{				
			// Loop trough $_POST array and delete checked checkbox
			foreach ($_POST as $key => $value)
			{
				// If checkbox found
				if (substr($key, 0, 9) == 'checkbox_')
				{
					// Delete role
					$this->roles->delete_role($value);
				}				
			}
		}

		/* Showing page to user */
	
		// Get all roles from database
		$data['roles'] = $this->roles->get_all()->result();
		
		// Load view
		$this->load->view('backend/roles', $data);
	}
	
	function uri_permissions()
	{
		function trim_value(&$value) 
		{ 
			$value = trim($value); 
		}
	
		$this->load->model('dx_auth/roles', 'roles');
		$this->load->model('dx_auth/permissions', 'permissions');
		
		if ($this->input->post('save'))
		{
			// Convert back text area into array to be stored in permission data
			$allowed_uris = explode("\n", $this->input->post('allowed_uris'));
			
			// Remove white space if available
			array_walk($allowed_uris, 'trim_value');
		
			// Set URI permission data
			// IMPORTANT: uri permission data, is saved using 'uri' as key.
			// So this key name is preserved, if you want to use custom permission use other key.
			$this->permissions->set_permission_value($this->input->post('role'), 'uri', $allowed_uris);
		}
		
		/* Showing page to user */		
		
		// Default role_id that will be showed
		$role_id = $this->input->post('role') ? $this->input->post('role') : 1;
		
		// Get all role from database
		$data['roles'] = $this->roles->get_all()->result();
		// Get allowed uri permissions
		$data['allowed_uris'] = $this->permissions->get_permission_value($role_id, 'uri');
		
		// Load view
		$this->load->view('backend/uri_permissions', $data);
	}
	
	function custom_permissions()
	{
		// Load models
		$this->load->model('dx_auth/roles', 'roles');
		$this->load->model('dx_auth/permissions', 'permissions');
	
		/* Get post input and apply it to database */
		
		// If button save pressed
		if ($this->input->post('save'))
		{
			// Note: Since in this case we want to insert two key with each value at once,
			// it's not advisable using set_permission_value() function						
			// If you calling that function twice that means, you will query database 4 times,
			// because set_permission_value() will access table 2 times, 
			// one for get previous permission and the other one is to save it.
			
			// For this case (or you need to insert few key with each value at once) 
			// Use the example below
		
			// Get role_id permission data first. 
			// So the previously set permission array key won't be overwritten with new array with key $key only, 
			// when calling set_permission_data later.
			$permission_data = $this->permissions->get_permission_data($this->input->post('role'));
		
			// Set value in permission data array
			$permission_data['edit'] = $this->input->post('edit');
			$permission_data['delete'] = $this->input->post('delete');
			
			// Set permission data for role_id
			$this->permissions->set_permission_data($this->input->post('role'), $permission_data);
		}
	
		/* Showing page to user */		
		
		// Default role_id that will be showed
		$role_id = $this->input->post('role') ? $this->input->post('role') : 1;
		
		// Get all role from database
		$data['roles'] = $this->roles->get_all()->result();
		// Get edit and delete permissions
		$data['edit'] = $this->permissions->get_permission_value($role_id, 'edit');
		$data['delete'] = $this->permissions->get_permission_value($role_id, 'delete');
	
		// Load view
		$this->load->view('backend/custom_permissions', $data);
	}
	
    public function ajax_user_1711101824()
    {
        $list = $this->backend->get_datatables();
        $data = array();
        $no = isset($_POST['start']) ? $_POST['start'] : 0;
        
        foreach ($list as $user) {
            $attr=array(
              'name'=>'ckbox['.$user->id.']',
              'class' => "no class"
            );
            
            $no++;
            $row = array();
            $row[] = $no."&nbsp;&nbsp;";
            $row[] = form_checkbox($attr);
            $row[] = $this->dx_auth->get_roles($user->role_id, TRUE);
            $row[] = $user->username;
            $row[] = $user->email;
            $row[] = $user->banned ? "<a class='text-danger'>Yes</a>" : "<a class='text-success'>No</a>";
            $row[] = "<i class='text-muted'>".$user->ban_reason."</i>";
            $row[] = $user->last_ip;
            $row[] = date_format(date_create($user->last_login),"j/m/Y H:i:s");
            $row[] = $this->actions($user->id);
 
            $data[] = $row;
        }
 
        $output = array(
                        "draw" => isset($_POST['draw']) ? $_POST['draw'] : 0,
                        "recordsTotal" => $this->backend->count_all(),
                        "recordsFiltered" => $this->backend->count_filtered(),
                        "data" => $data,
                );
        //output to json format
        echo json_encode($output);
    }
    
    function actions($id) {
        $edit = "<a class='fa fa-pencil-square-o' "
               ."href='$this->class/edit/$id' "
               ."data-toggle='tooltip' data-placement='left' "
               ."title='Edit row'> Edit</a>&nbsp;";
        $passwd = "<a class='fa fa-key' "
                 ."href='$this->class/passwd/$id' "
                 ."data-toggle='tooltip' data-placement='left' "
                 ."title='Add Author'> Password</a>&nbsp;";
        $result = ' <div class="btn-group m-r-5 m-b-5">
                        <a href="javascript:;" data-toggle="dropdown" class="btn btn-warning dropdown-toggle">
                            <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu pull-right">
                            <li>'.$edit.'</li>
                            <li class="divider"></li>
                            <li>'.$passwd.'</li>                            
                        </ul>
                    </div>';
        return $result;
    }
       
    function add()
    {
        $this->load->library('Form_validation');
        $val = $this->form_validation;

        // Set form validation rules
        $val->set_rules('username', 'Username', 'trim|required|min_length['.$this->min_username.']|max_length['.$this->max_username.']|callback_username_check|alpha_dash');
        $val->set_rules('password', 'Password', 'trim|required|min_length['.$this->min_password.']|max_length['.$this->max_password.']|matches[confirm_password]');
        $val->set_rules('confirm_password', 'Confirm Password', 'trim|required');
        $val->set_rules('email', 'Email', 'trim|required|valid_email|callback_email_check');
        
        if($this->input->post('regency')>0) { $region_id = $this->input->post('regency'); $level=3; }
        elseif($this->input->post('province')>0) { $region_id = $this->input->post('province'); $level=2; }
        elseif($this->input->post('country')>0) { $region_id = $this->input->post('country'); $level=1; }
        else {$region_id = 0; $level=0;}
        
        $other = array('role_id'=>$this->input->post('role_id'),
                      'region_id'=>$region_id,
                      'region_level'=>$level
                );

        // Run form validation and register user if it's pass the validation
        if ($val->run() AND $this->dx_auth->add_user($val->set_value('username'), $val->set_value('password'), $val->set_value('email'), $other))
        {
            // Load registration success page
            $this->load->view($this->dx_auth->register_success_view, $data);
            redirect('backend');
        }
        else
        {
            // Load registration page
            //$this->load->view('Auth/register_form');
            $for_listbox = $this->region->get_filtered('name','asc',array('true_id','name'),array('level'=>1,'status'=>'1'));
            $countries['0']="<< Select Country (optional) >>";
            foreach($for_listbox as $val) { $countries[$val['true_id']] = strtoupper($val['name']); }
            
            $data['countries'] = $countries;
            $data['_view'] = $this->view_dir."add_user";
            //$data['_head'] = "_login";
            $this->load->view('layouts/main',$data);
        }
    }
    
    function username_check($username)
	{
		$result = $this->dx_auth->is_username_available($username);
		if ( ! $result)
		{
			$this->form_validation->set_message('username_check', 'Username already exist. Please choose another username.');
		}
				
		return $result;
	}

	function email_check($email)
	{
		$result = $this->dx_auth->is_email_available($email);
		if ( ! $result)
		{
			$this->form_validation->set_message('email_check', 'Email is already used by another user. Please choose another email address.');
		}
				
		return $result;
	}

    /*
     * Editing a user
     */

    function edit($id) {
        // check if the user exists before trying to edit it
        $data['user'] = $this->backend->get_user($id);

        if (isset($data['user']['id'])) {
            if (isset($_POST) && count($_POST) > 0) {
                $params = array(
                    'role_id' => $this->input->post('role_id'),
                    'username' => $this->input->post('username'),
                    'email' => $this->input->post('email'),
                    'modified' => date('Y-m-d H:i:s')                    
                );

                $this->backend->update_user($id, $params);
                redirect('Backend');
            } else {
                $data['_view'] = $this->view_dir . 'edit_user';
                $this->load->view('layouts/main', $data);
            }
        } else
            show_error('The user you are trying to edit does not exist.');
    }

    /*
     * Change Pass by admin
     */    
    function passwd($id) {
        $val = $this->form_validation;
        $val->set_rules('new_password', 'New Password', 'trim|required|min_length[8]|max_length[20]|matches[confirm_new_password]');
        $val->set_rules('confirm_new_password', 'Confirm Password', 'trim|required');
        $id = $this->input->post('id') ?: $id;
        $email = $this->backend->get_user($id)['email'];

        if ($val->run() AND $this->dx_auth->forced_chg_passwd($id, $email, $val->set_value('new_password'))) {
            $data['auth_message'] = 'Password has successfully been changed.';
            $data['_view'] = $this->dx_auth->change_password_success_view;
            $data['_head'] = "_message";
            $data['redirect'] = "backend";
            $this->load->view('layouts/main',$data);                
        }
        else {           
            $data['id'] = $id;
            $data['email'] = $email;
            $data['_view'] = "Auth/set_password_form";
            $data['_head'] = "_login";
            $this->load->view('layouts/main', $data);
        }
    }
    
    function ban() {
        $reason = $this->input->post('reason');
        $data = $this->input->post('ckbox');
        if($data) {
            $this->backend->ban(array_keys($data), $reason);
        }
        redirect('Backend');
    }
    
    function get_region_ajax() {
        $country=$this->input->post('country');
        $province=$this->input->post('province');
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
        $listbox = form_dropdown($child,$options,0,$region); 
        if($options) {
            echo form_label(ucfirst($child), $region['id'], array('class'=>'col-md-4 control-label'));
            echo "<br/><div class='col-md-8'>".$listbox."</div>";
        }
    }
    
}