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
                <li class="active"><a href="<?php echo base_url(). 'index.php/pejabat/dupak'; ?>"><i class="fa fa-circle-o"></i>Pengajuan Angka Kredit</a></li>
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
        Pengajuan Angka Kredit
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-user"></i> Home</a></li>
        <li class="active">PAK</li>
        <li>Pengajuan Angka Kredit</li>
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
              <h3 class="box-title">Angka Kredit Yang Diajukan</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <form method="post" action="<?php  echo base_url()."index.php/pejabat/adddupak_proses/"; ?>" class="col-lg-12">
                <!-- Angka Kredit yang Diajukan -->
                <div class="form-group">
                  <div class="box-body">
                    <table class="table table-bordered">
                      <tbody><tr>
                        <th style="width: 10px">No.</th>
                        <th colspan="3">Sub Unsur Yang Dinilai</th>
                        <th>Angka Kredit Lama</th>
                        <th>Angka Kredit Baru</th>
                        <th>Jumlah Angka Kredit</th>
                        <th>Bukti Pendukung</th>
                      </tr>
                      <tr>
                        <th rowspan="4">I. </th>
                        <th colspan="3">Unsur Utama</th>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td colspan="3">Pendidikan</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td>
                          <td>A. </td>
                          <td>Pendidikan Sekolah dan Memperoleh Ijazah/Gelar</td>
                        </td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td>
                          <td></td>
                          <td>1. Doktor (S3)</td>
                        </td>
                        <td><input class="form-control" value="" name="ak_diajukan" id="exampleInputEmail1" type="text" readonly></td>
                        <td><input class="form-control" value="" name="" id="exampleInputEmail1" type="text"></td>
                        <td><input class="form-control" value="" name="" id="exampleInputEmail1" type="text" readonly></td>
                        <td><a href="" class="btn btn-xs btn-primary" role="button">Upload</a></td>
                      </tr>
                    </tbody></table>
                  </div>
                </div>
                <!-- Submit -->
                <div class="box-footer">
                  <input class="btn btn-default" type="submit" value="Cancel"/>
                  <input type="reset" name="reset" class="btn btn-default" value="Reset"/>
                  <input class="btn btn-warning pull-right" name="Submit" type="submit" value="Input"/>
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