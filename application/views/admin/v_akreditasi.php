            
            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <div class="container-fluid">
                        <div class="row mb-1">
                            <div class="col-sm-6">
                                <h1>Akreditasi</h1>
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
                            <?php foreach ($akreditasi as $key => $value) { ?>
                                <div class="col-md-6 mb-3">
                                    <div class="card card-light h-100 rounded-0">
                                        <div class="card-header rounded-0" style="background-color: #15BB59;">
                                            <strong class="text-white">Foto <?=$value->id_akreditasi?></strong>
                                        </div>
                                        <div class="card-body">
                                            <div class="row justify-content-center">
                                                <div class="col-md-6">
                                                    <img class="card-img-top img-fluid img-thumbnail mb-3" src="<?=base_url('assets/image/foto_akreditasi/'.$value->foto_akreditasi)?>" alt="">
                                                    <div class="card-img-overlay">
                                                        <a class="btn btn-info btn-flat btn-sm" href="<?=base_url('assets/image/foto_akreditasi/'.$value->foto_akreditasi)?>" data-toggle="lightbox" data-gallery="gallery" data-max-width="700"><i class="fa fa-search-plus"></i></a>
                                                    </div>
                                                </div>
                                                <div class="col-md-2 list-akreditasi<?=$value->id_akreditasi?>">
                                                    <button type="submit" class="btn btn-success btn-flat edit-akreditasi<?=$value->id_akreditasi?>" style="background-color: #4BDE3E; border-color: #4BDE3E;"><i class="fa fa-edit"></i> Edit</button><br>
                                                </div>
                                                <div class="col-md-6 editor-akreditasi<?=$value->id_akreditasi?>" hidden>
                                                    <?php echo form_open_multipart('admin/foto_akreditasi/'.$value->id_akreditasi); ?>
                                                    <label for="exampleInputFile">Ganti Foto <?=$value->id_akreditasi?><br><small class="text-muted">(format: jpg/jpeg/png, ukuran maks: 2 MB)</small></label>
                                                    <div class="input-group">
                                                        <div class="custom-file">
                                                            <input type="file" class="custom-file-input rounded-0" id="exampleInputFile" name="foto_akreditasi" accept=".jpg,.jpeg,.png" oninput="setCustomValidity('')" oninvalid="this.setCustomValidity('Masukkan File Foto')" required>
                                                            <label class="custom-file-label" for="exampleInputFile">Pilih file</label>
                                                        </div>
                                                    </div>
                                                    <button type="submit" class="btn btn-primary btn-flat mt-2 mr-2 save-akreditasi<?=$value->id_akreditasi?>"><i class="fa fa-save"></i> Simpan</button>
                                                    <a href="<?=base_url('admin/akreditasi')?>" class="btn btn-danger btn-flat mt-2 cancel-akreditasi<?=$value->id_akreditasi?>"><i class="fa fa-times-circle"></i> Batal</a>
                                                    <?php echo form_close(); ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>
                        </div>
                    </div><!-- /.container-fluid -->
                </section>
                <!-- /.content -->
            </div>
            <!-- /.content-wrapper -->
            