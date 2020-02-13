<div class="card-header">Add Author</div>
<div class="card-body">
    
<?$hidden = "";?>

<?//php echo form_open('author/add',array("class"=>"form-horizontal")); ?>
<?php echo "<h4><font color='red'>".$error."</font></h4>";?>

<?php echo form_open_multipart($form,"",$hidden);?>

	<div class="form-group">
		<label for="nama" class="col-md-4 control-label"><span class="text-danger">*</span>Nama Institusi</label>
		<div class="col-md-8">
			<input type="text" name="nama" value="<?php echo $this->input->post('nama'); ?>" class="form-control" id="nama" />
			<span class="text-danger"><?php echo form_error('nama');?></span>
		</div>
	</div>
	<div class="form-group">
		<label for="deskripsi" class="col-md-4 control-label">Deskripsi</label>
		<div class="col-md-8">
                        <?php
                        $attr = array(
                            'name'        => 'deskripsi',
                            'id'          => 'deskripsi',
                            'value'       => $this->input->post('deskripsi'),
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
			<input type="text" name="website" value="<?php echo $this->input->post('website'); ?>" class="form-control" id="website" />
			<span class="text-danger"><?php echo form_error('website');?></span>
		</div>
	</div>
	<div class="form-group">
		<label for="icon" class="col-md-4 control-label">Author Icon (Maximum size: <?=$max_size?>)</label>
		<div class="col-md-8">
			<input type="file" name="image" value="<?php echo $this->input->post('icon'); ?>" class="form-control-file" id="icon" size="20" />
			<span class="text-danger"><?php echo form_error('icon');?></span>
		</div>
	</div>
	<div class="form-group">
                <?php /*
                $hidden="";
                if (isset($banner)) {
                    echo "<img src='".base_url($this->img_dir)."/".$banner->id.".".$banner->ext."'>";
                    $hidden=array('banner_id'=>$banner_id);
                }
                */
                ?>
		<div class="col-md-8">
                    <?php //echo $error;?>
                    <?php //echo form_open_multipart($form,"","");?>
                    <?php $Fdata = array('name' => 'image', 'class' => 'file');
                    //echo form_upload($Fdata);?>
		</div>
	</div>
	<div class="form-group">
		<div class="col-sm-offset-4 col-sm-8">
			<button type="submit" class="btn btn-success">Save</button>
        </div>
	</div>

<?php echo form_close(); ?>

</div>
