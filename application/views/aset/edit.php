<div class="container-fluid">
    <!--  Row 1 -->
    <div class="row">
        <div class="card">
            <div class="card-body">
                <!-- <form > -->
                <h5 class="card-title fw-semibold mb-4">Form Edit Data</h5>
                <div class="card">
                    <div class="card-body">
                        <form action="<?= base_url(); ?>Aset/update" method="post">
                            <div class="mb-3">
                                    <label for="exampleInputDaya" class="form-label">Kode Barang</label>
                                    <input type="text" class="form-control" id="exampleInputDaya" name="kode_barang" value="<?= $aset->kode_barang ?>" require>
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputDaya" class="form-label">Nama Barang</label>
                                    <input type="text" class="form-control" id="exampleInputDaya" name="nama_barang" value="<?= $aset->nama_barang ?>" require>
                                </div>                                
                                <div class="mb-3">
                                    <label for="exampleInputUraian" class="form-label">Jenis Aset</label>
                                    <input type="text" class="form-control" id="exampleInputUraian" name="jenis_aset" value="<?= $aset->jenis_aset ?>" require>
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputDaya" class="form-label">Merk / Type</label>
                                    <input type="text" class="form-control" id="exampleInputDaya" name="merk" value="<?= $aset->merk ?>" require>
                                </div>                             
                                <div class="mb-3">
                                    <label for="exampleInputUraian" class="form-label">Jumlah</label>
                                    <input type="text" class="form-control" id="exampleInputUraian" name="jumlah" value="<?= $aset->jumlah ?>" require>
                                </div>   
                                <div class="mb-3">
                                    <label for="exampleInputUraian" class="form-label">Harga</label>
                                    <input type="text" class="form-control" id="exampleInputUraian" name="harga" value="<?= $aset->harga ?>" require>
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputDaya" class="form-label">Status</label>
                                    <input type="text" class="form-control" id="exampleInputDaya" name="status" value="<?= $aset->status ?>" require>
                                </div>                                
                                
                                <div class="mb-3">
                                    <label for="exampleInputTanggal" class="form-label">Tanggal Masuk</label>
                                    <input type="date" class="form-control" id="exampleInputTanggal" name="tanggal_masuk" value="<?= $aset->tanggal_masuk ?>" require>
                                </div>                                
                                <div class="mb-3">
                                    <label for="exampleInputDaya" class="form-label">Lokasi Pemasangan</label>
                                    <input type="text" class="form-control" id="exampleInputDaya" name="lokasi_pemasangan" value="<?= $aset->lokasi_pemasangan ?>" require>
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputNamaKaryawan" class="form-label">Penanggung Jawab</label>
                                    <input type="text" class="form-control" id="exampleInputNamaKaryawan" name="penanggung_jawab" value="<?= $aset->penanggung_jawab ?>" require>
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputUraian" class="form-label">Kondisi</label>
                                    <input type="text" class="form-control" id="exampleInputUraian" name="kondisi" value="<?= $aset->kondisi ?>" require>
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputUraian" class="form-label">Jadwal Penyusutan</label>
                                    <input type="date" class="form-control" id="exampleInputUraian" name="jadwal_penyusutan" value="<?= $aset->jadwal_penyusutan ?>" require>
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputNamaKaryawan" class="form-label">Gambar</label>
                                    <input type="file" class="form-control" id="exampleInputNamaKaryawan" name="gambar" value="<?= $aset->gambar ?>" require>
                                </div>
                            <input type="hidden" name="id" value="<?= $aset->id ?>">
                            <button type="submit" class="btn btn-primary" value="Update">Submit</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>