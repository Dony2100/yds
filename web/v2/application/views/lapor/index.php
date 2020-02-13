<style>
table#table {
    max-width:2000px;
}
</style>

<div class="card mb-3">
    <div class="card-header">
    <i class="fa fa-gears"></i> <b>Filter</b>
    </div>
    <div class="card-body">

        <form id="form-filter" class="form-horizontal">
        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <label for="status" class="col-md-8 control-label">Status</label>
                    <div class="col-md-8">
                        <?php
                        $dropdown_laporan = ['' => '- Pilih Status Laporan -'];
                        $status_laporan = $this->status_laporan; 
                        foreach ($this->status_laporan as $key => $value) {
                            $dropdown_laporan[$value] = $value;
                        }
                        ?>
                        <?php echo form_dropdown(array('name'=>'status','id'=>'status','class'=>'form-control'), $dropdown_laporan, set_value('status')) ?>
                        <span class="text-danger"><?php echo form_error('status');?></span>
                    </div>
                </div>

                <div class="form-group">
                    <label for="prioritas" class="col-md-8 control-label">Prioritas</label>
                    <div class="col-md-8">
                        <?php
                        $dropdown_prioritas = ['' => '- Pilih Prioritas -'];
                        $status_laporan = $this->status_laporan; 
                        foreach ($this->prioritas_laporan as $key => $value) {
                            $dropdown_prioritas[$value] = $value;
                        }
                        ?>
                        <?php echo form_dropdown(array('name'=>'prioritas','id'=>'prioritas','class'=>'form-control'), $dropdown_prioritas, set_value('prioritas')) ?>
                        <span class="text-danger"><?php echo form_error('prioritas');?></span>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="form-group">
                    <label for="judul" class="col-md-8 control-label">Judul Hoax</label>
                    <div class="col-md-8">
                        <input type="text" name="judul" value="<?php echo set_value('judul'); ?>" class="form-control" id="judul" autocomplete="off" />
                        <span class="text-danger"><?php echo form_error('judul');?></span>
                    </div>
                </div>

                <div class="form-group">
                    <label for="assignee" class="col-md-8 control-label">Assignee</label>
                    <div class="col-md-8">
                        <input type="text" name="assignee" value="<?php echo set_value('assignee'); ?>" class="form-control" id="assignee" autocomplete="off" />
                        <span class="text-danger"><?php echo form_error('assignee');?></span>
                    </div>
                </div>

            </div>

            <div class="col-md-4">
                <div class="form-group">
                    <label for="nama" class="col-md-8 control-label">Nama Pelapor</label>
                    <div class="col-md-8">
                        <input type="text" name="nama" value="<?php echo set_value('nama'); ?>" class="form-control" id="nama" autocomplete="off" />
                        <span class="text-danger"><?php echo form_error('nama');?></span>
                    </div>
                </div>

                <div class="form-group">
                    <label for="email" class="col-md-8 control-label">Email Pelapor</label>
                    <div class="col-md-8">
                        <input type="text" name="email" value="<?php echo set_value('email'); ?>" class="form-control" id="email" autocomplete="off" />
                        <span class="text-danger"><?php echo form_error('email');?></span>
                    </div>
                </div>
            </div>

        </div>
        </form>
        
        <div class="row">
            <div class="col-md-12" style="text-align: center">
                <a href="#" id="btn-filter" class="btn btn-success"><i class="fa fa-search"></i> Filter</a>
                <a href="#" id="btn-reset" class="btn btn-warning"><i class="fa fa-repeat"></i> Reset</a>
            </div>
        </div>

    </div>
</div>

<!-- DataTables Card-->
<div class="card mb-3">
    <div class="card-header"><i class="fa fa-book"></i> Data Lapor</div>
    <div class="card-body">
      <div class="table-responsive">
        <?php echo form_open($this->uri->uri_string()."/delete") ?>
        <table class="table table-condensed stripe" id="laporan-internal" width="100%" cellspacing="0">
          <thead>
            <tr>
                <th style="white-space:nowrap">No</th>
                <th><i class="fa fa-check-square-o"></i></th>
                <th>Judul Hoax</th>
                <th>Nama Pelapor</th>
                <th>Email</th>
                <th>Status</th>
                <th>Assignee</th>
                <th>Prioritas</th>
                <th><i class="fa fa-wrench"></i></th>
            </tr>
          </thead>

          <tbody></tbody>
          
          <tfoot>
            <tr>
                <th colspan='6'><a class="btn btn-primary" href="<?php echo site_url('lapor/add') ?>"><i class="fa fa-plus"></i> Add Data</a>
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
