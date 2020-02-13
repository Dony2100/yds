<div class="card-header">Edit Member Profile</div>
<div class="card-body">

<?php echo form_open('member/edit/',array("class"=>"form-horizontal")); 
$member=(array)$member;?>

	<div class="form-group">
		<label for="FirstName" class="col-md-4 control-label"><span class="text-danger">*</span>First Name</label>
		<div class="col-md-8">
			<input type="text" name="FirstName" value="<?php echo ($this->input->post('FirstName') ? $this->input->post('FirstName') : $member['FirstName']); ?>" class="form-control" id="email" />
			<span class="text-danger"><?php echo form_error('name');?></span>
		</div>
	</div>
	<div class="form-group">
		<label for="LastName" class="col-md-4 control-label">Last Name</label>
		<div class="col-md-8">
			<input type="text" name="LastName" value="<?php echo ($this->input->post('LastName') ? $this->input->post('LastName') : $member['LastName']); ?>" class="form-control" id="town" />
			<span class="text-danger"><?php echo form_error('name');?></span>
		</div>
	</div>
	<div class="form-group">
		<label for="birthplace" class="col-md-4 control-label">Birth Place</label>
		<div class="col-md-8">
			<input type="text" name="birthplace" value="<?php echo ($this->input->post('birthplace') ? $this->input->post('birthplace') : $member['birthplace']); ?>" class="form-control" id="city" />
			<span class="text-danger"><?php echo form_error('city');?></span>
		</div>
	</div>
        <div class="form-group"> 
            <label for="birthdate" class="col-md-4 control-label"><span class="text-danger">*</span>Birth Date</label>
            <div class="input-group date col-md-4">
                <input type="date" class="form-control" name="birthdate" value='<?php echo ($this->input->post('birthdate') ? $this->input->post('birthdate') : $member['birthdate']); ?>' id="birthdate">
            </div>        
        </div>
	<div class="form-group">
		<label for="phone" class="col-md-4 control-label">Phone</label>
		<div class="col-md-8">
			<input type="text" name="phone" value="<?php echo ($this->input->post('phone') ? $this->input->post('phone') : $member['phone']); ?>" class="form-control" id="phone" />
			<span class="text-danger"><?php echo form_error('quota');?></span>
		</div>
	</div>    
	<div class="form-group">
		<label for="address" class="col-md-4 control-label">Address</label>
		<div class="col-md-8">              
                    <?php echo form_textarea(array('name'=>'address','id'=>'address','class'=>'form-control','rows'=>"3"), trim($this->input->post('address') ? $this->input->post('address') : $member['address']))?>
                    <span class="text-danger"><?php echo form_error('address');?></span>
		</div>
	</div>
 	<div class="form-group">
		<label for="city" class="col-md-4 control-label">City</label>
		<div class="col-md-8">
			<input type="text" name="city" value="<?php echo ($this->input->post('city') ? $this->input->post('city') : $member['city']); ?>" class="form-control" id="city" />
			<span class="text-danger"><?php echo form_error('city');?></span>
		</div>
	</div>
 	<div class="form-group">
		<label for="country" class="col-md-4 control-label">Country</label>
		<div class="col-md-8">
			<input type="text" name="country" value="<?php echo ($this->input->post('country') ? $this->input->post('country') : $member['country']); ?>" class="form-control" id="country" />
			<span class="text-danger"><?php echo form_error('country');?></span>
		</div>
	</div>    
	
	<div class="form-group">
		<div class="col-sm-offset-4 col-sm-8">
			<button type="submit" class="btn btn-success">Save</button>
        </div>
	</div>
	
<?php echo form_close(); ?>

</div>