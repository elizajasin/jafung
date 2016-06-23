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
		
		$dt_id = $this->m_login->get_id($this->input->post('username'));
		$dt_nama = $this->m_login->get_nama($dt_id);
		$data=array(
			'id' =>$dt_id,
			'username' =>$this->input->post('username'),
			'password' =>$this->input->post('password'),
			'level' =>$this->input->post('level')
		);
		$cek=$this->m_login->m_aksi($data);
		$dt_nama = array('nama' => $dt_nama);
		$data = array_merge($data,$dt_nama);
		if ($cek == 1){
			$this->session->set_userdata($data);	
			if (($this->session->userdata('level')  == 'Admin')){
				redirect('admin/index');
			}
			elseif (($this->session->userdata('level')  == 'Pejabat Fungsional')) {		
				redirect('pejabat/index');
			}
			elseif (($this->session->userdata('level') == 'Tim Sekretariat')) {
				redirect('sekretariat/index');
			}
			else {
				redirect('penilai/index');
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
