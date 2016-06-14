<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pejabat extends MX_Controller {

	public function index()
	{
		$this->load->view('v_dashboard_pjb');
	}

	public function profile()
	{
		$this->load->view('v_profile_pjb');
	}

	public function isipak()
	{
		$this->load->view('v_isipak_pjb');
	}

	public function dupak()
	{
		$this->load->view('v_dupak_pjb');
	}

	public function detailpak()
	{
		$this->load->view('v_detailpak_pjb');
	}

	public function daftarpak()
	{
		$this->load->view('v_daftarpak_pjb');
	}
}
