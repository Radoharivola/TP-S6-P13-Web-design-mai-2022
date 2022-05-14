<?php
defined('BASEPATH') or exit('No direct script access allowed');

class InscriptionController extends CI_Controller
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
    public function insert()
    {
        $email = $this->input->post('email');
        $nom = $this->input->post('nom');
        $prenom = $this->input->post('prenom');
        $password = $this->input->post('password');
        $data = array();
        $data['view'] = 'login';
        $data['login'] = 'Login';
        $this->load->model('Utilisateur');
        $this->Utilisateur->inscription($email, $password, $nom, $prenom);
        $this->load->view('template', $data);
    }
	public function inscription()
	{
		$data = array();
		$data['view'] = 'inscription';
		$data['login'] = 'Login';
		$this->load->view('template', $data);
	}
}
