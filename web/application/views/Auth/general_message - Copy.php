<!DOCTYPE html>
<html lang="en">
  <head>
  	<meta http-equiv="refresh" content="5; url=<?=base_url();?>" />
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>TurnBack Hoax</title>
    <!-- Bootstrap core CSS -->
    <link href="<?=base_url()?>theme/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<!-- Custom fonts for this template-->
	<link href="<?=base_url()?>theme/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<!-- Page level plugin CSS-->
	<link href="<?=base_url()?>theme/vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
    <link href="<?=base_url()?>theme/vendor/datatables/css/dataTables.bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="<?=base_url()?>theme/css/sb-admin.css" rel="stylesheet">
  </head>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
  
<? $this->load->view('navbar');?>

  <div class="content-wrapper">
    <div class="container-fluid">
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
      
      <div>Return to <a href=<?=base_url()."home";?>>Home</a></div>	    
    </div> <!-- /.container-fluid-->
  </div> <!-- /content-wrapper -->
<? $this->load->view('footer');?>