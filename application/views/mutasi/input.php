<div class="container-fluid">
        <!--  Row 1 -->
        <div class="row">
            <div class="card">
                <div class="card-body">
                <!-- <form > -->
                <h5 class="card-title fw-semibold mb-4">Form Tambah Data</h5>
                    <div class="card">
                        <div class="card-body">
                            <form action="<?= base_url(); ?>Mutasi/tambah_aksi" method="post">
                            <div class="mb-3">
                                    <label for="exampleInputTanggal" class="form-label">Tanggal</label>
                                    <input type="date" class="form-control" id="exampleInputTanggal" name="tanggal">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputDaya" class="form-label">Lokasi Awal</label>
                                    <input type="text" class="form-control" id="exampleInputDaya" name="lokasi_awal">
                                </div>
                                
                                <div class="mb-3">
                                    <label for="exampleInputUraian" class="form-label">Lokasi Akhir</label>
                                    <input type="text" class="form-control" id="exampleInputUraian" name="lokasi_akhir">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputDaya" class="form-label">Kode Barang</label>
                                    <input type="text" class="form-control" id="exampleInputDaya" name="kode_barang">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputNamaKaryawan" class="form-label">Spesifikasi Barang</label>
                                    <input type="text" class="form-control" id="exampleInputNamaKaryawan" name="spesifikasi_barang">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputUraian" class="form-label">Nama Petugas</label>
                                    <input type="text" class="form-control" id="exampleInputUraian" name="nama_petugas">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputNamaKaryawan" class="form-label">Nama Kasubag</label>
                                    <input type="text" class="form-control" id="exampleInputNamaKaryawan" name="nama_kasubag">
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