<?php 
    class Dashboard_admin extends CI_Controller
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
            $this->load->view('template_admin/header');
            $this->load->view('template_admin/sidebar');
            $this->load->view('admin/dashboard');
            $this->load->view('template_admin/footer');
        }
    }



?>
