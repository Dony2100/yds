<div class="card-header">Add an Account</div>
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
        'value' => set_value('username'),
        'class' => 'form-control'
    );

    $password = array(
        'name' => 'password',
        'id' => 'password',
        'size' => 30,
        'class' => "form-control",
        'type' => "password",
        'placeholder' => "Password",
        'value' => set_value('password'),
        'class' => 'form-control'
    );

    $confirm_password = array(
        'name' => 'confirm_password',
        'id' => 'confirm_password',
        'size' => 30,
        'class' => "form-control",
        'type' => "password",
        'placeholder' => "Confirm Password",
        'value' => set_value('confirm_password'),
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
        'value' => set_value('email'),
        'class' => 'form-control'
    );
    
    $country = array(
        'name' => 'country',
        'id' => 'country',
        'class' => "form-control",
        'placeholder' => "Select Country",
        'value' => set_value('country'),
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
            <font color="red"><?php echo form_error($username['name']); ?></font>
        </div>
    </div>
    <div class="form-group">
        <?php echo form_label('Email Address', $email['id'], array('class'=>'col-md-4 control-label')); ?>
        <div class="col-md-8">
            <?php echo form_input($email); ?>
            <font color="red"><?php echo form_error($email['name']); ?></font>
        </div>
    </div>
    <div class="form-group">
        <?php echo form_label('Password', $password['id'], array('class'=>'col-md-4 control-label')); ?>
        <div class="col-md-8">
            <?php echo form_password($password) ?>
            <font color="red"><?php echo form_error($password['name']); ?></font>
        </div>
    </div>
    <div class="form-group">
        <?php echo form_label('Confirm Password', $confirm_password['id'], array('class'=>'col-md-4 control-label')); ?>
        <div class="col-md-8">
            <?php echo form_password($confirm_password); ?>
            <font color="red"><?php echo form_error($password['name']); ?></font>
        </div>
    </div>
    <div class="form-group">
        <label for="status" class="col-md-4 control-label">Role</label>
        <div class="col-md-4">
            <?php   echo form_dropdown( array('name'=>'role_id','id'=>'role_id','class'=>'form-control'), 
                                        array('2'=>'Admin','3'=>'Author','4'=>'Editor'), 
                                        $this->input->post('role_id'))?>
        </div>
    </div>
    <div class="form-group">
        <?php echo form_label('Country', $country['id'], array('class'=>'col-md-4 control-label')); ?>
        <div class="col-md-8">
            <?php echo form_dropdown('country',$countries,0,$country); ?>
        </div>
    </div>
    <div class="form-group" id="province"></div>
    <div class="form-group" id="regency"></div>
    <div class="form-group">
        <div class="col-sm-offset-4 col-sm-8">
            <?php echo form_submit($submit_button); ?>
        </div>
    </div>    

<?php echo form_close() ?>
</div>