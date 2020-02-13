<div class="card mb-3">
    <div class="card-header"><i class="fa fa-book"></i> Edit Laporan</div>
    <?php echo form_open_multipart('', array("class"=>"form-horizontal")) ?>
    <input type="hidden" value="<?php echo $lapor->id ?>" name="id">
    <div class="card-body">
        <p><?php echo validation_errors(); ?> </p>
        <div class="form-group">
            <label for="nama" class="col-md-4 control-label">Nama</label>
            <div class="col-md-8">
                <input type="text" name="nama" value="<?php echo set_value('nama', $lapor->nama); ?>" class="form-control" id="nama" />
                <span class="text-danger"><?php echo form_error('nama');?></span>
            </div>
        </div>

        <div class="form-group">
            <label for="email" class="col-md-4 control-label">Email</label>
            <div class="col-md-8">
                <input type="text" name="email" value="<?php echo set_value('email', $lapor->email); ?>" class="form-control" id="email" />
                <span class="text-danger"><?php echo form_error('email');?></span>
            </div>
        </div>

        <div class="form-group">
            <label for="judul" class="col-md-4 control-label">Judul</label>
            <div class="col-md-8">
                <input type="text" name="judul" value="<?php echo set_value('judul', $lapor->judul); ?>" class="form-control" id="judul" />
                <span class="text-danger"><?php echo form_error('judul');?></span>
            </div>
        </div>

        <div class="form-group">
            <label for="teks_hoax" class="col-md-12 control-label">Teks Hoax, (copy-paste apa adanya, jangan ada yang diubah)</label>
            <div class="col-md-8">
                <?php echo form_textarea(array('name'=>'teks_hoax','id'=>'teks_hoax','class'=>'form-control','rows'=>"5"), trim(set_value('teks_hoax', $lapor->teks_hoax)))?>
                <span class="text-danger"><?php echo form_error('teks_hoax');?></span>
            </div>
        </div>

        <div class="form-group">
            <label for="pesan" class="col-md-4 control-label">Pesan dari Anda</label>
            <div class="col-md-8">
                <?php echo form_textarea(array('name'=>'pesan','id'=>'pesan','class'=>'form-control','rows'=>"5"), trim(set_value('pesan', $lapor->pesan)))?>
                <span class="text-danger"><?php echo form_error('pesan');?></span>
            </div>
        </div>

    	<div class="form-group">
            <label for="status" class="col-md-4 control-label">Status</label>
            <div class="col-md-8">
                <?php echo form_dropdown(array('name'=>'status','id'=>'status','class'=>'form-control'), $status_laporan, set_value('status', $lapor->status)) ?>
                <span class="text-danger"><?php echo form_error('status');?></span>
            </div>
    	</div>

        <div class="form-group">
            <label for="status" class="col-md-4 control-label">Proritas</label>
            <div class="col-md-8">
                <?php echo form_dropdown( array('name'=>'prioritas','id'=>'prioritas','class'=>'form-control'), $prioritas_laporan, set_value('prioritas', $lapor->prioritas))?>
                <span class="text-danger"><?php echo form_error('prioritas');?></span>
            </div>
    	</div>

        <div class="form-group">
        	<?php
        	if($lapor->screenshot_1 !== null){
        		$gb = '(<a href="'.base_url().$this->lapor_path.$lapor->screenshot_1.'" target="_blank">Lihat Screenshot</a>)';
        	}else{
        		$gb = "";
        	}
        	?>
            <label for="status" class="col-md-4 control-label">Gambar 1 <?php echo $gb ?></label>
            <div class="col-md-8">
                <input id="gambar-1" type="file" name="userFiles[]">
                <?php
                if( isset($error_upload[0]) ){
                    echo '<span class="text-danger">'.$error_upload[0].'</span>';
                }
                ?>
            </div>
        </div>

        <div class="form-group">
        	<?php
        	if($lapor->screenshot_2 !== null){
        		$gb = '(<a href="'.base_url().$this->lapor_path.$lapor->screenshot_2.'" target="_blank">Lihat Screenshot</a>)';
        	}else{
        		$gb = "";
        	}
        	?>
            <label for="status" class="col-md-4 control-label">Gambar 2 <?php echo $gb ?></label>
            <div class="col-md-8">
                <input id="gambar-2" type="file" name="userFiles[]">
                <?php
                if( isset($error_upload[1]) ){
                    echo '<span class="text-danger">'.$error_upload[1].'</span>';
                }
                ?>
            </div>
        </div>

        <!-- <div class="form-group">
        	<?php
        	// if($lapor->screenshot_3 !== null){
        	// 	$gb = '(<a href="'.base_url().$this->lapor_path.$lapor->screenshot_3.'" target="_blank">Lihat Screenshot</a>)';
        	// }else{
        	// 	$gb = "";
        	// }
        	?>
            <label for="status" class="col-md-4 control-label">Gambar 3 <?php // echo $gb ?></label>
            <div class="col-md-8">
                <input id="gambar-3" type="file" name="userFiles[]">
                <?php //= isset($error_upload_gb_3) ? $error_upload_gb_3 : '' ?>
            </div>
        </div> -->

        <!-- <div class="form-group">
        	<?php
        	// if($lapor->screenshot_4 !== null){
        	// 	$gb = '(<a href="'.base_url().$this->lapor_path.$lapor->screenshot_4.'" target="_blank">Lihat Screenshot</a>)';
        	// }else{
        	// 	$gb = "";
        	// }
        	?>
            <label for="status" class="col-md-4 control-label">Gambar 4 <?php // echo $gb ?></label>
            <div class="col-md-8">
                <input id="gambar-4" type="file" name="userFiles[]">
                <?php //= isset($error_upload_gb_4) ? $error_upload_gb_4 : '' ?>
            </div>
        </div> -->

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
