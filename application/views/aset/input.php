<div class="container-fluid">
        <!--  Row 1 -->
        <div class="row">
            <div class="card">
                <div class="card-body">
                <!-- <form > -->
                <h5 class="card-title fw-semibold mb-4">Form Tambah Data</h5>
                    <div class="card">
                        <div class="card-body">
                            <form action="<?= base_url(); ?>Aset/tambah" method="post" enctype="multipart/form-data">
                                <div class="mb-3">
                                    <label for="kb" class="form-label">Kode Barang</label>
                                    <input type="text" class="form-control" id="kb" name="kode_barang">
                                </div>
                                <div class="mb-3">
                                    <label for="nb" class="form-label">Nama Barang</label>
                                    <input type="text" class="form-control" id="nb" name="nama_barang">
                                </div>                                
                                <div class="mb-3">
                                    <label for="merk" class="form-label">Merk / Type</label>
                                    <input type="text" class="form-control" id="merk" name="merk">
                                </div>                               
                                <div class="mb-3">
                                    <label for="harga" class="form-label">Harga</label>
                                    <input type="text" class="form-control" id="harga" name="harga">
                                </div>
                                <div class="mb-3">
                                    <label for="jp" class="form-label">Tanggal</label>
                                    <input type="date" class="form-control" id="jp" name="tanggal_masuk">
                                </div>                                                               
                                <div class="mb-3">
                                    <label for="pj" class="form-label">Penanggung Jawab</label>
                                    <input type="text" class="form-control" id="pj" name="penanggung_jawab">
                                </div>
                                <div class="mb-3">
                                    <label for="kondisi" class="form-label">Kondisi</label>
                                    <input type="text" class="form-control" id="kondisi" name="kondisi">
                                </div>
                                <div class="mb-3">
                                    <label for="gambar" class="form-label">Gambar</label>
                                    <input type="file" class="form-control" id="gambar" name="gambar" value="<?php echo set_value('gambar'); ?>" >
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