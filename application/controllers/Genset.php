<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Panel extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("model_panel");
        $this->load->library('form_validation');
    }
    public function index()
    {
        $data['sp_panel'] = $this->model_panel->tampil_data();
        $this->load->view('template/head');
        $this->load->view('template/sidebar');
        $this->load->view('template/topbar');
        $this->load->view('panel', $data);
        $this->load->view('template/footer');
    }

    function tambah()
    {
        $this->load->view('template/head');
        $this->load->view('template/sidebar');
        $this->load->view('template/topbar');
        $this->load->view('panel/input');
        $this->load->view('template/footer');
    }

    function tambah_aksi()
    {
        $tanggal = $this->input->post('tanggal');
        $kode_barang = $this->input->post('kode_barang');
        $konfig = $this->input->post('konfigurasi');
        $star = $this->input->post('star_delta');
        $do = $this->input->post('direct_online');
        $kb = $this->input->post('kapasitas_beban');

        $data = array(
            'tanggal' => $tanggal,
            'kode_barang' => $kode_barang,
            'konfigurasi' => $konfig,
            'star_delta' => $star,
            'direct_online' => $do,
            'kapasitas_beban' => $kb
        );
        $this->model_panel->input_data($data, 'sp_panel');
        redirect('Panel/index');
    }


    public function edit($id)
    {
        $get_panel = $this->model_panel->get_by_id($id);
        $data = array(
            'panel' => $get_panel
        );

        $this->load->view('template/head');
        $this->load->view('template/sidebar');
        $this->load->view('template/topbar');
        $this->load->view('panel/edit', $data);
        $this->load->view('template/footer');
    }
    public function update()
    {
        $id = $this->input->post('id');
        $tanggal = $this->input->post('tanggal');
        $kode_barang = $this->input->post('kode_barang');
        $konfig = $this->input->post('konfigurasi');
        $star = $this->input->post('star_delta');
        $do = $this->input->post('direct_online');
        $kb = $this->input->post('kapasitas_beban');

        $data = array(
            'tanggal' => $tanggal,
            'kode_barang' => $kode_barang,
            'konfigurasi' => $konfig,
            'star_delta' => $star,
            'direct_online' => $do,
            'kapasitas_beban' => $kb
        );
        $this->model_panel->update($id, $data);
        redirect('Panel/index');
    }

    public function delete($id)
    {
        $row = $this->model_panel->get_by_id($id);

        if ($row) {
            $this->model_panel->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect('Panel/index');
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect('Panel/index');
        }
        
    }

}
