<?php
defined('BASEPATH') or exit('No direct script access allowed');

class LoginController extends CI_Controller
{

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
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function login()
	{
		if (!$this->session->has_userdata('user')) {
			$data = array();
			$data['view'] = 'login';
			$data['login'] = 'Login';
		} else {
			$this->session->set_userdata('userExist', '0');
			redirect(site_url('ContenuController/manageContenu'));
		}
		$this->load->view('template', $data);
	}
	public function deco()
	{
		$this->session->sess_destroy();
		redirect(site_url('loginController/login'));
	}
	public function verifyLogin()
	{
		if (!$this->session->has_userdata('userExist')) {
			$email = $this->input->post('email');
			$password = $this->input->post('password');
			$data = array();
			$this->load->model('Utilisateur');
			$result = $this->Utilisateur->login($email, $password);
			if ($result['etat']) {
				redirect(site_url('ContenuController/manageContenu'));
			} else {
				$data['view'] = 'login';
				$data['error'] = $result['message'];
				$data['login'] = 'Login';
				$this->load->view('template', $data);
			}
		} else {
			$data['view'] = 'accueil';
			$this->load->view('template', $data);
		}
	}
}
