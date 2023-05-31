<div class="container-fluid">
        <!--  Row 1 -->
        <div class="row">
            <div class="card">
                <div class="card-body">
                <!-- <form > -->
                <h5 class="card-title fw-semibold mb-4">Form Tambah Data</h5>
                    <div class="card">
                        <div class="card-body">
                            <form action="<?= base_url(); ?>Aset/tambah" method="post">
                                <div class="mb-3">
                                    <label for="exampleInputDaya" class="form-label">Kode Barang</label>
                                    <input type="text" class="form-control" id="exampleInputDaya" name="kode_barang">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputDaya" class="form-label">Nama Barang</label>
                                    <input type="text" class="form-control" id="exampleInputDaya" name="nama_barang">
                                </div>                                
                                <div class="mb-3">
                                    <label for="exampleInputDaya" class="form-label">Merk / Type</label>
                                    <input type="text" class="form-control" id="exampleInputDaya" name="merk">
                                </div>                               
                                <div class="mb-3">
                                    <label for="exampleInputUraian" class="form-label">Harga</label>
                                    <input type="text" class="form-control" id="exampleInputUraian" name="harga">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputDaya" class="form-label">Jangka Penggunaan</label>
                                    <input type="text" class="form-control" id="exampleInputDaya" name="jangka_penggunaan">
                                </div>                                                               
                                <div class="mb-3">
                                    <label for="exampleInputNamaKaryawan" class="form-label">Penanggung Jawab</label>
                                    <input type="text" class="form-control" id="exampleInputNamaKaryawan" name="penanggung_jawab">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputUraian" class="form-label">Kondisi</label>
                                    <input type="text" class="form-control" id="exampleInputUraian" name="kondisi">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputNamaKaryawan" class="form-label">Gambar</label>
                                    <input type="file" class="form-control" id="exampleInputNamaKaryawan" name="gambar" >
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