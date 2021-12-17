<?php
class Barang extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if($this->session->userdata('role') != 1){
            $this->session->set_flashdata('pesan',
            '<div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Haduh Maaft!</strong> Kamu harus login dulu ya!.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>');
          redirect('auth/login');
        }
    }
    public function index()
    {
        $data['barang'] = $this->model_barang->tampil_data()->result();
        $data['merek'] = $this->model_merek->tampil_data();
        $this->load->view('template_admin/header');
        $this->load->view('template_admin/sidebar');
        $this->load->view('admin/barang',$data);
        $this->load->view('template_admin/footer');
    }
    public function tambah()
    {
        $nama = $this->input->post('nama_barang');
        $merek = $this->input->post('id_merek');
        $kategori = $this->input->post('kategori');
        $tanggal_masuk = $this->input->post('tanggal_masuk');
        $harga_jual = $this->input->post('harga_beli');
        $harga_beli = $this->input->post('harga_jual');
        $stok = $this->input->post('stok');
        $keterangan = $this->input->post('keterangan');
        $gambar = $_FILES['gambar']['name'];
        if ($gambar =''){}else{
            $config['upload_path'] = './item';
            $config['allowed_types'] = 'jpg|jpeg|png||gif';

            $this->load->library('upload', $config);
            if(!$this->upload->do_upload('gambar')){
                echo "Gambar gagal di upload!";
            }else{
                $gambar=$this->upload->data('file_name');
            }
        }

        $data = array(
            'nama_barang' => $nama,
            'id_merek' => $merek,
            'kategori' => $kategori,
            'tanggal_masuk' => $tanggal_masuk,
            'harga_beli' => $harga_beli,
            'harga_jual' => $harga_jual,
            'stok' => $stok,
            'keterangan' => $keterangan,
            'gambar' => $gambar,
        );
        $this->model_barang->tambah($data, 'barang');
        redirect('admin/barang/index');
    }
    public function edit($id)
    {
        $where = array('id_barang' =>$id);
        $data['barang'] = $this->model_barang->edit($where, 'barang')->result();
        $this->load->view('template_admin/header');
        $this->load->view('template_admin/sidebar');
        $this->load->view('admin/edit_barang',$data);
        $this->load->view('template_admin/footer');

    }
    public function update()
     {
         $id = $this->input->post('id_barang');
         $nama = $this->input->post('nama_barang');
         $merek = $this->input->post('id_merek');
         $kategori = $this->input->post('kategori');
         $tanggal_masuk = $this->input->post('tanggal_masuk');
         $harga_beli = $this->input->post('harga_beli');
         $harga_jual= $this->input->post('harga_jual');
         $stok = $this->input->post('stok');
         $keterangan = $this->input->post('keterangan');
        $data= array(
            'nama_barang'   =>$nama,
            'id_merek'   =>$merek,
            'kategori'   =>$kategori,
            'tanggal_masuk'   =>$tanggal_masuk,
            'harga_beli'   =>$harga_beli,
            'harga_jual'   =>$harga_jual,
            'stok'   =>$stok,
            'keterangan'   =>$keterangan,
        );
        $where = array(
            'id_barang' =>$id,
        );

        $this->model_barang->update($where, $data, 'barang');
        redirect('admin/barang/index');
     }
     public function hapus($id)
     {
         $where = array('id_barang' =>$id);
         $this->model_barang->hapus($where, 'barang');
         redirect('admin/barang/index');
     }
}

?>