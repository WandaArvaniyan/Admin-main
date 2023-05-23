<div class="container-fluid">
    <!--  Row 1 -->
    <div class="row">
        <div class="card">
            <div class="card-header">
                Table Pompa Dosing
            </div>
            <div class="card-body">
                <a href="<?= base_url(); ?>Dosing/tambah" class="btn btn-primary">Tambah Data</a>
                <table class="table">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Tanggal</th>
                            <th>Kode Barang</th>
                            <th>Hat Pompa Air</th>
                            <th>Debit Pompa</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        foreach ($sp_pompa_dosing->result_array() as $p) :
                        ?>
                            <tr>
                                <td><?= $no++ ?></td>
                                <td><?= $p['tanggal'] ?></td>
                                <td><?= $p['kode_barang'] ?></td>
                                <td><?= $p['hat_pompa_air'] ?></td>
                                <td><?= $p['debit_pompa'] ?></td>
                                <td>
                                    <a href="<?php echo site_url('Pompa/edit/' . $p['id']) ?>" class="btn btn-small"><i class="fas fa-edit"></i> Edit</a>
                                    <a onclick="deleteConfirm('Apa Jadi Di Hapus??')" href="<?= base_url('Pompa/delete/' . $p['id']) ?>" class="btn btn-small text-danger"><i class="fas fa-trash"></i> Hapus</a>
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