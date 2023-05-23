<div class="container-fluid">
    <!--  Row 1 -->
    <div class="row">
        <div class="card">
            <div class="card-body">
                <!-- <form > -->
                <h5 class="card-title fw-semibold mb-4">Form Edit Data</h5>
                <div class="card">
                    <div class="card-body">
                        <form action="<?= base_url(); ?>Produksi/update" method="post">
                            <div class="mb-3">
                            <label for="exampleInputKodeAkses" class="form-label">Tanggal</label>
                                <input type="date" class="form-control" id="exampleInputKodeAkses" name="tanggal" value="<?= $produksi->tanggal ?>" require>
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputAkses" class="form-label">Daya Listrik</label>
                                <input type="text" class="form-control" id="exampleInputAkses" name="daya_listrik" value="<?= $produksi->daya_listrik ?>" require>
                            </div>
                            <div class="mb-3">
                            <label for="exampleInputKodeAkses" class="form-label">Nama Karyawan</label>
                                <input type="text" class="form-control" id="exampleInputKodeAkses" name="nama_karyawan" value="<?= $produksi->nama_karyawan ?>" require>
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputAkses" class="form-label">Uraian Kegiatan</label>
                                <input type="text" class="form-control" id="exampleInputAkses" name="uraian_kegiatan" value="<?= $produksi->uraian_kegiatan ?>" require>
                            </div>
                            <input type="hidden" name="id" value="<?= $produksi->id ?>">
                            <button type="submit" class="btn btn-primary" value="Update">Submit</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>