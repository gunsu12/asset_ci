<?php
include "header.php";
?>
<!-- =============================================== -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Hasil Penilaian Asset 
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Asset</a></li>
        <li class="active">Daftar Hasil Penilaian Asset </li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Daftar Hasil Penilaian Asset </h3>
              <button type="button" class="pull-right btn btn-success btn-sm" data-toggle="modal" data-target="#modal-nilai" title="Tambah penilaian"><i class="fa fa-plus"></i></button>
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
                    <th style="text-align: center;">Lokasi</th>
                    <th style="text-align: center;">Nama Pengguna</th>
                    <th style="width:10%;   text-align: center;">Hasil Penilaian</th>
                    <th style="width:10%; text-align: center;">Kondisi</th>
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
      <div class="modal fade" id="modal-nilai" tabindex="-1">
          <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
              <?=form_open('data_lokasi/add')?>
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                  <h3 class="box-title" style="text-align: center;">Form Penilaian</h3>
                </div>
                <div class="modal-body">
                    <div class="row">

                        <div class="col-md-6">  
                          <!-- Nama Asset -->
                          <div class="form-group">
                            <label>Nama Asset / IP Address / Nama Pengguna <i class="fa fa-sm fa-question-circle" data-toggle="tooltip" data-placement="left" title="Pencarian berdasarkan Nama Asset/IP Address/Nama Pengguna"></i></label> 
                            <select name="asset_id" class="form-control select2" style="width: 100%;" id="asset_lb">
                              <option value="" selected>chose</option>
                              <?php foreach ($assets as $asset): ?>
                                <option value="<?=$asset->asset_id?>"><?=$asset->asset_kode?> | <?=$asset->asset_nama?> | <?=$asset->asset_ip?> | <?=$asset->asset_pengguna?></option>
                              <?php endforeach ?>
                            </select>
                          </div>
                          <!-- Nama Asset -->
                        </div>
                
                        <div class="col-md-6">
                          <!-- Date -->
                              <div class="form-group">
                                <label>Tanggal :</label>
                                <div class="input-group date">
                                  <div class="input-group-addon">
                                    <i class="fa fa-calendar"></i>
                                  </div>
                                  <input type="text" class="form-control pull-right" id="datepicker">
                                    <span class="input-group-btn">
                                      <button type="button" class="btn btn-info btn-flat"><i class="fa fa-search"></i>  Filter</button>
                                      <button type="button" class="btn btn-danger btn-flat"><i class="fa fa-repeat"></i>  Bersihkan</button>
                                    </span>
                                </div>
                              </div>
                          <!-- Date  -->
                        </div>
                    </div>

                    <div class="row">
                      <div class="col-md-12">
                        <label>Tabel Nilai</label>
                        <table class="table table-bordered table-striped">
                                <thead>
                                  <tr>
                                  <td style="text-align: center; width:5%;" rowspan="2"><br>No</td>
                                  <td style="text-align: center; width:60%;" rowspan="2"><br>Parameter Penilaian</td>
                                  <td style="text-align: center;" colspan="5">Nilai</td>
                                  </tr>
                                  <tr>
                                  <td style="text-align: center;">1.0</td>
                                  <td style="text-align: center;">2.0</td>
                                  <td style="text-align: center;">3.0</td>
                                  <td style="text-align: center;">4.0</td>
                                  <td style="text-align: center;">5.0</td>
                                  </tr>
                                </thead>

                                <tbody>
                                  <tr>
                                  <td style="text-align: center;">1</td>
                                  <td>Kebersihan</td>
                                  <td style="text-align: center;"><input name="1" type="radio" /></td>
                                  <td style="text-align: center;"><input name="2" type="radio" /></td>
                                  <td style="text-align: center;"><input name="3" type="radio" /></td>
                                  <td style="text-align: center;"><input name="4" type="radio" /></td>
                                  <td style="text-align: center;"><input name="5" type="radio" /></td>
                                  </tr>
                                  <tr>
                                  <td style="text-align: center;">2</td>
                                  <td>Respon</td>
                                  <td style="text-align: center;"><input name="1" type="radio" /></td>
                                  <td style="text-align: center;"><input name="2" type="radio" /></td>
                                  <td style="text-align: center;"><input name="3" type="radio" /></td>
                                  <td style="text-align: center;"><input name="4" type="radio" /></td>
                                  <td style="text-align: center;"><input name="5" type="radio" /></td>
                                  </tr>
                                </tbody>
                              </table>
                      </div>
                    </div>

                </div>

                <div class="modal-footer">
                  <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Tutup</button>
                  <button type="submit" name="simpan" class="btn btn-primary">Simpan</button>
                </div>
              <?=form_close()?>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->
    <!-- Modal -->

  </div>
  <!-- /.content-wrapper -->
  <?php
Include "footer.php";
?>