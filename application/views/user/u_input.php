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
                            <form action="<?= base_url(); ?>User/tambah_aksi" method="post">
                            <div class="mb-3">
                                    <label for="exampleInputName" class="form-label">Nama</label>
                                    <input type="text" class="form-control" id="exampleInputName" name="nama">
                                    <div id="emailHelp" class="form-text">We'll never share your name with anyone else.</div>
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail" class="form-label">Email Adrress</label>
                                    <input type="email" class="form-control" id="exampleInputEmail" aria-describedby="emailHelp" name="username">
                                    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputPassword" class="form-label">Password</label>
                                    <input type="password" class="form-control" id="exampleInputPassword" name="password">
                                    <div id="emailHelp" class="form-text">We'll never share your password with anyone else.</div>
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputAkses" class="form-label">Kode Akses</label>
                                    <input type="text" class="form-control" id="exampleInputAkses" name="kode_akses">
                                    <div id="emailHelp" class="form-text">We'll never share your access kode with anyone else.</div>
                                </div>
                                <button type="submit" class="btn btn-primary" value="Tambah">Submit</button>
                            </form>
                        </div>
                    </div>
                <!-- <table>
                    <tr>
                        <td>Nama</td>
                        <td><input type="text" name="nama"></td>
                    </tr>
                    <tr>
                        <td>Username</td>
                        <td><input type="text" name="username"></td>
                    </tr>
                    <tr>
                        <td>Password</td>
                        <td><input type="text" name="password"></td>
                    </tr>
                    <tr>
                        <td>Kode Akses</td>
                        <td><input type="text" name="kode_akses"></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><input type="submit" value="Tambah"></td>
                    </tr>
                </table> -->
                <!-- </form> -->
                </div>                
        </div>        
    </div>
</div>
</div>