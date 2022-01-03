            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-1">
                        <div class="col-sm-6">
                            <h1>Galeri</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="<?=base_url('admin')?>">Home</a></li>
                            <li class="breadcrumb-item active">Galeri</li>
                            </ol>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
                </section>

                <!-- Main content -->
                <section class="content">
                <div class="container-fluid">
                    <div class="row">
                    <div class="col-12">

                        <div class="card rounded-0">
                        <div class="card-header">
                            <a class="btn btn-primary btn-flat" href="<?=base_url('admin/galeri/tambah-galeri')?>">
                                <i class="fas fa-plus-square"></i>
                                Tambah
                            </a>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example2" class="table table-bordered">
                            <thead class="text-light" style="background-color: #15BB59;">
                            <tr>
                                <th class="col-1">No.</th>
                                <th>Nama Galeri</th>
                                <th>Sampul Galeri</th>
                                <th>Foto & Video</th>
                                <th class="col-2">Action</th>
                            </tr>
                            </thead>
                            <tbody class="bg-light">
                            <?php $no=1; foreach ($galeri as $key => $value) { ?>
                            <tr>
                                <td><?=$no++?></td>
                                <td><?=$value->nama_galeri?></td>
                                <td>
                                    <?php
                                    if ($value->sampul_galeri != "") {
                                        $image = $value->sampul_galeri;
                                    } else {
                                        $image = "default.png";
                                    }
                                    ?>
                                    <img src="<?=base_url('assets/image/sampul_galeri/'.$image)?>" class="img-fluid img-thumbnail" width="150px">
                                </td>
                                <td>
                                    <i class="fas fa-image mb-3">  <?= $jml_foto[$key]->jml_foto ?> Foto</i>
                                    <i class="fas fa-video ml-2">  <?= $jml_video[$key]->jml_video ?> Video</i><br>
                                    <a href="<?=base_url('admin/galeri/detail-galeri/'.$value->id_galeri)?>" class="btn btn-info btn-flat btn-sm">
                                        <i class="fas fa-photo-video"></i>
                                        Lihat
                                    </a>
                                </td>
                                <td>
                                    <a class="btn btn-success btn-flat btn-sm" href="<?=base_url('admin/galeri/edit-galeri/'.$value->id_galeri)?>" style="background-color: #4BDE3E; border-color: #4BDE3E;">
                                        <i class="fas fa-edit"></i>
                                        Edit
                                    </a>
                                    <button type="button" class="btn btn-danger btn-flat btn-sm" data-toggle="modal" data-target="#delete<?=$value->id_galeri?>">
                                        <i class="fas fa-trash"></i>
                                        Hapus
                                    </button>
                                </td>
                            </tr>
                            <?php } ?>
                            </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /.col -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.container-fluid -->
                </section>
                <!-- /.content -->
            </div>
            <!-- /.content-wrapper -->

            <!-- Modal Delete -->
            <?php foreach ($galeri as $key => $value) { ?>
            <div class="modal fade" id="delete<?=$value->id_galeri?>">
                <div class="modal-dialog modal-sm">
                    <div class="modal-content rounded-0">
                        <div class="modal-body text-center">
                            <?php echo form_open_multipart('admin/deletegaleri/'.$value->id_galeri); ?>
                            <i class="fas fa-exclamation-circle fa-5x text-warning"></i>
                            <br><br>
                            <?php
                            if ($jml_foto[$key]->jml_foto != 0 || $jml_video[$key]->jml_video != 0) {
                                $warning = "Peringatan: foto/video di dalam galeri ini akan ikut terhapus!";
                            } else {
                                $warning = "";
                            }
                            ?>
                            <p>Hapus Galeri "<strong><?=$value->nama_galeri?></strong>"?<br><small class="text-muted"><?=$warning?></small></p>
                            
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
            