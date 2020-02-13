<div class="card-header">Link/Unlink Author</div>
<p>
<?php echo form_open($form."/$data_id",array("class"=>"form-horizontal"));?>
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-6">

            <div class="card md-3">
                <div class="card-header"><i class="fa fa-list-alt"></i> <b>Add Author to the list</b></div>
                <div class="form-group row p-3">
                    <div class="col-sm-12">&nbsp;</div>
                    <div class="col-sm-8">
                        <?php
                        $authors = array(0=>"Pick an Author")+$authors;
                        echo form_dropdown( array('name'=>'author','id'=>'author','class'=>'form-control'), 
                                            $authors, 
                                            $this->input->post('author'))?>
                    </div>

                    <div class="col-sm-4">
                        <button type="submit" class="btn btn-primary">Add</button>
                        <a href="<?=base_url().$this->class?>" class="btn btn-danger">Finish</a>
                    </div>
                </div>
            </div>
            <p>
            <div class="card mb-3">
                <div class="card-header"><i class="fa fa-list-alt"></i> <b>Title</b></div>
                <div class="card-body">           
                  <div class="row">
                    <div class="card-body"><?=$data['title'];?></div>
                  </div>            
                </div>
            </div>            

        </div>
        <div class="col-sm-6">

            <div class="card md-3">
                <div class="card-header"><i class="fa fa-list-alt"></i> <b>Author List</b></div>
                <div class="card-body">           
                  <div class="row">
                    <div class="card-body">
                        <?php
                            //$icons = $this->author->get_many($author_array,"id","id,icon,nama");
                            $icons = $this->main->get_authorlink($data_id,"authors");   //print_r($icons);

                            foreach($icons as $key => $val) {
                                //echo $val["id"].": ".$val["nama"]."<br/>";
                                $author=$this->author->get_one($val['author_id']);
                                echo "<a href='".base_url().$this->class."/del_author/$data_id/$author[id]'>";
                                if($author["icon"]) echo "<img src='".base_url($thumb_path)."/".$author["icon"]."' alt='$author[nama]'>&nbsp;";
                                echo "</a>";
                            }
                        ?>                    
                    </div>
                  </div>
                </div>
                <div class="card-footer text-muted">Click an icon to remove it from this list</div>
            </div>

        </div>
    </div>
</div>
 
<?php echo form_close(); 
$this->noscript=TRUE;?>

</div>
