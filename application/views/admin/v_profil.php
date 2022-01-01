            
            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <div class="container-fluid">
                        <div class="row mb-1">
                            <div class="col-sm-6">
                                <h1>Profil PKBM</h1>
                            </div>
                            <div class="col-sm-6">
                                <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="<?=base_url('admin')?>">Home</a></li>
                                <li class="breadcrumb-item active">Akreditasi</li>
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
                                <div class="card card-light h-100 rounded-0">
                                    <div class="card-header rounded-0" style="background-color: #15BB59;">
                                        <strong class="text-white">Logo</strong>
                                    </div>
                                    <div class="card-body">
                                        <div class="row justify-content-center">
                                            <img class="card-img-top img-fluid img-thumbnail w-75" src="<?=base_url('assets/image/logo/'.$profil->logo)?>" alt="">
                                        </div>
                                    </div>
                                    <div class="card-footer">
                                        <div class="text-center">
                                            <button type="button" class="btn btn-success btn-flat" data-toggle="modal" data-target="#update<?=$profil->id_profil?>" style="background-color: #4BDE3E; border-color: #4BDE3E;">
                                                <i class="fas fa-edit"></i>
                                                Ganti Logo
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-9 mb-3">
                                <div class="card card-light h-100 rounded-0">
                                    <div class="card-header rounded-0" style="background-color: #15BB59;">
                                        <strong class="text-white">Profil</strong>
                                    </div>
                                    
                                    <div class="card-body">
                                    <?php echo form_open_multipart('admin/profil'); ?>
                                        <div class="row justify-content-center">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Nama</label>
                                                    <input type="text" class="form-control rounded-0 nama-lembaga" value="<?=$profil->nama?>" name="nama" id="namalembaga" placeholder="Masukkan Nama" oninput="setCustomValidity('')" oninvalid="this.setCustomValidity('Masukkan Nama')" readonly required>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Nomor Telepon</label>
                                                    <input type="text" class="form-control rounded-0 no-telp-lembaga" value="<?=$profil->no_telp?>" name="no_telp" id="notelplembaga" placeholder="Masukkan Nomor Telepon" oninput="setCustomValidity('')" oninvalid="this.setCustomValidity('Masukkan Nomor Telepon')" readonly required>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Email</label>
                                                    <input type="text" class="form-control rounded-0 email-lembaga" value="<?=$profil->email?>" name="email" id="emaillembaga" placeholder="Masukkan Alamat Email" oninput="setCustomValidity('')" oninvalid="this.setCustomValidity('Masukkan Email')" readonly required>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer">
                                        <button type="button" class="btn btn-success btn-flat edit-profil" style="background-color: #4BDE3E; border-color: #4BDE3E;"><i class="fa fa-edit"></i> Edit Profil</button>
                                        <button type="submit" class="btn btn-primary btn-flat save-profil" hidden><i class="fa fa-save"></i> Simpan</button>
                                        <button type="button" class="btn btn-danger btn-flat cancel-profil" onclick="location.reload()" hidden><i class="fa fa-times-circle"></i> Batal</button>
                                    </div>
                                    <?php echo form_close(); ?>
                                </div>
                            </div>
                            <div class="col-md-12 mb-3">
                                <div class="card card-light h-100 rounded-0">
                                    <div class="card-header rounded-0" style="background-color: #15BB59;">
                                        <strong class="text-white">Media Sosial</strong>
                                    </div>
                                    <div class="card-body">
                                        <div class="row justify-content-center">
                                            <?php foreach ($medsos as $key => $value) { ?>
                                            <div class="col-md-4 text-center">
                                                <div class="card rounded-0">
                                                    <div class="card-body bg-light">
                                                        <div class="form-group">
                                                            <label for=""><?=$value->jenis_medsos?></label>
                                                            <div class="input-group">
                                                                <span class="input-group-append">
                                                                    <span class="input-group-text"><i class="fa fa-user-alt"></i></span>
                                                                </span>
                                                                <input type="text" name="password" class="form-control rounded-0" id="" value="<?=$value->nama_medsos?>" placeholder="Masukkan Nama <?=$value->jenis_medsos?>" readonly>
                                                            </div>
                                                            <div class="input-group">
                                                                <span class="input-group-append">
                                                                    <span class="input-group-text"><i class="fa fa-link"></i></span>
                                                                </span>
                                                                <input type="text" name="password" class="form-control rounded-0" id="" value="<?=$value->link_medsos?>" placeholder="Masukkan Link <?=$value->jenis_medsos?>" readonly>
                                                            </div>
                                                            
                                                        </div>
                                                        <div class="text-center">
                                                        <button type="button" class="btn btn-success btn-flat" data-toggle="modal" data-target="#edit<?=$value->id_medsos?>" style="background-color: #4BDE3E; border-color: #4BDE3E;">
                                                            <i class="fas fa-edit"></i>
                                                        </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <?php } ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- /.container-fluid -->
                </section>
                <!-- /.content -->
            </div>
            <!-- /.content-wrapper -->

            <!-- Modal Upload Foto -->
            <div class="modal fade uploadPhoto" id="update<?=$profil->id_profil?>">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content rounded-0">
                        <div class="modal-body">
                            <?php echo form_open_multipart('admin/logo') ?>
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label for="exampleInputFile">Upload Foto</label>
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="exampleInputFile" name="logo" accept="image/*" oninput="setCustomValidity('')" oninvalid="this.setCustomValidity('Masukkan File Foto')" required>
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
                            <button type="button" class="btn btn-danger btn-flat btn-sm" data-dismiss="modal" onclick="location.reload()">Batal</button>
                            <?php echo form_close(); ?>
                        </div>
                    </div>
                <!-- /.modal-content -->
                </div>
                <!-- /.modal-dialog -->
            </div>
            <!-- /.modal -->

            <!-- Modal Media Sosial -->
            <?php foreach ($medsos as $key => $value) { ?>
            <div class="modal fade uploadPhoto" id="edit<?=$value->id_medsos?>">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content rounded-0">
                        <div class="modal-body">
                            <?php echo form_open_multipart('admin/medsos/'.$value->id_medsos) ?>
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group text-center">
                                        <label for="">Edit <?=$value->jenis_medsos?></label>
                                        <div class="input-group">
                                            <span class="input-group-append">
                                                <span class="input-group-text"><i class="fa fa-user-alt"></i></span>
                                            </span>
                                            <input type="text" name="nama_medsos" class="form-control" id="" value="<?=$value->nama_medsos?>" placeholder="Masukkan Nama <?=$value->jenis_medsos?>">
                                        </div>
                                        <div class="input-group">
                                            <span class="input-group-append">
                                                <span class="input-group-text"><i class="fa fa-link"></i></span>
                                            </span>
                                            <input type="text" name="link_medsos" class="form-control" id="" value="<?=$value->link_medsos?>" placeholder="Masukkan Link <?=$value->jenis_medsos?>">
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary btn-flat btn-sm">
                                <i class="fas fa-save"></i>
                                Simpan
                            </button>
                            <button type="button" class="btn btn-danger btn-flat btn-sm" data-dismiss="modal" onclick="location.reload()">Batal</button>
                            <?php echo form_close(); ?>
                        </div>
                    </div>
                <!-- /.modal-content -->
                </div>
                <!-- /.modal-dialog -->
            </div>
            <?php } ?>
            <!-- /.modal -->
