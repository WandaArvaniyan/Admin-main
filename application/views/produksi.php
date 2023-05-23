<div class="container-fluid">
    <!--  Row 1 -->
    <div class="row">
        <div class="card">
            <div class="card-header">
                Table Produksi
            </div>
            <div class="card-body">
                <a href="<?= base_url(); ?>Produksi/tambah" class="btn btn-primary">Tambah Data</a>
                <table class="table">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Tanggal</th>
                            <th>Daya Listrik</th>
                            <th>Nama Karyawan</th>
                            <th>Uraian Kegiatan</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        foreach ($produksi->result_array() as $p) :
                        ?>
                            <tr>
                                <td><?= $no++ ?></td>
                                <td><?= $p['tanggal'] ?></td>
                                <td><?= $p['daya_listrik'] ?></td>
                                <td><?= $p['nama_karyawan'] ?></td>
                                <td><?= $p['uraian_kegiatan'] ?></td>
                                <td>
                                    <a href="<?php echo site_url('Produksi/edit/' . $p['id']) ?>" class="btn btn-small"><i class="fas fa-edit"></i> Edit</a>
                                    <a onclick="deleteConfirm('Apa Jadi Di Hapus??')" href="<?= base_url('Produksi/delete/' . $p['id']) ?>" class="btn btn-small text-danger"><i class="fas fa-trash"></i> Hapus</a>
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