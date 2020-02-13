<div class="card-header">Edit an Account</div>
<div class="card-body">
    <?php
    $username = array(
        'name' => 'username',
        'id' => 'username',
        'size' => 30,
        'class' => "form-control",
        'type' => "text",
        'aria-describedby' => "emailHelp",
        'placeholder' => "Enter username",
        'value' => ($this->input->post('username') ? $this->input->post('username') : $user['username']),
        'class' => 'form-control'
    );  

    $email = array(
        'name' => 'email',
        'id' => 'email',
        'maxlength' => 80,
        'size' => 30,
        'class' => "form-control",
        'type' => "email",
        'aria-describedby' => "emailHelp",
        'placeholder' => "Enter email",
        'value' => ($this->input->post('email') ? $this->input->post('email') : $user['email']),
        'class' => 'form-control'
    );

    $submit_button = array(
        'name' => 'save',
        'value' => 'Save',
        'type' => 'submit',
        'class' => "btn btn-success",
    );
    ?>

    <?php echo form_open($this->uri->uri_string()) ?>

    <div class="form-group">
        <?php echo form_label('Username', $username['id'], array('class'=>'col-md-4 control-label')); ?>
        <div class="col-md-8">
            <?php echo form_input($username) ?>
            <?php echo form_error($username['name']); ?>
        </div>
    </div>
    <div class="form-group">
        <?php echo form_label('Email Address', $email['id'], array('class'=>'col-md-4 control-label')); ?>
        <div class="col-md-8">
            <?php echo form_input($email); ?>
            <?php echo form_error($email['name']); ?>
        </div>
    </div>
    <div class="form-group">
        <label for="status" class="col-md-4 control-label">Role</label>
        <div class="col-md-4">
            <?php   echo form_dropdown( array('name'=>'role_id','id'=>'role_id','class'=>'form-control'), 
                                        array('2'=>'Admin','3'=>'Author','4'=>'Editor'), 
                                        ($this->input->post('role_id') ? $this->input->post('role_id') : $user['role_id']))?>
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-offset-4 col-sm-8">
            <?php echo form_submit($submit_button); ?>
        </div>
    </div>    

<?php echo form_close() ?>
</div>