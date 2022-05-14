<?php
defined('BASEPATH') or exit('No direct script access allowed');
class ArticleController extends CI_Controller
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
    // public function index()
    // {
    // 	$this->load->view('template');
    // }
    public function ficheArticle($title, $texte)
    {
        $data = array();
        $this->load->model('Contenu');
        $data['article'] = $this->Contenu->getArticle($title, $texte);
        $data['link']='fiche';

        $data['title']=$data['article']->title;
		$data['h1upper']=$data['article']->title;
		$data['h1lower']='info Climat';

        $this->load->view('template', $data);
    }
    public function ficheById($texte, $id)
    {
        $data = array();
        $data['id']=$id;
        $this->load->model('Contenu');
        $data['article'] = $this->Contenu->getById($id);
        $data['link']='fiche';
        $data['title']=$data['article']->title;
		$data['h1upper']=$data['article']->title;
		$data['h1lower']='info Climat';
        $this->load->view('template', $data);
    }
}
