<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Penilai extends MX_Controller {

	public function index()
	{
		$this->load->view('v_dashboard_pnl');
	}

	public function viewpjb()
	{
		$this->load->view('v_viewpjb_pnl');
	}

	public function daftarpak()
	{
		$this->load->view('v_daftarpak_pnl');
	}

	public function daftarpnl()
	{
		$this->load->view('v_daftarpnl_pnl');
	}

	public function penilaian()
	{
		$this->load->view('v_penilaian_pnl');
	}

	public function laporan()
	{
		$this->load->view('v_laporan_pnl');
	}
}
