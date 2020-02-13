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
        </div>
    </div>
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

