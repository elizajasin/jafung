<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pejabat extends MX_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->helper(array('form','url'));
		$this->load->model('m_pejabat');
		$this->load->library('session');
	}

	// dashboard

	public function index()
	{
		$user = $_SESSION['id'];
		$data = $this->m_pejabat->getPjb($user);
		$this->load->library('table');
		$this->load->view('v_dashboard_pjb',array('data' => $data ));
	}

	// profile

	public function profile()
	{
		$user = $_SESSION['id'];
		$data = $this->m_pejabat->getPjb($user);
		$this->load->library('table');
		$this->load->view('v_profile_pjb',array('data' => $data ));
	}

	// isipak

	public function isipak()
	{
		$data = $this->m_pejabat->getPjb();
		$this->load->library('table');
		$this->load->view('v_isipak_pjb',array('data' => $data ));
	}

	// adddupak
	public function adddupak()
	{
		$data = $this->m_pejabat->getPjb();
		$this->load->library('table');
		$this->load->view('v_adddupak_pjb',array('data' => $data ));
	}

	// dupak
	public function dupak()
	{
		$data = $this->m_pejabat->getPjb();
		$this->load->library('table');
		$this->load->view('v_dupak_pjb',array('data' => $data ));
	}

	public function adddupak_proses(){	
		$tgl_pengajuan = $_POST['tgl_pengajuan'];
		$jenis_pengajuan = $_POST['jenis_pengajuan'];
		$periode = $_POST['periode'];
		$status = "Draft";
		$ak_disetujuin = 0;
		$id_akun = $_SESSION['id'];

		$data_insert = array(
			'tgl_pengajuan' => $tgl_pengajuan,
			'jenis_pengajuan' => $jenis_pengajuan,
			'periode' => $periode,
			'status' => $status,
			'ak_disetujuin' => $ak_disetujuin,
			'id_akun' => $id_akun,
		);
		$result = $this->m_pejabat->InsertData('tbl_dupak',$data_insert);
		
		if($result >= 1){
			redirect('pejabat/adddupak');
		}else{
			echo "insert gagal"; 
		}
	}

	// detailpak

	public function detailpak($id)
	{
		$data = $this->m_pejabat->getPak($id);
		$this->load->library('table');
		$this->load->view('v_detailpak_pjb',array('data' => $data ));
	}

	// daftarpak

	public function daftarpak()
	{
		$user = $_SESSION['id'];
		$data = $this->m_pejabat->getDupak($user);
		$this->load->library('table');
		$this->load->view('v_daftarpak_pjb',array('data' => $data ));
	}

	// editpak

	public function editpak($id){
		$pak = $this->m_pejabat->getPak($id);
		$data = array(
			"id" => $pak[0]['id'],
			"tgl_pengajuan" => $pak[0]['tgl_pengajuan'],
			"jenis_pengajuan" => $pak[0]['jenis_pengajuan'],
			"periode" => $pak[0]['periode'],
			"status" => $pak[0]['status'],
			"ak_diajukan" => $pak[0]['ak_diajukan'],
			"ak_disetujuin" => $pak[0]['ak_disetujuin'],
			"id_akun" => $pak[0]['id_akun'],		
		);
		$this->load->view('v_editpak_pjb', $data);
	}

	public function editpak_proses(){
		$id = $_POST['id'];
		$tgl_pengajuan = $_POST['tgl_pengajuan'];
		$jenis_pengajuan = $_POST['jenis_pengajuan'];
		$periode = $_POST['periode'];
		$status = $_POST['status'];
		$ak_diajukan = $_POST['ak_diajukan'];
		$ak_disetujuin = $_POST['ak_disetujuin'];
		
		$data_update = array(
			'id' => $id,
			'tgl_pengajuan' => $tgl_pengajuan,
			'jenis_pengajuan' => $jenis_pengajuan,
			'periode' => $periode,
			'status' => $status,
			'ak_diajukan' => $ak_diajukan,
			'ak_disetujuin' => $ak_disetujuin,
		);

		$where = array('id' => $id);
		
		$result = $this->m_pejabat->UpdateData('tbl_dupak',$data_update, $where);
		var_dump($data_update);
		if($result >= 1){
			redirect('pejabat/daftarpak');
		}else{
			echo "update gagal"; 
		}
	}

}
