<?php 
 class Auth extends CI_Controller
 {
    public function login()
    {
        $this->form_validation->set_rules('username', 'username','required',['requiared'=>'Username Harus Di Isi']);
        $this->form_validation->set_rules('password', 'password','required',['requiared'=>'Password Harus Di Isi']);
        if($this->form_validation->run() == FALSE)
        {
            $this->load->view('template/header');
            $this->load->view('form_login');
            $this->load->view('template/footer');
        }else{
            $auth = $this->model_auth->cek_login();
            if($auth == FALSE){
                $this->session->set_flashdata('pesan',
                 '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                 <strong>Haduh Maaf!</strong> Login nya gagal, cek lagi yu password username nya.
                 <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                   <span aria-hidden="true">&times;</span>
                 </button>
               </div>');
               redirect('auth/login');
            }else{
                $this->session->set_userdata('username', $auth->username);
                $this->session->set_userdata('role', $auth->role);
                switch($auth->role){
                    case 1: redirect('admin/dashboard_admin');
                    break;
                    case 2: redirect('welcome');
                    break;
                    default :break;
                }
            }
        }
    }
    public function logout()
    {
        $this->session->sess_destroy();
        redirect('auth/login');
    }
 }
?>