<!-- Navigation-->
<style>
    #flip {
        -webkit-transform: rotateY(-180deg);
        -moz-transform: rotate(-180deg);
        -o-transform: rotate(-180deg);
        transform: rotateY(-180deg);
        ms-filter: "progid:DXImageTransform.Microsoft.BasicImage(rotation=2)";
        filter: progid:DXImageTransform.Microsoft.BasicImage(rotation=2);
        display:inline-block;
        color: #ffc617;
    }
</style>
<?php 
    $actmenu = $this->session->flashdata('menu');
    $mainmenu = isset($actmenu['main']) ? $actmenu['main'] : '';
    $submenu = isset($actmenu['sub']) ? $actmenu['sub'] : '';
?>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <a class="navbar-brand" href=<?= base_url() . "Home" ?>>
        <img src="<?= site_url() . 'assets/img/icon50x50-yudistira.png' ?>" height="28" width="28">&nbsp;
        <b>YUDISTIRA </b>
        <b><font color="#ffc617">TURN</font> <div id="flip">BACK</div> HOAX</b>
    </a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Add Data">
                <a class="nav-link" href=<?= base_url() . "Main_data/add" ?>>
                    <i class="fa fa-fw fa-plus-circle"></i>
                    <span class="btn btn-outline-light">Add New Data</span>
                </a>
            </li>
            <li class="nav-item<?=$mainmenu=="dashboard" ? ' active':'';?>" data-toggle="tooltip" data-placement="right" title="Dashboard">
                <a class="nav-link" href=<?= base_url() . "Dashboard" ?>>
                    <i class="fa fa-fw fa-dashboard"></i>
                    <span class="nav-link-text">Dashboard</span>
                </a>
            </li>
            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Account">
                <a class="nav-link nav-link-collapse <?=$mainmenu=="account" ? '':'collapsed';?>" data-toggle="collapse" href="#collapseAcc" data-parent="#exampleAccordion">
                <i class="fa fa-fw fa-user-circle"></i>
                <span class="nav-link-text">Account</span>
                </a>
                <ul class="sidenav-second-level <?=$mainmenu=="account" ? '':'collapse';?>" id="collapseAcc">
                    <li class="<?=$submenu=="user" ? 'active':'';?>">
                    <a href=<?= base_url() . "Backend" ?>>User</a>
                    </li>
                    <li class="<?=$submenu=="profile" ? 'active':'';?>">
                    <a href=<?= base_url() . "Member" ?>>Profile</a>
                    </li>
                    <li class="<?=$submenu=="client" ? 'active':'';?>">
                    <a href=<?= base_url() . "Client" ?>>Client</a>
                    </li>                    
                </ul>
            </li>            
            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Data">
                <a class="nav-link nav-link-collapse <?=$mainmenu=="data" ? '':'collapsed';?>" data-toggle="collapse" href="#collapseData" data-parent="#exampleAccordion">
                <i class="fa fa-fw fa-shield"></i>
                <span class="nav-link-text">Data</span>
                </a>
                <ul class="sidenav-second-level <?=$mainmenu=="data" ? '':'collapse';?>" id="collapseData">
                    <li class="<?=$submenu=="antihoax" ? 'active':'';?>">
                    <a href=<?= base_url() . "Main_data" ?>>Main Data</a>
                    </li>
                    <li class="<?=$submenu=="draft" ? 'active':'';?>">
                    <a href=<?= base_url() . "Draft" ?>>Draft</a>
                    </li>
                    <li class="<?=$submenu=="author" ? 'active':'';?>">
                    <a href=<?= base_url() . "Author" ?>>Author</a>
                    </li>                
                    <li class="<?=$submenu=="datainput" ? 'active':'';?>">
                    <a href=<?= base_url() . "Temp_data" ?>>Data Input</a>
                    </li>                    
                </ul>
            </li>
            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Data">
                <a class="nav-link nav-link-collapse <?=$mainmenu=="lapor" ? '':'collapsed';?>" data-toggle="collapse" href="#collapseLapor" data-parent="#exampleAccordion">
                <i class="fa fa-fw fa-comments"></i>
                <span class="nav-link-text">Lapor</span>
                </a>
                <ul class="sidenav-second-level <?=$mainmenu=="lapor" ? '':'collapse';?>" id="collapseLapor">
                    <li class="<?=$submenu=="laporan" ? 'active':'';?>">
                    <a href=<?= base_url() . "lapor" ?>>Laporan</a>
                    </li>
                    <li class="<?=$submenu=="inputlap" ? 'active':'';?>">
                    <a href=<?= base_url() . "lapor/add_public" ?>>Input laporan</a>
                    </li>
                </ul>
            </li>            

            <?/*
            <!--    
            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Components">
                <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseComponents" data-parent="#exampleAccordion">
                    <i class="fa fa-fw fa-wrench"></i>
                    <span class="nav-link-text">Components</span>
                </a>
                <ul class="sidenav-second-level collapse" id="collapseComponents">
                    <li>
                        <a href="navbar.html">Navbar</a>
                    </li>
                    <li>
                        <a href="cards.html">Cards</a>
                    </li>
                </ul>
            </li>
            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Example Pages">
                <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseExamplePages" data-parent="#exampleAccordion">
                <i class="fa fa-fw fa-file"></i>
                <span class="nav-link-text">Example Pages</span>
                </a>
                <ul class="sidenav-second-level collapse" id="collapseExamplePages">
                    <li>
                        <a href="login.html">Login Page</a>
                    </li>
                    <li>
                        <a href="register.html">Registration Page</a>
                    </li>
                    <li>
                        <a href="forgot-password.html">Forgot Password Page</a>
                    </li>
                    <li>
                        <a href="blank.html">Blank Page</a>
                    </li>
                </ul>
            </li>
            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Menu Levels">
                <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseMulti" data-parent="#exampleAccordion">
                <i class="fa fa-fw fa-sitemap"></i>
                <span class="nav-link-text">Menu Levels</span>
                </a>
                <ul class="sidenav-second-level collapse" id="collapseMulti">
                    <li>
                    <a href="#">Second Level Item</a>
                    </li>
                    <li>
                    <a href="#">Second Level Item</a>
                    </li>
                    <li>
                    <a href="#">Second Level Item</a>
                    </li>
                    <li>
                    <a class="nav-link-collapse collapsed" data-toggle="collapse" href="#collapseMulti2">Third Level</a>
                        <ul class="sidenav-third-level collapse" id="collapseMulti2">
                        <li>
                        <a href="#">Third Level Item</a>
                        </li>
                        <li>
                        <a href="#">Third Level Item</a>
                        </li>
                        <li>
                        <a href="#">Third Level Item</a>
                        </li>
                        </ul>
                    </li>
                </ul>
            </li>
  
            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Link">
                <a class="nav-link" href=<?= base_url() . "Antihoax" ?>>
                    <i class="fa fa-fw fa-handshake-o"></i>
                    <span class="nav-link-text">API Web service</span>
                </a>
            </li>
            -->
            */?>
        </ul>
        <ul class="navbar-nav sidenav-toggler">
            <li class="nav-item">
                <a class="nav-link text-center" id="sidenavToggler">
                    <i class="fa fa-fw fa-angle-left"></i>
                </a>
            </li>
        </ul>


        <ul class="navbar-nav ml-auto">
            <?/*
            <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle mr-lg-2" id="messagesDropdown" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fa fa-fw fa-bell"></i>
            <span class="d-lg-none">Messages
            <span class="badge badge-pill badge-primary">12 New</span>
            </span>
            <span class="indicator text-primary d-none d-lg-block">
            <i class="fa fa-fw fa-circle"></i>
            </span>
            </a>
            <div class="dropdown-menu" aria-labelledby="messagesDropdown">
            <h6 class="dropdown-header">New Messages:</h6>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">
            <strong>David Miller</strong>
            <span class="small float-right text-muted">11:21 AM</span>
            <div class="dropdown-message small">Hey there! This new version of SB Admin is pretty awesome! These messages clip off when they reach the end of the box so they don't overflow over to the sides!</div>
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">
            <strong>Jane Smith</strong>
            <span class="small float-right text-muted">11:21 AM</span>
            <div class="dropdown-message small">I was wondering if you could meet for an appointment at 3:00 instead of 4:00. Thanks!</div>
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">
            <strong>John Doe</strong>
            <span class="small float-right text-muted">11:21 AM</span>
            <div class="dropdown-message small">I've sent the final files over to you for review. When you're able to sign off of them let me know and we can discuss distribution.</div>
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item small" href="#">View all messages</a>
            </div>
            </li>
            */?>
            <?php if ($this->dx_auth->is_logged_in()) { ?>
            <li class="dropdown">
                <a class="nav-link dropdown-toggle mr-lg-2" id="alertsDropdown" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fa fa-user fa-fw"></i> <?=$this->dx_auth->get_username()?>
                </a>
                <div class="dropdown-menu" aria-labelledby="alertsDropdown">
                    <a href="member/profile/"><i class="dropdown-item fa fa-user fa-fw"></i> User Profile</a>
                    <div class="dropdown-divider"></div>
                    <a href="#"><i class="dropdown-item fa fa-gear fa-fw"></i> Settings</a>
                    <div class="dropdown-divider"></div>
                    <a href="#" data-toggle="modal" data-target="#exampleModal" >
                            <i class="dropdown-item fa fa-sign-out fa-fw"></i>Logout</a>    
                </div>
            </li>
            <?php } else {?>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url() ?>auth"><i class="fa fa-fw fa-sign-in"></i>Login</a>
            </li>
            <?}?>
            <?/*
            <li class="nav-item">
                <form class="form-inline my-2 my-lg-0 mr-lg-2">
                    <div class="input-group">
                        <input class="form-control" type="text" placeholder="Search for...">
                        <span class="input-group-btn">
                            <button class="btn btn-primary" type="button">
                                <i class="fa fa-search"></i>
                            </button>
                        </span>
                    </div>
                </form>
            </li>
            */?>
        </ul>

    </div>
</nav>
