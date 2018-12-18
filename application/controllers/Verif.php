<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Verif extends CI_Controller {	
	public function index()
	{
		$this->load->view('verifikasi_view');
	}
}