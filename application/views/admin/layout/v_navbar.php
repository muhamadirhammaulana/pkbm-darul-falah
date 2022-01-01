    
    <body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed">
        <div class="wrapper">

            <!-- Navbar -->
            <nav class="main-header navbar navbar-expand navbar-success navbar-dark" style="background-color: #15BB59; border-color: #15BB59;">
                <!-- Left navbar links -->
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                    </li>
                </ul>

                <!-- Right navbar links -->
                <ul class="navbar-nav ml-auto">
                    <!-- Legacy User -->
                    
                    <li class="nav-item dropdown user-menu">
                        <?php
                            if ($user->foto_user != "") {
                                $image = $user->foto_user;
                            } else {
                                $image = "default.png";
                            }
                        ?>
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
                            <img src="<?=base_url('assets/image/foto_user/'.$image)?>" class="user-image img-circle elevation-2" alt="User Image">
                            <!-- <span class="d-none d-md-inline"></span> -->
                        </a>
                        <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                        <!-- User image -->
                        <li class="user-header bg-light">
                            <img src="<?=base_url('assets/image/foto_user/'.$image)?>" class="img-circle elevation-2" alt="User Image">

                            <p>
                            <div>
                                <?=$user->nama_user?>
                            </div>
                            <?php
                                if ($this->session->userdata('level') == 1) {
                                    $status = "Administrator";
                                } else if ($this->session->userdata('level') == 2) {
                                    $status = "Siswa";
                                } else {
                                    $status = "";
                                }
                            ?>
                            <div>
                                <span class="badge badge-primary"><?=$status?></span>
                            </div>
                            </p>
                        </li>
                        <!-- Menu Footer-->
                        <li class="user-footer">
                            <a href="<?=base_url('admin/profil-pengguna/'.$this->session->userdata('id_user'))?>" class="btn btn-info btn-flat">Edit Profil</a>
                            <a href="<?=base_url('login/logout')?>" class="btn btn-danger btn-flat float-right">Keluar</a>
                        </li>
                        </ul>
                    </li>
                </ul>
            </nav>
            <!-- /.navbar -->
