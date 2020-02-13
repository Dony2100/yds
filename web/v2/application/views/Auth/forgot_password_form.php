<?php
$login = array(
    'name' => 'login',
    'id' => 'login',
    'maxlength' => 80,
    'size' => 30,
    'class' => "form-control",
    'type' => "email",
    'aria-describedby' => "emailHelp",
    'placeholder' => "Enter email address",
    'value' => set_value('login')
);

$submit_button = array (
    'name'  => 'reset',
    'value' => 'Reset Now',
    'type'  => 'submit',
    'class' => "btn btn-primary btn-block",
);

?>

<?php echo form_open($this->uri->uri_string()); ?>

<?php echo $this->dx_auth->get_auth_error(); ?>

<div class="card-header">Reset Password</div>
<div class="card-body">
    <div class="text-center mt-4 mb-5">
        <h4>Forgot your password?</h4>
        <p><?php echo form_label('Enter your Username or Email Address', $login['id']); ?></p>
    </div>
    <div class="form-group">
        <?php echo form_input($login); ?>
        <?php echo form_error($login['name']); ?>
    </div>

    <?php echo form_submit($submit_button); ?>
</div>

<?php echo form_close();