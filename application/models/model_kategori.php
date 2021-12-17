<?php 
class Model_kategori extends CI_Model
{
    public function data_elektronik()
    {
        return $this->db->get_where('barang', array('kategori' => 'elektronik'));

    }
    public function pakaian_pria()
    {
        return $this->db->get_where('barang', array('kategori' => 'pakaian pria'));

    }
    public function pakaian_wanita()
    {
        return $this->db->get_where('barang', array('kategori' => 'pakaian wanita'));

    }
    public function pakaian_anak()
    {
        return $this->db->get_where('barang', array('kategori' => 'pakaian anak'));

    }
    public function peralatan_olahraga()
    {
        return $this->db->get_where('barang', array('kategori' => 'peralatan olahraga'));

    }
}


?>