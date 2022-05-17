<?php
defined('BASEPATH') or exit('No direct script access allowed');
class BaseController extends CI_Controller
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
	public function index()
	{
		
		$data= array();
		$data['link']='accueil';
		$data['title']='accueil';
		$data['accueil']='0';
		$data['title']='Réchauffement climatique';
		$data['h1upper']='Réchauffement climatique';
		$data['h1lower']='info Climat';
		$this->load->model('Contenu');
		$data['all']=$this->Contenu->getAll();
		
		$this->output->cache(10);
		$this->load->view('template',$data);
	}
	public function about()
	{
		$data= array();
		$data['title']='A propos';
		$data['link']='about';
		$data['title']='info climat-a propos';
		$data['h1upper']='Réchauffement climatique';
		$data['h1lower']='info Climat';
		$data['about']='0';
		$this->load->view('template',$data);
	}
	public function articles()
	{
		$data= array();
		$data['link']='articles';
		$data['title']='info climat-articles';
		$data['h1upper']='Réchauffement climatique';
		$data['h1lower']='info Climat';
		$this->load->model('Contenu');
        $data['all'] = $this->Contenu->getAll();
		$data['articles']='0';
		$this->output->cache(10);
		$this->load->view('template',$data);
	}
}
