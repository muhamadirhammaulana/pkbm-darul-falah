
            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                <!-- Content Header (Page header) -->
                <div class="content-header">
                    <div class="container-fluid">
                        <div class="row mb-1">
                            <div class="col-sm-6">
                                <h1 class="m-0">Dashboard</h1>
                            </div><!-- /.col -->
                            <div class="col-sm-6">
                                <ol class="breadcrumb float-sm-right">
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item active">Dashboard</li>
                                </ol>
                            </div><!-- /.col -->
                        </div><!-- /.row -->
                    </div><!-- /.container-fluid -->
                </div>
                <!-- /.content-header -->

                <!-- Main content -->
                <section class="content">
                    <div class="container-fluid">
                        <!-- Small boxes (Stat box) -->
                        <div class="row">
                            <?php
                                if($this->session->flashdata('login_user')) { ?>
                                    <div class="col-lg-12 col-6">
                                        <div class="alert bg-teal alert-dismissible">
                                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                            <i class="icon fas fa-check"></i>
                                            Selamat Datang, <?=$user->nama_user?>
                                        </div>
                                    </div>
                                <?php }

                                if(isset($_SESSION['login_user'])) {
                                    unset($_SESSION['login_user']);
                                }
                            ?>
                            <div class="col-lg-3 col-6">
                                <!-- small box -->
                                <div class="small-box bg-info rounded-0">
                                <div class="inner">
                                    <p>PROGRAM PEMBELAJARAN</p>

                                    <h3><?=$jml_program?></h3>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-clipboard"></i>
                                </div>
                                <a href="<?=base_url('admin/pembelajaran')?>" class="small-box-footer">Info detail <i class="fas fa-arrow-circle-right"></i></a>
                                </div>
                            </div>
                            <!-- ./col -->
                            <div class="col-lg-3 col-6">
                                <!-- small box -->
                                <div class="small-box bg-success rounded-0">
                                <div class="inner">
                                    <p>GALERI</p>

                                    <h3><?=$jml_galeri?></h3> 
                                </div>
                                <div class="icon">
                                    <i class="ion ion-images"></i>
                                </div>
                                <a href="<?=base_url('admin/galeri')?>" class="small-box-footer">Info detail <i class="fas fa-arrow-circle-right"></i></a>
                                </div>
                            </div>
                            <!-- ./col -->
                            <div class="col-lg-3 col-6">
                                <!-- small box -->
                                <div class="small-box bg-warning rounded-0">
                                <div class="inner">    
                                    <p>ALUMNI</p>

                                    <h3>0</h3>        
                                </div>
                                <div class="icon">
                                    <i class="ion ion-person-stalker"></i>
                                </div>
                                <a href="<?=base_url('admin/alumni')?>" class="small-box-footer">Info detail <i class="fas fa-arrow-circle-right"></i></a>
                                </div>
                            </div>
                            <!-- ./col -->
                            <div class="col-lg-3 col-6">
                                <!-- small box -->
                                <div class="small-box bg-danger rounded-0">
                                <div class="inner">
                                    <p>BERITA</p>

                                    <h3><?=$jml_berita?></h3>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-document-text"></i>
                                </div>
                                <a href="<?=base_url('admin/berita')?>" class="small-box-footer">Info detail <i class="fas fa-arrow-circle-right"></i></a>
                                </div>
                            </div>
                            <!-- ./col -->
                        </div>
                        <!-- /.row -->

                        <!-- Info boxes -->
                        <div class="row">
                            <div class="col-md-3 col-sm-6 col-12">
                                <div class="info-box rounded-0">
                                <span class="info-box-icon bg-info rounded-0"><i class="far fa-envelope"></i></span>

                                <div class="info-box-content">
                                    <span class="info-box-text">Messages</span>
                                    <span class="info-box-number">1,410</span>
                                </div>
                                <!-- /.info-box-content -->
                                </div>
                                <!-- /.info-box -->
                            </div>
                            <!-- /.col -->
                            <div class="col-md-3 col-sm-6 col-12">
                                <div class="info-box rounded-0">
                                <span class="info-box-icon bg-success rounded-0"><i class="far fa-flag"></i></span>

                                <div class="info-box-content">
                                    <span class="info-box-text">Bookmarks</span>
                                    <span class="info-box-number">410</span>
                                </div>
                                <!-- /.info-box-content -->
                                </div>
                                <!-- /.info-box -->
                            </div>
                            <!-- /.col -->
                            <div class="col-md-3 col-sm-6 col-12">
                                <div class="info-box rounded-0">
                                <span class="info-box-icon bg-warning rounded-0"><i class="far fa-copy"></i></span>

                                <div class="info-box-content">
                                    <span class="info-box-text">Uploads</span>
                                    <span class="info-box-number">13,648</span>
                                </div>
                                <!-- /.info-box-content -->
                                </div>
                                <!-- /.info-box -->
                            </div>
                            <!-- /.col -->
                            <div class="col-md-3 col-sm-6 col-12">
                                <div class="info-box rounded-0">
                                <span class="info-box-icon bg-danger rounded-0"><i class="far fa-star"></i></span>

                                <div class="info-box-content">
                                    <span class="info-box-text">Likes</span>
                                    <span class="info-box-number">93,139</span>
                                </div>
                                <!-- /.info-box-content -->
                                </div>
                                <!-- /.info-box -->
                            </div>
                            <!-- /.col -->
                        </div>
                        <!-- /.row -->

                        <!-- Main row -->
                        <div class="row">
                            <!-- Left col -->
                            <section class="col-lg-7 connectedSortable">
                                
                            </section>
                            <!-- /.Left col -->
                            <!-- right col (We are only adding the ID to make the widgets sortable)-->
                            <section class="col-lg-5 connectedSortable">
                                
                            </section>
                            <!-- right col -->
                        </div>
                        <!-- /.row (main row) -->
                    </div><!-- /.container-fluid -->
                </section>
                <!-- /.content -->
            </div>
            <!-- /.content-wrapper -->
