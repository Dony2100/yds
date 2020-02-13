<?php $this->load->view('layouts/flash_message') ?>

<div class="card mb-3">
    <div class="card-header"><i class="fa fa-book"></i> Add Lapor</div>
    <?php echo form_open_multipart('lapor/add_public', array("class"=>"form-horizontal")) ?>
    <div class="card-body">
        <p><?php //echo validation_errors(); ?> </p>
        <div class="form-group">
            <label for="nama" class="col-md-4 control-label">Nama</label>
            <div class="col-md-8">
                <input type="text" name="nama" value="<?php echo set_value('nama'); ?>" class="form-control" id="nama" />
                <span class="text-danger"><?php echo form_error('nama');?></span>
            </div>
        </div>

        <div class="form-group">
            <label for="email" class="col-md-4 control-label">Email</label>
            <div class="col-md-8">
                <input type="text" name="email" value="<?php echo set_value('email'); ?>" class="form-control" id="email" />
                <span class="text-danger"><?php echo form_error('email');?></span>
            </div>
        </div>

        <div class="form-group">
            <label for="judul" class="col-md-4 control-label">Judul</label>
            <div class="col-md-8">
                <input type="text" name="judul" value="<?php echo set_value('judul'); ?>" class="form-control" id="judul" />
                <span class="text-danger"><?php echo form_error('judul');?></span>
            </div>
        </div>

        <div class="form-group">
            <label for="teks_hoax" class="col-md-12 control-label">Teks Hoax, (copy-paste apa adanya, jangan ada yang diubah)</label>
            <div class="col-md-8">
                <?php echo form_textarea(array('name'=>'teks_hoax','id'=>'teks_hoax','class'=>'form-control','rows'=>"5"), trim(set_value('teks_hoax')))?>
                <span class="text-danger"><?php echo form_error('teks_hoax');?></span>
            </div>
        </div>

        <div class="form-group">
            <label for="pesan" class="col-md-4 control-label">Pesan dari Anda</label>
            <div class="col-md-8">
                <?php echo form_textarea(array('name'=>'pesan','id'=>'pesan','class'=>'form-control','rows'=>"5"), trim(set_value('pesan')))?>
                <span class="text-danger"><?php echo form_error('pesan');?></span>
            </div>
        </div>

    	<div class="form-group">
            <label for="status" class="col-md-4 control-label">Status</label>
            <div class="col-md-8">
                <?php echo form_dropdown(array('name'=>'status','id'=>'status','class'=>'form-control'), $status_laporan, set_value('status')) ?>
                <span class="text-danger"><?php echo form_error('status');?></span>
            </div>
    	</div>

        <div class="form-group">
            <label for="status" class="col-md-4 control-label">Proritas</label>
            <div class="col-md-8">
                <?php echo form_dropdown( array('name'=>'prioritas','id'=>'prioritas','class'=>'form-control'), $prioritas_laporan, set_value('prioritas'))?>
                <span class="text-danger"><?php echo form_error('prioritas');?></span>
            </div>
    	</div>

        <div class="form-group">
            <label for="status" class="col-md-4 control-label">Gambar 1</label>
            <div class="col-md-8">
                <input id="gambar-1" type="file" name="userFiles[]" value="<?=set_value('gambar_1')?>">
                <?php
                if( isset($error_upload[0]) ){
                    echo '<span class="text-danger">'.$error_upload[0].'</span>';
                }
                ?>
            </div>
        </div>

        <div class="form-group">
            <label for="status" class="col-md-4 control-label">Gambar 2</label>
            <div class="col-md-8">
                <input id="gambar-2" type="file" name="userFiles[]" value="<?=set_value('gambar_2')?>">
                <?php
                if( isset($error_upload[1]) ){
                    echo '<span class="text-danger">'.$error_upload[1].'</span>';
                }
                ?>
            </div>
        </div>

        <!-- <div class="form-group">
            <label for="status" class="col-md-4 control-label">Gambar 3</label>
            <div class="col-md-8">
                <input id="gambar-3" type="file" name="userFiles[]" value="<?php //=set_value('gambar_3')?>">
                <?php //= isset($error_upload_gb_3) ? $error_upload_gb_3 : '' ?>
            </div>
        </div> -->

        <!-- <div class="form-group">
            <label for="status" class="col-md-4 control-label">Gambar 4</label>
            <div class="col-md-8">
                <input id="gambar-4" type="file" name="userFiles[]" value="<?php //=set_value('gambar_4')?>">
                <?php //= isset($error_upload_gb_4) ? $error_upload_gb_4 : '' ?>
            </div>
        </div> -->

        <div class="form-group" style="padding: 15px;">
            <?php echo $recaptcha_widget;?>
            <?php echo $recaptcha_script;?>
            <span class="text-danger"><?php echo form_error('g-recaptcha-response');?></span>
            <br>
        </div>

    </div>

    <div class="card-footer small text-muted">
        <div class="form-group">
            <div class="col-sm-offset-4 col-sm-8">
                <button type="submit" class="btn btn-success">Save</button>
                &emsp;
                <a href="<?= site_url('lapor') ?>" class="btn btn-warning">Cancel</a>
            </div>
        </div>
    </div>

    <?php echo form_close(); ?>
</div>
<?php $this->noscript=TRUE; ?>
