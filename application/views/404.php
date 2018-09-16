<?php
include "header.php";
?>
<!-- =============================================== -->

 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
     
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="error-page">
        <h2 class="headline text-yellow"> 404</h2>

        <div class="error-content">
          <h3><i class="fa fa-warning text-yellow"></i> Oops! Halaman tidak ditemukan.</h3>

          <p>
            Kita tidak dapat menemukan halaman yang anda cari. sementara itu mungkin anda akan <a href="<?=base_url()?>">kembali ke dashboard</a> <br>
            We could not find the page you were looking for. Meanwhile, you may <a href="<?=base_url()?>">return to dashboard</a> 
          </p>

          <p>
            report this issue to Suarna Research Center x MBX : report@suarnalab.com
          </p>
        </div>
        <!-- /.error-content -->
      </div>
      <!-- /.error-page -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
<?php
Include "footer.php";
?>