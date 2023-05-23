<div class="container-fluid">
        <!--  Row 1 -->
        <div class="row">
            <div class="card">
                <div class="card-body">
                <!-- <form > -->
                <h5 class="card-title fw-semibold mb-4">Form Tambah Data</h5>
                    <div class="card">
                        <div class="card-body">
                            <form action="<?= base_url(); ?>Produksi/tambah_aksi" method="post">
                            <div class="mb-3">
                                    <label for="exampleInputTanggal" class="form-label">Tanggal</label>
                                    <input type="date" class="form-control" id="exampleInputTanggal" name="tanggal">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputDaya" class="form-label">Daya Listrik</label>
                                    <input type="text" class="form-control" id="exampleInputDaya" name="daya_listrik">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputNamaKaryawan" class="form-label">Nama Karyawan</label>
                                    <input type="text" class="form-control" id="exampleInputNamaKaryawan" name="nama_karyawan">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputUraian" class="form-label">Uraian Kegiatan</label>
                                    <input type="text" class="form-control" id="exampleInputUraian" name="uraian_kegiatan">
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