<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class crud_model extends CI_model{

    public function get_all()
    {
        $query = $this->db->select("*")
                 ->from('tb_tim')
                 ->order_by('id_relawan', 'ASCD')
                 ->get();
        return $query->result();
    }


    public function simpan($data)
    {

        $query = $this->db->insert("tb_tim", $data);

        if($query){
            return true;
        }else{
            return false;
        }

    }

    public function edit($id_relawan)
    {

        $query = $this->db->where("id_relawan", $id_relawan)
                ->get("tb_tim");

        if($query){
            return $query->row();
        }else{
            return false;
        }

    }

    public function update($data, $id)
    {

        $query = $this->db->where('id_relawan',$id)->update("tb_tim", $data);

        if($query){
            return true;
        }else{
            return false;
        }

    }

    public function hapus($id)
    {

        $query = $this->db->delete("tb_tim", $id);

        if($query){
            return true;
        }else{
            return false;
        }


    }

}