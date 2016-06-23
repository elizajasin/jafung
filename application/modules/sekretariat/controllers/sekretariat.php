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
		$data = $this->m_sekretariat->getPjb();
		$this->load->library('table');
		$this->load->view('v_viewpjb_skr',array('data' => $data ));
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