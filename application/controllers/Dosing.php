<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Dosing extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("model_dosing");
        $this->load->library('form_validation');
    }
    public function index()
    {
        $data['sp_pompa_dosing'] = $this->model_dosing->tampil_data();
        $this->load->view('template/head');
        $this->load->view('template/sidebar');
        $this->load->view('template/topbar');
        $this->load->view('dosing', $data);
        $this->load->view('template/footer');
    }

    function tambah()
    {
        $this->load->view('template/head');
        $this->load->view('template/sidebar');
        $this->load->view('template/topbar');
        $this->load->view('dosing/input');
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
        $this->model_dosing->input_data($data, 'sp_pompa_dosing');
        redirect('Dosing/index');
    }


    public function edit($id)
    {
        $get_dosing = $this->model_dosing->get_by_id($id);
        $data = array(
            'dosing' => $get_dosing
        );

        $this->load->view('template/head');
        $this->load->view('template/sidebar');
        $this->load->view('template/topbar');
        $this->load->view('dosing/edit', $data);
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
        $this->model_dosing->update($id, $data);
        redirect('Dosing/index');
    }

    public function delete($id)
    {
        $row = $this->model_dosing->get_by_id($id);

        if ($row) {
            $this->model_dosing->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect('Dosing/index');
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect('Dosing/index');
        }
        
    }

}
