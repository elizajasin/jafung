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
                <li class="active"><a href="#"><i class="fa fa-circle-o"></i>Daftar PAK</a></li>
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
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <!-- /.box -->
        <div class="col-md-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Daftar PAK</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="dataTables_wrapper form-inline dt-bootstrap" id="example1_wrapper">
                <div class="row"><div class="col-sm-6"><div class="dataTables_length" id="example1_length">
                  <label>Show 
                  <select name="example1_length" class="form-control input-sm" aria-controls="example1">
                    <option value="10">10&nbsp;&nbsp;</option>
                    <option value="25">25&nbsp;&nbsp;</option>
                    <option value="50">50&nbsp;&nbsp;</option>
                    <option value="100">100&nbsp;&nbsp;</option>
                  </select> entries
                  </label>
                </div>
              </div>
              <div class="col-sm-6" align="right">
                <div class="dataTables_filter" id="example1_filter">
                  <label>Search:
                    <input class="form-control input-sm" aria-controls="example1" type="search" placeholder="">
                  </label>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-12">
                <table class="table table-bordered table-striped dataTable" id="example1" role="grid" aria-describedby="example1_info">
                <tbody>
                  <tr>
                    <thead>
                    <tr>
                    <th>Tanggal Pengajuan</th>
                    <th>Jenis Pengajuan</th>
                    <th>Periode</th>
                    <th>Status</th>
                    <th>Angka Kredit yang Diajukan</th>
                    <th>Angka Kredit yang Disetujui</th>
                    <th>Aksi</th>
                  </tr>
                  <?php  foreach($data as $d){ ?>
                  <tr>
                    <td><?php  echo $d['tgl_pengajuan']; ?></td>
                    <td><?php  echo $d['jenis_pengajuan']; ?></td>
                    <td><?php  echo $d['periode']; ?></td>
                    <td><?php  echo $d['status']; ?></td>
                    <td><?php  echo $d['ak_diajukan']; ?></td>
                    <td><?php  echo $d['ak_disetujuin']; ?></td>
                    <td align="center">
                      <a href="<?php  echo base_url()."index.php/pejabat/editpak/".$d['id']; ?>" class="btn btn-xs btn-warning" role="button">Edit</a>
                      <a href="<?php  echo base_url()."index.php/pejabat/".$d['id']; ?>" class="btn btn-xs btn-info" role="button">Detail</a>
                    </td>
                  </tr>
                  <?php  } ?>
                </tbody>
              </table>
            </div>
            <div class="box-body">
              <div class="dataTables_info" id="example1_info" role="status" aria-live="polite">Showing 1 to 10 of 57 entries</div>
              <div class="dataTables_paginate paging_simple_numbers" id="example1_paginate" align="right">
                <ul class="pagination">
                  <li class="paginate_button previous disabled" id="example1_previous">
                    <a tabindex="0" aria-controls="example1" href="#" data-dt-idx="0">Previous</a>
                  </li>
                  <li class="paginate_button active">
                    <a tabindex="0" aria-controls="example1" href="#" data-dt-idx="1">1</a>
                  </li>
                  <li class="paginate_button ">
                    <a tabindex="0" aria-controls="example1" href="#" data-dt-idx="2">2</a>
                  </li>
                  <li class="paginate_button ">
                    <a tabindex="0" aria-controls="example1" href="#" data-dt-idx="3">3</a>
                  </li>
                  <li class="paginate_button ">
                    <a tabindex="0" aria-controls="example1" href="#" data-dt-idx="4">4</a>
                  </li>
                  <li class="paginate_button ">
                    <a tabindex="0" aria-controls="example1" href="#" data-dt-idx="5">5</a>
                  </li>
                  <li class="paginate_button ">
                    <a tabindex="0" aria-controls="example1" href="#" data-dt-idx="6">6</a>
                  </li>
                  <li class="paginate_button next" id="example1_next">
                    <a tabindex="0" aria-controls="example1" href="#" data-dt-idx="7">Next</a>
                  </li>
                </ul>
              </div>
            </div>
            
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
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