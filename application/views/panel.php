<div class="container-fluid">
    <!--  Row 1 -->
    <div class="row">
        <div class="card">
            <div class="card-header">
                Table Panel
            </div>
            <div class="card-body">
                <a href="<?= base_url(); ?>Panel/tambah" class="btn btn-primary">Tambah Data</a>
                <table class="table">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Tanggal</th>
                            <th>Kode Barang</th>
                            <th>Konfigurasi</th>
                            <th>Star Delta</th>
                            <th>Direct Online</th>
                            <th>Kapasitas Beban</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        foreach ($sp_panel->result_array() as $p) :
                        ?>
                            <tr>
                                <td><?= $no++ ?></td>
                                <td><?= $p['tanggal'] ?></td>
                                <td><?= $p['kode_barang'] ?></td>
                                <td><?= $p['konfigurasi'] ?></td>
                                <td><?= $p['star_delta'] ?></td>
                                <td><?= $p['direct_online'] ?></td>
                                <td><?= $p['kapasitas_beban'] ?></td>
                                <td>
                                    <a href="<?php echo site_url('Panel/edit/' . $p['id']) ?>" class="btn btn-small"><i class="fas fa-edit"></i> Edit</a>
                                    <a onclick="deleteConfirm('Apa Jadi Di Hapus??')" href="<?= base_url('Panel/delete/' . $p['id']) ?>" class="btn btn-small text-danger"><i class="fas fa-trash"></i> Hapus</a>
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