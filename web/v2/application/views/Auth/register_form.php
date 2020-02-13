<div class="card-header">Register an Account</div>
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
        'value' => set_value('username')
    );

    $password = array(
        'name' => 'password',
        'id' => 'password',
        'size' => 30,
        'class' => "form-control",
        'type' => "password",
        'placeholder' => "Password",
        'value' => set_value('password')
    );

    $confirm_password = array(
        'name' => 'confirm_password',
        'id' => 'confirm_password',
        'size' => 30,
        'class' => "form-control",
        'type' => "password",
        'placeholder' => "Confirm Password",
        'value' => set_value('confirm_password')
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
        'value' => set_value('email')
    );

    $submit_button = array(
        'name' => 'register',
        'value' => 'Register',
        'type' => 'submit',
        'class' => "btn btn-primary btn-block",
    );
    ?>

    <?php echo form_open($this->uri->uri_string()) ?>

    <div class="form-group">
        <?php echo form_label('Username', $username['id']); ?>
        <?php echo form_input($username) ?>
        <?php echo form_error($username['name']); ?>
    </div>
    <div class="form-group">
        <?php echo form_label('Email Address', $email['id']); ?>
        <?php echo form_input($email); ?>
        <?php echo form_error($email['name']); ?>
    </div>
    <div class="form-group">
        <div class="form-row">
            <div class="col-md-6">
                <?php echo form_label('Password', $password['id']); ?>
                <?php echo form_password($password) ?>
                <?php echo form_error($password['name']); ?>
            </div>
            <div class="col-md-6">
                <?php echo form_label('Confirm Password', $confirm_password['id']); ?>
                <?php echo form_password($confirm_password); ?>
                <?php echo form_error($password['name']); ?>
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

    <?php echo form_submit($submit_button); ?>

    <?php echo form_close() ?>
</div>