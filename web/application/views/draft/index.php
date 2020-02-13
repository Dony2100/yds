<?/*<!-- Breadcrumbs
<ol class="breadcrumb">
    <li class="breadcrumb-item">
      <a href="#">Dashboard</a>
    </li>
    <li class="breadcrumb-item active">Main Data</li>
</ol> -->*/?>

<style>
.btn-neutral {
    background: #ff8800;
    color: #ffffff;
}
table#table {
    max-width:2000px;
}

</style>
  
<!-- DataTables Card-->
<div class="card mb-3">
    <div class="card-header"><i class="fa fa-connectdevelop"></i> Draft Anti Hoax</div>
    <div class="card-body">
      <div class="table-responsive">
        <?php echo form_open($this->uri->uri_string()."/delete") ?>
        <table class="table table-condensed stripe" id="table" width="100%" cellspacing="0">
          <thead>
            <tr>
                <th style="white-space:nowrap">No. <i class="fa fa-check-square-o"></i></th>
                <th style="white-space:nowrap">Editor</th>
                <th style="white-space:nowrap">Status</th>
                <th style="white-space:nowrap">Title</th>
                <th style="width: 500px !important">Claim</th>
                
                <th style="white-space:nowrap">Date</th>
                <th style="white-space:nowrap">Tags</th>
                <th style="white-space:nowrap">Last Update</th>
                
                <th><i class="fa fa-wrench"></i></th>
            </tr>
          </thead>

          <tbody></tbody>
          
          <tfoot>
            <tr>
                <td colspan='9'>
                <?php if($_editor) {?>
                    <button class="btn btn-disabled" disabled><i class="fa fa-trash" disabled></i> Delete</button>
                <?} else {?>
                    <a class="btn btn-danger" data-toggle="modal" data-target="#DelConModal"><i class="fa fa-trash" disabled></i> 
                        <span class="text-white">Delete</span></a>
                <?}?>
                <a class="btn btn-primary" data-toggle="modal" data-target="#PublishConModal"><i class="fa fa-check"></i> 
                    <span class="text-white">Publish</span></a>
                </td>
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
              <div class="modal-body">
                  Are you sure? <span class="text-danger">All selected data will be DELETED.</span><br/>
                  Select "<span class="text-danger">Delete</span>" below if you are really sure want to do it.</div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal"> Cancel</button>
                <button type="submit" class="btn btn-danger" id="btnDeleteYes" name="delete"><span class="fa fa-check"></span> Delete</button>
              </div>
            </div>
          </div>
        </div>
        
        <!-- Publish Confirmation Modal-->
        <div class="modal fade" id="PublishConModal" tabindex="-1" role="dialog" aria-labelledby="PublishConModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="PublishConModalLabel"><i class="fa fa-question-circle-o"></i> Publish confirmation</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true"><i class='fa fa-close'></i></span>
                </button>
              </div>
              <div class="modal-body">
                  Are you sure? All selected data will be published now <br/>
                  (keep selected data <span class="text-danger">no more than 10 row at once</span>).<br/>
                  Select "<span class="text-primary">Publish</span>" below if you are sure ready to do it.
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal"><span class="fa fa-close"></span> Cancel</button>
                <button type="submit" class="btn btn-primary" id="btnPublishYes" name="publish"><span class="fa fa-check"></span> Publish</button>
              </div>
            </div>
          </div>
        </div>          

        <?php echo form_close(); ?>        
      </div>
    </div>
    <div class="card-footer small text-muted">Updated <?=$last_update?></div>
    
</div>
