
            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <div class="container-fluid">
                        <div class="row mb-1">
                            <div class="col-sm-6">
                                <h1>Profil Pengguna</h1>
                            </div>
                            <div class="col-sm-6">
                                <ol class="breadcrumb float-sm-right">
                                    <li class="breadcrumb-item"><a href="<?=base_url('admin')?>">Home</a></li>
                                    <li class="breadcrumb-item active">Profil Pengguna</li>
                                </ol>
                            </div>
                        </div>
                    </div><!-- /.container-fluid -->
                </section>

                <!-- Main content -->
                <section class="content">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-3 mb-3">
                                <!-- Profile Image -->
                                <div class="card card-light h-100 rounded-0">
                                    <div class="card-header rounded-0" style="background-color: #15BB59;">
                                        <strong class="text-white">Foto Profil</strong>
                                    </div>
                                    <div class="card-body box-profile">
                                        <div class="text-center">
                                        <?php
                                            if ($user->foto_user != "") {
                                                $image = $user->foto_user;
                                            } else {
                                                $image = "default.png";
                                            }
                                        ?>
                                            <img class="img-fluid img-thumbnail w-75"
                                                src="<?=base_url('assets/image/foto_user/'.$image)?>"
                                                alt="User profile picture">
                                        </div>  
                                    </div>
                                    <!-- /.card-body -->
                                    <div class="card-footer">
                                        <div class="text-center">
                                            <button type="button" class="btn btn-success btn-flat" data-toggle="modal" data-target="#update<?=$this->session->userdata('id_user')?>" style="background-color: #4BDE3E; border-color: #4BDE3E;">
                                                <i class="fas fa-edit"></i>
                                                Ganti Foto
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.card -->
                            </div>

                            <!-- /.col -->
                            <div class="col-md-9 mb-3">
                                <div class="card card-light h-100 rounded-0">
                                    <div class="card-header rounded-0 p-0" style="background-color: #15BB59;">
                                        <button class="btn btn-success btn-lg rounded-0 kelola-akun"><h5 class=""><small><strong>Akun</strong></small></h5></button>
                                        <button class="btn btn-success btn-lg rounded-0 ganti-password"><h5 class=""><small><strong>Ganti Password</strong></small></h5></button>
                                    </div>
                                    <div class="card-body show-kelola-akun">
                                        <?php echo form_open_multipart('admin/update_user/'.$this->session->userdata('id_user')); ?>
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <div class="form-group">
                                                        <label for="inputName" class="col-form-label">Nama</label>
                                                        <div class="">
                                                            <input type="text" name="nama_user" class="form-control rounded-0 inputName" id="inputName" value="<?=$user->nama_user?>" placeholder="Nama" readonly>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-12">
                                                    <div class="form-group">
                                                        <label for="inputEmail" class="col-form-label">Username</label>
                                                        <div class="">
                                                            <input type="text" name="username" class="form-control rounded-0 inputUsername" id="inputUsername" value="<?=$user->username?>" placeholder="Username" readonly>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                    </div><!-- /.card-body -->
                                    <div class="card-footer show-kelola-akun">
                                        <button type="button" class="btn btn-success btn-flat btnChange" style="background-color: #4BDE3E; border-color: #4BDE3E;">
                                            <i class="fa fa-edit"></i>
                                            Ubah
                                        </button>
                                        <button type="submit" class="btn btn-primary btn-flat btnSave" hidden>
                                            <i class="fa fa-save"></i>
                                            Simpan
                                        </button>
                                        <a href="<?=base_url('admin/profil-pengguna/'.$this->session->userdata('id_user'))?>" class="btn btn-danger btn-flat btnCancel" hidden>
                                            <i class="fa fa-times-circle"></i>
                                            Batal
                                        </a>
                                    </div>
                                    <?php echo form_close(); ?>

                                    <div class="card-body show-ganti-password" hidden>
                                        <?php echo form_open_multipart('admin/change_password/'.$this->session->userdata('id_user')); ?>
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="form-group">
                                                    <label for="inputName2" class="col-form-label">Password Baru</label>
                                                    <div class="input-group">
                                                        <input type="password" name="password_baru" class="form-control rounded-0 inputPassword" id="inputPassword" value="" placeholder="Masukkan Password Baru">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-12">
                                                <div class="form-group">
                                                    <label for="inputName2" class="col-form-label">Konfirmasi Password Baru</label>
                                                    <div class="input-group">
                                                        <input type="password" name="konfirmasi_password_baru" class="form-control rounded-0 inputPassword" id="inputPassword" value="" placeholder="Konfirmasi Password Baru">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- /.card-body -->
                                    <div class="card-footer show-ganti-password" hidden>
                                        <button type="submit" class="btn btn-primary btn-flat">
                                            <i class="fa fa-save"></i>
                                            Simpan
                                        </button>
                                    </div>
                                    <?php echo form_close(); ?>
                                </div>
                                <!-- /.card -->
                            </div>
                            <!-- /.col -->
                        </div>
                        <!-- /.row -->
                    </div><!-- /.container-fluid -->
                </section>
                <!-- /.content -->
            </div>
            <!-- /.content-wrapper -->

            <!-- Modal Upload Foto -->
            <div class="modal fade uploadPhoto" id="update<?=$this->session->userdata('id_user')?>">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content rounded-0">
                        <div class="modal-body">
                            <?php echo form_open_multipart('admin/profil-pengguna/foto-profil/'.$this->session->userdata('id_user')) ?>
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label for="exampleInputFile">Upload Foto Profil <small class="text-muted">(format: jpg/jpeg/png, ukuran maks: 2MB)</small></label>
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="exampleInputFile" name="foto_user" accept=".jpg,.jpeg,.png" oninput="setCustomValidity('')" oninvalid="this.setCustomValidity('Masukkan File Foto')" required>
                                                <label class="custom-file-label" for="exampleInputFile">Pilih file</label><br>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                                    <button type="submit" class="btn btn-primary btn-flat btn-sm">
                                        <i class="fas fa-save"></i>
                                        Simpan
                                    </button>
                                    <a href="<?=base_url('admin/profil-pengguna/'.$this->session->userdata('id_user'))?>" class="btn btn-danger btn-flat btn-sm">Batal</a>
                            <?php echo form_close(); ?>
                        </div>
                    </div>
                <!-- /.modal-content -->
                </div>
                <!-- /.modal-dialog -->
            </div>
            <!-- /.modal -->
