<div class="card-header">Add a Client</div>
<div class="card-body">

<?php echo form_open('client/add',array("class"=>"form-horizontal")); ?>

	<div class="form-group">
		<label for="email" class="col-md-4 control-label"><span class="text-danger">*</span>Email</label>
		<div class="col-md-8">
			<input type="text" name="email" value="<?php echo $this->input->post('email'); ?>" class="form-control" id="email" />
			<span class="text-danger"><?php echo form_error('email');?></span>
		</div>
	</div>
	<div class="form-group">
		<label for="domain" class="col-md-4 control-label">Domain</label>
		<div class="col-md-8">
			<input type="text" name="domain" value="<?php echo $this->input->post('domain'); ?>" class="form-control" id="domain" />
			<span class="text-danger"><?php echo form_error('domain');?></span>
		</div>
	</div>
	<div class="form-group">
		<label for="ip" class="col-md-4 control-label"><span class="text-danger">*</span>Ip</label>
		<div class="col-md-8">
			<input type="text" name="ip" value="<?php echo $this->input->post('ip'); ?>" class="form-control" id="ip" />
			<span class="text-danger"><?php echo form_error('ip');?></span>
		</div>
	</div>
	<div class="form-group">
		<label for="key" class="col-md-4 control-label"><span class="text-danger">*</span>Key</label>
		<div class="col-md-8">
			<input type="text" name="key" value="<?php echo $this->input->post('key'); ?>" class="form-control" id="key" />
			<span class="text-danger"><?php echo form_error('key');?></span>
		</div>
	</div>
	<div class="form-group">
		<label for="quota" class="col-md-4 control-label">Quota</label>
		<div class="col-md-8">
			<input type="text" name="quota" value="<?php echo $this->input->post('quota'); ?>" class="form-control" id="quota" />
			<span class="text-danger"><?php echo form_error('quota');?></span>
		</div>
	</div>
	
	<div class="form-group">
		<div class="col-sm-offset-4 col-sm-8">
			<button type="submit" class="btn btn-success">Save</button>
        </div>
	</div>

<?php echo form_close(); ?>

</div>
