<?php
defined('BASEPATH') or exit('No direct script access allowed');
require('SessionController.php');
class ContenuController extends SessionController {

    public function __construct() {
        parent::__construct();
        $this->load->model('contenu');
        $this->load->library('session');
    }
    /*
    function for manage Contenu.
    return all Contenus.
    created by your name
    created at 14-05-22.
	santosh salve
    */
    public function manageContenu() { 
        $data['contenus'] = $this->contenu->getAll();
        $this->load->view('contenu/manage-contenu', $data);
    }
    /*
    function for  add Contenu get
    created by your name
    created at 14-05-22.
    */
    public function addContenu() {
        $this->load->view('contenu/add-contenu');
    }
    /*
    function for add Contenu post
    created by your name
    created at 14-05-22.
    */
    public function addContenuPost() {
        // $data['dateajout'] = $this->input->post('dateajout');
        $data['title'] = $this->input->post('title');
        $data['texte'] = $this->input->post('texte');
    $this->contenu->insert($data);
        $this->session->set_flashdata('success', 'Contenu added Successfully');
        redirect('manage-contenu');
    }
    /*
    function for edit Contenu get
    returns  Contenu by id.
    created by your name
    created at 14-05-22.
    */
    public function editContenu($contenu_id) {
        $data['contenu_id'] = $contenu_id;
        $data['contenu'] = $this->contenu->getDataById($contenu_id);
        $this->load->view('contenu/edit-contenu', $data);
    }
    /*
    function for edit Contenu post
    created by your name
    created at 14-05-22.
    */
    public function editContenuPost() {
        $contenu_id = $this->input->post('contenu_id');
        $contenu = $this->contenu->getDataById($contenu_id);
        $data['dateajout'] = $this->input->post('dateajout');
        $data['title'] = $this->input->post('title');
        $data['texte'] = $this->input->post('texte');
    $edit = $this->contenu->update($contenu_id,$data);
        if ($edit) {
            $this->session->set_flashdata('success', 'Contenu Updated');
            redirect('manage-contenu');
        }
    }
    /*
    function for view Contenu get
    created by your name
    created at 14-05-22.
    */
    public function viewContenu($contenu_id) {
        $data['contenu_id'] = $contenu_id;
        $data['contenu'] = $this->contenu->getDataById($contenu_id);
        $this->load->view('contenu/view-contenu', $data);
    }
    /*
    function for delete Contenu    created by your name
    created at 14-05-22.
    */
    public function deleteContenu($contenu_id) {
        $delete = $this->contenu->delete($contenu_id);
        $this->session->set_flashdata('success', 'contenu deleted');
        redirect('manage-contenu');
    }
    /*
    function for activation and deactivation of Contenu.
    created by your name
    created at 14-05-22.
    */
    public function changeStatusContenu($contenu_id) {
        $edit = $this->contenu->changeStatus($contenu_id);
        $this->session->set_flashdata('success', 'contenu '.$edit.' Successfully');
        redirect('manage-contenu');
    }
    
}