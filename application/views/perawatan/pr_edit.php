<div class="container-fluid">
    <!--  Row 1 -->
    <div class="row">
        <div class="card">
            <div class="card-body">
                <!-- <form > -->
                <h5 class="card-title fw-semibold mb-4">Form Edit Data</h5>
                <div class="card">
                    <div class="card-body">
                        <form action="<?= base_url(); ?>Perawatan/update" method="post">
                            <div class="mb-3">
                            <label for="exampleInputKodeAkses" class="form-label">Tanggal</label>
                                <input type="date" class="form-control" id="exampleInputKodeAkses" name="tanggal" value="<?= $perawatan_aset->tanggal ?>" require>
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputAkses" class="form-label">Kode Barang</label>
                                <input type="text" class="form-control" id="exampleInputAkses" name="kode_barang" value="<?= $perawatan_aset->kode_barang ?>" require>
                            </div>
                            <div class="mb-3">
                            <label for="exampleInputKodeAkses" class="form-label">Uraian</label>
                                <input type="text" class="form-control" id="exampleInputKodeAkses" name="uraian" value="<?= $perawatan_aset->uraian ?>" require>
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputAkses" class="form-label">Gambar</label>
                                <input type="file" class="form-control" id="exampleInputAkses" name="gambar" value="<?= $perawatan_aset->gambar ?>" require>
                            </div>
                            <input type="hidden" name="id" value="<?= $perawatan_aset->id ?>">
                            <button type="submit" class="btn btn-primary" value="Update">Submit</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>