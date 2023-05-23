<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Lokasi extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("model_lokasi");
        $this->load->library('form_validation');
    }
    public function index()
    {
        $data['lokasi'] = $this->model_lokasi->tampil_data();
        $this->load->view('template/head');
        $this->load->view('template/sidebar');
        $this->load->view('template/topbar');
        $this->load->view('lokasi', $data);
        $this->load->view('template/footer');
    }

    function tambah()
    {
        $this->load->view('template/head');
        $this->load->view('template/sidebar');
        $this->load->view('template/topbar');
        $this->load->view('lokasi/input');
        $this->load->view('template/footer');
    }

    function tambah_aksi()
    {
        $tanggal = $this->input->post('tanggal');
        $cust = $this->input->post('nama_pelanggan');
        $maps = $this->input->post('maps');

        $data = array(
            'tanggal' => $tanggal,
            'nama_pelanggan' => $cust,
            'maps' => $maps
        );
        $this->model_lokasi->input_data($data, 'lokasi');
        redirect('Lokasi/index');
    }


    public function edit($id)
    {
        $get_lokasi = $this->model_lokasi->get_by_id($id);
        $data = array(
            'lokasi' => $get_lokasi
        );

        $this->load->view('template/head');
        $this->load->view('template/sidebar');
        $this->load->view('template/topbar');
        $this->load->view('lokasi/edit', $data);
        $this->load->view('template/footer');
    }
    public function update()
    {
        $id = $this->input->post('id');
        $tanggal = $this->input->post('tanggal');
        $cust = $this->input->post('nama_pelanggan');
        $maps = $this->input->post('maps');

        $data = array(
            'tanggal' => $tanggal,
            'nama_pelanggan' => $cust,
            'maps' => $maps
        );
        $this->model_lokasi->update($id, $data);
        redirect('Lokasi/index');
    }

    public function delete($id)
    {
        $row = $this->model_lokasi->get_by_id($id);

        if ($row) {
            $this->model_lokasi->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect('Lokasi/index');
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect('Lokasi/index');
        }
        
    }

}
