            
            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-1">
                        <div class="col-sm-6">
                            <h1>Video Galeri : <?=$galeri->nama_galeri?></h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="<?=base_url('admin')?>">Home</a></li>
                            <li class="breadcrumb-item"><a href="<?=base_url('admin/galeri')?>">Galeri</a></li>
                            <li class="breadcrumb-item active">Video Galeri</li>
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
                                                    echo form_open_multipart('admin/galeri/video-galeri/tambah-video/'.$galeri->id_galeri);
                                                ?>
                                                <div class="card card-light rounded-0">
                                                    <div class="card-body">
                                                        <div class="form-group">
                                                            <label for="exampleInputFile">Tambah Video <small class="text-muted">(format: mp4/3gp/avi/mov, ukuran maks: 20 MB)</small></label>
                                                            <div class="input-group">
                                                                <div class="custom-file">
                                                                    <input type="file" class="custom-file-input" id="exampleInputFile" name="video" accept=".mp4,.3gp,.avi,.mov" oninput="setCustomValidity('')" oninvalid="this.setCustomValidity('Masukkan File Video')" required>
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
                                                        <strong class="text-white">Daftar Video</strong>
                                                        <span class="badge badge-light float-right"><?=$jml_video->jml_video?> Video</span>
                                                    </div>
                                                    <div class="card-body">
                                                        <?php if ($jml_video->jml_video == 0) { ?>
                                                        <div class="text-center"><p>Tidak Ada Video</p></div>
                                                        <?php } else { ?>
                                                        <div class="row">
                                                            <?php foreach ($video as $key => $value) { ?>
                                                            
                                                            <div class="col-sm-4 mb-3">
                                                                <div class="card card-light h-100 justify-content-center rounded-0">
                                                                    <video class="video-fluid img-thumbnail">
                                                                        <source src="<?=base_url('assets/video/video_galeri/'.$value->video)?>" type="video/mp4">
                                                                    </video>
                                                                    <div class="card-img-overlay">
                                                                        <button type="button" class="btn btn-info btn-flat btn-sm" data-toggle="modal" data-target="#show<?=$value->id_video?>">
                                                                            <i class="fas fa-search-plus"></i>
                                                                        </button>
                                                                        <button type="button" class="btn btn-danger btn-flat btn-sm" data-toggle="modal" data-target="#delete<?=$value->id_video?>">
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

            <!-- Modal Delete Video -->
            <?php foreach ($video as $key => $value) { ?>
            <div class="modal fade" id="delete<?=$value->id_video?>">
                <div class="modal-dialog modal-sm">
                    <div class="modal-content">
                        <div class="modal-body text-center">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            <?php echo form_open('admin/deletevideo/'.$value->id_galeri.'/'.$value->id_video); ?>
                                <i class="fas fa-exclamation-circle fa-5x text-warning"></i>
                                <br><br>
                                <p>Hapus Video?</p>
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

            <!-- Modal Show Video -->
            <?php foreach ($video as $key => $value) { ?>
            <div class="modal fade" id="show<?=$value->id_video?>" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-body">
                            <button type="button" class="close mb-3" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            <!-- 16:9 aspect ratio -->
                            <div class="embed-responsive embed-responsive-16by9">
                                <video controls="true" class="embed-responsive-item">
                                    <source src="<?=base_url('assets/video/video_galeri/'.$value->video)?>" type="video/mp4" />
                                </video>
                            </div>
                        </div>
                    </div>
                <!-- /.modal-content -->
                </div>
                <!-- /.modal-dialog -->
            </div>
            <!-- /.modal -->
            <?php } ?>
