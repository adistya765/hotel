<?php

class M_adistyaJoin extends CI_Model
{ 
    public function ruanganId($ruangan)
    {
       $this->db->select("*");
       $this->db->from('ruangan');
       $this->db->join('tipe_kamar', 'tipe_kamar.id = ruangan.id_tipe_kamar');
       $this->db->where('tipe_kamar.nama_kamar',$ruangan);
       return $this->db->get();
    }

    public function booking()
    {
        $this->db->select('*');
        $this->db->from('user_pengguna');
        $this->db->join('booking', 'booking.username=user_pengguna.username');
        $this->db->join('tipe_kamar', 'tipe_kamar.nama_kamar=booking.tipe_kamar');
        $this->db->join('user_pengguna', 'user_pengguna.username=booking.username');
        return  $this->db->get();
    }
}