<div class="container-fluid">
    <!--  Row 1 -->
    <div class="row">
        <div class="card">
            <div class="card-body">
                <!-- <form > -->
                <h5 class="card-title fw-semibold mb-4">Form Edit Data</h5>
                <div class="card">
                    <div class="card-body">
                        <form action="<?= base_url(); ?>MotorPompa/update" method="post">
                            <div class="mb-3">
                            <label for="exampleInputKodeAkses" class="form-label">Tanggal</label>
                                <input type="date" class="form-control" id="exampleInputKodeAkses" name="tanggal" value="<?= $motor->tanggal ?>" require>
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputAkses" class="form-label">Kode Barang</label>
                                <input type="text" class="form-control" id="exampleInputAkses" name="kode_barang" value="<?= $motor->kode_barang ?>" require>
                            </div>
                            <div class="mb-3">
                                    <label for="exampleInputUraian" class="form-label">Daya Listrik</label>
                                    <input type="number" class="form-control" id="exampleInputUraian" name="daya_listrik" value="<?= $motor->daya_listrik ?>" require>
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputNamaKaryawan" class="form-label">Arus Maksimal</label>
                                    <input type="number" class="form-control" id="exampleInputNamaKaryawan" name="arus_maks" value="<?= $motor->arus_maks ?>" require>
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputNamaKaryawan" class="form-label">COS</label>
                                    <input type="number" class="form-control" id="exampleInputNamaKaryawan" name="cos" value="<?= $motor->cos ?>" require>
                                </div>
                            <input type="hidden" name="id" value="<?= $motor->id ?>">
                            <button type="submit" class="btn btn-primary" value="Update">Submit</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>