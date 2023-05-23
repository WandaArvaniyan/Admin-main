<div class="container-fluid">
    <!--  Row 1 -->
    <div class="row">
        <div class="card">
            <div class="card-body">
                <!-- <form > -->
                <h5 class="card-title fw-semibold mb-4">Form Edit Data</h5>
                <div class="card">
                    <div class="card-body">
                        <form action="<?= base_url(); ?>Panel/update" method="post">
                            <div class="mb-3">
                            <label for="exampleInputKodeAkses" class="form-label">Tanggal</label>
                                <input type="date" class="form-control" id="exampleInputKodeAkses" name="tanggal" value="<?= $panel->tanggal ?>" require>
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputAkses" class="form-label">Kode Barang</label>
                                <input type="text" class="form-control" id="exampleInputAkses" name="kode_barang" value="<?= $panel->kode_barang ?>" require>
                            </div>
                            <div class="mb-3">
                                    <label for="exampleInputUraian" class="form-label">Konfigurasi</label>
                                    <input type="number" class="form-control" id="exampleInputUraian" name="konfigurasi" value="<?= $panel->konfigurasi ?>" require>
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputNamaKaryawan" class="form-label">Star Delta</label>
                                    <input type="number" class="form-control" id="exampleInputNamaKaryawan" name="star_delta" value="<?= $panel->star_delta ?>" require>
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputNamaKaryawan" class="form-label">Direct Online</label>
                                    <input type="number" class="form-control" id="exampleInputNamaKaryawan" name="direct_online" value="<?= $panel->direct_online ?>" require>
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputNamaKaryawan" class="form-label">Kapasitas Beban</label>
                                    <input type="number" class="form-control" id="exampleInputNamaKaryawan" name="kapasitas_beban" value="<?= $panel->kapasitas_beban ?>" require>
                                </div>
                            <input type="hidden" name="id" value="<?= $panel->id ?>">
                            <button type="submit" class="btn btn-primary" value="Update">Submit</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>