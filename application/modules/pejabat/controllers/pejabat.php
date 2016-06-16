<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pejabat extends MX_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->helper(array('form','url'));
		$this->load->model('m_pejabat');
		$this->load->library('session');
	}

	public function index()
	{
		$user = $_SESSION['id'];
		$data = $this->m_pejabat->getPjb($user);
		$this->load->library('table');
		$this->load->view('v_dashboard_pjb',array('data' => $data ));
	}

	public function profile()
	{
		$user = $_SESSION['id'];
		$data = $this->m_pejabat->getPjb($user);
		$this->load->library('table');
		$this->load->view('v_profile_pjb',array('data' => $data ));
	}

	public function isipak()
	{
		$data = $this->m_pejabat->getPjb();
		$this->load->library('table');
		$this->load->view('v_isipak_pjb',array('data' => $data ));
	}

	public function dupak()
	{
		$data = $this->m_pejabat->getPjb();
		$this->load->library('table');
		$this->load->view('v_dupak_pjb',array('data' => $data ));
	}

	public function detailpak()
	{
		$data = $this->m_pejabat->getPjb();
		$this->load->library('table');
		$this->load->view('v_detailpak_pjb',array('data' => $data ));
	}

	public function daftarpak()
	{
		$user = $_SESSION['id'];
		$data = $this->m_pejabat->getDupak($user);
		$this->load->library('table');
		$this->load->view('v_daftarpak_pjb',array('data' => $data ));
	}
}
