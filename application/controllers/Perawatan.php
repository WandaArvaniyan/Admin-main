<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Perawatan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("model_perawatan");
        $this->load->library('form_validation');
    }
    public function index()
    {
        $data['perawatan_aset'] = $this->model_perawatan->tampil_data();
        $this->load->view('template/head');
        $this->load->view('template/sidebar');
        $this->load->view('template/topbar');
        $this->load->view('perawatan', $data);
        $this->load->view('template/footer');
    }

    function tambah()
    {
        $this->load->view('template/head');
        $this->load->view('template/sidebar');
        $this->load->view('template/topbar');
        $this->load->view('perawatan/pr_input');
        $this->load->view('template/footer');
    }

    function tambah_aksi()
    {
        $tanggal = $this->input->post('tanggal');
        $kode_barang = $this->input->post('kode_barang');
        $uraian = $this->input->post('uraian');
        $gambar = $this->input->post('gambar');

        $data = array(
            'kode_barang' => $kode_barang,
            'tanggal' => $tanggal,
            'uraian' => $uraian,
            'gambar' => $gambar
        );
        $this->model_perawatan->input_data($data, 'perawatan_aset');
        redirect('Perawatan/index');
    }


    public function edit($id)
    {
        $get_perawatan = $this->model_perawatan->get_by_id($id);
        $data = array(
            'perawatan_aset' => $get_perawatan
        );

        $this->load->view('template/head');
        $this->load->view('template/sidebar');
        $this->load->view('template/topbar');
        $this->load->view('perawatan/pr_edit', $data);
        $this->load->view('template/footer');
    }
    public function update()
    {
        $id = $this->input->post('id');
        $tanggal = $this->input->post('tanggal');
        $kode_barang = $this->input->post('kode_barang');
        $uraian = $this->input->post('uraian');
        $gambar = $this->input->post('gambar');

        $data = array(
            'kode_barang' => $kode_barang,
            'tanggal' => $tanggal,
            'uraian' => $uraian,
            'gambar' => $gambar
        );
        $this->model_perawatan->update($id, $data);
        redirect('Perawatan/index');
    }

    public function delete($id)
    {
        $row = $this->model_perawatan->get_by_id($id);

        if ($row) {
            $this->model_perawatan->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect('Perawatan/index');
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect('Perawatan/index');
        }
        
    }

}
