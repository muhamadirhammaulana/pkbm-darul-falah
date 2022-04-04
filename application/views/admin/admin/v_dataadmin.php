            
            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-1">
                        <div class="col-sm-6">
                            <h1>Data Admin</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="<?=base_url('admin')?>">Home</a></li>
                            <li class="breadcrumb-item active">Data Admin</li>
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
                            <a class="btn btn-primary btn-flat" href="<?=base_url('admin/data-admin/tambah-admin')?>">
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
                                <th>Nama</th>
                                <th>Foto</th>
                                <th>Username</th>
                                <th class="col-2">Aksi</th>
                            </tr>
                            </thead>
                            <tbody class="bg-light">
                            <?php $no=1; foreach ($data_admin as $key => $value) { ?>
                            <tr>
                                <td><?=$no++?></td>
                                <td><?=$value->nama_user?></td>
                                <td>
                                    <?php
                                    if ($value->foto_user != "") {
                                        $image = $value->foto_user;
                                    } else {
                                        $image = "default.png";
                                    }
                                    ?>
                                    <img src="<?=base_url('assets/image/foto_user/'.$image)?>" class="img-fluid img-thumbnail" width="100px">
                                </td>
                                <td><?=$value->username?></td>
                                <td>
                                    <a class="btn btn-success btn-flat btn-sm" href="<?=base_url('admin/data-admin/edit-admin/'.$value->id_user)?>" style="background-color: #4BDE3E; border-color: #4BDE3E;">
                                        <i class="fas fa-edit"></i>
                                        Edit
                                    </a>
                                    <button type="button" class="btn btn-danger btn-flat btn-sm" data-toggle="modal" data-target="#delete<?=$value->id_user?>">
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
            <?php foreach ($data_admin as $key => $value) { ?>
            <div class="modal fade" id="delete<?=$value->id_user?>">
                <div class="modal-dialog">
                    <div class="modal-content rounded-0">
                        <div class="modal-body text-center">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            <?php echo form_open('admin/delete_admin/'.$value->id_user); ?>
                            <i class="fas fa-exclamation-circle fa-5x text-warning"></i>
                            <br><br>
                            <p>Hapus Admin "<strong><?=$value->nama_user?></strong>"?</p>
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
