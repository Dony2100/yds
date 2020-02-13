<div class="card-header">Edit Author</div>
<div class="card-body">

<?php //echo form_open('author/edit/'.$data['id'],array("class"=>"form-horizontal")); ?>
<?php echo form_open_multipart($form.$data['id'],array("class"=>"form-horizontal"));?>

	<div class="form-group">
		<label for="nama" class="col-md-4 control-label"><span class="text-danger">*</span>Nama</label>
		<div class="col-md-8">
			<input type="text" name="nama" value="<?php echo ($this->input->post('nama') ? $this->input->post('nama') : $data['nama']); ?>" class="form-control" id="nama" />
			<span class="text-danger"><?php echo form_error('nama');?></span>
		</div>
	</div>
	<div class="form-group">
		<label for="nama" class="col-md-4 control-label">Deskripsi</label>
		<div class="col-md-8">
                        <?php
                        $attr = array(
                            'name'        => 'deskripsi',
                            'id'          => 'deskripsi',
                            'value'       => $this->input->post('deskripsi') ? $this->input->post('deskripsi') : $data['deskripsi'],
                            'rows'        => '5',
                            'cols'        => '79',
                            'class'       => 'form-control',
                          );

                        echo form_textarea($attr);
                        ?>                    
			<span class="text-danger"><?php echo form_error('deskripsi');?></span>
		</div>
	</div>
	<div class="form-group">
		<label for="website" class="col-md-4 control-label">Website</label>
		<div class="col-md-8">
			<input type="text" name="website" value="<?php echo ($this->input->post('website') ? $this->input->post('website') : $data['website']); ?>" class="form-control" id="website" />
			<span class="text-danger"><?php echo form_error('website');?></span>
		</div>
	</div>
	<div class="form-group">
		<label for="tags" class="col-md-4 control-label">Tags</label>
		<div class="col-md-8">
			<input type="text" name="tags" value="<?php echo ($this->input->post('tags') ? : $data['tags']); ?>" class="form-control" id="tags" />
		</div>
	</div>
	<div class="form-group">		
                <div class="col-md-8">
                    <p><p>&nbsp</p>
                   <?php
                        if($data["icon"]) echo "<img src='".base_url($this->thumb_path)."/".$data["icon"]."' alt=''>";
                    ?>
                   </p>
                </div>
                <label for="icon" class="col-md-4 control-label">Author Icon (Maximum size: <?=$max_size?>)</label>
                </div>
		<div class="col-md-8">
			<input type="file" name="image" value="<?php echo $this->input->post('icon'); ?>" class="form-control-file" id="icon" size="20" />
                        <input type="hidden" name="icon" value="<?=$data['icon']?>">
			<span class="text-danger"><?php echo form_error('icon');?></span>
		</div>
	</div>	
	<div class="form-group">
		<div class="col-sm-offset-4 col-sm-8">
			<button type="submit" class="btn btn-success">Save</button>
        </div>
	</div>
	
<?php echo form_close(); ?>

</div>