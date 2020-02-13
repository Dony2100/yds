<!-- Breadcrumbs-->
<ol class="breadcrumb">
    <li class="breadcrumb-item">
        <a href="#">Dashboard</a>
    </li>
    <li class="breadcrumb-item active">Message</li>
</ol>

<div class="row">

    <div class="col-xl-9 col-sm-6 mb-6">
        <div class="card text-white bg-primary o-hidden h-100">
            <div class="card-body">
                <div class="card-body-icon">
                    <i class="fa fa-fw fa-comments"></i>
                </div>
                <div class="mr-5"><?php echo $auth_message ?></div>
            </div>
            <a class="card-footer text-white clearfix small z-1" href="#">
                <span class="float-left"></span>

                <span class="float-right">
                    <i class="fa fa-angle-right"></i>
                </span>

            </a>
        </div>
    </div>
</div>

<div>Return to <a href=<?= isset($redirect) ? base_url() . $redirect : base_url() . "home"; ?>><?=isset($redirect) ? "Origin" : "Home";?></a></div>