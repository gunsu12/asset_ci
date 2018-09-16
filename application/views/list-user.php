<?php
include "header.php";
?>
<!-- =============================================== -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Daftar Pengguna
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Pengguna</a></li>
        <li class="active">Daftar Pengguna</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Daftar Pengguna</h3>
              <a href="" class="pull-right btn btn-success btn-sm" data-toggle="tooltip" data-placement="left" title="Tambah data asset"><i class="fa fa-plus"></i></a>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
               <thead>
                 <tr>
                    <th>No</th>
                    <th>Kode Pengguna</th>
                    <th>Nama Lengkap</th>
                    <th>Nama Pengguna</th>
                    <th>Kata Sandi</th>
                    <th>Unit Kerja </th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                        <tr>
                          <td>1</td>
                          <td>U001</td>
                          <td>Test</td>
                          <td>Test</td>
                          <td>****</td>
                          <td>SIM RS</td>
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

  </div>
  <!-- /.content-wrapper -->
  <?php
Include "footer.php";
?>