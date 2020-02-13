<div class="row">
  <div class="col-lg-8">
      
    <div class="mb-0 mt-4">
      <i class="fa fa-user"></i> <b>Member Data</b></div>
    <hr class="mt-2">         
      
    <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-gears"></i> <b>User Attributes</b></div>
        <div class="card-body">           
          <div class="row">
            <div class="col-sm-6 text-left">
                <ul>
                    <li><?="Username: ".$this->dx_auth->get_username();?></li>
                    <li><?="email: ".$user->email;?></li>
                    <li><?="Privilege: ".$this->dx_auth->get_role_name();?></li>
                </ul>                
            </div>
            <div class="col-sm-6 text-left">
                <ul>
                    <li><?="Last IP: ".$user->last_ip;?></li>
                    <li><?="Last login: ".date("d M Y H:i:s", strtotime($user->last_login));?></li>
                    <li><?="Created on: ".date("d M Y H:i:s", strtotime($user->created));?></li>
                </ul>
            </div>
          </div>            
        </div>
        <div class="card-footer small text-muted">
            <a href="#" class="btn btn-secondary"><i class="fa fa-edit"></i> Change email</a>&nbsp;
            <a href="<?=base_url().'auth/change_password/'?>" class="btn btn-primary"><i class="fa fa-edit"></i> Change password</a>
        </div>
    </div>
    <!-- 1st item -->
    <div class="card mb-3">
        <div class="card-header"><i class="fa fa-user-circle"></i> <b>Member Profile</b></div>
        <div class="card-body">           
            <div class="form-group">
                <label class="col-md-3 control-label">First Name</label>
                <label class="col-md-6 control-label">: <?=$member->FirstName?></label>
            </div>
            <div class="form-group">
                <label class="col-md-3 control-label">Last Name</label>
                <label class="col-md-6 control-label">: <?=$member->LastName?></label>
            </div>
            <div class="form-group">
                <label class="col-md-3 control-label">Birth Place/Date</label>
                <?php $birthplace = $member->birthplace ? $member->birthplace."/" : "";?>
                <label class="col-md-6 control-label">: <?=$birthplace.date("d M Y", strtotime($member->birthdate));?></label>
            </div>
            <div class="form-group">
                <label class="col-md-3 control-label">Phone</label>
                <label class="col-md-6 control-label">: <?=$member->phone?></label>
            </div>
            <div class="form-group">
                <label class="col-md-3 control-label">Address</label>
                <label class="col-md-8 control-label">: <?=$member->address?></label>
            </div>
            <div class="form-group">
                <label class="col-md-3 control-label">City</label>
                <label class="col-md-6 control-label">: <?=$member->city?></label>
            </div>
            <div class="form-group">
                <label class="col-md-3 control-label">Country</label>
                <label class="col-md-6 control-label">: <?=$member->country?></label>
            </div>              
        </div>
        <div class="card-footer small text-muted">
            <a href="<?=base_url().'member/edit/'?>" class="btn btn-primary"><i class="fa fa-edit"></i> Edit</a>
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

