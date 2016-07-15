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
        <li>
            <a href="<?php echo base_url(). 'index.php/pejabat'; ?>"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a>
        </li>
        <li>
            <a href="<?php echo base_url(). 'index.php/pejabat/profile'; ?>"><i class="fa fa-user"></i> <span>Profile</span></a>
        </li>
        <li class="treeview">
            <a href="#"><i class="fa fa-credit-card"></i> <span>PAK</span> <i class="fa fa-angle-left pull-right"></i></a>
            <ul class="treeview-menu">
                <li class="active"><a href="#"><i class="fa fa-circle-o"></i>Daftar PAK</a></li>
                <li><a href="<?php echo base_url(). 'index.php/pejabat/dupak'; ?>"><i class="fa fa-circle-o"></i>Pengajuan Angka Kredit</a></li>
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
        Daftar PAK
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-user"></i> Home</a></li>
        <li class="active">PAK</li>
        <li>Daftar PAK</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
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
                  <th>No</th>
                  <th>ID</th>
                  <th>Tanggal Pengajuan</th>
                  <th>Jenis Pengajuan</th>
                  <th>Periode</th>
                  <th>Status</th>
                  <th>Angka Kredit yang Diajukan</th>
                  <th>Angka Kredit yang Disetujui</th>
                  <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
                <?php  $no = 0; foreach($data as $d){ ?>
                  <tr>
                    <td><?php  $no = $no+1; echo $no; ?></td>
                    <td><?php  echo $d['id']; ?></td>
                    <td><?php  echo $d['tgl_pengajuan']; ?></td>
                    <td><?php  echo $d['jenis_pengajuan']; ?></td>
                    <td><?php  echo $d['periode']; ?></td>
                    <td><span class=<?php  
                          if ($d['status'] == 'Penetapan'){
                            echo "'label label-primary'";
                          }elseif ($d['status'] == 'Penilaian') {
                            echo "'label label-success'";
                          }elseif ($d['status'] == 'Proses') {
                            echo "'label label-warning'";
                          }elseif ($d['status'] == 'Pengajuan') {
                            echo "'label label-danger'";
                          }elseif ($d['status'] == 'Draft') {
                            echo "'label label-info'";
                          }
                             ?>><?php  echo $d['status']; ?></span></td>
                    <td><?php  echo $d['ak_diajukan']; ?></td>
                    <td><?php  echo $d['ak_disetujuin']; ?></td>
                    <td align="center">
                      <a href="<?php  echo base_url()."index.php/pejabat/editpak/".$d['id']; ?>" class="btn btn-xs btn-warning" role="button">Edit</a>
                      <a href="<?php  echo base_url()."index.php/pejabat/detailpak/".$d['id']; ?>" class="btn btn-xs btn-info" role="button">Detail</a>
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
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <?php $this->load->view('inc/foot_table'); ?>
</body>
</html>
