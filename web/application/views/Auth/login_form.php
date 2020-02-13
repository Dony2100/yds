<?php
$username = array(
    'name' => 'username',
    'id' => 'username',
    'type' => 'text',
    'size' => 30,
    'value' => set_value('username'),
    'class' => "form-control",
    'placeholder' => "Enter username or email",
    'aria-describedby' =>"emailHelp"
);

$password = array(
    'name' => 'password',
    'id' => 'password',
    'size' => 30,
    'type' => 'password',
    'class' => "form-control",
    'placeholder' => "Enter password",
);

$remember = array(
    'name' => 'remember',
    'id' => 'remember',
    'value' => 1,
    'type' => 'checkbox',
    'checked' => set_value('remember'),
    'class' => "form-check-input"
);

$submit_button = array (
    'name'  => 'login',
    'value' => 'Login',
    'type'  => 'submit',
    'class' => "btn btn-primary btn-block",
);

$confirmation_code = array(
    'name' => 'captcha',
    'id' => 'captcha',
    'maxlength' => 8
);
?>

<div class="card-header">Login</div>
<?php echo form_open($this->uri->uri_string()) ?>
<?php echo $this->dx_auth->get_auth_error(); ?>

<div class="card-body">

    <div class="form-group">
        <label for="exampleInputEmail1"><?= form_label('Username', $username['id']); ?></label>
        <?php echo form_input($username);?>
        <?php echo form_error($username['name']); ?>
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1"><?= form_label('Password', $password['id']); ?></label>
        <?php echo form_password($password)?>
        <?php echo form_error($password['name']); ?>
    </div>

    <?php if ($show_captcha): ?>
        <div class="form-group">
            Enter the code exactly as it appears.<br/>There is no zero.
        </div>
        <div class="form-group">
            <?php
            // Show recaptcha imgage
            echo $this->dx_auth->get_recaptcha_image();
            // Show reload captcha link
            echo $this->dx_auth->get_recaptcha_reload_link();
            // Show switch to image captcha or audio link
            echo $this->dx_auth->get_recaptcha_switch_image_audio_link();
            ?>
        </div> 

        <div class="form-group">
            <label for="exampleInputPassword1"><?php echo $this->dx_auth->get_recaptcha_label(); ?></label>
            <?php echo $this->dx_auth->get_recaptcha_input(); ?>
            <?php echo form_error('recaptcha_response_field'); ?>
        </div>            

        <?php
        // Get recaptcha javascript and non javasript html
        echo $this->dx_auth->get_recaptcha_html();
        ?>
    <?php endif; ?>

    <div class="form-group">
        <div class="form-check">
            <label class="form-check-label">
                <?php echo form_checkbox($remember);?> Remember Password</label>
        </div>
    </div>
    
    <?php echo form_submit($submit_button); ?>

    <div class="form-group">
        <?php if ($this->dx_auth->allow_registration) { ?>
            <a class="d-block small mt-3" href="<?= $this->dx_auth->register_uri; ?>">Register an Account</a>
        <?};
        ?>
        <a class="d-block small" href="<?= $this->dx_auth->forgot_password_uri; ?>">Forgot Password?</a>
    </div>

</div>

<?php echo form_close(); ?>
