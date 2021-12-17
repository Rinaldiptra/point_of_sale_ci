<?php 
 class Model_barang extends CI_Model
 {
     public function tampil_data()
     {
         return $this->db->get('barang');
     }
     public function tambah($data,$table)
     {
          $this->db->insert($table,$data);
     }
     public function edit($where, $table)
     {
         return $this->db->get_where($table,$where);
     }
     public function update($where, $data, $table)
     {
         $this->db->where($where);
         $this->db->update($table,$data);
     }
     public function hapus($data)
     {
         return $this->db->delete('barang', $data);
     }
     public function find($id)
     {
        $result = $this->db->where('id_barang', $id)
                                    ->limit(1)
                                    ->get('barang');
        if($result->num_rows() > 0){
            return $result->row();
        }else{
            return array();
        }
     }
     public function detail_barang($id_barang)
     {
        $result = $this->db->where('id_barang', $id_barang)->get('barang');
        if($result->num_rows()>0){
            return $result->result();
        }else{
            return false;
        }
     }
 }

?>