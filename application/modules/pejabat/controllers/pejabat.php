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

	// dupak
	public function dupak()
	{
		$data = $this->m_pejabat->getPjb();
		$this->load->library('table');
		$this->load->view('v_dupak_pjb',array('data' => $data ));
	}

	// detailpak

	public function detailpak()
	{
		$data = $this->m_pejabat->getPjb();
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

	public function editpak($id){
		$pak = $this->mymodel->getPak("where id = '$id'");
		$data = array(
			"id" => $pasien[0]['id'],
			"nama" => $pasien[0]['nama'],
			"tgl" => $pasien[0]['tgl'],
			"locate" => $pasien[0]['tempat_lahir'],
			"jk" => $pasien[0]['jk'],
			"alamat" => $pasien[0]['alamat'],
			"tal" => $pasien[0]['tal'],
			"telp" => $pasien[0]['telp'],
			"email" => $pasien[0]['email'],
			"rs_id" => $pasien[0]['rs_id']			
		);
		$this->load->view('edit_pasien', $data);
	}
}
