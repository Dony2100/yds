<div class="card-header">Add Data</div>
<div class="card-body">

<?php
    $country = array(
        'name' => 'country',
        'id' => 'country',
        'class' => "form-control",
        'placeholder' => "Select Country",
        'value' => set_value('country'),
        'class' => 'form-control'
    );
?>
<?php echo form_open('main_data/add',array("class"=>"form-horizontal")); ?>

	<div class="form-group">
            <label for="status" class="col-md-4 control-label">Status</label>
            <div class="col-md-8">
                  <select name="status" id="status" class="form-control">
                    <?php
                    $i=1;                    
                    foreach($this->status_data as $val) {
                        $style = $i % 2 ? "" : "style='color:orange; font-style: italic;'";
                        $value = $i % 2 ? ceil($i/2)-1 : ceil($i/2)+9;
                        $selected = $this->input->post('status') == $value ? "selected" : "";
                        print("<option value='$value' $style $selected>$val</option>");
                        $i++;
                    }?>
                </select>
            </div>
	</div>
        <div class="form-group">
            <label for="classification" class="col-md-4 control-label">Classification</label>
            <div class="col-md-8">
                <?php   echo form_dropdown( array('name'=>'classification','id'=>'classification','class'=>'form-control'), 
                                            $classification, 
                                            $this->input->post('classification'))?>
            </div>
	</div>
	<div class="form-group">
            <label for="title" class="col-md-4 control-label">Title</label>
            <div class="col-md-8">
                <?php echo form_textarea(array('name'=>'title','id'=>'title','class'=>'form-control','rows'=>"5"), trim(""))?>
            </div>
	</div>
        <div class="form-group"> 
            <label for="tanggal" class="col-md-4 control-label">Issue Date (MM/DD/YYYY)</label>
            <div class="input-group date col-md-4">
                <input type="date" name="tanggal" class="form-control" id="dateselect" value='<?=date('Y-m-d')?>'>
            </div>        
        </div>
	<div class="form-group">
            <label for="content" class="col-md-4 control-label">Content</label>
            <div class="col-md-8">
                <?php $val_content = $this->input->post('content'); ?>
                <?php echo form_textarea(array('name'=>'content','id'=>'content','class'=>'form-control','rows'=>"10"), trim($val_content))?>
            </div>
	</div>
	<div class="form-group">
            <label for="source_issue" class="col-md-4 control-label">Issue Source</label>
            <div class="col-md-8">
                <input type="text" name="source_issue" value="<?php echo $this->input->post('source_issue'); ?>" class="form-control" id="source_issue" />
            </div>
	</div>
    	<div class="form-group">
            <label for="source_link" class="col-md-4 control-label">Source Link</label>
            <div class="col-md-8">
                <input type="text" name="source_link" value="<?php echo $this->input->post('source_link'); ?>" class="form-control" id="source_link" />
            </div>
	</div>
	<div class="form-group">
            <label for="fact" class="col-md-4 control-label">Fact</label>
            <div class="col-md-8">
                <?php $val_fact = $this->input->post('fact'); ?>
                <?php echo form_textarea(array('name'=>'fact','id'=>'fact','class'=>'form-control','rows'=>"10"), trim($val_fact))?>
            </div>
	</div>
	<div class="form-group">
            <label for="references" class="col-md-4 control-label">References</label>
            <div class="col-md-8">
                <?php $val_references = $this->input->post('references'); ?>
                <?php echo form_textarea(array('name'=>'references','id'=>'references','class'=>'form-control','rows'=>"10"), trim($val_references))?>
            </div>
	</div>
        <div class="form-group">
            <label for="status" class="col-md-4 control-label">Author</label>
            <div class="col-md-8">
                <?php
                $authors = array(0=>"--Select Author--")+$authors;
                echo form_dropdown( array('name'=>'author','id'=>'author','class'=>'form-control'), 
                                    $authors,
                                    $this->input->post('author'))?>
            </div>
        </div>
	<div class="form-group">
            <label for="picture1" class="col-md-4 control-label">Picture 1</label>
            <div class="col-md-8">
                <input type="text" name="picture1" value="<?php echo $this->input->post('picture1'); ?>" class="form-control" id="picture1" />
            </div>
	</div>
	<div class="form-group">
            <label for="picture2" class="col-md-4 control-label">Picture 2</label>
            <div class="col-md-8">
                <input type="text" name="picture2" value="<?php echo $this->input->post('picture2'); ?>" class="form-control" id="picture2" />
            </div>
	</div>
        <!--
	<div class="form-group">
            <label for="picture3" class="col-md-4 control-label">Picture 3</label>
            <div class="col-md-8">
                <input type="text" name="picture3" value="<?php //echo $this->input->post('picture3'); ?>" class="form-control" id="picture3" />
            </div>
	</div>
	<div class="form-group">
            <label for="picture4" class="col-md-4 control-label">Picture 4</label>
            <div class="col-md-8">
                <input type="text" name="picture4" value="<?php //echo $this->input->post('picture4'); ?>" class="form-control" id="picture4" />
            </div>
	</div-->
        <div class="form-group">
            <?php echo form_label('Country', $country['id'], array('class'=>'col-md-4 control-label')); ?>
            <div class="col-md-8">
                <?php echo form_dropdown('country',$countries,0,$country); ?>
            </div>
        </div>
        <div class="form-group" id="province"></div>
        <div class="form-group" id="regency"></div>  
	<div class="form-group">
            <label for="tags" class="col-md-4 control-label">Tags</label>
            <div class="col-md-8">
                <input type="text" name="tags" value="<?php echo $this->input->post('tags'); ?>" class="form-control" id="tags" />
            </div>
	</div>
	<div class="form-group">
            <label for="conclusion" class="col-md-4 control-label">Conclusion</label>
            <div class="col-md-8">
                <?php $val_conclusion = $this->input->post('conclusion'); ?>
                <?php echo form_textarea(array('name'=>'conclusion','id'=>'conclusion','class'=>'form-control','rows'=>"10"), trim($val_conclusion))?>
            </div>
	</div>        
	<div class="form-group">
            <div class="col-sm-offset-4 col-sm-8">
                <input type="submit" name="btn_publish" title="Directly publish to cekfakta" value="Save & Publish" class="btn btn-success" data-toggle="tooltip">
                <input type="submit" name="btn_draft" title="Draft can be edited later" value="Save as Draft" class="btn btn-warning" data-toggle="tooltip">
            </div>
	</div>

<?php echo form_close(); 
//$this->noscript=TRUE;?>

</div>
 