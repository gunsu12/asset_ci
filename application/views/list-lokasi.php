<?php
include "header.php";
?>
<!-- =============================================== -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Lokasi
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Lokasi</a></li>
        <li class="active">Daftar Lokasi</li>
      </ol>
      <br>
     <!-- Notifikasi kegagalan -->
      <div class="row">
        <div class="col-md-12">
          <?php $this->load->view('notifikasi'); ?>
        </div>
      </div>
      <!-- Notifikasi kegagalan -->
    </section>
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Daftar Lokasi</h3>
              <button type="button" class="pull-right btn btn-success btn-sm" data-toggle="modal" data-target="#modal-lokasi" title="Tambah data lokasi"><i class="fa fa-plus"></i></button>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
               <thead>
                 <tr>
                    <th style="width:5%; text-align: center;">No</th>
                    <th style="text-align: center;">Kode Lokasi</th>
                    <th style="text-align: center;">Nama Lokasi</th>
                    <th style="width:10%; text-align: center;">Action</th>
                  </tr>
                </thead>
                <tbody>
                  <?php 
                    if ($lokasis) {
                      $i=1;
                      foreach ($lokasis as $lokasi): 
                  ?>
                       <tr>
                          <td style="text-align: center;"><?=$i++?></td>
                          <td style="text-align: center;"><?=$lokasi->id_lok?></td>
                          <td style="text-align: center;"><?=$lokasi->lokasi?></td>
                          <td>
                              <a href="#" class="btn btn-block btn-sm btn-warning" data-toggle="modal" data-target="#modal-edit<?=$lokasi->id_lok?>"><i class="fa fa-edit"></i></a>
                          </td>
                        </tr>
                         <!-- Modal -->
                          <div class="modal fade" id="modal-edit<?=$lokasi->id_lok?>" tabindex="-1">
                              <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                  <?=form_open('data_lokasi/edit/'.$lokasi->id_lok)?>
                                    <div class="modal-header">
                                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span></button>
                                      <h4 class="modal-title" style="text-align: center;">Form Edit Lokasi</h4>
                                    </div>
                                    <div class="modal-body">
                                        <div class="form-group">
                                            <label for="kode">Kode Lokasi</label>
                                            <input name="kode" type="text" class="form-control" value="<?=$lokasi->id_lok?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="lokasi">Nama Lokasi</label>
                                            <input name="lokasi" type="text" class="form-control" value="<?=$lokasi->lokasi?>">
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
                  <?php 
                      endforeach; 
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
      <!-- /.row -->
    </section>
    <!-- /.content -->

    <!-- Modal -->
      <div class="modal fade" id="modal-lokasi" tabindex="-1">
          <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
              <?=form_open('data_lokasi/add')?>
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                  <h4 class="modal-title" style="text-align: center;">Form Input Lokasi</h4>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="kode">Kode Lokasi</label>
                        <input name="kode" type="text" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="lokasi">Nama Lokasi</label>
                        <input name="lokasi" type="text" class="form-control">
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