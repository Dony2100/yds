<div class="card-header">Add Data</div>
<div class="card-body">

<?php echo form_open('main_data/add',array("class"=>"form-horizontal")); ?>

	<div class="form-group">
            <label for="status" class="col-md-4 control-label">Status</label>
            <div class="col-md-8">
                <?php   echo form_dropdown( array('name'=>'status','id'=>'status','class'=>'form-control'), 
                                            $this->status_data, 
                                            $this->input->post('status'))?>
            </div>
	</div>
        <div class="form-group">
            <label for="status" class="col-md-4 control-label">Klasifikasi</label>
            <div class="col-md-8">
                <?php   echo form_dropdown( array('name'=>'klasifikasi','id'=>'klasifikasi','class'=>'form-control'), 
                                            array('unspecified'=>'Pilih Klasifikasi','HOAX'=>'Hoax','HASUT'=>'Hasut','FITNAH'=>'Fitnah','TRUE'=>'True'), 
                                            $this->input->post('klasifikasi'))?>
            </div>
	</div>
	<div class="form-group">
            <label for="kesimpulan" class="col-md-4 control-label">Kesimpulan</label>
            <div class="col-md-8">
                <?php echo form_textarea(array('name'=>'kesimpulan','id'=>'kesimpulan','class'=>'form-control','rows'=>"5"), trim(""))?>
            </div>
	</div>
	<div class="form-group">
            <label for="isi" class="col-md-4 control-label">Isi</label>
            <div class="col-md-8">
                <?php $val_isi = $this->input->post('isi'); ?>
                <?php echo form_textarea(array('name'=>'isi','id'=>'isi','class'=>'form-control','rows'=>"10"), trim($val_isi))?>
            </div>
	</div>
	<div class="form-group">
            <label for="fakta" class="col-md-4 control-label">Fakta</label>
            <div class="col-md-8">
                <?php $val_fakta = $this->input->post('fakta'); ?>
                <?php echo form_textarea(array('name'=>'fakta','id'=>'fakta','class'=>'form-control','rows'=>"10"), trim($val_fakta))?>
            </div>
	</div>
	<div class="form-group">
            <label for="rujukan" class="col-md-4 control-label">Rujukan</label>
            <div class="col-md-8">
                <?php $val_rujukan = $this->input->post('rujukan'); ?>
                <?php echo form_textarea(array('name'=>'rujukan','id'=>'rujukan','class'=>'form-control','rows'=>"10"), trim($val_rujukan))?>
            </div>
	</div>
	<div class="form-group">
            <label for="sumber" class="col-md-4 control-label">Sumber</label>
            <div class="col-md-8">
                <input type="text" name="sumber" value="<?php echo $this->input->post('sumber'); ?>" class="form-control" id="sumber" />
            </div>
	</div>
	<div class="form-group">
            <label for="gambar1" class="col-md-4 control-label">Gambar1</label>
            <div class="col-md-8">
                <input type="text" name="gambar1" value="<?php echo $this->input->post('gambar1'); ?>" class="form-control" id="gambar1" />
            </div>
	</div>
	<div class="form-group">
            <label for="gambar2" class="col-md-4 control-label">Gambar2</label>
            <div class="col-md-8">
                <input type="text" name="gambar2" value="<?php echo $this->input->post('gambar2'); ?>" class="form-control" id="gambar2" />
            </div>
	</div>
	<div class="form-group">
            <label for="subklarifikasi" class="col-md-4 control-label">Subklarifikasi</label>
            <div class="col-md-8">
                 <input type="text" name="subklarifikasi" value="<?php echo $this->input->post('subklarifikasi'); ?>" class="form-control" id="subklarifikasi" />
            </div>
	</div>
        <div class="form-group"> 
            <label for="tanggal" class="col-md-4 control-label">Tanggal</label>
            <div class="input-group date col-md-4">
                <input type="date" class="form-control" id="dateselect" value='<?=date('Y-m-d')?>'>
            </div>        
        </div>
	<div class="form-group">
            <label for="tags" class="col-md-4 control-label">Tags</label>
            <div class="col-md-8">
                <input type="text" name="tags" value="<?php echo $this->input->post('tags'); ?>" class="form-control" id="tags" />
            </div>
	</div>
	<div class="form-group">
            <div class="col-sm-offset-4 col-sm-8">
                <button type="submit" class="btn btn-success">Save</button>
            </div>
	</div>

<?php echo form_close(); 
$this->noscript=TRUE;?>

</div>
