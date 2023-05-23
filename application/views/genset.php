<div class="container-fluid">
    <!--  Row 1 -->
    <div class="row">
        <div class="card">
            <div class="card-header">
                Table Genset
            </div>
            <div class="card-body">
                <a href="<?= base_url(); ?>Genset/tambah" class="btn btn-primary">Tambah Data</a>
                <table class="table">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Tanggal</th>
                            <th>Kode Barang</th>
                            <th>Merk Generator</th>
                            <th>Merk Mesin</th>
                            <th>Kapasitas Generator</th>
                            <th>Kondisi</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        foreach ($sp_genset->result_array() as $p) :
                        ?>
                            <tr>
                                <td><?= $no++ ?></td>
                                <td><?= $p['tanggal'] ?></td>
                                <td><?= $p['kode_barang'] ?></td>
                                <td><?= $p['merk_generator'] ?></td>
                                <td><?= $p['merk_mesin'] ?></td>
                                <td><?= $p['kapasitas_generator'] ?></td>
                                <td><?= $p['kondisi'] ?></td>
                                <td>
                                    <a href="<?php echo site_url('Genset/edit/' . $p['id']) ?>" class="btn btn-small"><i class="fas fa-edit"></i> Edit</a>
                                    <a onclick="deleteConfirm('Apa Jadi Di Hapus??')" href="<?= base_url('Genset/delete/' . $p['id']) ?>" class="btn btn-small text-danger"><i class="fas fa-trash"></i> Hapus</a>
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