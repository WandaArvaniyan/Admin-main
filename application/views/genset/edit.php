<div class="container-fluid">
    <!--  Row 1 -->
    <div class="row">
        <div class="card">
            <div class="card-body">
                <!-- <form > -->
                <h5 class="card-title fw-semibold mb-4">Form Edit Data</h5>
                <div class="card">
                    <div class="card-body">
                        <form action="<?= base_url(); ?>Genset/update" method="post">
                            <div class="mb-3">
                            <label for="exampleInputKodeAkses" class="form-label">Tanggal</label>
                                <input type="date" class="form-control" id="exampleInputKodeAkses" name="tanggal" value="<?= $genset->tanggal ?>" require>
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputAkses" class="form-label">Kode Barang</label>
                                <input type="text" class="form-control" id="exampleInputAkses" name="kode_barang" value="<?= $genset->kode_barang ?>" require>
                            </div>
                            <div class="mb-3">
                                    <label for="exampleInputUraian" class="form-label">Merk Generator</label>
                                    <input type="text" class="form-control" id="exampleInputUraian" name="merk_generator" value="<?= $genset->merk_generator ?>" require>
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputNamaKaryawan" class="form-label">Merk Mesin</label>
                                    <input type="text" class="form-control" id="exampleInputNamaKaryawan" name="merk_mesin" value="<?= $genset->merk_mesin ?>" require>
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputNamaKaryawan" class="form-label">Kapasitas Generator</label>
                                    <input type="number" class="form-control" id="exampleInputNamaKaryawan" name="kapasitas_generator" value="<?= $genset->kapasitas_generator ?>" require>
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputNamaKaryawan" class="form-label">Kondisi</label>
                                    <input type="text" class="form-control" id="exampleInputNamaKaryawan" name="kondisi" value="<?= $genset->kondisi ?>" require>
                                </div>
                            <input type="hidden" name="id" value="<?= $genset->id ?>">
                            <button type="submit" class="btn btn-primary" value="Update">Submit</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>