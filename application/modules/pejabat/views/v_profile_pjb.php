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
            <a href="<?php echo base_url(). 'index.php/pejabat'; ?>"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a>
        </li>
        <li class="active">
            <a href="#"><i class="fa fa-user"></i> <span>Profile</span></a>
        </li>
        <li class="treeview">
            <a href="#"><i class="fa fa-credit-card"></i> <span>PAK</span> <i class="fa fa-angle-left pull-right"></i></a>
            <ul class="treeview-menu">
                <li><a href="<?php echo base_url(). 'index.php/pejabat/daftarpak'; ?>"><i class="fa fa-circle-o"></i>Daftar PAK</a></li>
                <li><a href="<?php echo base_url(). 'index.php/pejabat/detailpak'; ?>"><i class="fa fa-circle-o"></i>Detail PAK</a></li>
                <li><a href="<?php echo base_url(). 'index.php/pejabat/isipak'; ?>"><i class="fa fa-circle-o"></i>Isi dan Edit Rincian Kredit</a></li>
                <li><a href="<?php echo base_url(). 'index.php/pejabat/dupak'; ?>"><i class="fa fa-circle-o"></i>DUPAK</a></li>
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
        Profile
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-user"></i> Home</a></li>
        <li class="active">Profile</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-lg-6 text-center">
          <div class="col-md-12">
          <div class="box box-primary">
            <div class="box-header">
              <i class="fa fa-edit"></i>

              <h3 class="box-title">Profile Pejabat Fungsional</h3>
            </div>
            <div class="box-body pad table-responsive">
              <table class="table table-bordered text-center" border="0">
                <tr>
                  <td>NIP </td>
                  <td>:</td>
                  <td><?php  foreach($data as $d) echo $d['nip']; ?></td>
                  </tr>
                  <tr>
                  <td>Nama Lengkap </td>
                  <td>:</td>
                  <td><?php  foreach($data as $d) echo $d['nama']; ?></td>
                  </tr>
                  <tr>
                  <td>Tanggal Lahir </td>
                  <td>:</td>
                  <td><?php  foreach($data as $d) echo $d['tgl_lahir']; ?></td>
                  </tr>
                  <tr>
                  <td>Tempat Lahir</td>
                  <td>:</td>
                  <td><?php  foreach($data as $d) echo $d['tempat']; ?></td>
                  </tr>
                  <tr>
                  <td>Pangkat</td>
                  <td>:</td>
                  <td><?php  foreach($data as $d) echo $d['pangkat']; ?></td>
                  </tr>
                  <tr>
                  <td>Pangkat Terakhir</td>
                  <td>:</td>
                  <td><?php  foreach($data as $d) echo $d['pangkat_terakhir']; ?></td>
                  </tr>
                  <tr>
                  <td>Jabatan</td>
                  <td>:</td>
                  <td><?php  foreach($data as $d) echo $d['jabatan']; ?></td>
                  </tr>
                  <td>Jabatan Terakhir</td>
                  <td>:</td>
                  <td><?php  foreach($data as $d) echo $d['jabatan_terakhir']; ?></td>
                  </tr>
                  <tr>
                  <td>Unit Organisasi</td>
                  <td>:</td>
                  <td><?php  foreach($data as $d) echo $d['unit_organisasi']; ?></td>
                  </tr>
                  <tr>
                  <td>Instansi</td>
                  <td>:</td>
                  <td><?php  foreach($data as $d) echo $d['instansi']; ?></td>
                  </tr>
                  <tr>
                  <td>Angka Kredit</td>
                  <td>:</td>
                  <td><?php  foreach($data as $d) echo $d['angka_kredit']; ?></td>
                  </tr>
              </table>
            </div>
          </div>
        </div>
        </div>
        <!-- ending -->
        <div class="col-lg-6 text-center">
          <div class="col-md-12">
          <div class="box box-primary">
            <div class="box-header">
              <i class="fa fa-edit"></i>

              <h3 class="box-title">Foto</h3>
            </div>
            <img border="1" src="<?php echo base_url(). $d['foto'];?>" width="300" height="400">
          </div>
        </div>
        </div>
        <!-- ending -->
        <div class="col-lg-12 text-center">
          <div class="col-md-12">
          <div class="box box-primary">
            <div class="box-header">
              <i class="fa fa-edit"></i>

              <h3 class="box-title">SK PNS</h3>
            </div>
            <img border="1" src="<?php echo base_url(). $d['sk_pns'];?>" width="133" height="133">
          </div>
        </div>
        </div>
        <!-- ending -->
        <div class="col-lg-12 text-center">
          <div class="col-md-12">
          <div class="box box-primary">
            <div class="box-header">
              <i class="fa fa-edit"></i>

              <h3 class="box-title">SK Pangkat Terakhir</h3>
            </div>
            <img border="1" src="<?php echo base_url(). $d['sk_pangkat_terakhir'];?>" width="133" height="133"> 
          </div>
        </div>
        </div>
        <!-- ending -->
        <div class="col-lg-12 text-center">
          <div class="col-md-12">
          <div class="box box-primary">
            <div class="box-header">
              <i class="fa fa-edit"></i>

              <h3 class="box-title">SK Jabatan Terakhir</h3>
            </div>
            <img border="1" src="<?php echo base_url(). $d['sk_jabatan_terakhir'];?>" width="133" height="133">
          </div>
        </div>
        </div>
        <!-- ending -->
        <div class="col-lg-12 text-center">
          <div class="col-md-12">
          <div class="box box-primary">
            <div class="box-header">
              <i class="fa fa-edit"></i>

              <h3 class="box-title">PAK Terakhir</h3>
            </div>
            <img border="1" src="<?php echo base_url(). $d['pak_terakhir'];?>" width="133" height="133"> 
          </div>
        </div>
        </div>
        <!-- ending -->
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