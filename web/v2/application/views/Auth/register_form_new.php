<? $this->load->view('header');?>

<div class="container">
	<div class="card card-register mx-auto mt-5">
	
		<?php
		$username = array(
			'name'	=> 'username',
			'id'	=> 'username',
			'size'	=> 30,
			'value' =>  set_value('username')
		);

		$password = array(
			'name'	=> 'password',
			'id'	=> 'password',
			'size'	=> 30,
			'value' => set_value('password')
		);

		$confirm_password = array(
			'name'	=> 'confirm_password',
			'id'	=> 'confirm_password',
			'size'	=> 30,
			'value' => set_value('confirm_password')
		);

		$email = array(
			'name'	=> 'email',
			'id'	=> 'email',
			'maxlength'	=> 80,
			'size'	=> 30,
			'value'	=> set_value('email')
		);
		?>
		
		<?php echo form_open($this->uri->uri_string())?>

	<div class="card-header">Register an Account</div>
	  <div class="card-body">
	      <div class="form-group">
	        <div class="form-row">
	          <div class="col-md-6">
	            <label for="Firstname">First Name</label>
	            <input class="form-control" id="firstname" type="text" aria-describedby="nameHelp" placeholder="Enter first name" name="firstname">
	          </div>
	          <div class="col-md-6">
	            <label for="LastName">Last Name</label>
	            <input class="form-control" id="lastname" type="text" aria-describedby="nameHelp" placeholder="Enter last name" name="lastname">
	          </div>
	        </div>
	      </div>
	      <div class="form-group">
	        <label for="Username"><?=form_label('Username', $username['id']);?></label>
	        <input class="form-control" id="username" type="text" aria-describedby="userHelp" placeholder="Enter username" name="username" value="">
			<?php echo form_error($username['name']); ?>
	      </div>
	      <div class="form-group">
	        <label for="Email"><?=form_label('Email Address', $email['id']);?></label>
	        <input class="form-control" id="email" type="email" aria-describedby="emailHelp" placeholder="Enter email" name="email" value="">
			<?php echo form_error($email['name']); ?>
	      </div>
	      <div class="form-group">
	        <div class="form-row">
	          <div class="col-md-6">
	            <label for="Password"><?=form_label('Password', $password['id']);?></label>
	            <input class="form-control" id="password" type="password" placeholder="Password" value="">
			    <?php echo form_error($password['name']); ?>
	          </div>
	          <div class="col-md-6">
	            <label for="ConfirmPassword"><?=form_label('Confirm Password', $confirm_password['id']);?></label>
	            <input class="form-control" id="exampleConfirmPassword" type="password" placeholder="Confirm password" value="">
				<?php echo form_error($confirm_password['name']); ?>
	          </div>
	        </div>
	      </div>
		<?php if ($this->dx_auth->captcha_registration): ?>
		<dl>
			<dt></dt>
			<dd>
				<?php 
					// Show recaptcha imgage
					echo $this->dx_auth->get_recaptcha_image(); 
					// Show reload captcha link
					echo $this->dx_auth->get_recaptcha_reload_link(); 
					// Show switch to image captcha or audio link
					echo $this->dx_auth->get_recaptcha_switch_image_audio_link(); 
				?>
			</dd>

			<dt><?php echo $this->dx_auth->get_recaptcha_label(); ?></dt>
			<dd>
				<?php echo $this->dx_auth->get_recaptcha_input(); ?>
				<?php echo form_error('recaptcha_response_field'); ?>
			</dd>
			
			<?php 
				// Get recaptcha javascript and non javasript html
				echo $this->dx_auth->get_recaptcha_html();
			?>
		</dl>
		<?php endif; ?>

	    <input type="submit" name="register" value="Register" class="btn btn-primary btn-block">

	    <?php echo form_close()?>

	  </div>
	</div>
</div>
