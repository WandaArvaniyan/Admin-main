<div class="container-fluid">
    <!--  Row 1 -->
    <div class="row">
        <div class="card">
            <div class="card-header">
                Table Perawatan Aset
            </div>
            <div class="card-body">
                <a href="<?= base_url(); ?>Perawatan/tambah" class="btn btn-primary">Tambah Data</a>
                <table class="table">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Tanggal</th>
                            <th>Kode Barang</th>
                            <th>Uraian Kegiatan</th>
                            <th>Gambar</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        foreach ($perawatan_aset->result_array() as $p) :
                        ?>
                            <tr>
                                <td><?= $no++ ?></td>
                                <td><?= $p['tanggal'] ?></td>
                                <td><?= $p['kode_barang'] ?></td>
                                <td><?= $p['uraian'] ?></td>
                                <td><img scr="<?php echo base_url('./assets/images/upload/prawatan'. $p['gambar']);?>"> </td>
                                <td>
                                    <a href="<?php echo site_url('Perawatan/edit/' . $p['id']) ?>" class="btn btn-small"><i class="fas fa-edit"></i> Edit</a>
                                    <a onclick="deleteConfirm('Apa Jadi Di Hapus??')" href="<?= base_url('Perawatan/delete/' . $p['id']) ?>" class="btn btn-small text-danger"><i class="fas fa-trash"></i> Hapus</a>
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