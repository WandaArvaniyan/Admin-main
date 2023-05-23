<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Genset extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("model_genset");
        $this->load->library('form_validation');
    }
    public function index()
    {
        $data['sp_genset'] = $this->model_genset->tampil_data();
        $this->load->view('template/head');
        $this->load->view('template/sidebar');
        $this->load->view('template/topbar');
        $this->load->view('genset', $data);
        $this->load->view('template/footer');
    }

    function tambah()
    {
        $this->load->view('template/head');
        $this->load->view('template/sidebar');
        $this->load->view('template/topbar');
        $this->load->view('genset/input');
        $this->load->view('template/footer');
    }

    function tambah_aksi()
    {
        $tanggal = $this->input->post('tanggal');
        $kode_barang = $this->input->post('kode_barang');
        $mg = $this->input->post('merk_generator');
        $mm = $this->input->post('merk_mesin');
        $kg = $this->input->post('kapasitas_generator');
        $kondisi = $this->input->post('kondisi');

        $data = array(
            'tanggal' => $tanggal,
            'kode_barang' => $kode_barang,
            'merk_generator' => $mg,
            'merk_mesin' => $mm,
            'kapasitas_generator' => $kg,
            'kondisi' => $kondisi
        );
        $this->model_genset->input_data($data, 'sp_genset');
        redirect('Genset/index');
    }


    public function edit($id)
    {
        $get_genset = $this->model_genset->get_by_id($id);
        $data = array(
            'genset' => $get_genset
        );

        $this->load->view('template/head');
        $this->load->view('template/sidebar');
        $this->load->view('template/topbar');
        $this->load->view('genset/edit', $data);
        $this->load->view('template/footer');
    }
    public function update()
    {
        $id = $this->input->post('id');
        $tanggal = $this->input->post('tanggal');
        $kode_barang = $this->input->post('kode_barang');
        $mg = $this->input->post('merk_generator');
        $mm = $this->input->post('merk_mesin');
        $kg = $this->input->post('kapasitas_generator');
        $kondisi = $this->input->post('kondisi');

        $data = array(
            'tanggal' => $tanggal,
            'kode_barang' => $kode_barang,
            'merk_generator' => $mg,
            'merk_mesin' => $mm,
            'kapasitas_generator' => $kg,
            'kondisi' => $kondisi
        );
        $this->model_genset->update($id, $data);
        redirect('Genset/index');
    }

    public function delete($id)
    {
        $row = $this->model_genset->get_by_id($id);

        if ($row) {
            $this->model_genset->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect('Genset/index');
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect('Genset/index');
        }
        
    }

}
