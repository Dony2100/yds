<!DOCTYPE html>
<html lang="en">
    
    <head>
            <meta charset="utf-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <meta name="description" content="">
            <meta name="author" content="">

            <link rel="icon" href="<?=site_url()?>assets/img/faveicon.png" type="image/png" />

            <!-- Bootstrap core CSS -->
            <link href="<?=base_url()?>theme/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
            <link href="<?=base_url()?>theme/vendor/bootstrap/css/bootstrap-datepicker.standalone.min.css" rel="stylesheet">

            <!-- Custom fonts for this template-->
            <link href="<?=base_url()?>theme/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

            <!-- Page level plugin CSS-->
            <?/*
            <!-- <link href="<?=base_url()?>theme/vendor/datatables/css/dataTables.bootstrap.min.css" rel="stylesheet"> -->
            <!-- <link href="<?=base_url()?>theme/vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet"> -->*/?>
            <link href="<?=base_url()?>theme/vendor/datatables/css/jquery.dataTables.min.css" rel="stylesheet">

            <!-- Custom styles for this template -->
            <link href="<?=base_url()?>theme/css/sb-admin.css" rel="stylesheet">

            <?/*
            <link href="<?=base_url()?>theme/css/gijgo.css" rel="stylesheet">

            <link rel="stylesheet" href="theme/vendor/swal2/sweetalert2.min.css" type="text/css" /> */?>

            <title>Yudistira</title>
    </head>


    <!-- <body class="bg-dark">
    <body class="fixed-nav sticky-footer bg-dark" id="page-top">	-->
    <body>

        <?php //$this->load->view('layouts/navbar');?>
        
 <?php $this->load->helper('form');
 echo form_open('main_data/add',array("class"=>"form-horizontal")); ?>

        <!-- Page Content -->
        <div class="content-wrapper">
            <div class="container-fluid">

<div class="card-header">Add Data</div>
<div class="card-body">

<?php echo form_open('main_data/add',array("class"=>"form-horizontal")); ?>

        <div class="form-group"> 
                <label for="tanggal" class="col-md-4 control-label">Tanggal</label>
                <div class="input-group date col-md-2">
                    <input type="text" class="form-control" id="datepickers" placeholder="MM/DD/YYYY">
                </div>        
        </div>

<?php echo form_close(); 
$this->noscript=TRUE;?>

</div>

<?php echo form_close(); ?>               
                
                
</div>                
                
                
                
                

            </div> <!-- /.class inside -->
        </div> <!-- /class outside -->

    <footer class="sticky-footer">
      <div class="container">
        <div class="text-center">
          <small>Copyright © Mafindo 2017</small>
        </div>
      </div>
    </footer>
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fa fa-angle-up"></i>
    </a>
    <!-- Logout Modal-->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" href="auth/logout">Logout</a>
          </div>
        </div>
      </div>
    </div>

    <!-- Bootstrap core and JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    
    <!-- Bootstrap core JavaScript-->
    <script src="theme/vendor/jquery/jquery.min.js"></script>
    
    <script src="theme/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    
    <!-- Core plugin JavaScript-->
    <script src="theme/vendor/jquery-easing/jquery.easing.min.js"></script>
    
    <?/*
    <!-- Page level plugin JavaScript-->
    <!--
    <script src="theme/vendor/datatables/dataTables.bootstrap4.js"></script>
    -->
    */?>
    
    <script src="theme/vendor/datatables/js/jquery.dataTables.min.js"></script>
    
    <script src="theme/vendor/chart.js/Chart.min.js"></script>
    
    <!-- Custom scripts for all pages-->
    <script src="theme/js/sb-admin.min.js"></script>
    
    <!-- Custom scripts for this page-->
    <script src="theme/js/sb-admin-datatables.min.js"></script>
    <script src="theme/js/sb-admin-charts.min.js"></script>
    
    <script src="theme/vendor/bootstrap/js/bootstrap-datepicker.min.js"></script>
    <script>$('#datepickers').datepicker();</script>    
        
<script type="text/javascript">
 
var table;
 
$(document).ready(function() {
 
    //datatables
    table = $('#table').DataTable({ 
 
        "processing": true, //Feature control the processing indicator.
        "serverSide": true, //Feature control DataTables' server-side processing mode.
        "order": [], //Initial no order.
 
        // Load data for the table's content from an Ajax source
        "ajax": {
            "url": "<?php echo site_url('main_data/ajax_main_1711111320')?>",
            "type": "POST"
        },
 
        //Set column definition initialisation properties.
        "autoWidth": false,
        columnDefs: [
            { "width": "50%", "targets": 5 },
            {
            "targets": [ 0,1,15 ], //first column / numbering column
            "orderable": false //set not orderable
            }
        ],
        fixedColumns: true
 
    });
    
});

</script>
        
    </body>
</html>
