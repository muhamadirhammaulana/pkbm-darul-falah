            
            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <div class="container-fluid">
                        <div class="row mb-1">
                            <div class="col-sm-6">
                                <h1>Struktur</h1>
                            </div>
                            <div class="col-sm-6">
                                <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="<?=base_url('admin')?>">Home</a></li>
                                <li class="breadcrumb-item active">Struktur</li>
                                </ol>
                            </div>
                        </div>
                    </div><!-- /.container-fluid -->
                </section>

                    <!-- Main content -->
                <section class="content">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12 mb-3">
                                <div class="card card-light rounded-0">
                                    <div class="card-header rounded-0" style="background-color: #15BB59;">
                                        <strong class="text-white">Gambar Struktur</strong>
                                    </div>
                                    <div class="card-body">
                                        <div class="row justify-content-center">
                                            <div class="col-md-5">
                                                <img class="card-img-top img-fluid img-thumbnail mb-3" src="<?=base_url('assets/image/foto_struktur/'.$struktur->foto_struktur)?>" alt="">
                                                <div class="card-img-overlay">
                                                    <a class="btn btn-info btn-flat btn-sm" href="<?=base_url('assets/image/foto_struktur/'.$struktur->foto_struktur)?>" data-toggle="lightbox" data-gallery="gallery" data-max-width="700"><i class="fa fa-search-plus"></i></a>
                                                </div>
                                            </div>
                                            <div class="col-md-2 list-struktur">
                                                <button type="submit" class="btn btn-success btn-flat edit-struktur" style="background-color: #4BDE3E; border-color: #4BDE3E;"><i class="fa fa-edit"></i> Edit</button><br>
                                            </div>
                                            <div class="col-md-4 editor-struktur" hidden>
                                                <?php echo form_open_multipart('admin/foto_struktur'); ?>
                                                <label for="exampleInputFile">Ganti Foto <small class="text-muted">(format: jpg/jpeg/png, ukuran maks: 2 MB)</small></label>
                                                <div class="input-group">
                                                    <div class="custom-file">
                                                        <input type="file" class="custom-file-input" id="exampleInputFile" name="foto_struktur" accept=".jpg,.jpeg,.png" oninput="setCustomValidity('')" oninvalid="this.setCustomValidity('Masukkan File Foto')" required>
                                                        <label class="custom-file-label" for="exampleInputFile">Pilih file</label>
                                                    </div>
                                                </div>
                                                <div class="input-group">
                                                    <button type="submit" class="btn btn-primary btn-flat mt-2 mr-2 save-struktur"><i class="fa fa-save"></i> Simpan</button><br>
                                                    <a href="<?=base_url('admin/struktur')?>" class="btn btn-danger btn-flat mt-2 cancel-struktur"><i class="fa fa-times-circle"></i> Batal</a><br>
                                                </div>
                                                <?php echo form_close(); ?>
                                            </div>
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
