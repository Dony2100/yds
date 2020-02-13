<? $this->load->view('header');?>
<? $this->load->view('navbar');?>
<div class="card mb-3">
	<div class="card-header"><i class="fa fa-table"></i> Data User</div>
	<div class="card-body">
	  	
		<?php  				
		// Show reset password message if exist
		if (isset($reset_message))
			echo $reset_message;
		
		// Show error
		echo validation_errors();
		
		$this->table->set_heading('', 'Username', 'Email', 'Role', 'Banned', 'Last IP', 'Last login', 'Created');
		
		foreach ($users as $user) 
		{
			$banned = ($user->banned == 1) ? 'Yes' : 'No';
			
			$this->table->add_row(
				form_checkbox('checkbox_'.$user->id, $user->id),
				$user->username, 
				$user->email, 
				$user->role_name, 			
				$banned, 
				$user->last_ip,
				date('Y-m-d', strtotime($user->last_login)), 
				date('Y-m-d', strtotime($user->created)));
		}
		
		echo form_open($this->uri->uri_string());
				
		echo form_submit('ban', 'Ban user');
		echo form_submit('unban', 'Unban user');
		echo form_submit('reset_pass', 'Reset password');
		
		echo '<hr/>';
		?>
		<div class="table-responsive">
			<?
			$tconfig=array("class"=>"table-responsive");
			echo $this->table->generate(); 
			?>
        </div>
		<?
		echo form_close();
		
		echo $pagination;?>
    </div>
	<div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>		
</div>
	
	?>
	
<? $this->load->view('footer');?>