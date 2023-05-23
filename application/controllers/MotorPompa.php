<?php
defined('BASEPATH') or exit('No direct script access allowed');
class MotorPompa extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("model_motorpompa");
        $this->load->library('form_validation');
    }
    public function index()
    {
        $data['sp_motor_pompa'] = $this->model_motorpompa->tampil_data();
        $this->load->view('template/head');
        $this->load->view('template/sidebar');
        $this->load->view('template/topbar');
        $this->load->view('motor', $data);
        $this->load->view('template/footer');
    }

    function tambah()
    {
        $this->load->view('template/head');
        $this->load->view('template/sidebar');
        $this->load->view('template/topbar');
        $this->load->view('motor/input');
        $this->load->view('template/footer');
    }

    function tambah_aksi()
    {
        $tanggal = $this->input->post('tanggal');
        $kode_barang = $this->input->post('kode_barang');
        $daya = $this->input->post('daya_listrik');
        $arus = $this->input->post('arus_maks');
        $cos = $this->input->post('cos');

        $data = array(
            'tanggal' => $tanggal,
            'kode_barang' => $kode_barang,
            'daya_listrik' => $daya,
            'arus_maks' => $arus,
            'cos' => $cos
        );
        $this->model_motorpompa->input_data($data, 'sp_motor_pompa');
        redirect('MotorPompa/index');
    }


    public function edit($id)
    {
        $get_motor = $this->model_motorpompa->get_by_id($id);
        $data = array(
            'motor' => $get_motor
        );

        $this->load->view('template/head');
        $this->load->view('template/sidebar');
        $this->load->view('template/topbar');
        $this->load->view('motor/edit', $data);
        $this->load->view('template/footer');
    }
    public function update()
    {
        $id = $this->input->post('id');
        $tanggal = $this->input->post('tanggal');
        $kode_barang = $this->input->post('kode_barang');
        $daya = $this->input->post('daya_listrik');
        $arus = $this->input->post('arus_maks');
        $cos = $this->input->post('cos');

        $data = array(
            'tanggal' => $tanggal,
            'kode_barang' => $kode_barang,
            'daya_listrik' => $daya,
            'arus_maks' => $arus,
            'cos' => $cos
        );
        $this->model_motorpompa->update($id, $data);
        redirect('MotorPompa/index');
    }

    public function delete($id)
    {
        $row = $this->model_motorpompa->get_by_id($id);

        if ($row) {
            $this->model_motorpompa->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect('MotorPompa/index');
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect('MotorPompa/index');
        }
        
    }

}
