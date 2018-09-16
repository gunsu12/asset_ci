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
              <h3 class="box-title">Form Update Asset</h3> 
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="<?=base_url()?>asset_edit/<?=$asset->asset_id?>" method="POST">
              <div class="box-body">
              	<!-- Form Kiri -->
              	<div class="col-md-4">
                  <div class="form-group">
                    <label for="namaAsset">Kode Asset (*)</label>
                    <input type="text" class="form-control" id="namaAsset" name="kode" value="<?=$asset->asset_kode?>">
                  </div>
              		<div class="form-group">
	                  <label for="namaAsset">Nama Asset (*)</label>
	                  <input type="text" class="form-control" id="namaAsset" name="nama" value="<?=$asset->asset_nama?>">
                	</div>
                	<div class="form-group">
	                  <label for="lokasiAsset">Lokasi Asset (*)</label>
                    <select name="lokasi" class="form-control select2">
                      <option value="">- Pilih Lokasi -</option>
                      <?php 
                      if ($lokasis) {                      
                          foreach ($lokasis as $lokasi): 
                      ?>
                        <option value="<?=$lokasi->id_lok?>" <?php if ($lokasi->id_lok == $asset->loc_id): ?>
                          selected
                        <?php endif ?>><?=$lokasi->lokasi?></option>
                      <?php 
                          endforeach;
                        } 
                      ?>
                    </select>
                	</div>
                	<div class="form-group">
	                  <label for="ipaddressAsset">IP Address (*)</label>
	                  <input type="text" class="form-control" id="ipaddressAsset" name="ip" value="<?=$asset->asset_ip?>">
                	</div>
                	<div class="form-group">
	                  <label for="tipeAsset">Tipe Asset</label>
	                  <select name="tipe" class="form-control select2" id="tipeAsset"> 
                      <option value="">Pilih</option>
                       <?php if ($types): ?>
                         <?php foreach ($types as $type): ?>
                           <option value="<?=$type->ta_id?>"<?php if ($type->ta_id == $asset->asset_type) { echo "selected"; } ?>><?=$type->ta_name?></option>
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
	                  <input type="text" class="form-control" id="proccessor" name="proccessor" value="<?=$asset->asset_processor?>">
                	</div>
                	<div class="form-group">
	                  <label for="memory">Memory RAM</label>
	                  <input type="text" class="form-control" id="ram" name="ram" value="<?=$asset->asset_ram?>">
                	</div>
                	<div class="form-group">
	                  <label for="hdd">Harddisk</label>
	                  <input type="text" class="form-control" id="hdd" name="hdd" value="<?=$asset->asset_hdd?>">
                	</div>
                	<div class="form-group">
	                  <label for="os">Sistem Operasi</label>
	                  <input type="text" class="form-control" id="os" name="os" value="<?=$asset->asset_os?>">
                	</div>
                	<div class="form-group">
	                  <label for="nilaiAsset">Nilai Asset</label>
	                  <input type="text" class="form-control" id="nilaiAsset" name="nilai" value="<?=$asset->asset_nilai?>">
                	</div>
              	</div>
              	<!-- Form Tengah -->

              	<!-- Form Kanan -->
              	<div class="col-md-4">
              		<div class="form-group">
	                  <label for="batas">Batas Penggunaan Asset (Per Tahun)</label>
	                  <input type="text" class="form-control" id="batas" name="batas" value="<?=$asset->asset_batas_pemakaian?>"> 
                	</div>
                	<div class="form-group">
                    <label for="remAsset">Remote Server</label>
                    <input type="text" name="remote" class="form-control" value="<?=$asset->asset_password_pc?>">
                  </div>
                	<div class="form-group">
	                  <label for="konAsset">Kondisi Asset</label>
	                  <select class="form-control" id="namaAsset" name="kondisi">
	                    <option value="baik"<?php if ($asset->asset_kondisi == 'baik'): ?>
                        selected
                      <?php endif ?>>Baik</option>
	                    <option value="rusak"<?php if ($asset->asset_kondisi == 'rusak'): ?>
                        selected
                      <?php endif ?>>Rusak</option>
	                    <option value="perbaikan"<?php if ($asset->asset_kondisi == 'perbaikan'): ?>
                        selected
                      <?php endif ?>>Perbaikan</option>
	                  </select>
                	</div>
                	<div class="form-group">
	                  <label for="userAsset">Pengguna Asset</label>
	                  <input type="text" class="form-control" id="userAsset" name="pengguna" value="<?=$asset->asset_pengguna?>">
                	</div>
                  <div class="form-group">
                    <label for="tglmskAsset">Tanggal Masuk Asset (*)</label>
                    <input type="text" class="form-control" id="datepicker" name="tanggalmsk" value="<?php $time = strtotime($asset->asset_tanggal_masuk); $newformat = date('m/d/Y',$time); echo $newformat;?>">
                  </div>

              	</div>
                <div class="col-md-12">
                  <label>Keterangan Asset</label>
                  <textarea name="keterangan" class="textarea" placeholder="Place some text here" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"><?=$asset->asset_keterangan?></textarea>
                </div>
                <!-- Form Kanan -->
                <div class="col-md-12">
	              <div class="box-footer">
	                <button type="submit" class="btn btn-primary">Submit</button>
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