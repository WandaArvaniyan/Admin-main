<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Pipa extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("model_pipa");
        $this->load->library('form_validation');
    }
    public function index()
    {
        $data['sp_pipa'] = $this->model_pipa->tampil_data();
        $this->load->view('template/head');
        $this->load->view('template/sidebar');
        $this->load->view('template/topbar');
        $this->load->view('pipa', $data);
        $this->load->view('template/footer');
    }

    function tambah()
    {
        $this->load->view('template/head');
        $this->load->view('template/sidebar');
        $this->load->view('template/topbar');
        $this->load->view('pipa/input');
        $this->load->view('template/footer');
    }

    function tambah_aksi()
    {
        $tanggal = $this->input->post('tanggal');
        $kode_barang = $this->input->post('kode_barang');
        $kp = $this->input->post('kedalaman_pipa');
        $dp = $this->input->post('diameter_pipa');
        $jsp = $this->input->post('jenis_sambungan_pipa');

        $data = array(
            'tanggal' => $tanggal,
            'kode_barang' => $kode_barang,
            'kedalaman_pipa' => $kp,
            'diameter_pipa' => $dp,
            'jenis_sambungan_pipa' => $jsp
        );
        $this->model_pipa->input_data($data, 'sp_pipa');
        redirect('Pipa/index');
    }


    public function edit($id)
    {
        $get_pipa = $this->model_pipa->get_by_id($id);
        $data = array(
            'pipa' => $get_pipa
        );

        $this->load->view('template/head');
        $this->load->view('template/sidebar');
        $this->load->view('template/topbar');
        $this->load->view('pipa/edit', $data);
        $this->load->view('template/footer');
    }
    public function update()
    {
        $id = $this->input->post('id');
        $tanggal = $this->input->post('tanggal');
        $kode_barang = $this->input->post('kode_barang');
        $kp = $this->input->post('kedalaman_pipa');
        $dp = $this->input->post('diameter_pipa');
        $jsp = $this->input->post('jenis_sambungan_pipa');

        $data = array(
            'tanggal' => $tanggal,
            'kode_barang' => $kode_barang,
            'kedalaman_pipa' => $kp,
            'diameter_pipa' => $dp,
            'jenis_sambungan_pipa' => $jsp
        );
        $this->model_pipa->update($id, $data);
        redirect('Pipa/index');
    }

    public function delete($id)
    {
        $row = $this->model_pipa->get_by_id($id);

        if ($row) {
            $this->model_pipa->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect('Pipa/index');
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect('Pipa/index');
        }
        
    }

}
