<div class="container-fluid">
    <!--  Row 1 -->
    <div class="row">
        <div class="card">
            <div class="card-header">
                Table Mutasi Aset
            </div>
            <div class="card-body">
                <a href="<?= base_url(); ?>Mutasi/tambah" class="btn btn-primary">Tambah Data</a>
                <table class="table">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Tanggal</th>
                            <th>Lokasi Awal</th>
                            <th>Lokasi Akhir</th>
                            <th>Kode Barang</th>
                            <th>Spesifikasi Barang</th>
                            <th>Nama Petugas</th>
                            <th>Nama Kasubag</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        foreach ($mutasi_aset->result_array() as $m) :
                        ?>
                            <tr>
                                <td><?= $no++ ?></td>
                                <td><?= $m['tanggal'] ?></td>
                                <td><?= $m['lokasi_awal'] ?></td>
                                <td><?= $m['lokasi_akhir'] ?></td>
                                <td><?= $m['kode_barang'] ?></td>
                                <td><?= $m['spesifikasi_barang'] ?></td>
                                <td><?= $m['nama_petugas'] ?></td>
                                <td><?= $m['nama_kasubag'] ?></td>
                                <td>
                                    <a href="<?php echo site_url('Mutasi/edit/' . $m['id']) ?>" class="btn btn-small"><i class="fas fa-edit"></i> Edit</a>
                                    <a onclick="deleteConfirm('Apa Jadi Di Hapus??')" href="<?= base_url('Mutasi/delete/' . $m['id']) ?>" class="btn btn-small text-danger"><i class="fas fa-trash"></i> Hapus</a>
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