            
            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <div class="container-fluid">
                        <div class="row mb-1">
                            <div class="col-sm-6">
                                <h1>Edit Admin</h1>
                            </div>
                            <div class="col-sm-6">
                                <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="<?=base_url('admin')?>">Home</a></li>
                                <li class="breadcrumb-item"><a href="<?=base_url('admin/data-admin')?>">Data Admin</a></li>
                                <li class="breadcrumb-item active">Edit Admin</li>
                                </ol>
                            </div>
                        </div>
                    </div><!-- /.container-fluid -->
                    </section>

                    <!-- Main content -->
                    <section class="content">
                    <div class="container-fluid">
                        <div class="row">
                        <!-- left column -->
                            <div class="col-md-12">
                                <!-- general form elements -->
                                <div class="card card-light rounded-0">
                                    <div class="card-header">
                                        <a class="btn btn-secondary btn-flat text-light" href="<?=base_url('admin/data-admin')?>">
                                            <i class="fas fa-arrow-left">
                                            </i>
                                            Kembali
                                        </a>
                                    </div>
                                    <!-- /.card-header -->
                                    <!-- form start -->
                                    <?php
                                        echo form_open_multipart('admin/data-admin/edit-admin/'.$admin->id_user);
                                    ?>
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-md-2">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <?php
                                                                    if ($admin->foto_user != "") {
                                                                        $image = $admin->foto_user;
                                                                    } else {
                                                                        $image = "default.png";
                                                                    }
                                                                ?>
                                                                <img class="img-fluid img-thumbnail" src="<?=base_url('assets/image/foto_user/'.$image)?>" width="100%">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-5">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <label for="exampleInputEmail1">Nama</label>
                                                                <input type="text" class="form-control" name="nama_user" id="namauser" value="<?=$admin->nama_user?>" placeholder="Masukkan Nama" oninput="setCustomValidity('')" oninvalid="this.setCustomValidity('Masukkan Nama Pengguna')" required>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <label for="exampleInputFile">Foto</label>
                                                                <div class="input-group">
                                                                    <div class="custom-file">
                                                                        <input type="file" class="custom-file-input" name="foto_user" id="fotouser">
                                                                        <label class="custom-file-label" for="exampleInputFile">Pilih file</label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-5">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <label for="exampleInputEmail1">Username</label>
                                                                <input type="text" class="form-control" name="username" id="username" value="<?=$admin->username?>" placeholder="Masukkan Username" oninput="setCustomValidity('')" oninvalid="this.setCustomValidity('Masukkan Username')" required>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <label for="exampleInputEmail1">Ganti Password</label>
                                                                <input type="password" class="form-control" name="password" id="password" placeholder="Masukkan Password Baru" oninput="setCustomValidity('')" oninvalid="this.setCustomValidity('Masukkan Password Baru')">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <label for="exampleInputEmail1">Konfirmasi Password</label>
                                                                <input type="password" class="form-control" name="konfirmasi_password" id="konfirmasipassword" placeholder="Masukkan Konfirmasi Password" oninput="setCustomValidity('')" oninvalid="this.setCustomValidity('Masukkan Konfirmasi Password')">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- /.card-body -->

                                        <div class="card-footer">
                                            <button type="submit" class="btn btn-primary btn-flat editadmin">
                                                <i class="fa fa-save"></i>
                                                Simpan
                                            </button>
                                        </div>
                                    <?php
                                        echo form_close();
                                    ?>
                                </div>
                                <!-- /.card -->

                                

                            </div>
                            <!--/.col (left) -->
                        
                        </div>
                        <!-- /.row -->
                    </div><!-- /.container-fluid -->
                </section>
                <!-- /.content -->
            </div>
            <!-- /.content-wrapper -->
