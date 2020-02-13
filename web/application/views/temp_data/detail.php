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
                    <li><?="Status: ".$antihoax['status'];?></li>
                    <li><?="Tanggal: ".date("d M Y", strtotime($antihoax['tanggal']));?></li>
                </ul>                
            </div>
            <div class="col-sm-6 text-left">
                <ul>
                    <li><?="Diinput: ".date("d M Y H:i:s", strtotime($antihoax['created_at']));?></li>
                    <li><?="Diubah: ".date("d M Y H:i:s", strtotime($antihoax['updated_at']));?></li>
                    <li><?="Oleh : ".$antihoax['member_id'];?></li>
                </ul>
            </div>
          </div>            
        </div>
    </div>
    <!-- 1st item -->
    <div class="card mb-3">
        <div class="card-header"><i class="fa fa-list-alt"></i> <b>Isi</b></div>
        <div class="card-body">           
          <div class="row">
            <div class="card-body"><?=$antihoax['isi'];?></div>
          </div>            
        </div>
    </div>
    <!-- 2nd item -->
    <div class="card mb-3">
        <div class="card-header"><i class="fa fa-list-alt"></i> <b>Kesimpulan</b></div>
        <div class="card-body">           
          <div class="row">
            <div class="card-body"><?=$antihoax['kesimpulan'];?></div>
          </div>            
        </div>
    </div>
    <!-- 3rd item -->
    <div class="card mb-3">
        <div class="card-header"><i class="fa fa-list-alt"></i> <b>Fakta</b></div>
        <div class="card-body">           
          <div class="row">
            <div class="card-body"><?=$antihoax['fakta'];?></div>
          </div>            
        </div>
    </div>
    <!-- 4th item -->
    <div class="card mb-3">
        <div class="card-header"><i class="fa fa-list-alt"></i> <b>Rujukan</b></div>
        <div class="card-body">           
          <div class="row">
            <div class="card-body"><?=$antihoax['rujukan'];?></div>
          </div>            
        </div>
    </div>       
    
  <div class="card-columns">
    <!-- 5th item -->
    <div class="card mb-3">
      <div class="card-header">
      <i class="fa fa-list-alt"></i> <b>Sub klarifikasi</b></div>
      <div class="card-body">
          <?=$antihoax['subklarifikasi'];?>
      </div>
    </div>       

    <!-- 6th item -->
    <div class="card mb-3">
      <div class="card-header">
      <i class="fa fa-list-alt"></i> <b>Gambar</b></div>
      <div class="card-body">
          <?=$antihoax['gambar1'];?><br/><br/>
          <?=$antihoax['gambar2'];?>
      </div>
    </div>
    
    <!-- 7th item -->
    <div class="card mb-3">
      <div class="card-header">
      <i class="fa fa-list-alt"></i> <b>Sumber</b></div>
      <div class="card-body">
          <?=$antihoax['sumber'];?>
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
    
  </div>
    
    <div class="card mb-3">
        <div class="card-body">
            <a href="<?=base_url().'main_data/edit/'.$this->uri->segment(3)?>" class="btn btn-primary"><i class="fa fa-edit"></i> Edit</a>
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

