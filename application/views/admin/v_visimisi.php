            
            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <div class="container-fluid">
                        <div class="row mb-1">
                            <div class="col-sm-6">
                                <h1>Visi, Misi dan Tujuan</h1>
                            </div>
                            <div class="col-sm-6">
                                <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="<?=base_url('admin')?>">Home</a></li>
                                <li class="breadcrumb-item active">Visi Misi</li>
                                </ol>
                            </div>
                        </div>
                    </div><!-- /.container-fluid -->
                </section>

                    <!-- Main content -->
                <section class="content">
                    <div class="container-fluid">
                        <?php echo form_open_multipart('admin/visi-misi-tujuan'); ?>
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <div class="card card-light rounded-0 h-100">
                                        <div class="card-header rounded-0" style="background-color: #15BB59;">
                                            <strong class="text-white">Visi</strong>
                                        </div>
                                        <div class="card-body">
                                            <div class="list-visi-misi">
                                                <?=$visimisi->visi?>
                                            </div>
                                            <div class="editor-visi-misi" hidden>
                                                <textarea class="summernotes1" name="visi" required><?=$visimisi->visi?></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <div class="card card-light rounded-0 h-100">
                                        <div class="card-header rounded-0" style="background-color: #15BB59;">
                                            <strong class="text-white">Misi</strong>
                                        </div>
                                        <div class="card-body">
                                            <div class="list-visi-misi">
                                                <?=$visimisi->misi?>
                                            </div>
                                            <div class="editor-visi-misi" hidden>
                                                <textarea class="summernotes1" name="misi" required><?=$visimisi->misi?></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12 mb-3">
                                    <div class="card card-light rounded-0 h-100">
                                        <div class="card-header rounded-0" style="background-color: #15BB59;">
                                            <strong class="text-white">Tujuan</strong>
                                        </div>
                                        <div class="card-body">
                                            <div class="list-visi-misi">
                                                <?=$visimisi->tujuan?>
                                            </div>
                                            <div class="editor-visi-misi" hidden>
                                                <textarea class="summernotes2" name="tujuan" required><?=$visimisi->tujuan?></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12 mb-3">
                                    <div class="">
                                            <button type="button" class="btn btn-success btn-flat edit-visi-misi" style="background-color: #4BDE3E; border-color: #4BDE3E;"><i class="fa fa-edit"></i> Edit</button>
                                            <button type="submit" class="btn btn-primary btn-flat save-visi-misi" hidden><i class="fa fa-save"></i> Simpan</button>
                                            <button type="button" class="btn btn-danger btn-flat cancel-visi-misi" onclick="location.reload()" hidden><i class="fa fa-times-circle"></i> Batal</button>
                                    </div>
                                </div>
                            </div>

                                

                        <?php echo form_close(); ?>
                    </div><!-- /.container-fluid -->
                </section>
                <!-- /.content -->
            </div>
            <!-- /.content-wrapper -->
