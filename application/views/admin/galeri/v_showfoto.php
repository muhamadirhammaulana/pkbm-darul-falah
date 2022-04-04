            
            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-1">
                        <div class="col-sm-6">
                            <h1>Foto Galeri : <?=$galeri->nama_galeri?></h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="<?=base_url('admin')?>">Home</a></li>
                            <li class="breadcrumb-item"><a href="<?=base_url('admin/galeri')?>">Galeri</a></li>
                            <li class="breadcrumb-item active">Foto Galeri</li>
                            </ol>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
                </section>

                <!-- Main content -->
                <section class="content">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <!-- general form elements -->
                                <div class="card card-light rounded-0">
                                    <div class="card-header">
                                        <a class="btn btn-secondary btn-flat text-light" href="<?=base_url('admin/galeri')?>">
                                            <i class="fas fa-arrow-left"></i>
                                            Kembali
                                        </a>
                                    </div>
                                    <!-- /.card-header -->
                                    <!-- form start -->
                                    
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <?php
                                                    echo form_open_multipart('admin/galeri/foto-galeri/tambah-foto/'.$galeri->id_galeri);
                                                ?>
                                                <div class="card card-light rounded-0">
                                                    <div class="card-body">
                                                        <div class="form-group">
                                                            <label for="exampleInputFile">Tambah Foto <small class="text-muted">(format: jpg/jpeg/png, ukuran maks: 2 MB)</small></label>
                                                            <div class="input-group">
                                                                <div class="custom-file">
                                                                    <input type="file" class="custom-file-input" id="exampleInputFile" name="foto" accept=".jpg,.jpeg,.png" oninput="setCustomValidity('')" oninvalid="this.setCustomValidity('Masukkan File Foto')" required>
                                                                    <label class="custom-file-label" for="exampleInputFile">Pilih file</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <button type="submit" class="btn btn-primary btn-flat">
                                                            <i class="fas fa-plus-square"></i>
                                                            Tambah
                                                        </button>
                                                    </div>
                                                </div>
                                                <?php
                                                    echo form_close();
                                                ?>
                                            </div>

                                            <div class="col-md-8 mb-3">
                                                <div class="card card-light h-100 rounded-0">
                                                    <div class="card-header rounded-0" style="background-color: #15BB59;">
                                                        <strong class="text-white">Daftar Foto</strong>
                                                        <span class="badge badge-light float-right"><?=$jml_foto->jml_foto?> Foto</span>
                                                    </div>
                                                    <div class="card-body">
                                                        <?php if ($jml_foto->jml_foto == 0) { ?>
                                                        <div class="text-center"><p>Tidak Ada foto</p></div>
                                                        <?php } else { ?>
                                                        <div class="row">
                                                            <?php foreach ($foto as $key => $value) { ?>
                                                            
                                                            <div class="col-sm-4 mb-3">
                                                                <div class="card card-light h-100 justify-content-center rounded-0">
                                                                    <img class="card-img-top img-fluid img-thumbnail" src="<?=base_url('assets/image/foto_galeri/'.$value->foto)?>" alt="">
                                                                    <div class="card-img-overlay">
                                                                        <a class="btn btn-info btn-flat btn-sm" href="<?=base_url('assets/image/foto_galeri/'.$value->foto)?>" data-toggle="lightbox" data-gallery="gallery" data-max-width="700"><i class="fa fa-search-plus"></i></a>
                                                                        <button type="button" class="btn btn-danger btn-flat btn-sm" data-toggle="modal" data-target="#delete<?=$value->id_foto?>">
                                                                            <i class="fas fa-trash-alt"></i>
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <?php } ?>
                                                        </div>
                                                        <?php } ?>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <!-- /.card-body -->
                                </div>
                                <!-- /.card -->
                            </div>
                        </div>
                    </div><!-- /.container-fluid -->
                </section>
                <!-- /.content -->
            </div>
            <!-- /.content-wrapper -->

            <!-- Modal Delete Foto -->
            <?php foreach ($foto as $key => $value) { ?>
            <div class="modal fade" id="delete<?=$value->id_foto?>">
                <div class="modal-dialog modal-sm">
                    <div class="modal-content">
                        <div class="modal-body text-center">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            <?php echo form_open('admin/deletefoto/'.$value->id_galeri.'/'.$value->id_foto); ?>
                                <i class="fas fa-exclamation-circle fa-5x text-warning"></i>
                                <br><br>
                                <p>Hapus Foto?</p>
                                <button type="submit" class="btn btn-danger btn-flat btn-sm">Hapus</button>
                                <button type="button" class="btn btn-default btn-flat btn-sm" data-dismiss="modal">Batal</button>
                            <?php echo form_close(); ?>
                        </div>
                    </div>
                <!-- /.modal-content -->
                </div>
                <!-- /.modal-dialog -->
            </div>
            <!-- /.modal -->
            <?php } ?>
