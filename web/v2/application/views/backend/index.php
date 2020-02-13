<!-- Breadcrumbs-->
<!--
<ol class="breadcrumb">
    <li class="breadcrumb-item">
      <a href="#">Dashboard</a>
    </li>
    <li class="breadcrumb-item active">Users</li>
</ol>
-->
<!-- DataTables Card-->
<div class="card mb-3">
    <div class="card-header">
      <i class="fa fa-user-secret"></i> Data User</div>
    <div class="card-body">
      <div class="table-responsive">
        <?php echo form_open($this->uri->uri_string()."/ban");?>
        <table class="table stripe" id="table" width="100%" cellspacing="0">
          <thead>
            <tr>
                <th style="white-space:nowrap">No</th>
                <th><i class="fa fa-check-square-o"></i></th>
                <th style="white-space:nowrap">Role</th>
                <th style="white-space:nowrap">Username</th>
                <th style="white-space:nowrap">email</th>
                <th style="white-space:nowrap">Banned</th>
                <th style="white-space:nowrap">Ban reason</th>
                <th style="white-space:nowrap">Last IP</th>
                <th style="white-space:nowrap">Last login</th>
                <th><i class="fa fa-wrench"></i></th>
            </tr>
          </thead>

          <tbody>
          </tbody>
          
          <tfoot>
            <tr>
                <th colspan='10' class="card-footer small">
                    <?php
                    $passchg = array(
                                'id' => 'passchg',
                                'class' => 'btn btn-info',
                            );
                    echo anchor("backend/add", "<i class='fa fa-plus'></i> Add user", array("class"=>"btn btn-primary"));
                    ?>
                    <a class="btn btn-warning" data-toggle="modal" data-target="#BanConModal"><i class="fa fa-ban"></i> Ban/Unban</a>
                    <?php
                    $this->load->view('backend/ban_modal');

                    //echo "<i class='fa fa-key'></i> ".form_submit('reset_pass', 'Change password', $passchg);
                    //echo '<hr/>';
                    
                    ?>              
                </th>
            </tr>
          </tfoot>
        </table>
        <?php echo form_close();?>
      </div>
    </div>
    <div class="card-footer small text-muted"></div>
    
</div> <!-- /.DataTables Card ->