<div class="card-header">Edit Data</div>
<div class="card-body">

<?php echo form_open('main_data/edit/'.$antihoax['id'],array("class"=>"form-horizontal")); ?>

	<div class="form-group">
		<label for="status" class="col-md-4 control-label">Status</label>
		<div class="col-md-8">
                    <?php   echo form_dropdown( array('name'=>'status','id'=>'status','class'=>'form-control'), 
                                                $this->status_data, 
                                                ($this->input->post('status') ? $this->input->post('status') : $antihoax['status']));?>
                </div>
	</div>
        <div class="form-group">
		<label for="status" class="col-md-4 control-label">Klasifikasi</label>
		<div class="col-md-8">
                    <?php   echo form_dropdown( array('name'=>'klasifikasi','id'=>'klasifikasi','class'=>'form-control'), 
                                                array('unspecified'=>'Pilih Klasifikasi','HOAX'=>'Hoax','HASUT'=>'Hasut','FITNAH'=>'Fitnah','TRUE'=>'True'), 
                                                ($this->input->post('klasifikasi') ? $this->input->post('klasifikasi') : $antihoax['klasifikasi']));?>
                </div>
	</div>
	<div class="form-group">
		<label for="kesimpulan" class="col-md-4 control-label">Kesimpulan</label>
		<div class="col-md-8">
                    <?php $kesimpulan=trim($this->input->post('kesimpulan') ? $this->input->post('kesimpulan') : $antihoax['kesimpulan']); ?>
                    <?php echo form_textarea(array('name'=>'kesimpulan','id'=>'kesimpulan','class'=>'form-control','rows'=>"5"), $kesimpulan)?>
                </div>
	</div>
	<div class="form-group">
		<label for="isi" class="col-md-4 control-label">Isi</label>
		<div class="col-md-8">
                    <?php $isi=trim($this->input->post('isi') ? $this->input->post('isi') : $antihoax['isi']);?>
                    <?php echo form_textarea(array('name'=>'isi','id'=>'isi','class'=>'form-control','rows'=>"10"), $isi)?>
                </div>
	</div>
	<div class="form-group">
		<label for="fakta" class="col-md-4 control-label">Fakta</label>
		<div class="col-md-8">
                    <?php $fakta=trim($this->input->post('fakta') ? $this->input->post('fakta') : $antihoax['fakta']); ?>
                    <?php echo form_textarea(array('name'=>'fakta','id'=>'fakta','class'=>'form-control','rows'=>"10"), $fakta)?>
		</div>
	</div>
	<div class="form-group">
		<label for="rujukan" class="col-md-4 control-label">Rujukan</label>
		<div class="col-md-8">
                    <?php $rujukan=trim($this->input->post('rujukan') ? $this->input->post('rujukan') : $antihoax['rujukan']); ?>
                    <?php echo form_textarea(array('name'=>'rujukan','id'=>'rujukan','class'=>'form-control','rows'=>"10"), $rujukan)?>
		</div>
	</div>
	<div class="form-group">
		<label for="sumber" class="col-md-4 control-label">Sumber</label>
		<div class="col-md-8">
			<input type="text" name="sumber" value="<?php echo ($this->input->post('sumber') ? $this->input->post('sumber') : $antihoax['sumber']); ?>" class="form-control" id="sumber" />
		</div>
	</div>
	<div class="form-group">
		<label for="gambar1" class="col-md-4 control-label">Gambar1</label>
		<div class="col-md-8">
			<input type="text" name="gambar1" value="<?php echo ($this->input->post('gambar1') ? $this->input->post('gambar1') : $antihoax['gambar1']); ?>" class="form-control" id="gambar1" />
		</div>
	</div>
	<div class="form-group">
		<label for="gambar2" class="col-md-4 control-label">Gambar2</label>
		<div class="col-md-8">
			<input type="text" name="gambar2" value="<?php echo ($this->input->post('gambar2') ? $this->input->post('gambar2') : $antihoax['gambar2']); ?>" class="form-control" id="gambar2" />
		</div>
	</div>
	<div class="form-group">
		<label for="subklarifikasi" class="col-md-4 control-label">Subklarifikasi</label>
		<div class="col-md-8">
			<input type="text" name="subklarifikasi" value="<?php echo ($this->input->post('subklarifikasi') ? $this->input->post('subklarifikasi') : $antihoax['subklarifikasi']); ?>" class="form-control" id="subklarifikasi" />
		</div>
	</div>
	<div class="form-group">
		<label for="tanggal" class="col-md-4 control-label">Tanggal</label>
		<div class="col-md-8">
                    <?php $value_tgl=($this->input->post('tanggal') ? $this->input->post('tanggal') : $antihoax['tanggal']); ?>
                    <input type="date" name="tanggal" value="<?=$value_tgl?>" class="form-control" id="tanggal" />
		</div>
	</div>
	<div class="form-group">
		<label for="tags" class="col-md-4 control-label">Tags</label>
		<div class="col-md-8">
			<input type="text" name="tags" value="<?php echo ($this->input->post('tags') ? $this->input->post('tags') : $antihoax['tags']); ?>" class="form-control" id="tags" />
		</div>
	</div>
	
	<div class="form-group">
		<div class="col-sm-offset-4 col-sm-8">
			<button type="submit" class="btn btn-success">Save</button>
        </div>
	</div>
	
<?php echo form_close(); ?>

</div>