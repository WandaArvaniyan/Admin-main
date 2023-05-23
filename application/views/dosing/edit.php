<div class="container-fluid">
    <!--  Row 1 -->
    <div class="row">
        <div class="card">
            <div class="card-body">
                <!-- <form > -->
                <h5 class="card-title fw-semibold mb-4">Form Edit Data</h5>
                <div class="card">
                    <div class="card-body">
                        <form action="<?= base_url(); ?>Dosing/update" method="post">
                            <div class="mb-3">
                            <label for="exampleInputKodeAkses" class="form-label">Tanggal</label>
                                <input type="date" class="form-control" id="exampleInputKodeAkses" name="tanggal" value="<?= $dosing->tanggal ?>" require>
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputAkses" class="form-label">Kode Barang</label>
                                <input type="text" class="form-control" id="exampleInputAkses" name="kode_barang" value="<?= $dosing->kode_barang ?>" require>
                            </div>
                            <div class="mb-3">
                            <label for="exampleInputKodeAkses" class="form-label">Hat Pompa Air</label>
                                <input type="number" class="form-control" id="exampleInputKodeAkses" name="hat_pompa_air" value="<?= $dosing->hat_pompa_air ?>" require>
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputAkses" class="form-label">Debit Pompa</label>
                                <input type="number" class="form-control" id="exampleInputAkses" name="debit_pompa" value="<?= $dosing->debit_pompa ?>" require>
                            </div>
                            <input type="hidden" name="id" value="<?= $dosing->id ?>">
                            <button type="submit" class="btn btn-primary" value="Update">Submit</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>