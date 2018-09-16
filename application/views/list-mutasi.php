<?php
include "header.php";
?>
<!-- =============================================== -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Mutasi
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Asset</a></li>
        <li class="active">Daftar Mutasi</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Daftar Mutasi</h3>
              <a href="#" class="pull-right btn btn-success btn-sm" data-toggle="modal" data-target="#modal-mutasi" title="Mutasi asset"><i class="fa fa-plus"></i></a>
            </div>
            <!-- /.box-header -->
            <div class="box-body">

              <table id="example1" class="table table-bordered table-striped">
               <thead>
                 <tr>
                    <th style="width:5%; text-align: center;">No</th>
                    <th style="width:15%; text-align: center;">Kode Asset</th>
                    <th style="width:15%; text-align: center;">Nama Asset</th>
                    <th style="text-align: center;">Tipe Asset</th>
                    <th style="text-align: center;">Kondisi</th>
                    <th style="width:15%; text-align: center;">Tanggal Mutasi</th>
                    <th style="text-align: center;">Lokasi Awal</th>
                    <th style="text-align: center;">Lokasi Tujuan</th>
                    <th style="width:5%; text-align: center;">Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  
                        <tr>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td>
                              <a href="" class="btn btn-block btn-sm btn-warning"><i class="fa fa-edit"></i></a>
                          </td>
                        </tr>
                  
                </tbody>
              </table>

              
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->

    <!-- Modal -->
      <div class="modal fade" id="modal-mutasi" tabindex="-1">
          <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" style="text-align: center;">Form Mutasi Asset</h4>
              </div>
              <div class="modal-body">
                  <div class="form-group">
                    <label>Kode Asset | Nama Asset | Nama Pengguna <i class="fa fa-sm fa-question-circle" data-toggle="tooltip" data-placement="left" title="Pencarian berdasarkan Kode Asset/Nama Asset/Nama Pengguna"></i></label> 
                    <select name="asset_id" class="form-control select2" style="width: 100%;" id="asset_lb">
                      <option value="" selected>chose</option>
                      <?php foreach ($assets as $asset): ?>
                        <option value="<?=$asset->asset_id?>"><?=$asset->asset_kode?> | <?=$asset->asset_nama?> | <?=$asset->asset_ip?> | <?=$asset->asset_pengguna?></option>
                      <?php endforeach ?>
                    </select>
                  </div>
                  <div class="form-group">
                      <label for="status">Kondisi</label>
                      <select name="status" class="form-control" id="status">
                        <option value="baik">Baik</option>
                        <option value="rusak">Rusak</option>
                      </select>
                  </div>
                  <div class="form-group">
                    <label for="tglmskAsset">Tanggal Mutasi</label>
                    <input type="text" class="form-control" id="datepicker" name="tanggalmsk" value="">
                  </div>
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="lokasiawal">Lokasi Awal</label>
                          <select name="lokasiawal" class="form-control select2" style="width: 100%;">
                            <option value="0">- Pilih Lokasi -</option>
                          </select>
                        </div>
                    </div>

                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="lokasitujuan">Lokasi Tujuan</label>
                          <select name="lokasitujuan" class="form-control select2" style="width: 100%;">
                            <option value="0">- Pilih Lokasi -</option>
                          </select>
                        </div>
                    </div>

                  </div>
                  
                  <div class="form-group">
                      <label for="keterangan">Keterangan</label>
                      <textarea name="keterangan" rows="7" class="form-control"></textarea>
                  </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Tutup</button>
                <button type="submit" name="simpan" class="btn btn-primary">Simpan</button>
              </div>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
    <!-- Modal -->


  </div>
  <!-- /.content-wrapper -->
  <?php
Include "footer.php";
?>