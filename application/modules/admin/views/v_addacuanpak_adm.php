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
        <li><a href="<?php echo base_url(). 'index.php/admin'; ?>"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>
        <li class="treeview">
            <a href="#"><i class="fa fa-credit-card"></i> <span>Manage PAK</span> <i class="fa fa-angle-left pull-right"></i></a>
            <ul class="treeview-menu">
                <li><a href="<?php echo base_url(). 'index.php/admin/addacuanpak'; ?>"><i class="fa fa-circle-o"></i>Input Kegiatan</a></li>
                <li><a href="<?php echo base_url(). 'index.php/admin/daftarkredit'; ?>"><i class="fa fa-circle-o"></i>Daftar Unsur Angka Kredit</a></li>
                <li><a href="<?php echo base_url(). 'index.php/admin/detailkegiatan'; ?>"><i class="fa fa-circle-o"></i>Detail Kegiatan</a></li>
            </ul>
        </li>
        <li class="treeview">
            <a href="#"><i class="fa fa-group"></i> <span>Manage Pejabat</span> <i class="fa fa-angle-left pull-right"></i></a>
            <ul class="treeview-menu">
                <li><a href="<?php echo base_url(). 'index.php/admin/viewpjb'; ?>"><i class="fa fa-circle-o"></i>Daftar Pejabat Fungsional</a></li>
                <li><a href="<?php echo base_url(). 'index.php/admin/inputpjb'; ?>"><i class="fa fa-circle-o"></i>Input Pejabat Fungsional</a></li>
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
        Edit PAK
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-user"></i> Home</a></li>
        <li class="active">PAK</li>
        <li>Edit PAK</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <!-- /.box -->
        <div class="col-md-12">
          <!-- general form elements disabled -->
          <div class="box box-warning">
            <div class="box-header with-border">
              <h3 class="box-title">Tambah Acuan PAK</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <form method="post" action="<?php  echo base_url()."index.php/admin/addacuanpak_proses/"; ?>" class="col-lg-6">
                <!-- Bidang -->
                <div class="form-group">
                  <label for="exampleInputEmail1">Bidang</label>
                  <input name="bidang" class="form-control" id="exampleInputEmail1" type="text" value="">
                </div>
                <!-- Bagian -->
                <div class="form-group">
                  <label for="exampleInputEmail1">Bagian</label>
                  <input class="form-control" value="" name="bagian" id="exampleInputEmail1" type="text">
                </div>
                <!-- Sub Bagian -->
                <div class="form-group">
                  <label for="exampleInputEmail1">Sub Bagian</label>
                  <input class="form-control" value="" name="subbagian" id="exampleInputEmail1" type="text">
                </div>
                <!-- Kegiatan -->
                <div class="form-group">
                  <label for="exampleInputEmail1">Kegiatan</label>
                  <textarea class="form-control" value="" name="kegiatan" id="exampleInputEmail1" rows="3"></textarea>
                </div>
                <!-- Satuan Hasil -->
                <div class="form-group">
                  <label for="exampleInputEmail1">Satuan Hasil</label>
                  <input class="form-control" value="" name="satuan_hasil" id="exampleInputEmail1" type="text">
                </div>
                <!-- Angka Kredit -->
                <div class="form-group">
                  <label for="exampleInputEmail1">Angka Kredit</label>
                  <input class="form-control" value="" name="angka_kredit" id="exampleInputEmail1" type="text">
                </div>
                <!-- Batasan Penilaian -->
                <div class="form-group">
                  <label for="exampleInputEmail1">Batasan Penilaian</label>
                  <input class="form-control" value="" name="batasan_penilaian" id="exampleInputEmail1" type="text">
                </div>
                <!-- Pelaksana -->
                <div class="form-group">
                  <label for="exampleInputEmail1">Pelaksana</label>
                  <input class="form-control" value="" name="pelaksana" id="exampleInputEmail1" type="text">
                </div>
                <!-- Bukti Fisik -->
                <div class="form-group">
                  <label for="exampleInputEmail1">Bukti Fisik</label>
                  <input class="form-control" value="" name="bukti_fisik" id="exampleInputEmail1" type="text">
                </div>
                <!-- Submit -->
                <div class="box-footer">
                  <input class="btn btn-default" type="submit" value="Cancel"/>
                  <input type="reset" name="reset" class="btn btn-default" value="Reset"/>
                  <input class="btn btn-warning pull-right" name="Submit" type="submit" value="Submit"/>
                </div>
              </form>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
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