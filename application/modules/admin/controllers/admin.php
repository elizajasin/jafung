<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function index()
	{
		$this->load->view('v_dashboard_adm');
	}

	public function viewpjb()
	{
		$this->load->view('v_viewpjb_adm');
	}

	public function inputkegiatan()
	{
		$this->load->view('v_inputkegiatan_adm');
	}

	public function daftarkredit()
	{
		$this->load->view('v_daftarkredit_adm');
	}

	public function detailkegiatan()
	{
		$this->load->view('v_detailkegiatan_adm');
	}

	public function penilaian()
	{
		$this->load->view('v_penilaian_adm');
	}

	public function konfigperiode()
	{
		$this->load->view('v_konfigperiode_adm');
	}

	public function konfiguser()
	{
		$this->load->view('v_konfiguser_adm');
	}
}
