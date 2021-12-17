<?php 
 class Model_merek extends CI_Model
 {
     public function tampil_data()
     {
         return $this->db->get('merek');
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
         return $this->db->delete('merek', $data);
     }
 }

?>