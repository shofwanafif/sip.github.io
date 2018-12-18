<?php
class profil extends CI_Controller {	
	public function __construct()
    {
         parent::__construct();
        $this->load->helper(array('url'));
        $this->load->library('session');
        $this->load->model('login_model');
    }    

		public function index(){
		$profil = $this->login_model->GetProfil();
		$this->load->view('myprofil_view', array('profil' => $profil));
	}
}