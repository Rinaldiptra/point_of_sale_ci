<?php 

class kategori extends CI_Controller
{
    public function __construct()
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
    public function elektronik()
    {
        $data['elektronik'] = $this->model_kategori->data_elektronik()->result();

        $this->load->view('template/header');
            $this->load->view('template/sidebar');
            $this->load->view('template/elektronik', $data);
            $this->load->view('template/footer');
    }
    public function pakaian_pria()
    {
        $data['pakaian_pria'] = $this->model_kategori->pakaian_pria()->result();

        $this->load->view('template/header');
            $this->load->view('template/sidebar');
            $this->load->view('template/pakaian_pria', $data);
            $this->load->view('template/footer');
    }
    public function pakaian_wanita()
    {
        $data['pakaian_wanita'] = $this->model_kategori->pakaian_wanita()->result();

        $this->load->view('template/header');
            $this->load->view('template/sidebar');
            $this->load->view('template/pakaian_wanita', $data);
            $this->load->view('template/footer');
    }
    public function pakaian_anak()
    {
        $data['pakaian_anak'] = $this->model_kategori->pakaian_anak()->result();

        $this->load->view('template/header');
            $this->load->view('template/sidebar');
            $this->load->view('template/pakaian_anak', $data);
            $this->load->view('template/footer');
    }
    public function peralatan_olahraga()
    {
        $data['peralatan_olahraga'] = $this->model_kategori->peralatan_olahraga()->result();

        $this->load->view('template/header');
            $this->load->view('template/sidebar');
            $this->load->view('template/peralatan_olahraga', $data);
            $this->load->view('template/footer');
    }
}

?>