<?php
include "header.php";
?>
<!-- =============================================== -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Daftar Asset
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Asset</a></li>
        <li class="active">Daftar Asset</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <!-- ./col -->
        <div class="col-md-5">
          <div class="box box-solid">
            <div class="box-header with-border">
              <i class="fa fa-file-text"></i>
              <h3 class="box-title">Data Umum Asset</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <dl class="dl-horizontal">
                <dt>Kode Asset</dt>
                <dd><?=$asset->asset_kode?></dd>

                <dt>Nama Asset</dt>
                <dd><?=$asset->asset_nama?></dd>

                <dt>Lokasi Asset</dt>
                <dd><?=$asset->lokasi?></dd>

                <dt>IP Address</dt>
                <dd><?=$asset->asset_ip?></dd>

                <dt>Tipe Asset</dt>
                <dd><?=$asset->asset_type?></dd>

                <dt>Nilai Asset</dt>
                <dd>Rp. <?=number_format($asset->asset_nilai,0,',','.')?> ,-</dd>

                <dt>Tanggal Masuk Asset</dt>
                <dd><?=$asset->asset_tanggal_masuk?></dd>

                <dt>Batas Penggunaan Asset</dt>
                <dd><?=$asset->asset_batas_pemakaian?> Tahun</dd>

                <dt>Kondisi</dt>
                <dd><?=$asset->asset_kondisi?></dd>

                <dt>Pengguna Asset</dt>
                <dd><?=$asset->asset_pengguna?></dd>

                <dt>Password PC</dt>
                <dd><?=$asset->asset_password_pc?></dd>
              </dl>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- ./col -->

        <!-- ./col -->
        <div class="col-md-4">
          <div class="box box-solid">
            <div class="box-header with-border">
              <i class="fa fa-tv"></i>

              <h3 class="box-title">Spesifikasi Asset</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <dl class="dl-horizontal">
                <dt>Proccessor</dt>
                <dd><?=$asset->asset_processor?></dd>

                <dt>Memory RAM</dt>
                <dd><?=$asset->asset_ram?></dd>

                <dt>Harddisk</dt>
                <dd><?=$asset->asset_hdd?></dd>

                <dt>Sistem Operasi</dt>
                <dd><?=$asset->asset_os?></dd>

                <dt>Keterangan Asset</dt>
                <dd><?php echo html_entity_decode($asset->asset_keterangan); ?></dd>
              </dl>
              
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- ./col -->

               <!-- ./col -->
        <div class="col-md-3">
          <div class="box box-solid">
            <div class="box-header with-border">
              <i class="fa fa-star"></i>

              <h3 class="box-title">Hasil Penilaian Asset</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
            <h5 class="bold">Penilaian Terakhir</h5>
            <h2 class="bold">3.5 <small>/ 5</small></h2>

            <span class="fa fa-star"></span>
            <span class="fa fa-star"></span>
            <span class="fa fa-star"></span>
            <span class="fa fa-star-half-o"></span>
            <span class="fa fa-star-o"></span>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- ./col -->

      </div>
      <!-- /.row -->
      <div class="row">
        <?php if ($this->session->flashdata('info') == ""): ?>
          <?=$this->session->flashdata('info')?> 
        <?php endif ?>
      </div>
      <div class="row">
        <div class="col-xs-12">

          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Riwayat Kerusakan & Perbaikan Asset</h3>
              <button type="button" class="pull-right btn btn-success btn-sm" data-toggle="modal" data-target="#modal-default">
                <i class="fa fa-plus"></i>
              </button>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                   <thead>
                     <tr>
                        <th style="width:5%; text-align: center;">No</th>
                        <th style="width:10%; text-align: center;">Tanggal</th>
                        <th style="text-align: center;">Kerusakan</th>
                        <th style="text-align: center;">Tindakan Perbaikan</th>
                        <th style="width:10%; text-align: center;">Petugas</th>
                        <th style="width:10%; text-align: center;">Aksi</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php 

                        if ($logs) {
                          $i=1;
                            foreach ($logs as $log) {
                      ?>
                        <tr>
                          <td><?=$i++?></td>
                          <td><?=$log->log_date?></td>
                          <td><?=$log->log_problem?></td>
                          <td><?=$log->log_tindakan?></td>
                          <td><?=$log->log_petugas?></td>
                          <td><a href="<?=base_url()?>asset_log_delete/<?=$asset->asset_id?>/<?=$log->log_id?>" class="btn btn-block btn-sm btn-danger" onclick="return confirm('Apakah anda yakin untuk menghapus log ini?')"><i class="fa fa-close"></i></a></td>
                        </tr>
                      <?php
                            }
                        }
                      ?>
                    </tbody>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>

      <!-- Modal -->
      <div class="modal fade" id="modal-default" tabindex="-1">
          <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
              <?=form_open('asset_log_add')?>
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Form Input Kerusakan & Perbaikan</h4>
              </div>
              <div class="modal-body">
                  <div class="form-group">
                      <label for="petugas">Petugas</label>
                      <input name="petugas" type="text" class="form-control" id="petugas">
                  </div>
                  <div class="form-group">
                      <label for="kerusakan">Kerusakan</label>
                      <input name="problem" type="text" class="form-control" id="kerusakan">
                  </div>
                  <div class="form-group">
                      <label for="perbaikan">Perbaikan</label>
                      <input name="tindakan" type="text" class="form-control" id="perbaikan">
                  </div>
                  <div class="form-group">
                      <label for="tglmskAsset">Tanggal</label>
                      <input type="text" class="form-control" id="datepicker" name="date" value="<?=date('m/d/Y')?>">
                      <input type="hidden" name="asset_id" value="<?=$asset_id?>">
                  </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Tutup</button>
                <button type="submit" name="simpan" class="btn btn-primary">Simpan Perubahan</button>
              </div>

                <?=form_close()?>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->
      <!-- Modal -->

    </section>
    <!-- /.content -->

  </div>
  <!-- /.content-wrapper -->
  <?php
Include "footer.php";
?>