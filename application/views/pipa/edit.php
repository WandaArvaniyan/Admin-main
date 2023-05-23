<div class="container-fluid">
    <!--  Row 1 -->
    <div class="row">
        <div class="card">
            <div class="card-body">
                <!-- <form > -->
                <h5 class="card-title fw-semibold mb-4">Form Edit Data</h5>
                <div class="card">
                    <div class="card-body">
                        <form action="<?= base_url(); ?>Pipa/update" method="post">
                            <div class="mb-3">
                            <label for="exampleInputKodeAkses" class="form-label">Tanggal</label>
                                <input type="date" class="form-control" id="exampleInputKodeAkses" name="tanggal" value="<?= $pipa->tanggal ?>" require>
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputAkses" class="form-label">Kode Barang</label>
                                <input type="text" class="form-control" id="exampleInputAkses" name="kode_barang" value="<?= $pipa->kode_barang ?>" require>
                            </div>
                            <div class="mb-3">
                                    <label for="exampleInputUraian" class="form-label">Kedalaman Pipa</label>
                                    <input type="number" class="form-control" id="exampleInputUraian" name="kedalaman_pipa" value="<?= $pipa->kedalaman_pipa ?>" require>
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputNamaKaryawan" class="form-label">Diameter Pipa</label>
                                    <input type="text" class="form-control" id="exampleInputNamaKaryawan" name="diameter_pipa" value="<?= $pipa->diameter_pipa ?>" require>
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputNamaKaryawan" class="form-label">Jenis Sambungan Pipa</label>
                                    <input type="number" class="form-control" id="exampleInputNamaKaryawan" name="jenis_sambungan_pipa" value="<?= $pipa->jenis_sambungan_pipa ?>" require>
                                </div>
                            <input type="hidden" name="id" value="<?= $pipa->id ?>">
                            <button type="submit" class="btn btn-primary" value="Update">Submit</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>