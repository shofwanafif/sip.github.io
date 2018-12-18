<?php
class Buattim extends CI_Controller {	
	 public function __construct(){

        parent ::__construct();

        //load model
        $this->load->model('crud_model'); 
		$this->load->helper('url');

    }

    public function index()
    {
        $data = array(

            'buattim_view' => $this->crud_model->get_all(),

        );

        $this->load->view('buattim_view', $data);
    }

    public function tambah()
    {
        $data = array(

        	'title' => 'tambah relawan'

        );

        $this->load->view('tambah_pegawai', $data);
    }

    public function simpan()
    {
        $data = array(

            'id_relawan'       => $this->input->post("id_relawan"),
            'nama'         => $this->input->post("nama"),
			'specialis' => $this->input->post("specialis"),
			'tim' => $this->input->post("tim")
			

        );

        $this->crud_model->simpan($data);

        $this->session->set_flashdata('notif', '<div class="alert alert-success alert-dismissible"> Success! data berhasil disimpan didatabase.
                                                </div>');

        //redirect
        redirect('Buattim');

    }
	
	 public function edit($id_relawan)
    {
        $id = $this->uri->segment(3);

        $data = array(

            'title'     => 'Edit Data TIM',
            'buattim_view' => $this->crud_model->edit($id_relawan)

        );

        $this->load->view('edit_pegawai', $data);
    }

    public function update()
    {
        $this->load->model("crud_model");
		$id = $this->input->post("id_relawan");
		
        $data = array(

            'id_relawan'       => $this->input->post("id_relawan"),
            'nama'         => $this->input->post("nama"),
            'specialis' => $this->input->post("specialis"),
            'tim' => $this->input->post("tim"));


     $save=$this->crud_model->update($data, $id);
	 if($save){
		 
		 $this->session->set_flashdata('msg_success',"berhasil");
	 }
	 else{
		 $this->session->set_flashdata('msg_error',"gagal");
	 }
			

        $this->session->set_flashdata('notif', '<div class="alert alert-success alert-dismissible"> Success! data berhasil diupdate didatabase.
                                                </div>');

        //redirect
        redirect('Buattim/');

    }

    public function hapus($id_relawan)
    {
        $id['id_relawan'] = $this->uri->segment(3);

        $this->crud_model->hapus($id);

        //redirect
        redirect('Buattim');

    }
}