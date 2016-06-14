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
		$data=array(
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
				$level = '3';
			}
			else {
				$level = '4';
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
