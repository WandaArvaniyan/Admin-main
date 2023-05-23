<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Produksi extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("model_produksi");
        // $this->load->model("model_pompa");
        $this->load->library('form_validation');
    }
    public function index()
    {
        $data['produksi'] = $this->model_produksi->tampil_data();
        $this->load->view('template/head');
        $this->load->view('template/sidebar');
        $this->load->view('template/topbar');
        $this->load->view('produksi', $data);
        $this->load->view('template/footer');
    }

    function tambah()
    {
        $this->load->view('template/head');
        $this->load->view('template/sidebar');
        $this->load->view('template/topbar');
        $this->load->view('produksi/pr_input');
        $this->load->view('template/footer');
    }

    function tambah_aksi()
    {
        $tanggal = $this->input->post('tanggal');
        $daya = $this->input->post('daya_listrik');
        $nama = $this->input->post('nama_karyawan');
        $uraian = $this->input->post('uraian_kegiatan');

        $data = array(
            'tanggal' => $tanggal,
            'daya_listrik' => $daya,
            'nama_karyawan' => $nama,
            'uraian_kegiatan' => $uraian
        );
        $this->model_produksi->input_data($data, 'produksi');
        redirect('Produksi/index');
    }


    public function edit($id)
    {
        $get_produksi = $this->model_produksi->get_by_id($id);
        $data = array(
            'produksi' => $get_produksi
        );

        $this->load->view('template/head');
        $this->load->view('template/sidebar');
        $this->load->view('template/topbar');
        $this->load->view('produksi/pr_edit', $data);
        $this->load->view('template/footer');
    }
    public function update()
    {
        $id = $this->input->post('id');
        $tanggal = $this->input->post('tanggal');
        $daya = $this->input->post('daya_listrik');
        $nama = $this->input->post('nama_karyawan');
        $uraian = $this->input->post('uraian_kegiatan');

        $data = array(
            'tanggal' => $tanggal,
            'daya_listrik' => $daya,
            'nama_karyawan' => $nama,
            'uraian_kegiatan' => $uraian
        );
        $this->model_produksi->update($id, $data);
        redirect('Produksi/index');
    }

    public function delete($id)
    {
        $row = $this->model_produksi->get_by_id($id);

        if ($row) {
            $this->model_produksi->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect('Produksi/index');
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect('Produksi/index');
        }
        
    }

}
