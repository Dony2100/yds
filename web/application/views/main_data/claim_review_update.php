<?php $this->load->view('layouts/flash_message') ?>
<div class="row">
    
    <div class="col-lg-8">
      
        <div class="mb-0 mt-4">
            <i class="fa fa-home"></i> <b>Detail</b></div>
        <hr class="mt-2">
          
        <div class="card mb-3">
            <div class="card-header">
              <i class="fa fa-gears"></i> <b>Attributes</b></div>
            <div class="card-body">           
              <div class="row">
                <div class="col-sm-6 text-left">
                    <ul>
                        <li><?="Status: <i>".$status[$antihoax['status']];?></i></li>
                        <li><?="Classification: <i>".$antihoax['classification'];?></i></li>
                        <li><?="Date: <i>".date("d M Y", strtotime($antihoax['tanggal']));?></i></li>
                    </ul>                
                </div>
                <div class="col-sm-6 text-left">
                    <ul>
                        <li><?="Created at: <i>".date("d M Y H:i:s", strtotime($antihoax['created_at']));?></i></li>
                        <li><?="Last update: <i>".date("d M Y H:i:s", strtotime($antihoax['updated_at']));?></i></li>
                        <li><?="By : <i>".$name;?></i></li>
                    </ul>
                </div>
              </div>            
            </div>
        </div>
        <!-- 1nd item -->
        <div class="card mb-3">
            <div class="card-header"><i class="fa fa-list-alt"></i> <b>Title</b></div>
            <div class="card-body">           
              <div class="row">
                <div class="card-body"><?=$antihoax['title'];?></div>
              </div>            
            </div>
        </div>    
        <!-- 2st item -->
        <div class="card mb-3">
            <div class="card-header"><i class="fa fa-list-alt"></i> <b>Content</b></div>
            <div class="card-body">           
              <div class="row">
                <div class="card-body"><?=$antihoax['content'];?></div>
              </div>            
            </div>
        </div>
        <!-- 3rd item -->
        <div class="card mb-3">
            <div class="card-header"><i class="fa fa-list-alt"></i> <b>Fact</b></div>
            <div class="card-body">           
              <div class="row">
                <div class="card-body"><?=$antihoax['fact'];?></div>
              </div>            
            </div>
        </div>
        <!-- 4th item -->
        <div class="card mb-3">
            <div class="card-header"><i class="fa fa-list-alt"></i> <b>References</b></div>
            <div class="card-body">           
              <div class="row">
                <div class="card-body"><?=$antihoax['references'];?></div>
              </div>            
            </div>
        </div>            
        
        <!-- 5th item -->
        <div class="card mb-3">
          <div class="card-header">
          <i class="fa fa-list-alt"></i> <b>Picture</b></div>
          <div class="card-body">
              <?=$antihoax['picture1'];?><br/><br/>
              <?=$antihoax['picture2'];?>
          </div>
        </div>
        
        <!-- 6th item -->
        <div class="card mb-3">
          <div class="card-header">
          <i class="fa fa-list-alt"></i> <b>Source</b></div>
          <div class="card-body">
              <?php if($antihoax['source_issue']) print("$antihoax[source_issue]<br/>");?>
              <?=$antihoax['source_link'];?>
          </div>
        </div>
        
        <!-- 7th item -->
        <div class="card mb-3">
            <div class="card-header">
            <i class="fa fa-list-alt"></i> <b>Conclusion</b></div>
            <div class="card-body">
                <?=$antihoax['conclusion'];?>
            </div>
        </div>
        
        <!-- 8th item -->
        <div class="card mb-3">
            <div class="card-header">
            <i class="fa fa-list-alt"></i> <b>Tags</b></div>
            <div class="card-body">
                <?=$antihoax['tags'];?>
            </div>
        </div>
         
        <!-- 9th item -->
        <div class="card mb-3">
            <div class="card-header">
            <i class="fa fa-list-alt"></i> <b>Authors</b></div>
            <div class="card-body">
                <?php
                    $author_array = explode(",", $antihoax["authors"]);
                    $icons = $this->author->get_many($author_array,"id","id,icon,nama");
                    //print_r($icons);
                    
                    foreach($icons as $key => $val) {
                        //echo $val["id"].": ".$val["nama"]."<br/>";
                        echo "<a href='".base_url().$this->class."/del_author/$antihoax[id]/$val[id]'>";
                        if($val["icon"]) echo "<img src='".base_url($thumb_path)."/".$val["icon"]."' alt='$val[nama]'>&nbsp;";
                        echo "</a>";
                    }
                ?>
            </div>
        </div>
        <div class="card mb-3">
            <div class="card-body">
                <a href="<?=base_url().'main_data/edit/'.$this->uri->segment(3)?>" class="btn btn-primary"><i class="fa fa-edit"></i> Edit</a>
                <a href='<?=base_url().$this->class."/add_author/$antihoax[id]"?>' class='btn btn-primary'><i class="fa fa-plus"></i> Add Author</a>
                <a href='<?=site_url('main_data/claim_review/'.$antihoax['id'])?>' class='btn btn-primary'><i class="fa fa-plus"></i> Claim Review</a>
            </div>
        </div>
    </div>
  
  
    <div class="col-lg-4">
        <div class="mb-0 mt-4">
            <i class="fa fa-home"></i> <b>Claim Review</b></div>
        <hr class="mt-2">
        
        <div class="card mb-3">
            
        <div class="card-header"><i class="fa fa-book"></i> Add Claim Review</div>
        
        <?php echo form_open('main_data/claim_review_update/'.$antihoax['id'].'/'.$claim['id'], array("class"=>"form-horizontal")) ?>
        <div class="card-body">
            
            <p><?php //echo validation_errors(); ?> </p>
            
            <input type="hidden" name="id" value="<?= $claim['id'] ?>">
            <input type="hidden" name="article_id" value="<?= $antihoax['id'] ?>">
            
            <div class="form-group">
                <label for="claim_date_published" class="col-md-12 control-label">Claim Date Published</label>
                <div class="col-md-12">
                    <input type="date" name="claim_date_published" class="form-control" id="claim_date_published" value="<?=set_value('claim_date_published', $claim['claim_date_published'])?>">
                    <span class="text-danger"><?php echo form_error('claim_date_published');?></span>
                </div>
            </div>
            
            <div class="form-group">
                <label for="claim_url" class="col-md-12 control-label">Claim URL</label>
                <div class="col-md-12">
                    <input type="text" name="claim_url" value="<?php echo set_value('claim_url', $claim['claim_url']); ?>" class="form-control" id="claim_url" />
                    <span class="text-danger"><?php echo form_error('claim_url');?></span>
                </div>
            </div>
            
            <div class="form-group">
                <label for="claim_title" class="col-md-12 control-label">Claim Title</label>
                <div class="col-md-12">
                    <input type="text" name="claim_title" value="<?php echo set_value('claim_title', $claim['claim_title']); ?>" class="form-control" id="claim_title" />
                    <span class="text-danger"><?php echo form_error('claim_title');?></span>
                </div>
            </div>
            
            <div class="form-group">
                <label for="claim_author_name" class="col-md-12 control-label">Claim Author Name</label>
                <div class="col-md-12">
                    <input type="text" name="claim_author_name" value="<?php echo set_value('claim_author_name', $claim['claim_author_name']); ?>" class="form-control" id="claim_author_name" />
                    <span class="text-danger"><?php echo form_error('claim_author_name');?></span>
                </div>
            </div>
            
            <div class="form-group">
                <label for="claim_rating_value" class="col-md-12 control-label">Claim Rating Value</label>
                <div class="col-md-12">
                    <?php
                    $sql = "SELECT * FROM claim_rating";
                    $rs = $this->db->query($sql)->result_array();
                    $list = [
                        '' => 'Pilih Rating'
                    ];
                    foreach($rs as $r) {
                        $list[$r['id']]=$r['rating'];
                    }
                    ?>
                    <?php echo form_dropdown(array('name'=>'claim_rating_value','id'=>'claim_rating_value','class'=>'form-control'), $list, set_value('claim_rating_value', $claim['claim_rating_value'])) ?>
                    <span class="text-danger"><?php echo form_error('claim_rating_value');?></span>
                </div>
            </div>
            
            <div class="form-group">
                <label for="claim_author_type" class="col-md-12 control-label">Claim Author Type</label>
                <div class="col-md-12">
                    <?php
                    $sql = "SELECT * FROM claim_author_type";
                    $rs = $this->db->query($sql)->result_array();
                    $list = [
                        '' => 'Pilih Author Type'
                    ];
                    foreach($rs as $r) {
                        $list[$r['id']]=$r['type'];
                    }
                    ?>
                    <?php echo form_dropdown(array('name'=>'claim_author_type','id'=>'claim_author_type','class'=>'form-control'), $list, set_value('claim_author_type', $claim['claim_author_type'])) ?>
                    <span class="text-danger"><?php echo form_error('claim_author_type');?></span>
                </div>
            </div>
            
            <div class="form-group">
                <label for="claimed_item_author_name" class="col-md-12 control-label">Claimed Item Author Name</label>
                <div class="col-md-12">
                    <input type="text" name="claimed_item_author_name" value="<?php echo set_value('claimed_item_author_name', $claim['claimed_item_author_name']); ?>" class="form-control" id="claimed_item_author_name" />
                    <span class="text-danger"><?php echo form_error('claimed_item_author_name');?></span>
                </div>
            </div>
            
            <div class="form-group">
                <label for="claimed_item_author_type" class="col-md-12 control-label">Claimed Item Author Type</label>
                <div class="col-md-12">
                    <?php
                    $sql = "SELECT * FROM claimed_item_author_type";
                    $rs = $this->db->query($sql)->result_array();
                    $list = [
                        '' => 'Pilih Item Author Type'
                    ];
                    foreach($rs as $r) {
                        $list[$r['id']]=$r['type'];
                    }
                    ?>
                    <?php echo form_dropdown(array('name'=>'claimed_item_author_type','id'=>'claimed_item_author_type','class'=>'form-control'), $list, set_value('claimed_item_author_type', $claim['claimed_item_author_type'])) ?>
                    <span class="text-danger"><?php echo form_error('claimed_item_author_type');?></span>
                </div>
            </div>
            
            <div class="form-group">
                <label for="claimed_item_url" class="col-md-12 control-label">Claimed Item URL</label>
                <div class="col-md-12">
                    <input type="text" name="claimed_item_url" value="<?php echo set_value('claimed_item_url', $claim['claimed_item_url']); ?>" class="form-control" id="claimed_item_url" />
                    <span class="text-danger"><?php echo form_error('claimed_item_url');?></span>
                </div>
            </div>
            
            <div class="form-group">
                <label for="claimed_item_published_date" class="col-md-12 control-label">Claimed Item Published Date</label>
                <div class="col-md-12">
                    <input type="date" name="claimed_item_published_date" class="form-control" id="claim_date_published" value="<?=set_value('claimed_item_published_date', $claim['claimed_item_published_date'])?>" />
                    <span class="text-danger"><?php echo form_error('claimed_item_published_date');?></span>
                </div>
            </div>
            
        </div>
        
        <div class="card-footer small text-muted">
            <div class="form-group">
                <div class="col-sm-offset-4 col-sm-8">
                    <button type="submit" class="btn btn-success">Save</button>
                </div>
            </div>
        </div>

    <?php echo form_close(); ?>
      
    </div>
    
</div>



<!-- Main component for a primary marketing message or call to action -->
<p>
<p>
    <!-- <a class="btn btn-lg btn-primary" href="antihoax" role="button">API webservice &raquo;</a> -->
</p>

<?php
//$hashed=$this->dx_auth->kocok("qwertyuiop987654321asdfghjklmnbvcxz1234567890");
//echo "Result: (".strlen($hashed).") ".$hashed;

