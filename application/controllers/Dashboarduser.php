<?php
class Dashboarduser extends CI_Controller {	
	public function __construct()
    {
         parent::__construct();
        $this->load->helper(array('url'));
        $this->load->library('session');
        $this->load->model('login_model');
    }

    public function index()
    {

            $this->load->view("user_view");        
    }

}