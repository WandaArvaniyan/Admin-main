<?php 
//$this->load->view("template/head");
?> 
<div class="container-fluid">
        <!--  Row 1 -->
        <div class="row">
            <div class="card">
                <div class="card-body">
                <!-- <form > -->
                <h5 class="card-title fw-semibold mb-4">Form Tambah Data</h5>
                    <div class="card">
                        <div class="card-body">
                            <form action="<?= base_url(); ?>Akses/tambah_aksi" method="post">
                            <div class="mb-3">
                                    <label for="exampleInputKodeAkses" class="form-label">Kode Akses</label>
                                    <input type="text" class="form-control" id="exampleInputKodeAkses" name="kode_akses">
                                    <!-- <div id="emailHelp" class="form-text">We'll never share your name with anyone else.</div> -->
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail" class="form-label">Akses</label>
                                    <input type="text" class="form-control" id="exampleInputAkses" name="akses">
                                    <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
                                </div>
                                <button type="submit" class="btn btn-primary" value="Tambah">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>                
        </div>        
    </div>
</div>
</div>