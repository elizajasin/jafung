<!DOCTYPE html>
<html>
<?php $this->load->view('inc/header'); ?>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
<?php $this->load->view('inc/main_header'); ?>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <?php $this->load->view('inc/sidebar_userpanel'); ?>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="header">MAIN NAVIGATION</li>
        <li>
            <a href="<?php echo base_url(). 'index.php/sekretariat'; ?>"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a>
        </li>
        <li class="treeview active">
            <a href="#"><i class="fa fa-credit-card"></i> <span>PAK</span> <i class="fa fa-angle-left pull-right"></i></a>
            <ul class="treeview-menu">
                <li><a href="<?php echo base_url(). 'index.php/sekretariat/viewpjb'; ?>"><i class="fa fa-circle-o"></i>Daftar Pejabat Fungsional</a></li>
                <li><a href="<?php echo base_url(). 'index.php/sekretariat/konfigpnl'; ?>"><i class="fa fa-circle-o"></i>Konfigurasi Penilai</a></li>
                <li><a href="<?php echo base_url(). 'index.php/sekretariat/regpnl'; ?>"><i class="fa fa-circle-o"></i>Registrasi Penilai</a></li>
                <li><a href="<?php echo base_url(). 'index.php/sekretariat/daftarpnl'; ?>"><i class="fa fa-circle-o"></i>Daftar Penilai</a></li>
                <li class = "active"><a href="<?php echo base_url(). 'index.php/sekretariat/cekdupak'; ?>"><i class="fa fa-circle-o"></i>Cek Dupak</a></li>
                <li><a href="<?php echo base_url(). 'index.php/sekretariat/laporan'; ?>"><i class="fa fa-circle-o"></i>Laporan</a></li>
            </ul>
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        CEK DUPAK
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-user"></i> Home</a></li>
        <li class="active">Pejabat Fungsional</li>
        <li>Cek Dupak</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      
      <!-- /.row (main row) -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <?php $this->load->view('inc/main_footer'); ?>

  <!-- Control Sidebar -->
  <?php $this->load->view('inc/control_sidebar'); ?>

  <?php $this->load->view('inc/footer'); ?>
</body>
</html>