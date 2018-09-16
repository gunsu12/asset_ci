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
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Daftar Asset</h3>
              <a href="<?=base_url()?>asset_tambah" class="pull-right btn btn-success btn-sm" data-toggle="tooltip" data-placement="left" title="Tambah data asset"><i class="fa fa-plus"></i></a>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
               <thead>
                 <tr>
                    <th>No</th>
                    <th>Kode Asset</th>
                    <th>Nama Asset</th>
                    <th>Tipe Asset</th>
                    <th>IP Address</th>
                    <th>Kondisi</th>
                    <th>Tanggal Masuk</th>
                    <th>Lokasi</th>
                    <th>Nama Pengguna</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <?php  
                    if ($assets) {
                      $i = 1;
                      foreach ($assets as $asset) {
                    ?>
                        <tr>
                          <td><?=$i++?></td>
                          <td><?=$asset->asset_kode?></td>
                          <td><a href="<?=base_url()?>asset_detil/<?=$asset->asset_id?>"><?=$asset->asset_nama?></a></td>
                          <td><?php foreach ($types as $type) { if ($asset->asset_type == $type->ta_id) { echo $type->ta_name; }}?></td>
                          <td><?=$asset->asset_ip?></td>
                          <td>
                            <?php if ($asset->asset_kondisi == 'baik'): ?>
                              <span class="label label-success"><?=$asset->asset_kondisi?></span>
                            <?php elseif($asset->asset_kondisi == 'rusak'): ?>
                              <span class="label label-danger"><?=$asset->asset_kondisi?></span>
                            <?php else: ?>
                              <span class="label label-default"><?=$asset->asset_kondisi?></span>
                            <?php endif ?>
                          </td>
                          <td><?=$asset->asset_tanggal_masuk?></td>
                          <td><?=$asset->lokasi?></td>
                          <td><?=$asset->asset_pengguna?></td>
                          <td>
                              <a href="<?=base_url()?>asset_edit/<?=$asset->asset_id?>" class="btn btn-block btn-sm btn-warning"><i class="fa fa-edit"></i></a>
                          </td>
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
      <!-- /.row -->
    </section>
    <!-- /.content -->

  </div>
  <!-- /.content-wrapper -->
  <?php
Include "footer.php";
?>