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
            <a href="<?php echo base_url(). 'index.php/admin'; ?>"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a>
        </li>
        <li class="treeview active">
            <a href="#"><i class="fa fa-credit-card"></i> <span>PAK</span> <i class="fa fa-angle-left pull-right"></i></a>
            <ul class="treeview-menu">
                <li><a href="<?php echo base_url(). 'index.php/admin/viewpjb'; ?>"><i class="fa fa-circle-o"></i>Daftar Pejabat Fungsional</a></li>
                <li><a href="<?php echo base_url(). 'index.php/admin/inputpjb'; ?>"><i class="fa fa-circle-o"></i>Input Pejabat Fungsional</a></li>
                <li  class="active"><a href="<?php echo base_url(). 'index.php/admin/inputkegiatan'; ?>"><i class="fa fa-circle-o"></i>Input Kegiatan</a></li>
                <li><a href="<?php echo base_url(). 'index.php/admin/daftarkredit'; ?>"><i class="fa fa-circle-o"></i>Daftar Unsur Angka Kredit</a></li>
                <li><a href="<?php echo base_url(). 'index.php/admin/detailkegiatan'; ?>"><i class="fa fa-circle-o"></i>Detail Kegiatan</a></li>
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
        Input Unsur Kegiatan
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-user"></i> Home</a></li>
        <li class="active">Pejabat Fungsional</li>
        <li>Input Unsur Kegiatan</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <!-- /.box -->
        <div class="col-md-12">
          <div class="box box-warning">
            <div class="box-header with-border">
              <h3 class="box-title">Input Unsur Kegiatan</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <div class="box-body">
              <form method="post" class="col-lg-6">
                <!-- Input Nomor Peraturan -->
                <div class="form-group">
                  <label>Input Nomor Peraturan</label>
                  <input type="" class="form-control" id="" placeholder="">
                </div>
                <!-- Tanggal Peraturan -->
                <div class="form-group">
                  <label>Tanggal Peraturan</label>
                    <div class="input-group date">
                      <div class="input-group-addon">
                        <i class="fa fa-calendar"></i>
                      </div>
                      <input type="text" class="form-control pull-right" id="datepicker">
                    </div>
                </div>
                <!-- Status -->
                <div class="form-group">
                <label>Status</label>
                  <select class="form-control">
                    <option>YA</option>
                    <option>TIDAK</option>
                    <option>PENDING</option>
                  </select>
                <!-- Submit -->
                <div class="box-footer">
                  <input class="btn btn-default" type="submit" value="Cancel"/>
                  <input type="reset" name="reset" class="btn btn-default" value="Reset"/>
                  <input class="btn btn-warning pull-right" name="Submit" type="submit" value="Save"/>
                </div>
              <!-- /.box-footer -->
            </form>
          </div>
      </div>
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