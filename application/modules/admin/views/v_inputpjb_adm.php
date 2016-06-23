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
        Input Pejabat Fungsional
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-user"></i> Home</a></li>
        <li class="active">Input Pejabat Fungsional</li>
        <li>Input Pejabat Fungsional</li>
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
              <h3 class="box-title">Input Pejabat Fungsional</h3>
            </div>
            <!-- /.box-header -->
              <div class="box-body">
              <form method="post" action="<?php  echo base_url()."index.php/admin/inputpjb_proses/"; ?>">
                <!-- NIP -->
                <div class="form-group col-lg-6">
                  <label>NIP</label>
                  <input type="" class="form-control" id="nip" placeholder="">
                </div>
                <!-- Nama -->
                <div class="form-group col-lg-6">
                  <label>Nama</label>
                  <input type="" class="form-control" id="nama" placeholder="">
                </div>
                <!-- Tempat -->
                <div class="form-group col-lg-6">
                  <label>Tempat</label>
                  <input type="" class="form-control" id="tempat" placeholder="">
                  <!-- Tanggal Lahir -->
                  <label>Tanggal Lahir</label>
                  <input type="" class="form-control" id="tgl_lahir" placeholder="">
                </div>
                <!-- Foto -->
                <div class="form-group col-lg-6">
                  <label>Foto</label>
                  <input type="" class="form-control" id="foto" placeholder="">
                </div>
                <!-- Pangkat Terakhir -->
                <div class="form-group col-lg-6">
                  <label>Pangkat Terakhir</label>
                  <input type="" class="form-control" id="pangkat_terakhir" placeholder="">
                </div>
                <!-- Jabatan Terakhir -->
                <div class="form-group col-lg-6">
                  <label>Jabatan Terakhir</label>
                  <input type="" class="form-control" id="jabatan_terakhir" placeholder="">
                </div>
                <!-- Unit Organisasi -->
                <div class="form-group col-lg-6">
                  <label>Unit Organisasi</label>
                  <input type="" class="form-control" id="unit_organisasi" placeholder="">
                </div>
                <!-- Instansi -->
                <div class="form-group col-lg-6">
                  <label>Instansi</label>
                  <input type="" class="form-control" id="instansi" placeholder="">
                </div>
                <!-- Angka Kredit Terakhir -->
                <div class="form-group col-lg-6">
                  <label>Angka Kredit Terakhir</label>
                  <input type="" class="form-control" id="angka_kredit" placeholder="">
                </div>
                <!-- SK PNS -->
                <div class="form-group col-lg-6">
                  <label>SK PNS</label>
                  <input type="" class="form-control" id="sk_pns" placeholder="">
                </div>
                <!-- SK Pangkat Terakhir -->
                <div class="form-group col-lg-6">
                  <label>SK Pangkat Terakhir</label>
                  <input type="" class="form-control" id="sk_pangkat_terakhir" placeholder="">
                </div>
                <!-- SK Jabatan Terakhir -->
                <div class="form-group col-lg-6">
                  <label>SK Jabatan Terakhir</label>
                  <input type="" class="form-control" id="sk_jabatan_terakhir" placeholder="">
                </div>
                <!-- PAK Terakhir -->
                <div class="form-group col-lg-6">
                  <label>PAK Terakhir</label>
                  <input type="" class="form-control" id="pak_terakhir" placeholder="">
                </div>
                <!-- ID -->
                <div class="form-group col-lg-6">
                  <label>ID</label>
                  <input type="" class="form-control" id="id_akun" placeholder="">
                </div>
                <!-- Submit -->
                <div class="box-footer">
                  <div class="col-lg-6">
                  <input class="btn btn-default" type="submit" value="Cancel"/>
                  <input type="reset" name="reset" class="btn btn-default" value="Reset"/>
                  </div>
                  <div class="col-lg-6">
                  <input class="btn btn-warning pull-right" name="Submit" type="submit" value="Save"/>
                  </div>
                </div>
              </form>
              <!-- box -->
            </div>
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