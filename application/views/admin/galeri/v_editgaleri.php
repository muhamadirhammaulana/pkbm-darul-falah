            
            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <div class="container-fluid">
                        <div class="row mb-1">
                            <div class="col-sm-6">
                                <h1>Edit Galeri</h1>
                            </div>
                            <div class="col-sm-6">
                                <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="<?=base_url('admin')?>">Home</a></li>
                                <li class="breadcrumb-item"><a href="<?=base_url('admin/galeri')?>">Galeri</a></li>
                                <li class="breadcrumb-item active">Edit Galeri</li>
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
                                        <a class="btn btn-secondary btn-flat text-light" href="<?=base_url('admin/galeri')?>">
                                            <i class="fas fa-arrow-left">
                                            </i>
                                            Kembali
                                        </a>
                                    </div>
                                    <!-- /.card-header -->
                                    <!-- form start -->
                                    <?php
                                    echo form_open_multipart('admin/galeri/edit-galeri/'.$galeri->id_galeri);
                                    ?>
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <?php
                                                            if ($galeri->sampul_galeri != "") {
                                                                $image = $galeri->sampul_galeri;
                                                            } else {
                                                                $image = "default.png";
                                                            }
                                                        ?>
                                                        <img class="img-fluid img-thumbnail" src="<?=base_url('assets/image/sampul_galeri/'.$image)?>" width="100%">
                                                    </div>
                                                </div>
                                                <div class="col-md-8">
                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1">Nama Galeri</label>
                                                        <input type="text" class="form-control" value="<?=$galeri->nama_galeri?>" name="nama_galeri" placeholder="Masukkan Nama Galeri" oninput="setCustomValidity('')" oninvalid="this.setCustomValidity('Masukkan Nama Galeri')" required>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="exampleInputFile">Ganti Sampul Galeri</label>
                                                        <div class="input-group">
                                                            <div class="custom-file">
                                                                <input type="file" class="custom-file-input" id="exampleInputFile" name="sampul_galeri">
                                                                <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- /.card-body -->

                                        <div class="card-footer">
                                            <button type="submit" class="btn btn-primary btn-flat">
                                                <i class="fas fa-save"></i>
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