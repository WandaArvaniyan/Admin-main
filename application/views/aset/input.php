<div class="container-fluid">
        <!--  Row 1 -->
        <div class="row">
            <div class="card">
                <div class="card-body">
                <!-- <form > -->
                <h5 class="card-title fw-semibold mb-4">Form Tambah Data</h5>
                    <div class="card">
                        <div class="card-body">
                            <form action="<?= base_url(); ?>Aset/tambah_aksi" method="post">
                                <div class="mb-3">
                                    <label for="exampleInputDaya" class="form-label">Kode Barang</label>
                                    <input type="text" class="form-control" id="exampleInputDaya" name="kode_barang">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputDaya" class="form-label">Nama Barang</label>
                                    <input type="text" class="form-control" id="exampleInputDaya" name="nama_barang">
                                </div>                                
                                <div class="mb-3">
                                    <label for="exampleInputUraian" class="form-label">Jenis Aset</label>
                                    <input type="text" class="form-control" id="exampleInputUraian" name="jenis_aset">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputDaya" class="form-label">Merk / Type</label>
                                    <input type="text" class="form-control" id="exampleInputDaya" name="merk">
                                </div>                             
                                <div class="mb-3">
                                    <label for="exampleInputUraian" class="form-label">Jumlah</label>
                                    <input type="text" class="form-control" id="exampleInputUraian" name="jumlah">
                                </div>   
                                <div class="mb-3">
                                    <label for="exampleInputUraian" class="form-label">Harga</label>
                                    <input type="text" class="form-control" id="exampleInputUraian" name="harga">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputDaya" class="form-label">Status</label>
                                    <input type="text" class="form-control" id="exampleInputDaya" name="status">
                                </div>                                
                                
                                <div class="mb-3">
                                    <label for="exampleInputTanggal" class="form-label">Tanggal Masuk</label>
                                    <input type="date" class="form-control" id="exampleInputTanggal" name="tanggal_masuk">
                                </div>                                
                                <div class="mb-3">
                                    <label for="exampleInputDaya" class="form-label">Lokasi Pemasangan</label>
                                    <input type="text" class="form-control" id="exampleInputDaya" name="lokasi_pemasangan">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputNamaKaryawan" class="form-label">Penanggung Jawab</label>
                                    <input type="text" class="form-control" id="exampleInputNamaKaryawan" name="penanggung_jawab">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputUraian" class="form-label">Kondisi</label>
                                    <input type="text" class="form-control" id="exampleInputUraian" name="kondisi">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputUraian" class="form-label">Jadwal Penyusutan</label>
                                    <input type="date" class="form-control" id="exampleInputUraian" name="jadwal_penyusutan">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputNamaKaryawan" class="form-label">Gambar</label>
                                    <input type="file" class="form-control" id="exampleInputNamaKaryawan" name="gambar">
                                </div>
                                <button type="submit" class="btn btn-primary" value="Tambah">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>                
        </div>        
    </div>
</div>
</div>