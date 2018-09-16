<?php
include "header.php";
?>
<!-- =============================================== -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Parameter Penilaian
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Parameter Penilaian</a></li>
        <li class="active">Daftar Parameter Penilaian</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Notifikasi kegagalan -->
      <div class="row">
        <div class="col-md-12">
          <?php $this->load->view('notifikasi'); ?>
        </div>
      </div>
      <!-- Notifikasi kegagalan -->
      
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Daftar Parameter Penilaian</h3>
              <button type="button" class="pull-right btn btn-success btn-sm" data-toggle="modal" data-target="#modal-lokasi" data-toggle="tooltip" data-placement="left" title="Tambah data pengguna"><i class="fa fa-plus"></i></button>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
               <thead>
                 <tr>
                    <th style="width:5%; text-align: center;">No</th>
                    <th style="text-align: center;">Nama Parameter</th>
                    <th style="width:10%; text-align: center;">Status</th>
                    <th style="width:10%; text-align: center;">Bobot Nilai</th>
                    <th style="width:10%; text-align: center;">Aksi</th>
                  </tr>
                </thead>
                <tbody>
                 
                     <tr>
                        <td style="text-align: center;">1</td>
                        <td></td>
                        <td style="text-align: center;"></td>
                        <td style="text-align: center;"></td>
                        <td>
                            <a href="#" class="btn btn-block btn-sm btn-warning" data-toggle="modal" data-target="#modal-edit"><i class="fa fa-edit"></i></a>
                        </td>
                      </tr>
                      <!-- Modal Edit-->
                        <div class="modal fade" id="modal-edit" tabindex="-1">
                            <div class="modal-dialog modal-dialog-centered">
                              <div class="modal-content">
                                  <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span></button>
                                    <h4 class="modal-title" style="text-align: center;">Form Edit Parameter Penilaian</h4>
                                  </div>
                                  <div class="modal-body">
                                      <div class="form-group">
                                          <label for="tipe">Nama Parameter</label>
                                          <input name="tipe" type="text" class="form-control" value="">
                                      </div>
                                      <div class="form-group">
                                          <label for="status">Status</label>
                                          <select name="status" class="form-control" id="status">
                                            <option value="aktif" select >Aktif</option>
                                            <option value="nonaktif" select >Non-Aktif</option>
                                          </select>
                                      </div>
                                      <div class="form-group">
                                          <label for="keterangan">Bobot Nilai</label>
                                          <textarea name="keterangan" class="form-control"></textarea>
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
                        <!-- Modal Edit-->
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
      <div class="modal fade" id="modal-lokasi" tabindex="-1">
          <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
             <?=form_open('tipe_asset/add')?>
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" style="text-align: center;">Form Input Parameter Penilaian</h4>
              </div>
              <div class="modal-body">
                  <div class="form-group">
                      <label for="tipe">Nama Parameter</label>
                      <input name="tipe" type="text" class="form-control">
                  </div>
                  <div class="form-group">
                      <label for="status">Status</label>
                      <select name="status" class="form-control" id="status">
                        <option value="aktif">Aktif</option>
                        <option value="nonaktif">Non-Aktif</option>
                      </select>
                  </div>
                  <div class="form-group">
                      <label for="keterangan">Bobot Nilai</label>
                      <textarea name="keterangan" class="form-control"></textarea>
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