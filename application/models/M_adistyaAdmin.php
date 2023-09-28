<?php
class M_adistyaAdmin extends CI_Model
{

    public function userAccess()
    {
        return $this->db->get('user_pengguna');
    }
    

    public function tipeKamar()
    {
        return $this->db->get('tipe_kamar');
    }

    public function tambahKamar($add)
    {
        $this->db->insert('tipe_kamar', $add);
    }

    public function get_kamar($kamar)
    {
       return $this->db->get_where('ruangan',['id_tipe_kamar' => $kamar]);
    }


     public function get_user_info()
    {
        return $this->db->get_where('user_pengguna',['email'=>$this->session->userdata('email')]);
    }

    public function jeniskamar()
    {
        return $this->db->get('tipe_kamar');
    }
}
