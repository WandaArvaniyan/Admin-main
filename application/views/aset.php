<div class="container-fluid">
    <!--  Row 1 -->
    <div class="row">
        <div class="card">
            <div class="card-header">
                Table Data Aset
            </div>
            <div class="card-body">
                <a href="<?= base_url(); ?>Aset/tambah" class="btn btn-primary">Tambah Data</a>
                <table class="table">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Kode Barang</th>
                            <th>Nama Barang</th>
                            <th>Jenis Aset</th>
                            <th>Merk / Type</th>
                            <th>Jumlah</th>
                            <th>Harga</th>
                            <th>Status</th>
                            <th>Tanggal Masuk</th>
                            <th>Lokasi Pemasangan</th>
                            <th>Penanggung Jawab</th>
                            <th>Kondisi</th>
                            <th>Jadwal Penyusutan</th>
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
                                <td><?= $a['jenis_aset'] ?></td>
                                <td><?= $a['merk'] ?></td>
                                <td><?= $a['jumlah'] ?></td>
                                <td><?= $a['harga'] ?></td>
                                <td><?= $a['status'] ?></td>
                                <td><?= $a['tanggal_masuk'] ?></td>
                                <td><?= $a['lokasi_pemasangan'] ?></td>
                                <td><?= $a['penanggung_jawab'] ?></td>
                                <td><?= $a['kondisi'] ?></td>
                                <td><?= $a['jadwal_penyusutan'] ?></td>
                                <td><?= $a['gambar'] ?></td>
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