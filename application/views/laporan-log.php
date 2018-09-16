<?php
include "header.php";
?>
<!-- =============================================== -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Laporan
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Laporan</a></li>
        <li class="active">Pencarian Laporan</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Pencarian Laporan</h3>
            </div>
             <!--/.box-header-->
            <div class="box-body">
              <div class="row">

                <div class="col-md-2">  
                  <!-- Jenis Laporan-->
                  <div class="form-group">
                    <label for="jnslap">Jenis Laporan :</label>
                    <select name="" class="form-control" id="jnslap">
                      <option>Checklist</option>
                      <option>Logbook</option>
                      <option>Asset</option>
                    </select>
                  </div>
                  <!-- Jenis Laporan-->
                </div>

                <div class="col-md-2">  
                  <!-- Kategori Asset -->
                  <div class="form-group">
                    <label for="jnslap">Kategori Asset :</label>
                    <select name="" class="form-control" id="jnslap">
                      <option>Checklist</option>
                      <option>Logbook</option>
                      <option>Asset</option>
                    </select>
                  </div>
                  <!-- Kategori Asset-->
                </div>

                 <div class="col-md-2">  
                  <!-- Lokasi Asset -->
                  <div class="form-group">
                    <label for="jnslap">Lokasi Asset :</label>
                    <select name="" class="form-control" id="jnslap">
                      <option>Checklist</option>
                      <option>Logbook</option>
                      <option>Asset</option>
                    </select>
                  </div>
                  <!-- Lokasi Asset-->
                </div>

                <div class="col-md-2">  
                  <!-- Kategori Pekerjaan : -->
                  <div class="form-group">
                    <label for="jnslap">Kategori Pekerjaan :</label>
                    <div class="input-group-btn">

                      <select name="" class="form-control" id="jnslap">
                         <option value="0">Pilih Pekerjaan</option>
                         <option value="hardware">Hardware</option>
                         <option value="software">Software</option>
                         <option value="jaringan">Jaringan</option>
                         <option value="master">Master Data</option>
                         <option value="lainnya">Lainnya</option>
                      </select>
                      
                    </div>
                  </div>
                  <!-- Kategori Pekerjaan :-->
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
                          <button type="button" class="btn btn-info btn-flat"><i class="fa fa-search"></i>  Cari</button>
                          <button type="button" class="btn btn-danger btn-flat"><i class="fa fa-repeat"></i>  Bersihkan</button>
                        </span>
                    </div>
                    <!-- /.input group -->
                  </div>
                  <!-- Date  -->
                </div>

              <!--
              <table class="table table-bordered table-striped">
               <thead>
                 <tr>
                    <th>No</th>
                  </tr>
                </thead>
                <tbody>
                        <tr>
                          <td>1</td>
                          <td>U001</td>
                          <td>Test</td>
                          <td>
                              <a href="" class="btn btn-block btn-sm btn-warning"><i class="fa fa-edit"></i></a>
                          </td>
                        </tr>
                  
                </tbody>
              </table> -->
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </div>
       <!--Laporan-->
            <div class="row">
              <div class="col-xs-12">
                <div class="box">
                  <div class="box-header">
                    <h3 class="box-title">Hasil Laporan</h3>
                  </div>
                    <div class="box-body">

                    </div>
                </div>
              </div>
            </div>      
      <!--Laporan-->
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