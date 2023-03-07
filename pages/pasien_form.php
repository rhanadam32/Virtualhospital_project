<!-- /.login-logo -->
<div class="container">
    <div class="card card-outline card-purple">
        <div class="card-header text-center">
            <a href="#" class="h1"><b>Form Diagnosa</b></a>
            <p class='h6'>isilah form keluhan dibawah ini </p>
        </div>
        <div class="card-body">


            <form action="submit_form.php" method="post" enctype="multipart/form-data">

                <div class="input-group mb-3">
                    <input type="text" name="id_user" style="display: none;" readonly value="<?php echo $profil['id_user']; ?>" class="form-control" placeholder="Nama" required>

                    <input type="text" name="nama" readonly value="<?php echo $profil['nama_lengkap']; ?>" class="form-control" placeholder="Nama" required>

                </div>
                <div class="input-group mb-3">
                    <input type="text" name="usia" class="form-control" placeholder="Usia" required>

                </div>
                <label for="exampleFormControlTextarea1" style="color : #495057;">Gender / Jenis Kelamin</label>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="gender" value="Pria" id="flexRadioDefault1"  checked>
                    <label class="form-check-label" for="flexRadioDefault1">
                        Pria
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="gender" value="Wanita" id="flexRadioDefault2">
                    <label class="form-check-label" for="flexRadioDefault2">
                        Wanita
                    </label>
                </div>
                <div class="input-group mb-3"></div>
                <div class="input-group mb-3">
                    <input type="text" name="pekerjaan" class="form-control" placeholder="Pekerjaan" required>

                </div>
                <div class="mb-0">
                    <label for="exampleFormControlTextarea1" style="color : #495057;">Tulis Riwayat penyakit anda disini (jika tidak mempunyai Riwayat Penyakit silahkan tulis "tidak ada")</label>
                    <textarea class="form-control form-control-solid" name="riwayat_penyakit" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>
                <div class="mb-0">
                    <label for="exampleFormControlTextarea1" style="color : #495057;">Tulis keluhan sakit yang anda alami disini</label>
                    <textarea class="form-control" name="keluhan_sakit" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>
                <div class="input-group mb-3"></div>
                <div class="mb-0">
                    <label for="exampleFormControlTextarea1" style="color : #495057;">upload foto disini</label>
                    <input type="file" name="upload_foto" class="form-control" placeholder="upload foto disini">

                </div>
                <div class="input-group mb-3"></div>
                <div class="mb-0">
                    <label for="exampleFormControlTextarea1" style="color : #495057;">Alamat</label>
                    <textarea class="form-control form-control-solid" name="alamat" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>
                <div class="input-group mb-3"></div>
                <div class="input-group mb-3">
                    <input type="text" name="contact" class="form-control" placeholder="nomor HP / WA" required>

                </div>
                <!-- /.col -->
                <div class="d-grid gap-2 d-md-block">
                    <button type="submit" name="kirim" class="btn bg-purple" style="margin : 5px">Kirim</button>
                    <button type="reset" class="btn bg-blue " style="margin : 5px">Reset</button>

                </div>

                <!-- /.col -->
        </div>
        </form>


    </div>
    <!-- /.card-body -->
</div>