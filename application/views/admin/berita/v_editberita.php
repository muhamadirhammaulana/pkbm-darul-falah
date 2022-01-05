            
            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <div class="container-fluid">
                        <div class="row mb-1">
                            <div class="col-sm-6">
                                <h1>Edit Berita</h1>
                            </div>
                            <div class="col-sm-6">
                                <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="<?=base_url('admin')?>">Home</a></li>
                                <li class="breadcrumb-item"><a href="<?=base_url('admin/berita')?>">Berita</a></li>
                                <li class="breadcrumb-item active">Edit Berita</li>
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
                                        <a class="btn btn-secondary btn-flat text-light" href="<?=base_url('admin/berita')?>">
                                            <i class="fas fa-arrow-left">
                                            </i>
                                            Kembali
                                        </a>
                                    </div>
                                    <!-- /.card-header -->
                                    <!-- form start -->
                                    <?php
                                    echo form_open_multipart('admin/berita/edit-berita/'.$berita->id_berita);
                                    ?>
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <div class="form-group">
                                                            <?php
                                                                if ($berita->foto_berita != "") {
                                                                    $image = $berita->foto_berita;
                                                                } else {
                                                                    $image = "default.png";
                                                                }
                                                            ?>
                                                            <img class="img-fluid img-thumbnail" src="<?=base_url('assets/image/foto_berita/'.$image)?>" width="100%">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-8">
                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1">Judul Berita</label>
                                                        <input type="text" class="form-control" value="<?=$berita->judul_berita?>" name="judul_berita" id="judulberita" placeholder="Masukkan Judul Berita" oninput="setCustomValidity('')" oninvalid="this.setCustomValidity('Masukkan Judul Berita')" required>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="exampleInputFile">Ganti Foto Berita <small class="text-muted">(format: jpg/jpeg/png, ukuran maks: 2 MB)</small></label>
                                                        <div class="input-group">
                                                        <div class="custom-file">
                                                            <input type="file" class="custom-file-input" id="foto_berita" name="foto_berita" accept=".jpg,.jpeg,.png">
                                                            <label class="custom-file-label" for="exampleInputFile">Pilih file</label>
                                                        </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1">Isi Berita</label>
                                                        <textarea class="summernote" name="isi_berita" required><?=$berita->isi_berita?></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- /.card-body -->

                                        <div class="card-footer">
                                            <button type="submit" class="btn btn-primary btn-flat editberita">
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
