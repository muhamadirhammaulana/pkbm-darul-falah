            
            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <div class="container-fluid">
                        <div class="row mb-1">
                            <div class="col-sm-6">
                                <h1>Edit Program Pembelajaran</h1>
                            </div>
                            <div class="col-sm-6">
                                <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="<?=base_url('admin')?>">Home</a></li>
                                <li class="breadcrumb-item"><a href="<?=base_url('admin/pembelajaran')?>">Pembelajaran</a></li>
                                <li class="breadcrumb-item active">Edit Program Pembelajaran</li>
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
                                        <a class="btn btn-secondary btn-flat text-light" href="<?=base_url('admin/pembelajaran')?>">
                                            <i class="fas fa-arrow-left">
                                            </i>
                                            Kembali
                                        </a>
                                    </div>
                                    <!-- /.card-header -->
                                    <!-- form start -->
                                    <?php
                                    echo form_open_multipart('admin/pembelajaran/edit-program/'.$program->id_program);
                                    ?>
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <div class="form-group">
                                                            <?php
                                                                if ($program->foto_program != "") {
                                                                    $image = $program->foto_program;
                                                                } else {
                                                                    $image = "default.png";
                                                                }
                                                            ?>
                                                            <img class="img-fluid img-thumbnail" src="<?=base_url('assets/image/foto_program/'.$image)?>" width="100%">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-8">
                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1">Nama Program</label>
                                                        <input type="text" class="form-control" value="<?=$program->nama_program?>" name="nama_program" id="namaprogram" placeholder="Masukkan Nama Program" oninput="setCustomValidity('')" oninvalid="this.setCustomValidity('Masukkan Nama Program')" required>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="exampleInputFile">Ganti Foto Program</label>
                                                        <div class="input-group">
                                                        <div class="custom-file">
                                                            <input type="file" class="custom-file-input" id="fotoprogram" name="foto_program">
                                                            <label class="custom-file-label" for="exampleInputFile">Pilih file</label>
                                                        </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1">Keterangan Program</label>
                                                        <textarea class="summernote2" name="ket_program" required><?=$program->ket_program?></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- /.card-body -->

                                        <div class="card-footer">
                                            <button type="submit" class="btn btn-primary btn-flat editprogram">
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
