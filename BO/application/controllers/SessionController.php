<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class SessionController extends CI_Controller {
    public function __construct()
	{
		parent::__construct();
        if(!$this->session->has_userdata('user')){
            redirect(site_url('loginController/login'));
        }
        // else{
        //     $this->session->set_userdata('userExist','0');
        //     redirect(site_url('loginController/verifyLogin'));
        // }
	}
}
?>
