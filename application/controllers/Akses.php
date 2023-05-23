<?php
class Akses extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->model('model_akses');
    }
    public function index(){
        $data['kode_akses']=$this->model_akses->tampil_data();
        $this->load->view('template/head');
        $this->load->view('template/sidebar');
        $this->load->view('template/topbar');
        $this->load->view('akses',$data);
        $this->load->view('template/footer');       
        
    }

    function tambah()
    {
        $this->load->view('template/head');
        $this->load->view('template/sidebar');
        $this->load->view('template/topbar');
        $this->load->view('akses/a_input');
        $this->load->view('template/footer');
    }

    function tambah_aksi()
    {
        $kode_akses = $this->input->post('kode_akses');
        $akses = $this->input->post('akses');

        $data = array(
            'kode_akses' => $kode_akses,
            'akses' => $akses,
        );
        $this->model_akses->input_data($data, 'kode_akses');
        redirect('Akses/index');
    }


    public function edit($id)
    {
        $get_akses = $this->model_akses->get_by_id($id);
        $data = array(
            'akses' => $get_akses
        );

        $this->load->view('template/head');
        $this->load->view('template/sidebar');
        $this->load->view('template/topbar');
        $this->load->view('akses/a_edit', $data);
        $this->load->view('template/footer');
    }
    public function update()
    {
        $id = $this->input->post('id');        
        $kode_akses = $this->input->post('kode_akses');
        $akses = $this->input->post('akses');

        $data = array(
            'kode_akses' => $kode_akses,
            'akses' => $akses,
        );
        $this->model_akses->update($id, $data);
        redirect('Akses/index');
    }

    public function delete($id)
    {
        $row = $this->model_akses->get_by_id($id);

        if ($row) {
            $this->model_akses->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect('Akses/index');
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect('Akses/index');
        }
        
    }
}
?>