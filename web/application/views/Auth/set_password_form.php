<?php

$new_password = array(
    'name' => 'new_password',
    'id' => 'new_password',
    'size' => 30,
    'class' => "form-control",
    'placeholder' => "Enter new password"
);

$confirm_new_password = array(
    'name' => 'confirm_new_password',
    'id' => 'confirm_new_password',
    'size' => 30,
    'class' => "form-control",
    'placeholder' => "Confirm new password"
);

$submit_button = array(
    'name' => 'change',
    'value' => 'Change password',
    'type' => 'submit',
    'class' => "btn btn-primary btn-block",
);
?>

<div class="card-header">Change Password for <b><?=$email?></b></div>

<?php echo form_open($this->uri->uri_string()); ?>

<?php echo $this->dx_auth->get_auth_error(); ?>

<input type="hidden" value="<?=$id?>" name="id">

<div class="card-body">
    <div class="form-group">     
        <label for="exampleInputPassword1"><?php echo form_label('New Password', $new_password['id']); ?></label>
        <?php echo form_password($new_password); ?>
        <font color="red"><?php echo form_error($new_password['name']); ?></font>
    </div>
    <div class="form-group">      
        <label for="exampleInputPassword1"><?php echo form_label('Confirm Password', $confirm_new_password['id']); ?></label>
        <?php echo form_password($confirm_new_password); ?>
        <?php //echo form_error($confirm_new_password['name']); ?>
    </div>
    <?php echo form_submit($submit_button); ?>

</div>

<?php
echo form_close();
