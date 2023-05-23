<div class="container-fluid">
    <!--  Row 1 -->
    <div class="row">
        <div class="card">
            <div class="card-body">
                <!-- <form > -->
                <h5 class="card-title fw-semibold mb-4">Form Edit Data</h5>
                <div class="card">
                    <div class="card-body">
                        <form action="<?= base_url(); ?>Lokasi/update" method="post">
                            <div class="mb-3">
                            <label for="exampleInputKodeAkses" class="form-label">Tanggal</label>
                                <input type="date" class="form-control" id="exampleInputKodeAkses" name="tanggal" value="<?= $lokasi->tanggal ?>" require>
                            </div>
                                <div class="mb-3">
                                    <label for="exampleInputDaya" class="form-label">Nama Pelanggan</label>
                                    <input type="text" class="form-control" id="exampleInputDaya" name="nama_pelanggan" value="<?= $lokasi->nama_pelanggan ?>" require>
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputUraian" class="form-label">Maps</label>
                                    <input type="text" class="form-control" id="exampleInputUraian" name="maps" value="<?= $lokasi->maps ?>" require>
                                </div>
                            <input type="hidden" name="id" value="<?= $lokasi->id ?>">
                            <button type="submit" class="btn btn-primary" value="Update">Submit</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>