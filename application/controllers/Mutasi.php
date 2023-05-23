<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Mutasi extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("model_mutasi");
        $this->load->library('form_validation');
    }
    public function index()
    {
        $data['mutasi_aset'] = $this->model_mutasi->tampil_data();
        $this->load->view('template/head');
        $this->load->view('template/sidebar');
        $this->load->view('template/topbar');
        $this->load->view('mutasi', $data);
        $this->load->view('template/footer');
    }

    function tambah()
    {
        $this->load->view('template/head');
        $this->load->view('template/sidebar');
        $this->load->view('template/topbar');
        $this->load->view('mutasi/input');
        $this->load->view('template/footer');
    }

    function tambah_aksi()
    {
        $tanggal = $this->input->post('tanggal');
        $lokasi_awal = $this->input->post('lokasi_awal');
        $lokasi_akhir = $this->input->post('lokasi_akhir');
        $kode_barang = $this->input->post('kode_barang');
        $sp_barang = $this->input->post('spesifikasi_barang');
        $nama_petugas = $this->input->post('nama_petugas');
        $nama_kasubag = $this->input->post('nama_kasubag');

        $data = array(
            'tanggal' => $tanggal,
            'lokasi_awal' => $lokasi_awal,
            'lokasi_akhir' => $lokasi_akhir,
            'kode_barang' => $kode_barang,
            'spesifikasi_barang' => $sp_barang,
            'nama_petugas' => $nama_petugas,
            'nama_kasubag' => $nama_kasubag,
        );
        $this->model_mutasi->input_data($data, 'mutasi_aset');
        redirect('Mutasi/index');
    }


    public function edit($id)
    {
        $get_mutasi = $this->model_mutasi->get_by_id($id);
        $data = array(
            'mutasi' => $get_mutasi
        );

        $this->load->view('template/head');
        $this->load->view('template/sidebar');
        $this->load->view('template/topbar');
        $this->load->view('mutasi/edit', $data);
        $this->load->view('template/footer');
    }
    public function update()
    {
        $id = $this->input->post('id');
        $tanggal = $this->input->post('tanggal');
        $lokasi_awal = $this->input->post('lokasi_awal');
        $lokasi_akhir = $this->input->post('lokasi_akhir');
        $kode_barang = $this->input->post('kode_barang');
        $sp_barang = $this->input->post('spesifikasi_barang');
        $nama_petugas = $this->input->post('nama_petugas');
        $nama_kasubag = $this->input->post('nama_kasubag');

        $data = array(
            'tanggal' => $tanggal,
            'lokasi_awal' => $lokasi_awal,
            'lokasi_akhir' => $lokasi_akhir,
            'kode_barang' => $kode_barang,
            'spesifikasi_barang' => $sp_barang,
            'nama_petugas' => $nama_petugas,
            'nama_kasubag' => $nama_kasubag,
        );
        $this->model_mutasi->update($id, $data);
        redirect('Mutasi/index');
    }

    public function delete($id)
    {
        $row = $this->model_mutasi->get_by_id($id);

        if ($row) {
            $this->model_mutasi->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect('Mutasi/index');
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect('Mutasi/index');
        }
        
    }

}
