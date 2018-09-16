<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?=$page_title?> | Sistem Management Asset</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?=base_url()?>assets/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
  <link rel="stylesheet" href="<?=base_url()?>assets/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?=base_url()?>assets/bower_components/Ionicons/css/ionicons.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="<?=base_url()?>assets/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
  <!-- Select2 -->
  <link rel="stylesheet" href="<?=base_url()?>assets/bower_components/select2/dist/css/select2.min.css">
  <!-- bootstrap datepicker -->
  <link rel="stylesheet" href="<?=base_url()?>assets/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="<?=base_url()?>assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?=base_url()?>assets/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?=base_url()?>assets/dist/css/skins/_all-skins.min.css">
  <!-- TOASTER CSS -->
  <link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="<?=base_url()?>" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>A</b>LT</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Admin</b>LTE</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->
          
          <!-- Notifications: style can be found in dropdown.less -->
          <li class="dropdown notifications-menu">
            
          </li>
          <!-- Tasks: style can be found in dropdown.less -->
         
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="<?=base_url()?>assets/dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
              <span class="hidden-xs">STAFF IT SIMRS</span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="<?=base_url()?>assets/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">

                <p>
                  Alexander Pierce - Web Developer
                  <small>Member since Nov. 2012</small>
                </p>
              </li>
              <!-- Menu Body -->
      
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="#" class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="pull-right">
                  <a href="#" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </nav>
  </header>
 <!-- Left side column. contains the sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?=base_url()?>assets/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>IT SIMRS</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">NAVIGASI UTAMA</li>
        <li class="<?php if ($page_tree == 'dashboard'): ?>
          active
        <?php endif ?>">
          <a href="<?=base_url()?>"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a>
        </li>
        <li class="treeview <?php if ($page_tree == 'asset'): ?>active<?php endif ?>">
          <a href="#">
            <i class="fa fa-briefcase"></i> <span>Data Asset</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="<?php if ($page_menu == 'list'): ?>active<?php endif ?>"><a href="<?=base_url()?>asset"><i class="fa fa-circle-o"></i> List Asset</a></li>
            <li class="<?php if ($page_menu == 'input'): ?>active<?php endif ?>"><a href="<?=base_url()?>asset_tambah"><i class="fa fa-circle-o"></i> Input Asset</a></li>
            <li class="<?php if ($page_menu == 'penilaian'): ?>active<?php endif ?>"><a href="<?=base_url()?>penilaian/input"><i class="fa fa-circle-o"></i> Penilaian Asset</a></li>
            <li class="<?php if ($page_menu == 'mutasi'): ?>active<?php endif ?>"><a href="<?=base_url()?>mutasi"><i class="fa fa-circle-o"></i> Mutasi Asset</a></li>
          </ul>
        </li>

        <li class="treeview <?php if ($page_tree == 'master'): ?>active<?php endif ?>">
          <a href="#">
            <i class="fa fa-database"></i> <span>Master Data</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="<?php if ($page_menu == 'pengguna'): ?>active<?php endif ?>"><a href="<?=base_url()?>"><i class="fa fa-circle-o"></i> Data Pengguna</a></li>
            <li class="<?php if ($page_menu == 'lokasi'): ?>active<?php endif ?>"><a href="<?=base_url()?>data_lokasi"><i class="fa fa-circle-o"></i> Data Lokasi</a></li>
            <li class="<?php if ($page_menu == 'tipe'): ?>active<?php endif ?>"><a href="<?=base_url()?>tipe_asset"><i class="fa fa-circle-o"></i> Data Tipe Asset</a></li>
            <li class="<?php if ($page_menu == 'parameter'): ?>active<?php endif ?>"><a href="<?=base_url()?>parameter"><i class="fa fa-circle-o"></i> Data Parameter Penilaian</a></li>
          </ul>
        </li>
        <li class="treeview <?php if ($page_tree == 'report'): ?>active<?php endif ?>">
          <a href="#">
            <i class="fa fa-file"></i> <span>Laporan</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="<?php if ($page_menu == 'asset'): ?>active<?php endif ?>"><a href="<?=base_url()?>laporan_asset"><i class="fa fa-circle-o"></i> Laporan Asset</a></li>
            <li class="<?php if ($page_menu == 'asset'): ?>active<?php endif ?>"><a href="<?=base_url()?>laporan_asset"><i class="fa fa-circle-o"></i> Laporan Penilaian Asset</a></li>
            <li class="<?php if ($page_menu == 'log'): ?>active<?php endif ?>"><a href="<?=base_url()?>laporan_log_asset"><i class="fa fa-circle-o"></i> Laporan Log</a></li>
            <li class="<?php if ($page_menu == 'gasset'): ?>active<?php endif ?>"><a href="<?=base_url()?>laporan_statistik_log"><i class="fa fa-circle-o"></i> Laporan Grafik Asset</a></li>
            <li class="<?php if ($page_menu == 'glog'): ?>active<?php endif ?>"><a href="<?=base_url()?>laporan_statistik_log"><i class="fa fa-circle-o"></i> Laporan Grafik Log</a></li>
          </ul>
        </li>
        
        
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- =============================================== -->