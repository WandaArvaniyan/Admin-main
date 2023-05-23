<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Pompa extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("model_pompa");
        $this->load->library('form_validation');
    }
    public function index()
    {
        $data['sp_pompa'] = $this->model_pompa->tampil_data();
        $this->load->view('template/head');
        $this->load->view('template/sidebar');
        $this->load->view('template/topbar');
        $this->load->view('pompa', $data);
        $this->load->view('template/footer');
    }

    function tambah()
    {
        $this->load->view('template/head');
        $this->load->view('template/sidebar');
        $this->load->view('template/topbar');
        $this->load->view('pompa/input');
        $this->load->view('template/footer');
    }

    function tambah_aksi()
    {
        $tanggal = $this->input->post('tanggal');
        $kode_barang = $this->input->post('kode_barang');
        $hat = $this->input->post('hat_pompa_air');
        $debit = $this->input->post('debit_pompa');

        $data = array(
            'tanggal' => $tanggal,
            'kode_barang' => $kode_barang,
            'hat_pompa_air' => $hat,
            'debit_pompa' => $debit
        );
        $this->model_pompa->input_data($data, 'sp_pompa');
        redirect('Pompa/index');
    }


    public function edit($id)
    {
        $get_pompa = $this->model_pompa->get_by_id($id);
        $data = array(
            'pompa' => $get_pompa
        );

        $this->load->view('template/head');
        $this->load->view('template/sidebar');
        $this->load->view('template/topbar');
        $this->load->view('pompa/edit', $data);
        $this->load->view('template/footer');
    }
    public function update()
    {
        $id = $this->input->post('id');
        $tanggal = $this->input->post('tanggal');
        $kode_barang = $this->input->post('kode_barang');
        $hat = $this->input->post('hat_pompa_air');
        $debit = $this->input->post('debit_pompa');

        $data = array(
            'tanggal' => $tanggal,
            'kode_barang' => $kode_barang,
            'hat_pompa_air' => $hat,
            'debit_pompa' => $debit
        );
        $this->model_pompa->update($id, $data);
        redirect('Pompa/index');
    }

    public function delete($id)
    {
        $row = $this->model_pompa->get_by_id($id);

        if ($row) {
            $this->model_pompa->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect('Pompa/index');
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect('Pompa/index');
        }
        
    }

}
