            
            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <div class="container-fluid">
                        <div class="row mb-1">
                            <div class="col-sm-6">
                                <h1>Legalitas</h1>
                            </div>
                            <div class="col-sm-6">
                                <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="<?=base_url('admin')?>">Home</a></li>
                                <li class="breadcrumb-item active">Legalitas</li>
                                </ol>
                            </div>
                        </div>
                    </div><!-- /.container-fluid -->
                </section>

                <!-- Main content -->
                <section class="content">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <div class="card card-light h-100 rounded-0">
                                    <div class="card-header rounded-0" style="background-color: #15BB59;">
                                        <strong class="text-white">Foto 1</strong>
                                    </div>
                                    <div class="card-body">
                                        <div class="row justify-content-center">
                                            <div class="col-md-6">
                                                <img class="card-img-top img-fluid img-thumbnail mb-3" src="<?=base_url('assets/image/foto_legalitas/'.$legalitas->foto1_legalitas)?>" alt="">
                                                <div class="card-img-overlay">
                                                    <a class="btn btn-primary btn-flat btn-sm" href="<?=base_url('assets/image/foto_legalitas/'.$legalitas->foto1_legalitas)?>" data-toggle="lightbox" data-gallery="gallery" data-max-width="700"><i class="fa fa-search-plus"></i></a>
                                                </div>
                                            </div>
                                            <div class="col-md-2 list-legalitas1">
                                                <button type="submit" class="btn btn-success btn-flat edit-legalitas1" style="background-color: #4BDE3E; border-color: #4BDE3E;"><i class="fa fa-edit"></i> Edit</button><br>
                                            </div>
                                            <div class="col-md-6 editor-legalitas1" hidden>
                                                <?php echo form_open_multipart('admin/foto1_legalitas'); ?>
                                                <label for="exampleInputFile">Ganti Foto<br><small class="text-muted">(format: jpg/jpeg/png, ukuran maks: 2 MB)</small></label>
                                                <div class="input-group">
                                                    <div class="custom-file">
                                                        <input type="file" class="custom-file-input" id="exampleInputFile" name="foto1_legalitas" accept=".jpg,.jpeg,.png" oninput="setCustomValidity('')" oninvalid="this.setCustomValidity('Masukkan File Foto')" required>
                                                        <label class="custom-file-label" for="exampleInputFile">Pilih file</label>
                                                    </div>
                                                </div>
                                                <button type="submit" class="btn btn-primary btn-flat mt-2 mr-2 save-legalitas1"><i class="fa fa-save"></i> Simpan</button>
                                                <a href="<?=base_url('admin/legalitas')?>" class="btn btn-danger btn-flat mt-2 cancel-legalitas1"><i class="fa fa-times-circle"></i> Batal</a>
                                                <?php echo form_close(); ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <div class="card card-light h-100 rounded-0">
                                    <div class="card-header rounded-0" style="background-color: #15BB59;">
                                        <strong class="text-white">Foto 2</strong>
                                    </div>
                                    <div class="card-body">
                                        <div class="row justify-content-center">
                                            <div class="col-md-6">
                                                <img class="card-img-top img-fluid img-thumbnail mb-3" src="<?=base_url('assets/image/foto_legalitas/'.$legalitas->foto2_legalitas)?>" alt="">
                                                <div class="card-img-overlay">
                                                    <a class="btn btn-primary btn-flat btn-sm" href="<?=base_url('assets/image/foto_legalitas/'.$legalitas->foto2_legalitas)?>" data-toggle="lightbox" data-gallery="gallery" data-max-width="700"><i class="fa fa-search-plus"></i></a>
                                                </div>
                                            </div>
                                            <div class="col-md-2 list-legalitas2">
                                                <button type="submit" class="btn btn-success btn-flat edit-legalitas2" style="background-color: #4BDE3E; border-color: #4BDE3E;"><i class="fa fa-edit"></i> Edit</button><br>
                                            </div>
                                            <div class="col-md-6 editor-legalitas2" hidden>
                                                <?php echo form_open_multipart('admin/foto2_legalitas'); ?>
                                                <label for="exampleInputFile">Ganti Foto<br><small class="text-muted">(format: jpg/jpeg/png, ukuran maks: 2 MB)</small></label>
                                                <div class="input-group">
                                                    <div class="custom-file">
                                                        <input type="file" class="custom-file-input" id="exampleInputFile" name="foto2_legalitas" accept=".jpg,.jpeg,.png" oninput="setCustomValidity('')" oninvalid="this.setCustomValidity('Masukkan File Foto')" required>
                                                        <label class="custom-file-label" for="exampleInputFile">Pilih file</label>
                                                    </div>
                                                </div>
                                                    <button type="submit" class="btn btn-primary btn-flat mt-2 mr-2 save-legalitas2"><i class="fa fa-save"></i> Simpan</button>
                                                    <a href="<?=base_url('admin/legalitas')?>" class="btn btn-danger btn-flat mt-2 cancel-legalitas2"><i class="fa fa-times-circle"></i> Batal</a>
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
