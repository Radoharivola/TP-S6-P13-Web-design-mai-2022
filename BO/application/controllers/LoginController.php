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
		$data = array();
		$data['view'] = 'login';
		$data['login'] = 'Login';
		$this->load->view('template', $data);
	}
	public function listeNonActive()
	{
		$data = array();
		$data['view'] = 'listeNonActive';
		$this->load->model('Utilisateur');
		$data['all'] = $this->Utilisateur->getNonActive();
		$this->load->view('template', $data);
	}
	public function listeActive()
	{
		$data = array();
		$data['view'] = 'listeActive';
		$this->load->view('template', $data);
	}
	public function verifyLogin()
	{
		// $this->load->view('welcome_message');
        if(!$this->session->has_userdata('userExist')){
			$email = $this->input->post('email');
			$password = $this->input->post('password');
			$data=array();
			if($this->input->post('su')){
				$this->load->model('SuperUtilisateur');
				$result=$this->SuperUtilisateur->login($email,$password);
				if($result['etat']){
					$this->load->model('Utilisateur');
					$data['all']=$this->Utilisateur->getNonActive();
					$data['view']='listeNonActive';
					$data['su']='su';
				}else{
					$data['view']='login';
					$data['error']=$this->$result['message'];
					$data['login']='Login';
				}
			}else{
				$this->load->model('Utilisateur');
				$result=$this->Utilisateur->login($email,$password);
				if($result['etat']){
					$data['user']=$this->session->userdata('user');
					$data['view']='accueil';
				}else{
					$data['view']='login';
					$data['error']=$result['message'];
					$data['login']='Login';
				}
			}
		}else{
			$this->session->unset_userdata('userExist');
			$data['user']=$this->session->userdata('user');
			$data['view']='accueil';
		}
		$this->load->view('template',$data);
	}
}
