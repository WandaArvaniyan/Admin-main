<div class="container-fluid">
    <!--  Row 1 -->
    <div class="row">
        <div class="card">
            <div class="card-header">
                Table Motor Pompa
            </div>
            <div class="card-body">
                <a href="<?= base_url(); ?>MotorPompa/tambah" class="btn btn-primary">Tambah Data</a>
                <table class="table">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Tanggal</th>
                            <th>Kode Barang</th>
                            <th>Daya Listrik</th>
                            <th>Arus Maksimal</th>
                            <th>COS</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        foreach ($sp_motor_pompa->result_array() as $p) :
                        ?>
                            <tr>
                                <td><?= $no++ ?></td>
                                <td><?= $p['tanggal'] ?></td>
                                <td><?= $p['kode_barang'] ?></td>
                                <td><?= $p['daya_listrik'] ?></td>
                                <td><?= $p['arus_maks'] ?></td>
                                <td><?= $p['cos'] ?></td>
                                <td>
                                    <a href="<?php echo site_url('MotorPompa/edit/' . $p['id']) ?>" class="btn btn-small"><i class="fas fa-edit"></i> Edit</a>
                                    <a onclick="deleteConfirm('Apa Jadi Di Hapus??')" href="<?= base_url('MotorPompa/delete/' . $p['id']) ?>" class="btn btn-small text-danger"><i class="fas fa-trash"></i> Hapus</a>
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