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
                <li class="active"><a href="#"><i class="fa fa-circle-o"></i>DUPAK</a></li>
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
              <h3 class="box-title">Edit PAK</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <form method="post" action="<?php  echo base_url()."index.php/pejabat/editpak_proses/"; ?>" class="col-lg-6">
                <!-- ID -->
                <div class="form-group">
                  <label for="exampleInputEmail1">ID</label>
                  <input name="id" class="form-control" id="exampleInputEmail1" type="text" value="<?php echo $id; ?>" readonly>
                </div>
                <!-- Tanggal Pengajuan -->
                <div class="form-group">
                  <label>Tanggal Pengajuan:</label>
                  <div class="input-group">
                    <div class="input-group-addon">
                      <i class="fa fa-calendar"></i>
                    </div>
                    <input name="tgl_pengajuan" value="<?php echo $tgl_pengajuan; ?>" class="form-control" type="date" data-mask="" data-inputmask="'alias': 'dd/mm/yyyy'">
                  </div>
                </div>
                <!-- Jenis Pengajuan -->
                <div class="form-group">
                  <label for="exampleInputEmail1">Jenis Pengajuan</label>
                  <input class="form-control" value="<?php echo $jenis_pengajuan; ?>" name="jenis_pengajuan" id="exampleInputEmail1" type="text">
                </div>
                <!-- Periode -->
                <div class="form-group">
                  <label for="exampleInputEmail1">Periode</label>
                  <input class="form-control" value="<?php echo $periode; ?>" name="periode" id="exampleInputEmail1" type="text">
                </div>
                <!-- Status -->
                <div class="form-group">
                  <label for="exampleInputEmail1">Status</label>
                  <input class="form-control" value="<?php echo $status; ?>" name="status" id="exampleInputEmail1" type="text">
                </div>
                <!-- Angka Kredit yang Diajukan -->
                <div class="form-group">
                  <label for="exampleInputEmail1">Angka Kredit yang Diajukan</label>
                  <input class="form-control" value="<?php echo $ak_diajukan; ?>" name="ak_diajukan" id="exampleInputEmail1" type="text">
                </div>
                <!-- Angka Kredit yang Disetujui -->
                <div class="form-group">
                  <label for="exampleInputEmail1">Angka Kredit yang Disetujui</label>
                  <input class="form-control" value="<?php echo $ak_disetujuin; ?>" name="ak_disetujuin" id="exampleInputEmail1" type="text">
                </div>
                <!-- Submit -->
                <div class="box-footer">
                  <input class="btn btn-default" type="submit" value="Cancel"/>
                  <input type="reset" name="reset" class="btn btn-default" value="Reset"/>
                  <input class="btn btn-warning pull-right" name="Submit" type="submit" value="Save"/>
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