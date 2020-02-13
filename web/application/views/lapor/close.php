<div class="mb-0 mt-4">
<i class="fa fa-home"></i> <b>Close Laporan dan Publish Menjadi Data Yudistira</b></div>
<hr class="mt-2">
<div class="row">
    <div class="col-md-6">
        
        <div class="card mb-3">
            <div class="card-header">
            <i class="fa fa-gears"></i> <b>Informasi Hoax</b></div>
            <div class="card-body">
                <div style="overflow-x: scroll;">
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
        </div>
        <div class="card mb-3">
            <div class="card-header">
            <i class="fa fa-gears"></i> <b>Screenshot Hoax</b></div>
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
                
            </div>
        </div>
        <div class="card mb-3">
            <div class="card-header">
            <i class="fa fa-gears"></i> <b>Informasi Pelapor</b></div>
            <div class="card-body">
                <table class="table table-condensed stripe" width="100%" cellspacing="0">
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
    </div>
    <div class="col-md-6">
        <div class="card mb-3">
            <div class="card-header">
            <i class="fa fa-gears"></i> <b>Publish Menjadi Data Yudistira</b></div>
            <div class="card-body">
                
                <?php echo form_open('',array("class"=>"form-horizontal")); ?>
                <p><?php //echo validation_errors(); ?> </p>
                <div class="form-group">
                    <label for="status" class="col-md-4 control-label">Status</label>
                    <div class="col-md-12">
                        <?php   echo form_dropdown( array('name'=>'status','id'=>'status','class'=>'form-control'),
                        $this->status_data,
                        $this->input->post('status'))?>
                        <span class="text-danger"><?php echo form_error('status');?></span>
                    </div>
                </div>
                <div class="form-group">
                    <label for="status" class="col-md-4 control-label">Klasifikasi</label>
                    <div class="col-md-12">
                        <?php   echo form_dropdown( array('name'=>'klasifikasi','id'=>'klasifikasi','class'=>'form-control'),
                        $klasifikasi,
                        $this->input->post('klasifikasi'))?>
                        <span class="text-danger"><?php echo form_error('klasifikasi');?></span>
                    </div>
                </div>
                <div class="form-group">
                    <label for="kesimpulan" class="col-md-4 control-label">Kesimpulan</label>
                    <div class="col-md-12">
                        <?php echo form_textarea(array('name'=>'kesimpulan','id'=>'kesimpulan','class'=>'form-control','rows'=>"5"), trim(set_value('kesimpulan')))?>
                        <span class="text-danger"><?php echo form_error('kesimpulan');?></span>
                    </div>
                </div>
                <div class="form-group">
                    <label for="isi" class="col-md-12 control-label">Isi (diambil dari data Hoax di laporan)</label>
                    <div class="col-md-12">
                        <?php $val_isi = $lapor->teks_hoax; ?>
                        <?php echo form_textarea(array('name'=>'isi','id'=>'isi','class'=>'form-control','rows'=>"10"), trim($val_isi))?>
                        <span class="text-danger"><?php echo form_error('isi');?></span>
                    </div>
                </div>
                <div class="form-group">
                    <label for="fakta" class="col-md-4 control-label">Fakta</label>
                    <div class="col-md-12">
                        <?php $val_fakta = $this->input->post('fakta'); ?>
                        <?php echo form_textarea(array('name'=>'fakta','id'=>'fakta','class'=>'form-control','rows'=>"10"), trim($val_fakta))?>
                        <span class="text-danger"><?php echo form_error('fakta');?></span>
                    </div>
                </div>
                <div class="form-group">
                    <label for="rujukan" class="col-md-4 control-label">Rujukan</label>
                    <div class="col-md-12">
                        <?php $val_rujukan = $this->input->post('rujukan'); ?>
                        <?php echo form_textarea(array('name'=>'rujukan','id'=>'rujukan','class'=>'form-control','rows'=>"10"), trim($val_rujukan))?>
                        <span class="text-danger"><?php echo form_error('rujukan');?></span>
                    </div>
                </div>
                <div class="form-group">
                    <label for="sumber" class="col-md-4 control-label">Sumber</label>
                    <div class="col-md-12">
                        <input type="text" name="sumber" value="<?php echo $this->input->post('sumber'); ?>" class="form-control" id="sumber" />
                        <span class="text-danger"><?php echo form_error('sumber');?></span>
                    </div>
                </div>
                <div class="form-group">
                    <label for="status" class="col-md-4 control-label">Institusi</label>
                    <div class="col-md-12">
                        <?php
                        $authors = array(0=>"--Pilih Institusi--")+$authors;
                        echo form_dropdown( array('name'=>'author','id'=>'author','class'=>'form-control'),
                        $authors,
                        $this->input->post('author'))?>
                        <span class="text-danger"><?php echo form_error('author');?></span>
                    </div>
                </div>
                <div class="form-group">
                    <label for="gambar1" class="col-md-12 control-label">Gambar1 (diambil dari data laporan)</label>
                    <div class="col-md-12">
                        <?php if(trim($lapor->screenshot_1) !== ""): ?>
                        <a href="<?php echo base_url() ?>/<?php echo $this->lapor_path.$lapor->screenshot_1  ?>" target="_blank">
                            <img src="<?php echo base_url() ?>/<?php echo $this->lapor_path.$lapor->screenshot_1 ?>" class="img-thumbnail" alt="Screenshot 1" style="width:150px; height: auto;">
                        </a>
                        <input type="hidden" name="gambar1" value="<?php echo $lapor->screenshot_1 ?>">
                        <?php else: ?>
                        <input id="gambar-1" type="file" name="userFiles[]" value="<?=set_value('gambar_1')?>">
                        <?php endif ?>
                    </div>
                </div>
                <div class="form-group">
                    <label for="gambar2" class="col-md-12 control-label">Gambar2 (diambil dari data laporan)</label>
                    <div class="col-md-12">
                        <?php if(trim($lapor->screenshot_2) !== ""): ?>
                        <a href="<?php echo base_url() ?>/<?php echo $this->lapor_path.$lapor->screenshot_2  ?>" target="_blank">
                            <img src="<?php echo base_url() ?>/<?php echo $this->lapor_path.$lapor->screenshot_2 ?>" class="img-thumbnail" alt="Screenshot 2" style="width:150px; height: auto;">
                        </a>
                        <input type="hidden" name="gambar2" value="<?php echo $lapor->screenshot_2 ?>">
                        <?php else: ?>
                        <input id="gambar-2" type="file" name="userFiles[]" value="<?=set_value('gambar_2')?>">
                        <?php endif; ?>
                    </div>
                </div>
                <div class="form-group">
                    <label for="tanggal" class="col-md-4 control-label">Tanggal</label>
                    <div class="input-group date col-md-12">
                        <input type="date" name="tanggal" class="form-control" id="dateselect" value='<?=date('Y-m-d')?>'>
                    </div>
                </div>
                <div class="form-group">
                    <label for="tags" class="col-md-4 control-label">Tags</label>
                    <div class="col-md-12">
                        <input type="text" name="tags" value="<?php echo $this->input->post('tags'); ?>" class="form-control" id="tags" />
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-4 col-sm-8">
                        <br>
                        <button type="submit" class="btn btn-success">Publish</button>
                        &emsp;
                        <a href="<?php echo site_url('lapor/detail/'.$lapor->id) ?>" class="btn btn-danger">Kembali ke Detail Laporan</a>
                    </div>
                </div>
                <?php echo form_close(); ?>
                
            </div>
        </div>
        
    </div>
</div>