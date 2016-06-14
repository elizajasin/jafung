<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends MX_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->helper(array('form','url'));
		$this->load->model('m_login');
		$this->load->library('session');
	}

	public function index()
	{
		$this->load->view('v_login');
	}

	public function process()
	{
		
		$dt = $this->m_login->get_id($this->input->post('username'));
		$data=array(
			'id' =>$dt,
			'username' =>$this->input->post('username'),
			'password' =>$this->input->post('password'),
			'level' =>$this->input->post('level')
		);
		$cek=$this->m_login->m_aksi($data);
		if ($cek == 1){
			$this->session->set_userdata($data);	
			if (($this->session->userdata('level')  == 'Admin')){
				$this->load->module('admin');
				$this->admin->index();
			}
			elseif (($this->session->userdata('level')  == 'Pejabat Fungsional')) {		
				$this->load->module('pejabat');
				$this->pejabat->index();
			}
			elseif (($this->session->userdata('level') == 'Tim Sekretariat')) {
				$this->load->module('sekretariat');
				$this->sekretariat->index();
			}
			else {
				$this->load->module('penilai');
				$this->penilai->index();
			}
		}else{
			$data['error'] = 'Account is invalid';
			$this->load->view('v_login',$data);
		}
	}

	public function logout()
	{
		$this->session->unset_userdata('username');
		redirect("login");
	}
}
