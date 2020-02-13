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
                        <input type="text" name="judul" value="<?php echo set_value('judul'); ?>" class="form-control" id="judul" autocomplete="off"/>
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

<div class="card mb-3">
    <div class="card-header">
    <i class="fa fa-gears"></i> <b>Data Laporan</b>
    </div>
    <div class="card-body">

        <div id="hasil">
            <table class="table table-bordered" id="laporan-public" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Judul Hoax</th>
                        <th>Nama Pelapor</th>
                        <th>Email</th>
                        <th>Status</th>
                        <th>Assignee</th>
                        <th>Prioritas</th>
                    </tr>
                </thead>
            </table>
        </div>

    </div>
</div>
