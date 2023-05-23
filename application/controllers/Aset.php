<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Aset extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("model_aset");
        $this->load->library('form_validation');
    }
    public function index()
    {
        $data['tbl_aset'] = $this->model_aset->tampil_data();
        $this->load->view('template/head');
        $this->load->view('template/sidebar');
        $this->load->view('template/topbar');
        $this->load->view('aset', $data);
        $this->load->view('template/footer');
    }

    function tambah()
    {
        $this->load->view('template/head');
        $this->load->view('template/sidebar');
        $this->load->view('template/topbar');
        $this->load->view('aset/input');
        $this->load->view('template/footer');
    }

    function tambah_aksi()
    {
        $kode_barang = $this->input->post('kode_barang');
        $nama_barang = $this->input->post('nama_barang');
        $jenis_aset = $this->input->post('jenis_aset');
        $merk = $this->input->post('merk');
        $jumlah = $this->input->post('jumlah');
        $harga = $this->input->post('harga');
        $status = $this->input->post('status');
        $tanggal_masuk = $this->input->post('tanggal_masuk');
        $lokasi_pemasangan = $this->input->post('lokasi_pemasangan');
        $penanggung_jawab = $this->input->post('penanggung_jawab');
        $kondisi = $this->input->post('kondisi');
        $jadwal_penyusutan = $this->input->post('jadwal_penyusutan');
        $gambar = $this->input->post('gambar');

        $data = array(
            'kode_barang' => $kode_barang,
            'nama_barang' => $nama_barang,
            'jenis_aset' => $jenis_aset,
            'merk' => $merk,
            'jumlah' => $jumlah,
            'harga' => $harga,
            'status' => $status,
            'tanggal_masuk' => $tanggal_masuk,
            'lokasi_pemasangan' => $lokasi_pemasangan,
            'penanggung_jawab' => $penanggung_jawab,
            'kondisi' => $kondisi,
            'jadwal_penyusutan' => $jadwal_penyusutan,
            'gambar' => $gambar
        );
        $this->model_aset->input_data($data, 'tbl_aset');
        redirect('Aset/index');
    }


    public function edit($id)
    {
        $get_aset = $this->model_aset->get_by_id($id);
        $data = array(
            'aset' => $get_aset
        );

        $this->load->view('template/head');
        $this->load->view('template/sidebar');
        $this->load->view('template/topbar');
        $this->load->view('aset/edit', $data);
        $this->load->view('template/footer');
    }
    public function update()
    {
        $id = $this->input->post('id');
        $kode_barang = $this->input->post('kode_barang');
        $nama_barang = $this->input->post('nama_barang');
        $jenis_aset = $this->input->post('jenis_aset');
        $merk = $this->input->post('merk');
        $jumlah = $this->input->post('jumlah');
        $harga = $this->input->post('harga');
        $status = $this->input->post('status');
        $tanggal_masuk = $this->input->post('tanggal_masuk');
        $lokasi_pemasangan = $this->input->post('lokasi_pemasangan');
        $penanggung_jawab = $this->input->post('penanggung_jawab');
        $kondisi = $this->input->post('kondisi');
        $jadwal_penyusutan = $this->input->post('jadwal_penyusutan');
        $gambar = $this->input->post('gambar');

        $data = array(
            'kode_barang' => $kode_barang,
            'nama_barang' => $nama_barang,
            'jenis_aset' => $jenis_aset,
            'merk' => $merk,
            'jumlah' => $jumlah,
            'harga' => $harga,
            'status' => $status,
            'tanggal_masuk' => $tanggal_masuk,
            'lokasi_pemasangan' => $lokasi_pemasangan,
            'penanggung_jawab' => $penanggung_jawab,
            'kondisi' => $kondisi,
            'jadwal_penyusutan' => $jadwal_penyusutan,
            'gambar' => $gambar
        );
        $this->model_aset->update($id, $data);
        redirect('Aset/index');
    }

    public function delete($id)
    {
        $row = $this->model_aset->get_by_id($id);

        if ($row) {
            $this->model_aset->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect('Aset/index');
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect('Aset/index');
        }
        
    }

}
