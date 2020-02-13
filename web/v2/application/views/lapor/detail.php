<div class="mb-0 mt-4">
<i class="fa fa-home"></i> <b>Detail Laporan</b></div>
<hr class="mt-2">
<div class="row">
    <div class="col-md-8">
        
        <?php $this->load->view('layouts/flash_message') ?>

        <div class="card mb-3">
            <div class="card-header">
            <i class="fa fa-gears"></i> <b>Informasi Hoax</b></div>
            <div class="card-body">
                <table class="table table-condensed stripe" width="100%" cellspacing="0">
                    <tbody>
                        <tr>
                            <td style="width: 200px;"><strong>Judul</strong></td>
                            <td style="width: 20px;">:</td>
                            <td><?php echo $lapor->judul ?></td>
                        </tr>
                        <tr>
                            <td><strong>Hoax</strong></td>
                            <td>:</td>
                            <td><?php echo $lapor->teks_hoax ?></td>
                        </tr>
                        <tr>
                            <td><strong>Pesan dari Pelapor</strong></td>
                            <td>:</td>
                            <td><?php echo $lapor->pesan ?></td>
                        </tr>
                        <tr>
                            <td><strong>Prioritas</strong></td>
                            <td>:</td>
                            <td>
                                <?php 
                                echo $this->prioritas_laporan[$lapor->prioritas]; 
                                ?>
                                    
                            </td>
                        </tr>
                        <tr>
                            <td><strong>Status</strong></td>
                            <td>:</td>
                            <td>
                                <?php 
                                echo $this->status_laporan[$lapor->status]; 
                                ?>
                                    
                            </td>
                        </tr>
                        <tr>
                            <td><strong>Status Data Yudistira</strong></td>
                            <td>:</td>
                            <td>
                                <?php 
                                if($lapor->is_data_yudistira == '1'){
                                    echo 'Ya';
                                }else{
                                    echo 'Tidak';
                                }
                                ?>
                                    
                            </td>
                        </tr>
                        <tr>
                            <td><strong>Tanggal Dibuat</strong></td>
                            <td>:</td>
                            <td>
                                <?php 
                                echo $lapor->created_at; 
                                ?>
                                    
                            </td>
                        </tr>
                        <tr>
                            <td><strong>Terakhir Diubah</strong></td>
                            <td>:</td>
                            <td>
                                <?php 
                                echo $lapor->updated_at; 
                                ?>
                                    
                            </td>
                        </tr>
                    </tbody>
                </table>
                
            </div>
        </div>
        <div class="card mb-3">
            <div class="card-header">
                <i class="fa fa-gears"></i> <b>Screenshot Hoax</b>
            </div>
            <div class="card-body">
                
                <?php if(trim($lapor->screenshot_1) !== ""): ?>
                <a href="<?php echo base_url() ?>/<?php echo $this->lapor_path.$lapor->screenshot_1  ?>" target="_blank">
                    <img src="<?php echo base_url() ?>/<?php echo $this->lapor_path.$lapor->screenshot_1 ?>" class="img-thumbnail" alt="Screenshot 1" style="width:150px; height: auto;">
                </a>
                <?php endif ?>

                <?php if(trim($lapor->screenshot_2) !== ""): ?>
                <a href="<?php echo base_url() ?>/<?php echo $this->lapor_path.$lapor->screenshot_2  ?>" target="_blank">
                    <img src="<?php echo base_url() ?>/<?php echo $this->lapor_path.$lapor->screenshot_2 ?>" class="img-thumbnail" alt="Screenshot 2" style="width:150px; height: auto;">
                </a>
                <?php endif ?>

                <?php if(trim($lapor->screenshot_3) !== ""): ?>
                <a href="<?php echo base_url() ?>/<?php echo $this->lapor_path.$lapor->screenshot_3  ?>" target="_blank">
                    <img src="<?php echo base_url() ?>/<?php echo $this->lapor_path.$lapor->screenshot_3 ?>" class="img-thumbnail" alt="Screenshot 3" style="width:150px; height: auto;">
                </a>
                <?php endif ?>

                <?php if(trim($lapor->screenshot_4) !== ""): ?>
                <a href="<?php echo base_url() ?>/<?php echo $this->lapor_path.$lapor->screenshot_4  ?>" target="_blank">
                    <img src="<?php echo base_url() ?>/<?php echo $this->lapor_path.$lapor->screenshot_4 ?>" class="img-thumbnail" alt="Screenshot 4" style="width:150px; height: auto;">
                </a>
                <?php endif ?>
                
            </div>
        </div>
        
        <div class="card mb-3">
            <div class="card-header">
                <i class="fa fa-bell-o"></i> <b>Catatan Diskusi</b>
            </div>
            <div class="list-group list-group-flush small">
                <?php
                $sql = "SELECT ln.lapor_id, ln.id, ln.notes, ln.created_by, u.username FROM lapor_notes ln LEFT JOIN users u ON ln.created_by=u.id WHERE ln.lapor_id=?";
                $query = $this->db->query($sql, array($lapor->id));
                $notes = $query->result();
                ?>

                <?php if(empty($notes)): ?>
                    <span class="list-group-item list-group-item-action" href="#">
                        <div class="media">
                            <div class="media-body">
                                <p>Belum ada catatan</p>
                            </div>
                        </div>
                    </span>
                <?php else: ?>

                    <?php foreach($notes as $r): ?>
                    <span class="list-group-item list-group-item-action" href="#">
                        <div class="media">
                            <div class="media-body">
                                <strong><?php echo $r->username ?></strong>
                                <p><?php echo $r->notes ?></p>
                                <div class="text-muted smaller">Today at 5:43 PM - 5m ago</div>
                            </div>
                        </div>
                    </span>
                    <?php endforeach ?>

                <?php endif ?>
            </div>
            

            <?php 
            //hanya tampil jika administrator, atau user yang diassign
            $user_id = $this->dx_auth->get_user_id();
            $assignee = false;
            $find = $this->db->select()->where('author_id', $user_id)->where('lapor_id', $lapor->id)->from('lapor_assignment')->get();
            if ($find->num_rows() == 1) {
                $assignee = true;
            }

            if($this->dx_auth->get_role_name()=='Admin' || $assignee): 
            ?>
            <div class="row">
                <div class="col-md-12">
                    <br>
                    <?php echo form_open('', array("class"=>"form-horizontal")) ?>
                    <input type="hidden" name="lapor_id" value="<?php echo $lapor->id ?>">
                    <div class="form-group">
                        <label for="status" class="col-md-4 control-label">Add Notes</label>
                        <div class="col-md-12">
                            <?php echo form_textarea(array('name'=>'notes','id'=>'notes','class'=>'form-control','rows'=>"5"), trim(set_value('notes')))?>
                            <span class="text-danger"><?php echo form_error('notes');?></span>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-12">
                            <button type="submit" class="btn btn-success" name="add_notes" value="add_notes">Submit Reply</button>
                        </div>
                    </div>
                    <?php echo form_close() ?>
                </div>
            </div>
            <?php endif ?>

        </div>
    </div>
    <div class="col-md-4">

        <div class="card mb-3">
            <div class="card-header">
            <i class="fa fa-gears"></i> <b>Informasi Pelapor</b>
            </div>
            <div class="card-body">
                <table class="table table-condensed stripe" cellspacing="0">
                    <tbody>
                        <tr>
                            <td style="width: 100px;"><strong>Nama</strong></td>
                            <td style="width: 20px;">:</td>
                            <td><?php echo $lapor->nama ?></td>
                        </tr>
                        <tr>
                            <td><strong>Email</strong></td>
                            <td>:</td>
                            <td><?php echo $lapor->email ?></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <div class="card mb-3">
            <div class="card-header">
            <i class="fa fa-gears"></i> <b>Assignee</b></div>
            <div class="card-body">
                
                
                <div class="form-group">
                    <div class="">
                        <?php
                        $sql = "SELECT la.lapor_id, la.id, la.author_id, a.username  FROM lapor_assignment la LEFT JOIN users a ON la.author_id=a.id WHERE la.lapor_id=?";
                        $query = $this->db->query($sql, array($lapor->id));
                        $list_author = $query->result();
                        ?>

                        <?php if(empty($list_author)): ?>
                        <label>Belum ada assignee.</label>
                        <?php else: ?>
                        <ul style="padding-left: 0px; margin-left: 20px;">
                            <?php
                            $no = 1;
                            foreach ($list_author as $r) {
                                //link remove hanya tampil jika administrator
                                $link_remove = '';
                                if($this->dx_auth->get_role_name()=='Admin'){
                                    $link_remove = '<a href="#" data-toggle="modal" data-target="#delete-modal" data-id="'.$r->id.'" data-nama="'.$r->username.'"><i class="fa fa-fw fa-remove"></i></a>';
                                }
                                echo '<li>'.$r->username.' '.$link_remove.'</li>';
                            }
                            ?>
                        </ul>
                        <?php endif ?>
                    </div>
                </div>

                <?php 
                //hanya tampil jika administrator
                if($this->dx_auth->get_role_name()=='Admin'): 
                ?>
                <?php echo form_open('', array("class"=>"form-horizontal")) ?>
                <input type="hidden" name="lapor_id" value="<?php echo $lapor->id ?>">
                <div class="form-group">
                    <!-- <label for="status" class="col-md-4 control-label">Author</label> -->
                    <div class="">
                        <?php
                        //$authors = $this->db->get('author')->result_array();
                        //$authors = $this->db->get('users')->result_array();
                        $sql = "SELECT CONCAT(p.FirstName, p.LastName) AS nama, u.username, u.id FROM users u LEFT JOIN user_profile p ON p.user_id=u.id";
                        $authors = $this->db->query($sql)->result_array();
                        $list = [
                            '' => 'Pilih User'
                        ];
                        foreach($authors as $r) {
                            $list[$r['id']]=$r['username'];
                        }
                        ?>
                        <?php echo form_dropdown(array('name'=>'author_id','id'=>'author-id','class'=>'form-control'), $list, set_value('author_id')) ?>
                        <span class="text-danger"><?php echo form_error('author_id');?></span>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-8">
                        <button type="submit" class="btn btn-success" name="assign_author" value="assign_author">Assign User</button>
                    </div>
                </div>
                <?php echo form_close() ?>
                <?php endif ?>
            </div>
        </div>

        <?php 
        //hanya tampil jika administrator, atau user yang diassign
        $user_id = $this->dx_auth->get_user_id();
        $assignee = false;
        $find = $this->db->select()->where('author_id', $user_id)->where('lapor_id', $lapor->id)->from('lapor_assignment')->get();
        if ($find->num_rows() == 1) {
            $assignee = true;
        }

        if($this->dx_auth->get_role_name()=='Admin' || $assignee): 
        ?>
        <div class="card mb-3">
            <div class="card-body">
                <a href="<?=site_url('lapor/edit/'.$this->uri->segment(3)) ?>" class="btn btn-primary"><i class="fa fa-edit"></i> Edit Laporan</a>
                <?php if($lapor->status !== '3'): ?>
                <a href="<?=site_url('lapor/close/'.$this->uri->segment(3)) ?>" class="btn btn-warning"><i class="fa fa-send"></i> Close Laporan</a>
                <?php endif ?>
            </div>
        </div>
        <?php endif ?>

    </div>
</div>

<?php if($this->dx_auth->get_user_id() !== null): ?>
<div class="modal fade" tabindex="-1" role="dialog" id="delete-modal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Delete Confirmation</h4>
            </div>
            <div class="modal-body">
                <p>Apakah Anda yakin menghapus assignment ke Author <strong><span id="nama-author"></span></strong>?</p>
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
        var nama = $(e.relatedTarget).data('nama');
        $('#nama-author').text(nama);
        $('#delete').on('click', function(){
            $.ajax({
                url: '<?=site_url('lapor/delete_assignment')?>',
                method: 'POST',
                data: 'id_lapor_assignment='+id+'&nama='+nama+'&id_lapor='+<?php echo $lapor->id ?>,
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

<div class="modal fade" tabindex="-1" role="dialog" id="close-modal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Close Laporan</h4>
            </div>
            <div class="modal-body">
                <p>Apakah Anda yakin menutup laporan ini <strong><span id="nama-laporan"></span></strong>?</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-primary"  id="close">Delete</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<script>
    $('#close-modal').on('show.bs.modal', function (e) {
        var id = $(e.relatedTarget).data('id');
        var nama = $(e.relatedTarget).data('nama');
        $('#nama-laporan').text(nama);
        $('#close').on('click', function(){
            $.ajax({
                url: '<?=site_url('lapor/close')?>',
                method: 'POST',
                data: 'id_lapor_assignment='+id+'&nama='+nama+'&id_lapor='+<?php echo $lapor->id ?>,
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
<?php endif ?>