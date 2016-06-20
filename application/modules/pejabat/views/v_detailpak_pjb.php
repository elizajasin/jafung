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
        <li>
            <a href="<?php echo base_url(). 'index.php/pejabat/profile'; ?>"><i class="fa fa-user"></i> <span>Profile</span></a>
        </li>
        <li class="treeview">
            <a href="#"><i class="fa fa-credit-card"></i> <span>PAK</span> <i class="fa fa-angle-left pull-right"></i></a>
            <ul class="treeview-menu">
                <li><a href="<?php echo base_url(). 'index.php/pejabat/daftarpak'; ?>"><i class="fa fa-circle-o"></i>Daftar PAK</a></li>
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
        Detail PAK
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-user"></i> Home</a></li>
        <li class="active">PAK</li>
        <li>Detail PAK</li>
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
                <?php  foreach($data as $d){ ?>
                <tr>
                  <td>ID</td>
                  <td>:</td>
                  <td><?php echo $d['id']; ?></td>
                  </tr>
                  <tr>
                  <td>Tanggal Pengajuan</td>
                  <td>:</td>
                  <td><?php echo $d['tgl_pengajuan']; ?></td>
                  </tr>
                  <tr>
                  <td>Jenis Pengajuan</td>
                  <td>:</td>
                  <td><?php echo $d['jenis_pengajuan']; ?></td>
                  </tr>
                  <tr>
                  <td>Periode</td>
                  <td>:</td>
                  <td><?php echo $d['periode']; ?></td>
                  </tr>
                  <tr>
                  <td>Status</td>
                  <td>:</td>
                  <td><span class=<?php  
                          if ($d['status'] == 'Approved'){
                            echo "'label label-success'";
                          }elseif ($d['status'] == 'Pending') {
                            echo "'label label-warning'";
                          }elseif ($d['status'] == 'Denied') {
                            echo "'label label-danger'";
                          }
                             ?>><?php  echo $d['status']; ?></span></td>
                  </tr>
                  <tr>
                  <td>Angka Kredit yang Diajukan</td>
                  <td>:</td>
                  <td><?php echo $d['ak_diajukan']; ?></td>
                  </tr>
                  <tr>
                  <td>Angka Kredit yang Disetujui</td>
                  <td>:</td>
                  <td><?php echo $d['ak_disetujuin']; ?></td>
                  </tr>
                  <?php  } ?>
              </table>
            </div>
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