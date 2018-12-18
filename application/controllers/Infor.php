<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Infor extends CI_Controller {	
	public function index()
	{
		$this->load->view('informasikegiatan_view');
	}
}