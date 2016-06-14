<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sekretariat extends MX_Controller {

	public function index()
	{
		$this->load->view('v_dashboard_skr');
	}

	public function viewpjb()
	{
		$this->load->view('v_viewpjb_skr');
	}

	public function konfigpnl()
	{
		$this->load->view('v_konfigpnl_skr');
	}

	public function regpnl()
	{
		$this->load->view('v_regpnl_skr');
	}

	public function daftarpnl()
	{
		$this->load->view('v_daftarpnl_skr');
	}

	public function cekdupak()
	{
		$this->load->view('v_cekdupak_skr');
	}

	public function laporan()
	{
		$this->load->view('v_laporan_skr');
	}
}