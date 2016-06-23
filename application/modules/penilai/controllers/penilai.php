<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Penilai extends MX_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->helper(array('form','url'));
		$this->load->model('m_penilai');
		$this->load->library('session');
	}

	// dashboard

	public function index()
	{
		$this->load->view('v_dashboard_pnl');
	}

	// view pejabat

	public function viewpjb()
	{
		$user = $_SESSION['id'];
		$data = $this->m_penilai->getPjb();
		$this->load->library('table');
		$this->load->view('v_viewpjb_pnl',array('data' => $data ));
	}

	// daftar pak

	public function daftarpak()
	{
		$user = $_SESSION['id'];
		$data = $this->m_penilai->getDupak();
		$this->load->library('table');
		$this->load->view('v_daftarpak_pnl',array('data' => $data ));
	}

	// daftar penilai

	public function daftarpnl()
	{
		$this->load->view('v_daftarpnl_pnl');
	}

	// penilaian

	public function penilaian()
	{
		$this->load->view('v_penilaian_pnl');
	}

	// laporan

	public function laporan()
	{
		$this->load->view('v_laporan_pnl');
	}
}
