<div class="container-fluid">
        <!--  Row 1 -->
        <div class="row">
            <div class="card">
                <div class="card-header">
                    Table Akses
                </div>
                <div class="card-body">
                    <a href="<?= base_url(); ?>Akses/tambah" class="btn btn-primary">Tambah Data</a>
                    <table class="table">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Kode Akses</th>
                                <th>Akses</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php 
                            $no = 1;
                            foreach($kode_akses->result_array() as $a):
                        ?>
                        <tr>
                            <td><?= $no++ ?></td>
                            <td><?= $a['kode_akses'] ?></td>
                            <td><?= $a['akses'] ?></td>
                            <td>
                                    <a href="<?php echo site_url('Akses/edit/' . $a['id']) ?>" class="btn btn-small"><i class="fas fa-edit"></i> Edit</a>
                                    <a onclick="deleteConfirm('Apa Jadi Di Hapus??')" href="<?= base_url('Akses/delete/' . $a['id']) ?>" class="btn btn-small text-danger"><i class="fas fa-trash"></i> Hapus</a>
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