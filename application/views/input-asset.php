<?php
include "header.php";
?>
<!-- =============================================== -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Halaman Asset
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Asset</a></li>
        <li class="active">Halaman Asset</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Notifikasi kegagalan -->
      <div class="row">
        <div class="col-md-12">
          <?php if (validation_errors()): ?>
            <div class="row">
                    <div class="col-md-12">
                        <div class="alert alert-danger" role="alert">
                            <button type="button" class="close" data-dismiss="alert"  aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <?=validation_errors()?>
                        </div>
                    </div>
                </div>          
          <?php endif ?>
          <?php if ($this->session->flashdata('info')): ?>
                <div class="row">
                    <div class="col-md-12">
                        <div class="alert alert-info" role="alert">
                            <button type="button" class="close" data-dismiss="alert"  aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <?=$this->session->flashdata('info')?>
                        </div>
                    </div>
                </div>
            <?php endif ?>
        </div>
      </div>


      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
        	 <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Form Input Asset <i class="fa fa-md fa-question-circle" data-toggle="tooltip" data-placement="top" title="(*) Data harus diisi !"></i></h3> 
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="<?=base_url()?>asset_tambah" method="POST">
              <div class="box-body">
              	<!-- Form Kiri -->
              	<div class="col-md-4">
                  <div class="form-group">
                    <label for="namaAsset">Kode Asset (*)</label>
                    <input type="text" class="form-control" id="namaAsset" name="kode" value="<?=set_value('kode')?>">
                  </div>
              		<div class="form-group">
	                  <label for="namaAsset">Nama Asset (*)</label>
	                  <input type="text" class="form-control" id="namaAsset" name="nama" value="<?=set_value('nama')?>">
                	</div>
                	<div class="form-group">
	                  <label for="lokasiAsset">Lokasi Asset (*)</label>
                    <select name="lokasi" class="form-control select2">
                      <option value="">- Pilih Lokasi -</option>
                      <?php 
                      if ($lokasis) {                      
                          foreach ($lokasis as $lokasi): 
                      ?>
                        <option value="<?=$lokasi->id_lok?>"><?=$lokasi->lokasi?></option>
                      <?php 
                          endforeach;
                        } 
                      ?>
                    </select>
                	</div>
                	<div class="form-group">
	                  <label for="ipaddressAsset">IP Address (*) <i class="fa fa-sm fa-question-circle" data-toggle="tooltip" data-placement="top" title="Dapat diisi dengan IP Host"></i></label>
	                  <input type="text" class="form-control" id="ipaddressAsset" name="ip" value="<?=set_value('ip')?>">
                	</div>
                	<div class="form-group">
	                  <label for="tipeAsset">Tipe Asset</label>
	                  <select name="tipe" class="form-control select2" id="tipeAsset"> 
                      <option value="">Pilih</option>
  	                   <?php if ($types): ?>
                         <?php foreach ($types as $type): ?>
                           <option value="<?=$type->ta_id?>"><?=$type->ta_name?></option>
                         <?php endforeach ?>
                       <?php endif ?>
	                  </select>
                	</div>
              	</div>
              	<!-- Form Kiri -->

              	<!-- Form Tengah -->
              	<div class="col-md-4">
              		<div class="form-group">
	                  <label for="proccessor">Proccessor</label>
	                  <input type="text" class="form-control" id="proccessor" name="proccessor" value="<?=set_value('proccessor')?>">
                	</div>
                	<div class="form-group">
	                  <label for="memory">Memory RAM</label>
	                  <input type="text" class="form-control" id="ram" name="ram" value="<?=set_value('ram')?>">
                	</div>
                	<div class="form-group">
	                  <label for="hdd">Harddisk <i class="fa fa-sm fa-question-circle" data-toggle="tooltip" data-placement="top" title="Isi dengan satuan GB/TB"></i></label>
	                  <input type="text" class="form-control" id="hdd" name="hdd" value="<?=set_value('hdd')?>">
                	</div>
                	<div class="form-group">
	                  <label for="os">Sistem Operasi</label>
	                  <input type="text" class="form-control" id="os" name="os" value="<?=set_value('os')?>">
                	</div>
                	<div class="form-group">
	                  <label for="nilaiAsset">Nilai Asset</label>
	                  <input type="text" class="form-control" id="nilaiAsset" name="nilai" value="<?=set_value('nilai')?>">
                	</div>

              	</div>
              	<!-- Form Tengah -->

              	<!-- Form Kanan -->
              	<div class="col-md-4">
              		<div class="form-group">
	                  <label for="batas">Batas Penggunaan Asset <i class="fa fa-sm fa-question-circle" data-toggle="tooltip" data-placement="top" title="Per Tahun"></i></label>
	                  <input type="text" class="form-control" id="batas" name="batas" value="<?=set_value('batas')?>"> 
                	</div>
                	<div class="form-group">
                    <label for="remAsset">Password PC</label>
                    <input type="text" name="remote" class="form-control" value="<?=set_value('remote')?>">
                  </div>
                	<div class="form-group">
	                  <label for="konAsset">Kondisi Asset</label>
	                  <select class="form-control" id="namaAsset" name="kondisi">
	                    <option value="baik">Baik</option>
	                    <option value="rusak">Rusak</option>
	                    <option value="perbaikan">Perbaikan</option>
	                  </select>
                	</div>
                	<div class="form-group">
	                  <label for="userAsset">Pengguna Asset</label>
	                  <input type="text" class="form-control" id="userAsset" name="pengguna" value="<?=set_value('pengguna')?>">
                	</div>
                  <div class="form-group">
                    <label for="tglmskAsset">Tanggal Masuk Asset (*)</label>
                    <input type="text" class="form-control" id="datepicker" name="tanggalmsk" value="<?=set_value('tanggalmsk')?>">
                  </div>

              	</div>
                <div class="col-md-12">
                  <label data-toggle="tooltip" data-placement="top" title="Isi data monitor, UPS,">Keterangan Asset</label>
                  <textarea name="keterangan" class="textarea" placeholder="Place some text here"
                          style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                </div>
                <!-- Form Kanan -->
                <div class="col-md-12">
  	              <div class="form-group">
  	                <button type="submit" class="btn btn-block btn-primary">Simpan</button>
  	              </div>
                </div>
              </div>
              <!-- /.box-body -->
           	

            </form>
          </div>
          <!-- /.box -->
        </div>
        <!-- left column -->
      </div>
    </section>
    <!-- /.main content -->
  </div>
  <!-- /.content-wrapper -->
  <?php
Include "footer.php";
?>