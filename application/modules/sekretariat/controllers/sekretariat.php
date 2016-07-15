<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sekretariat extends MX_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->helper(array('form','url'));
		$this->load->model('m_sekretariat');
		$this->load->library('session');
	}

	// dashboard

	public function index()
	{
		$this->load->view('v_dashboard_skr');
	}

	// view pejabat

	public function viewpjb()
	{
		$user = $_SESSION['id'];
		$data = $this->m_sekretariat->getPjbAll();
		$this->load->library('table');
		$this->load->view('v_viewpjb_skr',array('data' => $data ));
	}

	// detailpjb

	public function detailpjb($id_akun)
	{
		$data = $this->m_sekretariat->getPjb($id_akun);
		$this->load->library('table');
		$this->load->view('v_detailpjb_skr',array('data' => $data ));
	}

	// editpjb

	public function editpjb($id_akun){
		$pjb = $this->m_sekretariat->getPjb($id_akun);
		$data = array(
			"nip" => $pjb[0]['nip'],
			"nama" => $pjb[0]['nama'],
			"tgl_lahir" => $pjb[0]['tgl_lahir'],
			"foto" => $pjb[0]['foto'],
			"pangkat" => $pjb[0]['pangkat'],
			"pangkat_terakhir" => $pjb[0]['pangkat_terakhir'],
			"jabatan" => $pjb[0]['jabatan'],
			"jabatan_terakhir" => $pjb[0]['jabatan_terakhir'],		
			"unit_organisasi" => $pjb[0]['unit_organisasi'],
			"instansi" => $pjb[0]['instansi'],
			"angka_kredit" => $pjb[0]['angka_kredit'],
			"sk_pns" => $pjb[0]['sk_pns'],		
			"sk_pangkat_terakhir" => $pjb[0]['sk_pangkat_terakhir'],
			"sk_jabatan_terakhir" => $pjb[0]['sk_jabatan_terakhir'],
			"pak_terakhir" => $pjb[0]['pak_terakhir'],
			"id_akun" => $pjb[0]['id_akun'],	
		);
		$this->load->view('v_editpjb_skr', $data);
	}

	public function editpjb_proses(){
		$nip = $_POST['nip'];
		$nama = $_POST['nama'];
		$tgl_lahir = $_POST['tgl_lahir'];
		$foto = $_POST['foto'];
		$pangkat = $_POST['pangkat'];
		$pangkat_terakhir = $_POST['pangkat_terakhir'];
		$jabatan = $_POST['jabatan'];
		$jabatan_terakhir = $_POST['jabatan_terakhir'];
		$unit_organisasi = $_POST['unit_organisasi'];
		$instansi = $_POST['instansi'];
		$angka_kredit = $_POST['angka_kredit'];
		$sk_pns = $_POST['sk_pns'];
		$sk_pangkat_terakhir = $_POST['sk_pangkat_terakhir'];
		$sk_jabatan_terakhir = $_POST['sk_jabatan_terakhir'];
		$pak_terakhir = $_POST['pak_terakhir'];
		$id_akun = $_POST['id_akun'];

		$data_update = array(
			'nip' => $nip,
			'nama' => $nama,
			'tgl_lahir' => $tgl_lahir,
			'foto' => $foto,
			'pangkat' => $pangkat,
			'pangkat_terakhir' => $pangkat_terakhir,
			'jabatan' => $jabatan,
			'jabatan_terakhir' => $jabatan_terakhir,
			'unit_organisasi' => $unit_organisasi,
			'instansi' => $instansi,
			'angka_kredit' => $angka_kredit,
			'sk_pns' => $sk_pns,
			'sk_pangkat_terakhir' => $sk_pangkat_terakhir,
			'sk_jabatan_terakhir' => $sk_jabatan_terakhir,
			'pak_terakhir' => $pak_terakhir,
			'id_akun' => $id_akun,
		);

		$where = array('id_akun' => $id_akun);
		
		$result = $this->m_sekretariat->UpdateData('tbl_pejabat',$data_update, $where);
		var_dump($data_update);
		if($result >= 1){
			redirect('sekretariat/viewpjb');
		}else{
			echo "update gagal"; 
		}
	}

	// konfigurasi penilai

	public function konfigpnl()
	{
		$this->load->view('v_konfigpnl_skr');
	}

	// registrasi penilai

	public function regpnl()
	{
		$this->load->view('v_regpnl_skr');
	}

	// daftar penilai

	public function daftarpnl()
	{
		$this->load->view('v_daftarpnl_skr');
	}

	// cek dupak

	public function cekdupak()
	{
		$this->load->view('v_cekdupak_skr');
	}

	// laporan

	public function laporan()
	{
		$this->load->view('v_laporan_skr');
	}
}