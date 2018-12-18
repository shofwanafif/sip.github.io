<?php
class Regis extends CI_Controller {	
	
	function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->library('session');
		$this->load->model('login_model');
	}

	public function index()
	{
		$this->load->view('regis_view');
	}
	// Fungsi controller register
	public function register() { 
		// $this->load->view('register');
		$this->form_validation->set_rules('nama', 'NAMA','required');
        $this->form_validation->set_rules('tanggal_lahir', 'TANGGAL_LAHIR','required');
        $this->form_validation->set_rules('jenis_kelamin', 'JENIS_KELAMIN','required');
        $this->form_validation->set_rules('goldarah', 'GOLDARAH','required');
        $this->form_validation->set_rules('rt_rw', 'RT_RW','required');
        $this->form_validation->set_rules('warganegara', 'WARGANEGARA','required');
        $this->form_validation->set_rules('kel_desa', 'KEL_DESA','required');
        $this->form_validation->set_rules('negara', 'NEGARA','required');
        $this->form_validation->set_rules('agama', 'AGAMA','required');
        $this->form_validation->set_rules('status_perkawinan', 'STATUS_PERKAWINAN','required');
		// $this->form_validation->set_rules('foto', 'foto','required');
		$this->form_validation->set_rules('pendidikan','PENDIDIKAN','required');
		$this->form_validation->set_rules('pekerjaan','PEkerjaan','required');
        $this->form_validation->set_rules('email','EMAIL','required|valid_email');
        $this->form_validation->set_rules('password','PASSWORD','required');
        $this->form_validation->set_rules('no_hp','NO_HP','required');

		if($this->form_validation->run() == FALSE) {
			$this->load->view('regis_view');

		} else {
			$data['nama']   =    $this->input->post('nama');
			$data['tanggal_lahir'] =    $this->input->post('tanggal_lahir');
            $data['jenis_kelamin'] =    $this->input->post('jenis_kelamin');
            $data['goldarah'] =    $this->input->post('goldarah');
			$data['rt_rw'] =    $this->input->post('rt_rw');
			$data['warganegara'] =    $this->input->post('warganegara');
			$data['kel_desa'] =    $this->input->post('kel_desa');
			$data['negara'] =    $this->input->post('negara');
			$data['agama'] =      $this->input->post('agama');
			$data['status_perkawinan'] =      $this->input->post('status_perkawinan');
			// $data['foto'] =    $this->input->post('foto');
			$data['pendidikan'] =      $this->input->post('pendidikan');
			$data['pekerjaan'] =      $this->input->post('pekerjaan');
            $data['email']  =    $this->input->post('email');
            $data['password'] =    md5($this->input->post('password'));
            $data['no_hp'] =    $this->input->post('no_hp');
 
			$this->login_model->daftar($data);

			echo "<script> 
			alert('Selamat akun Anda berhasil didaftarkan, silahkan tunggu untuk proses aktifasi agar akun Anda dapat digunakan')
			</script>";
			$this->load->view('login_view');
		}
	}
}
	