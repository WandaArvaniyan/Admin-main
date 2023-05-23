<div class="container-fluid">
        <!--  Row 1 -->
        <div class="row">
            <div class="card">
                <div class="card-body">
                <!-- <form > -->
                <h5 class="card-title fw-semibold mb-4">Form Tambah Data</h5>
                    <div class="card">
                        <div class="card-body">
                            <form action="<?= base_url(); ?>Panel/tambah_aksi" method="post">
                            <div class="mb-3">
                                    <label for="exampleInputTanggal" class="form-label">Tanggal</label>
                                    <input type="date" class="form-control" id="exampleInputTanggal" name="tanggal">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputDaya" class="form-label">Kode Barang</label>
                                    <input type="text" class="form-control" id="exampleInputDaya" name="kode_barang">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputUraian" class="form-label">Konfigurasi</label>
                                    <input type="number" class="form-control" id="exampleInputUraian" name="konfigurasi">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputNamaKaryawan" class="form-label">Star Delta</label>
                                    <input type="number" class="form-control" id="exampleInputNamaKaryawan" name="star_delta">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputNamaKaryawan" class="form-label">Direct Online</label>
                                    <input type="number" class="form-control" id="exampleInputNamaKaryawan" name="direct_online">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputNamaKaryawan" class="form-label">Kapasitas Beban</label>
                                    <input type="number" class="form-control" id="exampleInputNamaKaryawan" name="kapasitas_beban">
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