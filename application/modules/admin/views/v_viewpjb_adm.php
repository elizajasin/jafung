<!DOCTYPE html>
<html>
<?php $this->load->view('inc/head_table'); ?>
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
        Daftar Pejabat Fungsional
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-user"></i> Home</a></li>
        <li class="active">Pejabat Fungsional</li>
        <li>Daftar Pejabat Fungsional</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <!-- /.box -->
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Daftar PAK</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th>No.</th>
                    <th>NIP</th>
                    <th>Nama</th>
                    <th>Golongan</th>
                    <th>Jabatan</th>
                    <th>Angka Kredit yang Diajukan</th>
                    <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
                <?php  foreach($data as $d){
                   ?>
                  <tr>
                    <td>x</td>
                    <td><?php  echo $d['nip']; ?></td>
                    <td><?php  echo $d['nama']; ?></td>
                    <td><?php  echo $d['pangkat']; ?></td>
                    <td><?php  echo $d['jabatan']; ?></td>
                    <td><?php  echo $d['angka_kredit']; ?></td>
                    <td align="center">
                      <a href="" class="btn btn-xs btn-warning" role="button">Edit</a>
                      <a href="" class="btn btn-xs btn-info" role="button">Detail</a>
                    </td>
                  </tr>
                  <?php  } ?>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row (main row) -->

    </section>
    <!-- /.content -->
  </div>
  <?php $this->load->view('inc/foot_table'); ?>
</body>
</html>