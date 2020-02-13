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
            <a class="btn btn-primary" href="<?php echo base_url() ?>auth/logout">Logout</a>
          </div>
        </div>
      </div>
    </div>

    
    
    <!-- Core plugin JavaScript-->
    <script src="<?php echo base_url() ?>theme/vendor/jquery-easing/jquery.easing.min.js"></script>
    
    <script src="<?php echo base_url() ?>theme/vendor/datatables/js/jquery.dataTables.min.js"></script>
    <script src="<?php echo base_url() ?>theme/vendor/datatables/js/dataTables.bootstrap4.min.js"></script>
    <script src="<?php echo base_url() ?>theme/js/sb-admin-datatables.min.js"></script>
    <script src="<?php echo base_url() ?>theme/vendor/datatables/js/dataTables.fixedColumns.min.js"></script>
    
    <?php /*
    //using chart if in uri 'Dashboard'
    if($this->uri->segment(1) == 'Dashboard'): 
    ?>
    <script src="<?php echo base_url() ?>theme/vendor/chart.js/Chart.min.js"></script>
    <script src="<?php echo base_url() ?>theme/js/sb-admin-charts.min.js"></script>
    <?php endif */?>

    <!-- Custom scripts for all pages-->
    <script src="<?php echo base_url() ?>theme/js/sb-admin.min.js"></script>
    
    <!-- Custom scripts for this page-->
    <script src="<?php echo base_url() ?>theme/js/sb-admin-datatables.min.js"></script>
    
    <!-- Column fix -->
    <script src="<?php echo base_url() ?>theme/vendor/datatables/js/dataTables.fixedColumns.min.js"></script>
    
<?/*
    
  

    <!-- Delete Confirmation -->
    <script src="theme/vendor/bootstrap/js/bootstrap-confirmation.min.js"></script>
    
    <!-- Swal Sweet Alert -->
    <script src="theme/vendor/swal2/sweetalert2.min.js"></script>


    
    <!-- Gijgo datepicker -->
    <script src="theme/js/gijgo.js"></script>  */?>
    