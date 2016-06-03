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
	public function index()
	{
		$this->load->view('login_view');
	}

	public function process()
	{
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		if($username == 'eliza' && $password == '123')
		{
			$data['username'] = $username;
			$this->load->view('admin_view',$data);
		}
		else{
			$data['error'] = 'Account is invalid';
			$this->load->view('login_view',$data);
		}
	}
}
