<?php
class login_model extends CI_Model{

public function __construct() {
      $this->load->database();
  }

    public function getAll() {
        $results = array();
        $this->db->select('*');
        $this->db->from('tb_user');

        $query = $this->db->get('tb_user');

        // if($query->num_rows() > 0) {
        //     $results = $query;
        // }
        return $query;
        // return $this->db->get($this->_table)->result();
    }

   public function daftar($data) {
        $this->db->insert('tb_user',$data);
    }

    public function masuk($email,$password) {
    $query=$this->db->query("SELECT * FROM tb_user WHERE email='$email' AND password=MD5('$password') LIMIT 1");
    return $query;
    }
    
    public function GetProfil(){
        $profil = $this->db->query('SELECT * FROM tb_user');
        return $profil->result_array();
    }

}