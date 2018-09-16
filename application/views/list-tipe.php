<?php
include "header.php";
?>
<!-- =============================================== -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Tipe Asset
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Tipe Asset</a></li>
        <li class="active">Daftar Tipe Asset</li>
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
              <h3 class="box-title">Daftar Tipe Asset</h3>
              <button type="button" class="pull-right btn btn-success btn-sm" data-toggle="modal" data-target="#modal-lokasi" title="Tambah data pengguna"><i class="fa fa-plus"></i></button>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
               <thead>
                 <tr>
                    <th style="width:5%; text-align: center;">No</th>
                    <th style="text-align: center;">Tipe Asset</th>
                    <th style="text-align: center;">Status</th>
                    <th style="text-align: center;">Keterangan</th>
                    <th style="width:10%; text-align: center;">Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <?php 
                  if ($types) {
                    $i = 1;
                    foreach ($types as $type): 
                      
                  ?>
                     <tr>
                        <td style="text-align: center;"><?=$i++?></td>
                        <td style="text-align: center;"><?=$type->ta_name?></td>
                        <td style="text-align: center;"><?=$type->ta_status?></td>
                        <td><?=$type->ta_keterangan?></td>
                        <td>
                            <a href="#" class="btn btn-block btn-sm btn-warning" data-toggle="modal" data-target="#modal-edit<?=$type->ta_id?>"><i class="fa fa-edit"></i></a>
                        </td>
                      </tr>
                      <!-- Modal Edit-->
                        <div class="modal fade" id="modal-edit<?=$type->ta_id?>" tabindex="-1">
                            <div class="modal-dialog modal-dialog-centered">
                              <div class="modal-content">
                                <?=form_open('tipe_asset/update/'.$type->ta_id)?>
                                  <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span></button>
                                    <h4 class="modal-title" style="text-align: center;">Form Edit Tipe Asset</h4>
                                  </div>
                                  <div class="modal-body">
                                      <div class="form-group">
                                          <label for="tipe">Tipe Asset</label>
                                          <input name="tipe" type="text" class="form-control" value="<?=$type->ta_name?>">
                                      </div>
                                      <div class="form-group">
                                          <label for="status">Status</label>
                                          <select name="status" class="form-control" id="status">
                                            <option value="aktif"<?php if ($type->ta_name == 'aktif'): ?>
                                              select
                                            <?php endif ?>>Aktif</option>
                                            <option value="nonaktif"<?php if ($type->ta_name == 'nonaktif'): ?>
                                              select
                                            <?php endif ?>>Non-Aktif</option>
                                          </select>
                                      </div>
                                      <div class="form-group">
                                          <label for="keterangan">Keterangan</label>
                                          <textarea name="keterangan" class="form-control"><?=$type->ta_keterangan?></textarea>
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
                        <!-- Modal Edit-->
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
             <?=form_open('tipe_asset/add')?>
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" style="text-align: center;">Form Input Tipe Asset</h4>
              </div>
              <div class="modal-body">
                  <div class="form-group">
                      <label for="tipe">Tipe Asset</label>
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
                      <label for="keterangan">Keterangan</label>
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
    <!-- Modal -->

      
  </div>
  <!-- /.content-wrapper -->
  <?php
Include "footer.php";
?>