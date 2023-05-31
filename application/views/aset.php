<div class="container-fluid">
    <!--  Row 1 -->
    <div class="row">
        <div class="card"> 
            <div class="card-header">
                Table Data Aset
            </div>
            <div class="card-body">
                <a href="<?= base_url(); ?>Aset/tambah" class="btn btn-primary">Tambah Data</a>

                <div class="col-xs-4 col-xs-offset-4">
        	<form action="<?= base_url(); ?>Aset/search" method="get">
			    <div class="input-group">
	                <input type="text" class="form-control" name="keyword" placeholder="Masukan Kata Kunci...">
	                <span class="input-group-btn">
	                    <button class="btn btn-default" type="submit">Cari</button>
	                </span>
	            </div>
        	</form>
        </div>

                <table class="table">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Kode Barang</th>
                            <th>Nama Barang</th>
                            <th>Merk / Type</th>
                            <th>Harga</th>
                            <th>Jangka Penggunaan</th>
                            <th>Tanggal Masuk</th>
                            <th>Penanggung Jawab</th>
                            <th>Kondisi</th>
                            <th>Gambar</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        foreach ($tbl_aset->result_array() as $a) :
                        ?>
                            <tr>
                                <td><?= $no++ ?></td>
                                <td><?= $a['kode_barang'] ?></td>
                                <td><?= $a['nama_barang'] ?></td>
                                <td><?= $a['merk'] ?></td>
                                <td>Rp. <?= $a['harga'] ?></td>
                                <td><?= $a['jangka_penggunaan'] ?></td>
                                <td><?= $a['tanggal_masuk'] ?></td>
                                <td><?= $a['penanggung_jawab'] ?></td> 
                                <td><?= $a['kondisi'] ?></td>
                               
                                <td><Img Style="Width: 200px" Src="<?= base_url();?>assets/images/upload/<?= $a['gambar'];?>"></td>
                                <td>
                                    <a href="<?php echo site_url('Aset/edit/' . $a['id']) ?>" class="btn btn-small"><i class="fas fa-edit"></i> Edit</a>
                                    <a onclick="deleteConfirm('Apa Jadi Di Hapus??')" href="<?= base_url('Aset/delete/' . $a['id']) ?>" class="btn btn-small text-danger"><i class="fas fa-trash"></i> Hapus</a>
                                </td>
                            </tr>
                        <?php
                        endforeach;
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
</div>
</div>