            
            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-1">
                        <div class="col-sm-6">
                            <h1>Pembelajaran</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="<?=base_url('admin')?>">Home</a></li>
                            <li class="breadcrumb-item active">Pembelajaran</li>
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
                            <a class="btn btn-primary btn-flat" href="<?=base_url('admin/pembelajaran/tambah-program')?>">
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
                                <th>Nama Program</th>
                                <th>Foto</th>
                                <th>Keterangan</th>
                                <th class="col-2">Action</th>
                            </tr>
                            </thead>
                            <tbody class="bg-light">
                            <?php $no=1; foreach ($program as $key => $value) { ?>
                            <tr>
                                <td><?=$no++?></td>
                                <td><?=$value->nama_program?></td>
                                <td>
                                    <?php
                                    if ($value->foto_program != "") {
                                        $image = $value->foto_program;
                                    } else {
                                        $image = "default.png";
                                    }
                                    ?>
                                    <img src="<?=base_url('assets/image/foto_program/'.$image)?>" class="img-fluid img-thumbnail" width="400px">
                                </td>
                                <td><?=$value->ket_program?></td>
                                <td>
                                    <a class="btn btn-success btn-flat btn-sm" href="<?=base_url('admin/pembelajaran/edit-program/'.$value->id_program)?>" style="background-color: #4BDE3E; border-color: #4BDE3E;">
                                        <i class="fas fa-edit"></i>
                                        Edit
                                    </a>
                                    <button type="button" class="btn btn-danger btn-flat btn-sm" data-toggle="modal" data-target="#delete<?=$value->id_program?>">
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
            <?php foreach ($program as $key => $value) { ?>
            <div class="modal fade" id="delete<?=$value->id_program?>">
                <div class="modal-dialog">
                    <div class="modal-content rounded-0">
                        <div class="modal-body text-center">
                            <?php echo form_open('admin/deleteprogram/'.$value->id_program); ?>
                            <i class="fas fa-exclamation-circle fa-5x text-warning"></i>
                            <br><br>
                            <p>Hapus Program "<strong><?=$value->nama_program?></strong>"?</p>
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
