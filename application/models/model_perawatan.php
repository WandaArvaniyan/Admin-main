<?php
defined('BASEPATH') or exit('No direct script access allowed');
class model_perawatan extends CI_Model
{

    public $table = 'perawatan_aset';
    public $id = 'id';

    function tampil_data()
    {
        return $this->db->get('perawatan_aset');
    }

    function input_data($data, $table)
    {
        $this->db->insert($table, $data);
    }

    function edit_data($where, $table)
    {
        return $this->db->get_where($table, $where);
    }
    function update_data($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }

    function hapus_data($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }

    // New Custom Edit/Update

    // update data
    function update($id, $data)
    {
        $this->db->where($this->id, $id);
        $this->db->update($this->table, $data);
    }

    // delete data
    function delete($id)
    {
        $this->db->where($this->id, $id);
        $this->db->delete($this->table);
    }

    function get_by_id($id)
    {
        $this->db->where($this->id, $id);
        return $this->db->get($this->table)->row();
    }

    //upload gambar
    public function uploadImg(){

        $config['upload_path'] = './assets/images/upload/perawatan/';
        $config['allowed_types'] = 'jpg|png|jpeg|image/jpg|image/png|image/jpeg';
        $config['max_size'] = '5000';
        $config['file_name'] =round(microtime(true)*1000);

        $this->load->library('upload', $config);
        if ($this->upload->do_upload('gambar')){
            $return = array('result'=>'success','file' =>$this->upload->data(), 'error' => '');
            return $return;
        } else {
            $return = array('result'=>'failed','file'=>'', 'error'=>$this->upload->display_errors());
            return $return;
        }

    }

    //aksi tambah data
    public function inserPerawatan($upload)
    {
        $tanggal = date("Y-m-d H:i:s");
        $kode_barang = $this->input->post('kode_barang');
        $uraian = $this->input->post('uraian');
        $gambar =  $upload['file']['file_name'];

        $data = array(
            'kode_barang' => $kode_barang,
            'tanggal' => $tanggal,
            'uraian' => $uraian,
            'gambar' => $gambar
        );

        $this->db->insert('tbl_aset', $data);
    }

    public function updatePerawattan($gambar, $id)
    {
        $id = $this->input->post('id');
        $kode_barang = $this->input->post('kode_barang');
        $nama_barang = $this->input->post('nama_barang');
        $merk = $this->input->post('merk');
        $harga = $this->input->post('harga');
        $jangka = $this->input->post('jangka_penggunaan');
        $penanggung_jawab = $this->input->post('penanggung_jawab');
        $kondisi = $this->input->post('kondisi');
        $gambar = $gambar;

        $data = array(
            'kode_barang' => $kode_barang,
            'nama_barang' => $nama_barang,
            'merk' => $merk,
            'harga' => $harga,
            'jangka_penggunaan' => $jangka,
            'penanggung_jawab' => $penanggung_jawab,
            'kondisi' => $kondisi,
            'gambar' => $gambar
        );
        $this->db->where('id', $id);
        $this->db->update('tbl_aset', $data);
    }
}
