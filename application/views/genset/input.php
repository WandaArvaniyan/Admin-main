<div class="container-fluid">
        <!--  Row 1 -->
        <div class="row">
            <div class="card">
                <div class="card-body">
                <!-- <form > -->
                <h5 class="card-title fw-semibold mb-4">Form Tambah Data</h5>
                    <div class="card">
                        <div class="card-body">
                            <form action="<?= base_url(); ?>Genset/tambah_aksi" method="post">
                            <div class="mb-3">
                                    <label for="exampleInputTanggal" class="form-label">Tanggal</label>
                                    <input type="date" class="form-control" id="exampleInputTanggal" name="tanggal">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputDaya" class="form-label">Kode Barang</label>
                                    <input type="text" class="form-control" id="exampleInputDaya" name="kode_barang">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputUraian" class="form-label">Merk Generator</label>
                                    <input type="text" class="form-control" id="exampleInputUraian" name="merk_generator">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputNamaKaryawan" class="form-label">Merk Mesin</label>
                                    <input type="text" class="form-control" id="exampleInputNamaKaryawan" name="merk_mesin">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputNamaKaryawan" class="form-label">Kapasitas Generator</label>
                                    <input type="number" class="form-control" id="exampleInputNamaKaryawan" name="kapasitas_generator">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputNamaKaryawan" class="form-label">Kondisi</label>
                                    <input type="text" class="form-control" id="exampleInputNamaKaryawan" name="kondisi">
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