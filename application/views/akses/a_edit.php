<div class="container-fluid">
    <!--  Row 1 -->
    <div class="row">
        <div class="card">
            <div class="card-body">
                <!-- <form > -->
                <h5 class="card-title fw-semibold mb-4">Form Edit Data</h5>
                <div class="card">
                    <div class="card-body">
                        <form action="<?= base_url(); ?>Akses/update" method="post">
                            <div class="mb-3">
                            <label for="exampleInputKodeAkses" class="form-label">Kode Akses</label>
                                <input type="text" class="form-control" id="exampleInputKodeAkses" name="kode_akses" value="<?= $akses->kode_akses ?>" require>
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputAkses" class="form-label">Akses</label>
                                <input type="text" class="form-control" id="exampleInputAkses" name="akses" value="<?= $akses->akses ?>" require>
                            </div>
                            <input type="hidden" name="id" value="<?= $akses->id ?>">
                            <button type="submit" class="btn btn-primary" value="Update">Submit</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>