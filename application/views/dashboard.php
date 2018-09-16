<?php
include "header.php";
?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
        <small>Control Panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3><?=$count_asset_all?></h3>

              <p>Total Asset</p>
            </div>
            <div class="icon">
              <i class="ion ion-briefcase"></i>
            </div>
            <a href="<?=base_url()?>asset" class="small-box-footer">Info Selengkapnya <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3><?=$count_asset_baik?></h3>

              <p>Total Asset Baik</p>
            </div>
            <div class="icon">
              <i class="ion ion-thumbsup"></i>
            </div>
            <a href="#" class="small-box-footer">Info Selengkapnya <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3><?=$count_asset_rusak?></h3>

              <p>Total Asset Rusak</p>
            </div>
            <div class="icon">
              <i class="ion ion-thumbsdown"></i>
            </div>
            <a href="#" class="small-box-footer">Info Selengkapnya <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <h3><?=$count_asset_log?></h3>

              <p>Total Permasalahan Bulan Ini</p>
            </div>
            <div class="icon">
              <i class="ion ion-clipboard"></i>
            </div>
            <a href="#" class="small-box-footer">Info Selengkapnya <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
      </div>
      <!-- /.row -->
      <!-- /.box -->

      <div class="row">
        <div class="col-md-12">
            <!-- Application buttons -->
            <div class="box">
              <div class="box-header">
                <h3 class="box-title">Tombol Pintasan</h3>
              </div>
              <div class="box-body">
                <a class="btn btn-app">
                  <i class="fa fa-briefcase"></i> Asset
                </a>
                <a class="btn btn-app">
                  <i class="fa fa-users"></i> Pengguna
                </a>
                <a class="btn btn-app">
                  <i class="fa fa-map"></i> Lokasi
                </a>
                <a class="btn btn-app">
                  <i class="fa fa-cubes"></i> Tipe Asset
                </a>
                <a class="btn btn-app">
                  <i class="fa fa-save"></i> Save
                </a>
                <a class="btn btn-app">
                  <span class="badge bg-yellow">3</span>
                  <i class="fa fa-bullhorn"></i> Notifications
                </a>
                <a class="btn btn-app">
                  <span class="badge bg-green">300</span>
                  <i class="fa fa-barcode"></i> Products
                </a>
                <a class="btn btn-app">
                  <span class="badge bg-purple">891</span>
                  <i class="fa fa-users"></i> Users
                </a>
                <a class="btn btn-app">
                  <span class="badge bg-teal">67</span>
                  <i class="fa fa-inbox"></i> Orders
                </a>
                <a class="btn btn-app">
                  <span class="badge bg-aqua">12</span>
                  <i class="fa fa-envelope"></i> Inbox
                </a>
                <a class="btn btn-app">
                  <span class="badge bg-red">531</span>
                  <i class="fa fa-heart-o"></i> Likes
                </a>
              </div>
              <!-- /.box-body -->
            </div>
        </div>
      </div>  
      <!-- /.col (LEFT) -->
      <div class="row">
        <!-- KIRI -->
          <div class="col-md-6">
            <div class="box box-danger">
              <div class="box-header with-border">
                <h3 class="box-title">Checklist Pagi</h3>
              </div>
              <div class="box-body">

                <div class="row">
                  <div class="col-md-8">
                      <div class="form-group">
                        <label>Nama Asset / IP Address <i class="fa fa-sm fa-question-circle" data-toggle="tooltip" data-placement="right" title="Pencarian berdasarkan Nama Asset/IP Address"></i></label> 
                        <select name="" class="form-control select2" style="width: 100%;">
                          <?php 
                            foreach ($assets as $asset): 
                              if ($asset->asset_type == '2') {
                              
                          ?>
                            <option value="<?=$asset->asset_id?>"><?=$asset->asset_kode?> | <?=$asset->asset_nama?> | <?=$asset->asset_ip?> </option>
                          <?php }

                            endforeach; 
                          ?>
                        </select>
                      </div>
                  </div>

                  <div class="col-md-4">
                      <div class="form-group">
                          <label for="tglmskAsset">Tanggal</label>
                          <input type="text" class="form-control" name="date" value="<?=date('m/d/Y')?>" readonly>
                      </div>
                  </div>
              </div>

              <div class="row">
                <div class="col-md-12">
                  <label>Keterangan Kondisi Asset <i class="fa fa-sm fa-question-circle" data-toggle="tooltip" data-placement="right" title="Isi dengan kondisi layanan pada server"></i></label>
                  <textarea name="" class="textarea" placeholder="Place some text here"
                          style="width: 100%; height: 105px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                </div>
              </div>

              <div class="form-group">
                  <button type="submit" class="btn btn-block btn-flat btn-primary">Simpan</button>
                  </div>

              </div>
              <!-- /.box-body -->
            </div>
            <!-- /.box -->
          </div>

           <!-- TENGAH -->
        <div class="col-md-6">
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Logbook Pekerjaan Hari Ini</h3>
            </div>
            <div class="box-body">
              <?=form_open('asset_log_add')?>
                  <div class="row">
                      <div class="col-md-4">
                          <div class="form-group">
                                <label for="work">Jenis Pekerjaan</label>
                                <select name="" class="form-control" id="work">
                                  <option value="0">Pilih Pekerjaan</option>
                                  <option value="hardware">Hardware</option>
                                  <option value="software">Software</option>
                                  <option value="jaringan">Jaringan</option>
                                  <option value="master">Master Data</option>
                                  <option value="lainnya">Lainnya</option>
                                </select>
                          </div>
                      </div>
                      <div class="col-md-4">
                          <div class="form-group">
                              <label for="petugas">Petugas</label>
                              <input name="petugas" type="text" class="form-control" id="petugas" autocomplete="off">
                          </div>
                      </div>
                      <div class="col-md-4">
                          <div class="form-group">
                              <label for="tglmskAsset">Tanggal</label>
                              <input type="text" class="form-control" name="date" value="<?=date('m/d/Y')?>" readonly>
                          </div>
                      </div>
                  </div>

                  <div class="form-group">
                    <label>Nama Asset / IP Address / Nama Pengguna <i class="fa fa-sm fa-question-circle" data-toggle="tooltip" data-placement="left" title="Pencarian berdasarkan Nama Asset/IP Address/Nama Pengguna"></i></label> 
                    <select name="asset_id" class="form-control select2" style="width: 100%;" id="asset_lb">
                      <option value="" selected>chose</option>
                      <?php foreach ($assets as $asset): ?>
                        <option value="<?=$asset->asset_id?>"><?=$asset->asset_kode?> | <?=$asset->asset_nama?> | <?=$asset->asset_ip?> | <?=$asset->asset_pengguna?></option>
                      <?php endforeach ?>
                    </select>
                  </div>
                  <div class="form-group">
                      <label for="kerusakan">Kerusakan</label>
                      <input name="problem" type="text" class="form-control" id="kerusakan">
                  </div>
                  <div class="form-group">
                      <label for="perbaikan">Perbaikan</label>
                      <input name="tindakan" type="text" class="form-control" id="perbaikan">
                  </div>
                  <div class="form-group" id="keterangan_div" hidden="">
                      <label for="keterangan">Keterangan</label>
                      <textarea name="" class="textarea" placeholder="Place some text here"
                          style="width: 100%; height: 105px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                  </div>
                  <div class="form-group">
                    <button type="submit" class="btn btn-block btn-flat btn-primary">Simpan</button>
                  </div>
                  <?=form_close()?>
                </div>
                </div>
              </div>   
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>        
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
<?php
  Include "footer.php";
?>
<script type="text/javascript">
  $(document).ready(function(){
    $('#work').change(function(){
      var ket = $(this).val();

      if (ket == 'master' || ket == 'lainnya')
      {
        $('#asset_lb').attr("disabled", true);
        $('#asset_lb').val('0');
      }else{
        $('#asset_lb').attr("disabled", false);
      }
    });
    <?php if ($this->session->flashdata('info')): ?>
      toastr.info('<?=$this->session->flashdata('info')?>');
    <?php endif ?>

    <?php if (validation_errors()): ?>
      toastr.warning('<?=validation_errors()?>');
    <?php endif ?>
  }); 
</script>
