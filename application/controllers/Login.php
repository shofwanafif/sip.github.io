<?php
class Login extends CI_Controller {	
	
	function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->library('session');
		$this->load->model('login_model');
	}

	public function index()
	{
		$this->load->view('login_view');
	}

	public function auth() {
    $email=htmlspecialchars($this->input->post('email',TRUE),ENT_QUOTES);
        $password=htmlspecialchars($this->input->post('password',TRUE),ENT_QUOTES);

        $cek_admin=$this->login_model->masuk($email,$password);

        if($cek_admin->num_rows() > 0){ 
            $data=$cek_admin->row_array();
            $this->session->set_userdata('masuk',TRUE);
             if($data['tugas']=='admin' && $data['status']=='aktif'){ 
                $this->session->set_userdata('tugas','admin');
                $this->session->set_userdata('ses_email',$data['email']);
                $this->session->set_userdata('ses_nama',$data['nama']);
                redirect('Dashboardadmin');
             }else if ($data['tugas']=='user' && $data['status']=='aktif') { 
                $this->session->set_userdata('tugas','user');
                $this->session->set_userdata('ses_email',$data['email']);
                $this->session->set_userdata('ses_nama',$data['nama']);
                redirect('Dashboarduser');
             } else {
              echo "<script> 
      alert('anda salah memasukkan alamat email dan password')
      </script>";
                $this->load->view('login_view');
             }
        }
  }
        


    function logout() {
      $this->session->unset_userdata('Login');
    $this->session->sess_destroy();
    $this->load->view('Home');
  }
        }
