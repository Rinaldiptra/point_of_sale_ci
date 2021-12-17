<?php   

class Dashboard extends CI_Controller
{
    public function __construct()
    //function untuk agar tidak bisa masuk ke url lain sebelum login
    {
        parent::__construct();
        if($this->session->userdata('role') != 2){
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
			$this->load->view('template/header');
			$this->load->view('template/sidebar');
			$this->load->view('template/dashboard', $data);
			$this->load->view('template/footer');
		
	}
    public function tambah_ke_keranjang($id)
        {
            $barang = $this->model_barang->find($id);

            $data = array(
                'id'      => $barang->id_barang,
                'qty'     => 1,
                'price'   => $barang->harga_jual,
                'name'    => $barang->nama_barang
        );
        $this->cart->insert($data);
        redirect('welcome');
        }
    public function detail_keranjang()
    {
        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('template/keranjang');
        $this->load->view('template/footer');
    }
    public function hapus_keranjang()
    {
        $this->cart->destroy();
        redirect('welcome');
    }
    public function pembayaran()
    {
        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('template/pembayaran');
        $this->load->view('template/footer');
    }
    public function proses_pesanan()
    {
        $proses = $this->model_invoice->index();
        if($proses){
            $this->cart->destroy();
            $this->load->view('template/header');
            $this->load->view('template/sidebar');
            $this->load->view('template/proses_pesanan');
            $this->load->view('template/footer');
        }else{
            echo "Maaf Pesanan Anda Gagal Di Proses";
        }
       
    }
    public function detail($id_barang)
    {
        $data['barang'] = $this->model_barang->detail_barang($id_barang);
        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('template/detail_barang',$data);
        $this->load->view('template/footer');
    }
}
?>