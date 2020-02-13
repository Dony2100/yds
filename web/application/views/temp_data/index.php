<?/*<!-- Breadcrumbs
<ol class="breadcrumb">
    <li class="breadcrumb-item">
      <a href="#">Dashboard</a>
    </li>
    <li class="breadcrumb-item active">Main Data</li>
</ol> -->*/?>

<style>

table#table {
    max-width:2000px;
}

</style>
  
<!-- DataTables Card-->
<div class="card mb-3">
    <div class="card-header"><i class="fa fa-comment-o"></i> Data Input Anti Hoax</div>
    <div class="card-body">
      <div class="table-responsive">
        <?php echo form_open($this->uri->uri_string()."/delete") ?>
        <table class="table table-condensed stripe" id="table" width="100%" cellspacing="0">
          <thead>
            <tr>
                <th style="white-space:nowrap">No</th>
                <th><i class="fa fa-check-square-o"></i></th>
                <th style="white-space:nowrap">Member</th>
                <th style="white-space:nowrap">Status</th>
                <th style="white-space:nowrap">Klasifikasi</th>
                <th style="white-space:nowrap">Kesimpulan</th>
                <th style="width: 500px !important">Isi</th>
                <th style="white-space:nowrap">Fakta</th>
                <th style="white-space:nowrap">Rujukan</th>
                <th style="white-space:nowrap">Sumber</th>
                <th style="white-space:nowrap">Gambar 1</th>
                <th style="white-space:nowrap">Gambar 2</th>
                <th style="white-space:nowrap">Tanggal</th>
                <th style="white-space:nowrap">Tags</th>
                <th style="white-space:nowrap">Last Update</th>
                <th><i class="fa fa-wrench"></i></th>
            </tr>
          </thead>

          <tbody></tbody>
          
          <tfoot>
            <tr>
                <th colspan='16'><a class="btn btn-primary" href="Main_data/add"><i class="fa fa-plus"></i> Add Data</a>
                <?php if($_editor) {?>
                    <button class="btn btn-disabled" disabled><i class="fa fa-trash-o" disabled></i> Delete</button>
                <?} else {?>
                    <a class="btn btn-secondary" data-toggle="modal" data-target="#DelConModal"><i class="fa fa-trash-o" disabled></i> Delete</a>
                <?}?>
                </th>
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
              <div class="modal-body">Are you sure?<br/>Select "Delete" below if you are sure want to delete these data.</div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary fa fa-close" data-dismiss="modal"> Cancel</button>
                <button type="submit" class="btn btn-danger fa fa-check" id="btnDelteYes" href="#"> Delete</button>
              </div>
            </div>
          </div>
        </div>     
      
      <?php echo form_close(); ?>
      
      </div>
    </div>
    <div class="card-footer small text-muted">Updated <?=$last_update?></div>
    
</div>
