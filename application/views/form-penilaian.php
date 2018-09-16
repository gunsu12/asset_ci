<?php
include "header.php";
?>
<!-- =============================================== -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Penilaian
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Penilaian</a></li>
        <li class="active">Pencarian Asset</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Pencarian Asset</h3>
            </div>
             <!--/.box-header-->
            <div class="box-body">
              <div class="row">

                <div class="col-md-8">  
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
                
                <div class="col-md-4">
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
                    <!-- /.input group -->
                  </div>
                  <!-- Date  -->
                </div>

            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </div>
       <!--Form Penilaian-->
            <div class="row">
              <div class="col-xs-12">
                <div class="box">
                  <div class="box-header">
                    <h3 class="box-title">Form Penilaian</h3>
                  </div>
                    <div class="box-body">
                        <!--Form Penilaian-->
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
                                    <tfoot>
                                      
                                    </tfoot>
                              </table>
                              <br>
                              <button class="btn btn-flat btn-info pull-right" type="submit" name="">Simpan</button>
                          </div>
                        </div>  
                  <!--Form Penilaian-->
              </div>
            </div>  
    </section>
    <!-- /.content -->

    <!-- Modal -->
      <div class="modal fade" id="modal-lokasi" tabindex="-1">
          <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Form Input Tipe Asset</h4>
              </div>
              <div class="modal-body">
                  <div class="form-group">
                      <label for="petugas">Kode Tipe Asset</label>
                      <input name="petugas" type="text" class="form-control" id="petugas">
                  </div>
                  <div class="form-group">
                      <label for="kerusakan">Tipe Asset</label>
                      <input name="problem" type="text" class="form-control" id="kerusakan">
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
        <!-- /.modal -->
    <!-- Modal -->

  </div>
  <!-- /.content-wrapper -->
  <?php
Include "footer.php";
?>