<!-- Breadcrumbs-->
<!--
<ol class="breadcrumb">
    <li class="breadcrumb-item">
      <a href="#">Dashboard</a>
    </li>
    <li class="breadcrumb-item active">Clients</li>
</ol>
-->
<!-- DataTables Card-->
<div class="card mb-3">
    <div class="card-header">
      <i class="fa fa-server"></i> Data Client</div>
    <div class="card-body">

      <div class="table-responsive">
        <?php echo form_open($this->uri->uri_string()."/delete") ?>
        <table class="table table-condensed stripe" id="table" width="100%" cellspacing="0">
          <thead>
            <tr>
                <th style="white-space:nowrap">No</th>
                <th><i class="fa fa-check-square-o"></i></th>
                <th style="white-space:nowrap">Member</th>
                <th style="white-space:nowrap">email</th>
                <th style="white-space:nowrap">Domain</th>
                <th style="white-space:nowrap">IP</th>
                <th style="white-space:nowrap">Quota</th>
                <th style="white-space:nowrap">Status</th>
                <th style="white-space:nowrap">Expired</th>
                <th style="white-space:nowrap">Last Request</th>
                <th style="white-space:nowrap">Last Update</th>
                <th><i class="fa fa-wrench"></i></th>
            </tr>
          </thead>


          
          <tfoot>
            <tr>
            <th colspan='12'><a class="btn btn-primary" href="client/add"><i class="fa fa-plus"></i> Add Client</a> 
                <a class="btn btn-secondary" data-toggle="modal" data-target="#DelConModal"><i class="fa fa-trash-o"></i> Delete</a>
                <!--
                <a class='fa fa-trash' href='#' data-toggle="confirmation">Del<a></th> 
                <a class="btn btn-large btn-primary" data-toggle="confirmation" data-title="Open Google?"
   href="#" target="_blank">Confirmation</a> -->
            </tr>
          </tfoot>
        </table>
          
        <!-- Delete Confirmation Modal-->
        <div class="modal fade" id="DelConModal" tabindex="-1" role="dialog" aria-labelledby="DelConModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="DelConModalLabel"><i class="fa fa-question-circle-o"></i> Delete confirmation</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true"><i class='fa fa-close'></i></span>
                </button>
              </div>
              <div class="modal-body">Are you sure?<br/>Select "Delete" below if you are sure want to delete these clients.</div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary fa fa-close" data-dismiss="modal"> No</button>
                <button type="submit" class="btn btn-danger fa fa-check" id="btnDelteYes" href="#"> Delete</button>
              </div>
            </div>
          </div>
        </div>
        
        <?php echo form_close(); ?>

       </div>
     </div>
    <div class="card-footer small"></div>
    
</div> <!-- /.DataTables Card -->