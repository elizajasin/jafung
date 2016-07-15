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
            <a href="<?php echo base_url(). 'index.php/sekretariat'; ?>"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a>
        </li>
        <li class="treeview active">
            <a href="#"><i class="fa fa-credit-card"></i> <span>PAK</span> <i class="fa fa-angle-left pull-right"></i></a>
            <ul class="treeview-menu">
                <li class="active"><a href="<?php echo base_url(). 'index.php/sekretariat/viewpjb'; ?>"><i class="fa fa-circle-o"></i>Daftar Pejabat Fungsional</a></li>
                <li><a href="<?php echo base_url(). 'index.php/sekretariat/konfigpnl'; ?>"><i class="fa fa-circle-o"></i>Konfigurasi Penilai</a></li>
                <li><a href="<?php echo base_url(). 'index.php/sekretariat/regpnl'; ?>"><i class="fa fa-circle-o"></i>Registrasi Penilai</a></li>
                <li><a href="<?php echo base_url(). 'index.php/sekretariat/daftarpnl'; ?>"><i class="fa fa-circle-o"></i>Daftar Penilai</a></li>
                <li><a href="<?php echo base_url(). 'index.php/sekretariat/cekdupak'; ?>"><i class="fa fa-circle-o"></i>Cek Dupak</a></li>
                <li><a href="<?php echo base_url(). 'index.php/sekretariat/laporan'; ?>"><i class="fa fa-circle-o"></i>Laporan</a></li>
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
        Edit Pejabat
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-user"></i> Home</a></li>
        <li class="active">PAK</li>
        <li>Edit Pejabat</li>
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
              <h3 class="box-title">Edit Pejabat</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <form method="post" action="<?php  echo base_url()."index.php/sekretariat/editpjb_proses/"; ?>">
                <div class="col-lg-6">
                <!-- ID Akun-->
                <div class="form-group">
                  <label for="exampleInputEmail1">ID Akun</label>
                  <input name="id_akun" class="form-control" id="exampleInputEmail1" type="text" value="<?php echo $id_akun; ?>" readonly>
                </div>
                <!-- NIP-->
                <div class="form-group">
                  <label for="exampleInputEmail1">NIP</label>
                  <input name="nip" class="form-control" id="exampleInputEmail1" type="text" value="<?php echo $nip; ?>">
                </div>
                <!-- Nama-->
                <div class="form-group">
                  <label for="exampleInputEmail1">Nama</label>
                  <input name="nama" class="form-control" id="exampleInputEmail1" type="text" value="<?php echo $nama; ?>">
                </div>
                <!-- Tanggal Lahir -->
                <div class="form-group">
                  <label>Tanggal Lahir:</label>
                  <div class="input-group">
                    <div class="input-group-addon">
                      <i class="fa fa-calendar"></i>
                    </div>
                    <input name="tgl_lahir" value="<?php echo $tgl_lahir; ?>" class="form-control" type="date" data-mask="" data-inputmask="'alias': 'dd/mm/yyyy'">
                  </div>
                </div>
                <!-- Pangkat -->
                <div class="form-group">
                  <label for="exampleInputEmail1">Pangkat</label>
                  <input class="form-control" value="<?php echo $pangkat; ?>" name="pangkat" id="exampleInputEmail1" type="text">
                </div>
                <!-- Pangkat Terakhir -->
                <div class="form-group">
                  <label for="exampleInputEmail1">Pangkat Terakhir</label>
                  <input class="form-control" value="<?php echo $pangkat_terakhir; ?>" name="pangkat_terakhir" id="exampleInputEmail1" type="text">
                </div>
                <!-- Jabatan -->
                <div class="form-group">
                  <label for="exampleInputEmail1">Jabatan</label>
                  <input class="form-control" value="<?php echo $jabatan; ?>" name="jabatan" id="exampleInputEmail1" type="text">
                </div>
                <!-- Jabatan Terakhir -->
                <div class="form-group">
                  <label for="exampleInputEmail1">Jabatan Terakhir</label>
                  <input class="form-control" value="<?php echo $jabatan_terakhir; ?>" name="jabatan_terakhir" id="exampleInputEmail1" type="text">
                </div>
                <!-- Unit Organisasi -->
                <div class="form-group">
                  <label for="exampleInputEmail1">Unit Organisasi</label>
                  <input class="form-control" value="<?php echo $unit_organisasi; ?>" name="unit_organisasi" id="exampleInputEmail1" type="text">
                </div>
                <!-- Instansi -->
                <div class="form-group">
                  <label for="exampleInputEmail1">Instansi</label>
                  <input class="form-control" value="<?php echo $instansi; ?>" name="instansi" id="exampleInputEmail1" type="text">
                </div>
                <!-- Angka Kredit -->
                <div class="form-group">
                  <label for="exampleInputEmail1">Angka Kredit</label>
                  <input class="form-control" value="<?php echo $angka_kredit; ?>" name="angka_kredit" id="exampleInputEmail1" type="text">
                </div>
                </div>
                <div class="col-lg-6">
                <!-- Foto -->
                <div class="form-group">
                  <label for="exampleInputEmail1">Foto</label><br>
                  <div class="col-lg-12">
                    <img height="70" src="<?php echo base_url(). $foto;?>" width="70">
                  </div>
                  <input name="foto" class="form-control" id="exampleInputEmail1" type="file">
                </div>
                <!-- SK PNS -->
                <div class="form-group">
                  <label for="exampleInputEmail1">SK PNS</label><br>
                  <div class="col-lg-12">
                    <img height="70" src="<?php echo base_url(). $sk_pns;?>" width="70">
                  </div>
                  <input name="sk_pns" class="form-control" id="exampleInputEmail1" type="file">
                </div>
                <!-- SK Pangkat Terakhir -->
                <div class="form-group">
                  <label for="exampleInputEmail1">SK Pangkat Terakhir</label><br>
                  <div class="col-lg-12">
                    <img height="70" src="<?php echo base_url(). $sk_pangkat_terakhir;?>" width="70">
                  </div>
                  <input name="sk_pangkat_terakhir" class="form-control" id="exampleInputEmail1" type="file">
                </div>
                <!-- SK Jabatan Terakhir -->
                <div class="form-group">
                  <label for="exampleInputEmail1">SK Jabatan Terakhir</label><br>
                  <div class="col-lg-12">
                    <img height="70" src="<?php echo base_url(). $sk_pangkat_terakhir;?>" width="70">
                  </div>
                  <input name="sk_pangkat_terakhir" class="form-control" id="exampleInputEmail1" type="file">
                </div>
                <!-- PAK Terakhir -->
                <div class="form-group">
                  <label for="exampleInputEmail1">PAK Terakhir</label><br>
                  <div class="col-lg-12">
                    <img height="70" src="<?php echo base_url(). $pak_terakhir;?>" width="70">
                  </div>
                  <input name="pak_terakhir" class="form-control" id="exampleInputEmail1" type="file">
                </div>
                <!-- Submit -->
                <div class="box-footer">
                  <input class="btn btn-default" type="submit" value="Cancel"/>
                  <input type="reset" name="reset" class="btn btn-default" value="Reset"/>
                  <input class="btn btn-warning pull-right" name="Submit" type="submit" value="Save"/>
                </div>
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