<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function __construct(){
		parent::__construct();
		$this->load->helper(array('form','url'));
		$this->load->model('m_login');
		$this->load->library('session');
	}

	public function index()
	{
		$this->load->view('login_view');
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
				redirect('admin');
			}
			elseif (($this->session->userdata('level')  == 'Pejabat Fungsional')) {		
				redirect('welcome');
			}
			elseif (($this->session->userdata('level') == 'Tim Sekretariat')) {
				$level = '3';
			}
			else {
				$level = '4';
			}
		}else{
			$data['error'] = 'Account is invalid';
			$this->load->view('login_view',$data);
		}
	}

	public function logout()
	{
		$this->session->unset_userdata('username');
		redirect("login");
	}
}
