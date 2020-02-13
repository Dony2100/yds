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
			<div class="card-header">
				<i class="fa fa-list-alt"></i> <b>Multimedia (only JPEG and MP4 are allowed)</b>
            </div>
    			
            <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
                <div class="card-body">
    				<?php if(empty($media)):?>
    				<p style="padding-left: 15px;"><i>Tidak ada Media</i></p>
    				<?php else: ?>

                    <div class="form-group">
        				<ul style="list-style-type: none; padding-left: 15px;">

        				<?php foreach($media as $r):?>
        				<li style="margin-bottom: 10px;">
                            <p style="margin-bottom: 5px;">
                                <a href="<?= base_url().$r->media_path ?>" target="_blank">
                                <?php 
                                $mime = '';
                                if(file_exists(FCPATH .$r->media_path)){
                                    $mime = mime_content_type(FCPATH .$r->media_path); 
                                }
                                ?>
                                <?php if (strpos($mime, 'image') !== false): ?>
                                <img src="<?= base_url(). '/' .$r->media_path ?>" style="height: 100px; width: auto;">
                                <?php else: ?>
                                <img src="<?= base_url('assets/img/media.png') ?>" style="height: 100px; width: auto;">
                                <?php endif ?>
                                </a>
                            </p>
                            <a href="#" data-toggle="modal" data-target="#delete-modal" data-id="<?= $r->id ?>" data-media="<?= $r->media_name ?>" data-path="<?= $r->media_path ?>">
                                <i class="fa fa-fw fa-trash"></i> Delete
                            </a>&emsp;
                        </li>
        				<?php endforeach?>
        				</ul>
                    </div>
    				<?php endif?>
    				
    				
                    <input type="hidden" name="article_id" value="<?= $antihoax['id']?>">
                    <?=form_error('article_id', '<span class="help-block">', '</span>')?>

                    <div class="form-group">
                        <label for="media_file" class="col-md-12 control-label">Upload Media</label>
                        <div class="col-md-12">
                            <input type="file" name="media_file">
                            <span class="text-danger"><?php echo form_error('media_file');?></span>
                        </div>
                    </div>
    			</div>
                <div class="card-footer small text-muted">
                    <div class="form-group">
                        <div class="col-sm-offset-4 col-sm-8">
                            <button type="submit" class="btn btn-success" name="upload_media" value="1">Upload Media</button>
                        </div>
                    </div>
                </div>
            </form>
		</div>

        <div class="card mb-3">
            <div class="card-body">
                <a href="<?=base_url().'main_data/edit/'.$this->uri->segment(3)?>" class="btn btn-primary"><i class="fa fa-edit"></i> Edit</a>
                <a href='<?=base_url().$this->class."/add_author/$antihoax[id]"?>' class='btn btn-primary'><i class="fa fa-plus"></i> Add Author</a>
            </div>
        </div>
    </div>

    <div class="modal fade" tabindex="-1" role="dialog" id="delete-modal">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Delete Confirmation</h4>
                </div>
                <div class="modal-body">
                    <p>Apakah Anda yakin menghapus media <strong><span id="nama-media"></span></strong>?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-primary"  id="delete">Delete</button>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
    <script>
        $('#delete-modal').on('show.bs.modal', function (e) {
            var id = $(e.relatedTarget).data('id');
            var nama = $(e.relatedTarget).data('media');
            var media_path = $(e.relatedTarget).data('path');
            $('#nama-media').text(nama);
            $('#delete').on('click', function(){
                $.ajax({
                    url: '<?=site_url('main_data/delete_media')?>',
                    method: 'POST',
                    data: 'id='+id+'&media_path='+media_path+'&article_id='+<?php echo $antihoax['id'] ?>,
                    success: function(data){
                        result = JSON.parse(data);
                        if(result.status == 'success'){
                            window.location = result.redirect;
                        }else{
                            window.location = result.redirect;
                        }
                    }
                });
            })
        })
    </script>


    <div class="col-lg-4">
        <div class="mb-0 mt-4">
            <i class="fa fa-home"></i> <b>Claim Review</b></div>
        <hr class="mt-2">

        <div class="card mb-3">

        <div class="card-header"><i class="fa fa-book"></i> Add Claim Review</div>

        <?php echo form_open('main_data/detail/'.$antihoax['id'], array("class"=>"form-horizontal")) ?>
        <div class="card-body">

            <p><?php //echo validation_errors(); ?> </p>

            <input type="hidden" name="article_id" value="<?= $antihoax['id'] ?>">

            <div class="form-group">
                <label for="claim_date_published" class="col-md-12 control-label">Claim Date Published</label>
                <div class="col-md-12">
                    <input type="date" name="claim_date_published" class="form-control" id="claim_date_published" value="<?=set_value('claim_date_published', date('Y-m-d'))?>">
                    <span class="text-danger"><?php echo form_error('claim_date_published');?></span>
                </div>
            </div>

            <div class="form-group">
                <label for="claim_url" class="col-md-12 control-label">Claim URL</label>
                <div class="col-md-12">
                    <input type="text" name="claim_url" value="<?php echo set_value('claim_url'); ?>" class="form-control" id="claim_url" />
                    <span class="text-danger"><?php echo form_error('claim_url');?></span>
                </div>
            </div>

            <div class="form-group">
                <label for="claim_title" class="col-md-12 control-label">Claim Title</label>
                <div class="col-md-12">
                    <input type="text" name="claim_title" value="<?php echo set_value('claim_title'); ?>" class="form-control" id="claim_title" />
                    <span class="text-danger"><?php echo form_error('claim_title');?></span>
                </div>
            </div>

            <div class="form-group">
                <label for="claim_author_name" class="col-md-12 control-label">Claim Author Name</label>
                <div class="col-md-12">
                    <input type="text" name="claim_author_name" value="<?php echo set_value('claim_author_name'); ?>" class="form-control" id="claim_author_name" />
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
                    <?php echo form_dropdown(array('name'=>'claim_rating_value','id'=>'claim_rating_value','class'=>'form-control'), $list, set_value('claim_rating_value')) ?>
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
                    <?php echo form_dropdown(array('name'=>'claim_author_type','id'=>'claim_author_type','class'=>'form-control'), $list, set_value('claim_author_type')) ?>
                    <span class="text-danger"><?php echo form_error('claim_author_type');?></span>
                </div>
            </div>

            <div class="form-group">
                <label for="claimed_item_author_name" class="col-md-12 control-label">Claimed Item Author Name</label>
                <div class="col-md-12">
                    <input type="text" name="claimed_item_author_name" value="<?php echo set_value('claimed_item_author_name'); ?>" class="form-control" id="claimed_item_author_name" />
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
                    <?php echo form_dropdown(array('name'=>'claimed_item_author_type','id'=>'claimed_item_author_type','class'=>'form-control'), $list, set_value('claimed_item_author_type')) ?>
                    <span class="text-danger"><?php echo form_error('claimed_item_author_type');?></span>
                </div>
            </div>

            <div class="form-group">
                <label for="claimed_item_url" class="col-md-12 control-label">Claimed Item URL</label>
                <div class="col-md-12">
                    <input type="text" name="claimed_item_url" value="<?php echo set_value('claimed_item_url'); ?>" class="form-control" id="claimed_item_url" />
                    <span class="text-danger"><?php echo form_error('claimed_item_url');?></span>
                </div>
            </div>

            <div class="form-group">
                <label for="claimed_item_published_date" class="col-md-12 control-label">Claimed Item Published Date</label>
                <div class="col-md-12">
                    <input type="date" name="claimed_item_published_date" class="form-control" id="claim_date_published" value="<?=set_value('claimed_item_published_date', date('Y-m-d'))?>" />
                    <span class="text-danger"><?php echo form_error('claimed_item_published_date');?></span>
                </div>
            </div>

        </div>

        <div class="card-footer small text-muted">
            <div class="form-group">
                <div class="col-sm-offset-4 col-sm-8">
                    <button type="submit" class="btn btn-success" name="input_claim" value="1">Save</button>
                </div>
            </div>
        </div>

    <?php echo form_close(); ?>

    </div>

    <style>
    .card-header .fa {
        transition: .3s transform ease-in-out;
    }
    .card-header .collapsed .fa {
        transform: rotate(90deg);
    }
    </style>
<?php
$sql = "SELECT c.id, c.article_id, c.claim_date_published, c.claim_url, 
c.claim_title, c.claim_author_name, c.claim_rating_value, (SELECT rating FROM claim_rating WHERE id=c.claim_rating_value) as claim_rating_value_desc,  
c.claim_author_type, (SELECT type FROM claim_author_type WHERE id=c.claim_author_type) as claim_author_type_desc,
c.claimed_item_author_name, c.claimed_item_author_type, (SELECT type FROM claimed_item_author_type WHERE id=c.claimed_item_author_type) as claimed_item_author_type_desc,
c.claimed_item_url, 
c.claimed_item_author_type, 
c.claimed_item_published_date FROM claim_review c WHERE c.article_id=?";
$claim = $this->db->query($sql, array($antihoax['id']))->result_array();
?>
    <?php if(empty($claim)): ?>
    <div class="card">
        <h5 class="card-header">
            Belum ada Claim Review
        </h5>
        <div class="card-body">
            <p>-</p>
        </div>
    </div>

    <?php else: ?>

    <?php $no=1; ?>
    <?php foreach($claim as $r): ?>
    <div class="card">
        <h5 class="card-header">
            <a data-toggle="collapse" href="#collapse-<?=$no?>" aria-expanded="true" aria-controls="collapse-<?=$no?>" id="heading-example" class="d-block collapsed">
                <i class="fa fa-chevron-down pull-right"></i>
                Claim Review #<?=$no?>
            </a>
        </h5>
        <div id="collapse-<?=$no?>" class="collapse" aria-labelledby="heading-example">
            <div class="card-body">
                <dl>
                    <dt>Claim Date Published</dt>
                    <dd><?=$r['claim_date_published']?></dd>
                    <dt>Claim URL</dt>
                    <dd><?=$r['claim_url']?></dd>
                    <dt>Claim Title</dt>
                    <dd><?=$r['claim_title']?></dd>
                    <dt>Claim Author Name</dt>
                    <dd><?=$r['claim_author_name']?></dd>
                    <dt>Claim Rating Value</dt>
                    <dd><?=$r['claim_rating_value_desc']?></dd>
                    <dt>Claim Author Type</dt>
                    <dd><?=$r['claim_author_type_desc']?></dd>
                    <dt>Claimed Item Author Name</dt>
                    <dd><?=$r['claimed_item_author_name']?></dd>
                    <dt>Claim Item Author Type</dt>
                    <dd><?=$r['claimed_item_author_type_desc']?></dd>
                    <dt>Claimed Item URL</dt>
                    <dd><?=$r['claimed_item_url']?></dd>
                    <dt>Claimed Item Published Date</dt>
                    <dd><?=$r['claimed_item_published_date']?></dd>
                    <dt>Action</dt>
                    <dd><a href='<?=site_url('main_data/claim_review_update/'.$antihoax['id'].'/'.$r['id'])?>' class=''><i class="fa fa-pencil"></i> Edit</a> | <a href='#' class='' data-id="<?=$r['id']?>" data-aid="<?=$r['article_id']?>" data-toggle="modal" data-target="#DelConModal"><i class="fa fa-trash"></i> Delete</a></dd>
                </dl>
            </div>
        </div>
    </div>
    <br>
    <?php $no++ ?>
    <?php endforeach ?>

    <?php endif ?>
</div>


<!-- Delete Confirmation Modal-->
<div class="modal fade" id="DelConModal" tabindex="-1" role="dialog" aria-labelledby="DelConModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="DelConModalLabel"><i class="fa fa-question-circle-o"></i> Delete confirmation</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true"><i class='fa fa-close'></i></span>
                </button>
            </div>
            <div class="modal-body">Are you sure?<br/>Select "Delete" below if you are sure want to delete these data.</div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary fa fa-close" data-dismiss="modal"> Cancel</button>
                    <button type="submit" class="btn btn-danger fa fa-check" id="btnDelteYes" href="#"> Delete</button>
            </div>
        </div>
    </div>
</div>

<script>
$('#DelConModal').on('show.bs.modal', function (e) {
    var id = $(e.relatedTarget).data('id');
    var aid = $(e.relatedTarget).data('aid');

    $('#btnDelteYes').on('click', function(){
        $.ajax({
            url: '<?=site_url('main_data/delete_claim_review')?>',
            method: 'POST',
            data: 'id='+id+'&aid='+aid,
            success: function(data){
                result = JSON.parse(data);
                if(result.status == 'success'){
                    window.location = result.redirect;
                }else{
                    window.location = result.redirect;
                }
            }
        });
    })
});

$('input,select').on('focus', function(){
   $(this).parent().closest('div').removeClass('has-error').addClass('');
   $(this).next('span').remove();
})

</script>

<?php
//$hashed=$this->dx_auth->kocok("qwertyuiop987654321asdfghjklmnbvcxz1234567890");
//echo "Result: (".strlen($hashed).") ".$hashed;