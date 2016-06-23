<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends MX_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->helper(array('form','url'));
		$this->load->model('m_admin');
		$this->load->library('session');
	}

	// dashboard

	public function index()
	{
		$user = $_SESSION['id'];
		$data = $this->m_admin->getPjb($user);
		$this->load->library('table');
		$this->load->view('v_dashboard_adm',array('data' => $data ));
	}

	// daftar pejabat

	public function viewpjb()
	{
		$user = $_SESSION['id'];
		$data = $this->m_admin->getPjb();
		$this->load->library('table');
		$this->load->view('v_viewpjb_adm',array('data' => $data ));
	}

	// input pejabat

	public function inputpjb()
	{
		$user = $_SESSION['id'];
		$this->load->view('v_inputpjb_adm');
	}

	public function inputpjb_proses()
	{
		$nip = $_POST['nip'];
		$nama = $_POST['nama'];
		$tempat = $_POST['tempat'];
		$tgl_lahir = $_POST['tgl_lahir'];
		$foto = $_POST['foto'];
		$pangkat_terakhir = $_POST['pangkat_terakhir'];
		$jabatan_terakhir = $_POST['jabatan_terakhir'];
		$unit_organisasi = $_POST['unit_organisasi'];
		$instansi = $_POST['instansi'];
		$angka_kredit = $_POST['angka_kredit'];
		$sk_pns = $_POST['sk_pns'];
		$sk_pangkat_terakhir = $_POST['sk_pangkat_terakhir'];
		$sk_jabatan_terakhir = $_POST['sk_jabatan_terakhir'];
		$pak_terakhir = $_POST['pak_terakhir'];
		$id_akun = $_POST['id_akun'];
		
		$data_insert = array(
			'nip' => $nip,
			'nama' => $nama,
			'tempat' => $tempat,
			'tgl_lahir' => $tgl_lahir,
			'foto' => $foto,
			'pangkat_terakhir' => $pangkat_terakhir,
			'jabatan_terakhir' => $jabatan_terakhir,
			'unit_organisasi' => $unit_organisasi,
			'instansi' => $instansi,
			'angka_kredit' => $angka_kredit,
			'sk_pns' => $sk_pns,
			'sk_pangkat_terakhir' => $sk_pangkat_terakhir,
			'sk_jabatan_terakhir' => $sk_jabatan_terakhir,
			'pak_terakhir' => $pak_terakhir,
			'id_akun' => $id_akun
		);
		
		$result = $this->m_admin->InputData('tbl_pejabat',$data_insert);
		var_dump($data_insert);
		if($result >= 1){
			redirect('admin/daftarpjb_adm');
		}else{
			echo "insert gagal"; 
		}
	}

	// daftarkredit

	public function daftarkredit()
	{
		$this->load->view('v_daftarkredit_adm');
	}

	// detail kegiatan

	public function detailkegiatan()
	{
		$this->load->view('v_detailkegiatan_adm');
	}

	// add acuan pak
	public function addacuanpak()
	{
		$this->load->view('v_addacuanpak_adm');
	}

	public function addacuanpak_proses(){ //pemrosesan dari registration page
		$bidang = $_POST['bidang'];
		$bagian = $_POST['bagian'];
		$subbagian = $_POST['subbagian'];
		$kegiatan = $_POST['kegiatan'];
		$satuan_hasil = $_POST['satuan_hasil'];
		$angka_kredit = $_POST['angka_kredit'];
		$batasan_penilaian = $_POST['batasan_penilaian'];
		$pelaksana = $_POST['pelaksana'];
		$bukti_fisik = $_POST['bukti_fisik'];

		$data_insert = array(
			'bidang' => $bidang,
			'bagian' => $bagian,
			'subbagian' => $subbagian,
			'kegiatan' => $kegiatan,
			'satuan_hasil' => $satuan_hasil,
			'angka_kredit' => $angka_kredit,
			'batasan_penilaian' => $batasan_penilaian,
			'pelaksana' => $pelaksana,
			'bukti_fisik' => $bukti_fisik,
		);
		$result = $this->m_admin->InsertData('tbl_acuanpak',$data_insert);
		
		if($result >= 1){
			redirect('admin/index');
		}else{
			echo "insert gagal"; 
		}
	}

}
