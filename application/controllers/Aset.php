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
        $this->form_validation->set_rules('kode_barang','kode_barang','required',['required'=>'Wajib Diisi']);
        if ($this->form_validation->run()==false){
            $data['title'] = 'Tambah Aset';
            $this->load->view('template/head');
            $this->load->view('template/sidebar');
            $this->load->view('template/topbar');
            $this->load->view('aset/input');
            $this->load->view('template/footer');
        } else {
            $data = array();
            $upload = $this->model_aset->uploadImg();
            if($upload['result'] == 'success'){
                $this->model_aset->insertAset($upload);
            
            $this->session->set_flashdata('upload', "<script>
            swal({
                text: 'Data Berhasil Ditambahkan',
                icon: 'success'
            });
            </script>");
            redirect(base_url(). 'Aset/index');
            } else {
                $this->session->set_flashdata('failed', "<div class='alert alert-danger' role='alert'>
            Gagal menambah data, pastikan gambar berukuran maks 4 MB dan berformat jpg. Silahkan ulangi lagi
            </div>");
                redirect(base_url(). 'Aset/index');
            }
        }
        
    }


    public function search($keyword){
		$keyword = $this->input->get('nama_barang');
		$data = $this->model_aset->ambil_data($keyword);
		$data = array(
			'nama_barang'	=> $keyword,
			'data'		=> $data
		);
		$this->load->view('aset',$data);
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
