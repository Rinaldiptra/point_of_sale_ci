<?php 
    class Merek extends CI_Controller
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
            $data['merek'] = $this->model_merek->tampil_data()->result();
            $this->load->view('template_admin/header');
            $this->load->view('template_admin/sidebar');
            $this->load->view('admin/merek',$data);
            $this->load->view('template_admin/footer');
        }
        public function tambah()
            {
                $merek = $this->input->post('merek');
                $data = array(
                    'merek' => $merek,
        );
        $this->model_merek->tambah($data, 'merek');
        redirect('admin/merek/index');
    }
    public function edit($id)
    {
        $where = array('id' =>$id);
        $data['merek'] = $this->model_merek->edit($where, 'merek')->result();
        $this->load->view('template_admin/header');
        $this->load->view('template_admin/sidebar');
        $this->load->view('admin/edit_merek',$data);
        $this->load->view('template_admin/footer');

    }
    public function update()
     {
         $id = $this->input->post('id');
         $merek = $this->input->post('merek');
        
        $data= array(
            'merek'   =>$merek,
        );
        $where = array(
            'id' =>$id,
        );

        $this->model_merek->update($where, $data, 'merek');
        redirect('admin/merek/index');
     }
     public function hapus($id)
     {
         $where = array('id' =>$id);
         $this->model_merek->hapus($where, 'merek');
         redirect('admin/merek/index');
     }
}
    
 ?>