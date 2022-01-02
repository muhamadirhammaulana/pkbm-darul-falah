        
            <!-- Main Sidebar Container -->
            <aside class="main-sidebar sidebar-dark-success elevation-4">
                <!-- Brand Logo -->
                <a href="<?=base_url()?>" class="brand-link">
                    <img src="<?=base_url('assets/image/logo/'.$profil->logo)?>" alt="" class="brand-image img-circle elevation-3" style="opacity: .8">
                    <span class="brand-text font-weight-light"><?=$profil->nama?></span>
                </a>

                <!-- Sidebar -->
                <div class="sidebar">

                    <!-- Sidebar Menu -->
                    <nav class="mt-2">
                        <ul class="nav nav-pills nav-sidebar nav-flat flex-column" data-widget="treeview" role="menu" data-accordion="false">
                            <!-- Add icons to the links using the .nav-icon class
                                with font-awesome or any other icon font library -->
                            <li class="nav-item">
                                <a href="<?=base_url('admin')?>" class="nav-link">
                                    <i class="nav-icon fas fa-columns"></i>
                                    <p>
                                        Dashboard
                                    </p>
                                </a>
                            </li>
                            <li class="nav-header">PENGGUNA</li>
                            <li class="nav-item">
                                <a href="<?=base_url('admin/data-admin')?>" class="nav-link" id="data-admin">
                                    <i class="nav-icon fas fa-users-cog"></i>
                                    <p>
                                        Admin
                                    </p>
                                </a>
                            </li>
                            <li class="nav-header">PROFIL</li>
                            <li class="nav-item">
                                <a href="<?=base_url('admin/akreditasi')?>" class="nav-link">
                                    <i class="nav-icon fas fa-th"></i>
                                    <p>
                                        Akreditasi
                                    </p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="<?=base_url('admin/visi-misi-tujuan')?>" class="nav-link">
                                    <i class="nav-icon fas fa-bullseye"></i>
                                    <p>
                                        Visi Misi
                                    </p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="<?=base_url('admin/profil')?>" class="nav-link">
                                    <i class="nav-icon fas fa-address-card"></i>
                                    <p>
                                        Profil
                                    </p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="<?=base_url('admin/struktur')?>" class="nav-link">
                                    <i class="nav-icon fas fa-table"></i>
                                    <p>
                                        Struktur
                                    </p>
                                </a>
                            </li>

                            <li class="nav-header">INFORMASI</li>
                            <li class="nav-item">
                                <a href="<?=base_url('admin/pembelajaran')?>" class="nav-link" id="pembelajaran">
                                    <i class="nav-icon fas fa-book"></i>
                                    <p>
                                        Pembelajaran
                                    </p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="<?=base_url('admin/galeri')?>" class="nav-link" id="galeri">
                                    <i class="nav-icon fas fa-image"></i>
                                    <p>
                                        Galeri
                                    </p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="<?=base_url('admin/alumni')?>" class="nav-link">
                                    <i class="nav-icon fas fa-user-graduate"></i>
                                    <p>
                                        Alumni
                                    </p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="<?=base_url('admin/berita')?>" class="nav-link" id="berita">
                                    <i class="nav-icon fas fa-newspaper"></i>
                                    <p>
                                        Berita
                                    </p>
                                </a>
                            </li>
                            
                            <li class="nav-header">LEGALITAS</li>
                            <li class="nav-item">
                                <a href="<?=base_url('admin/legalitas')?>" class="nav-link">
                                    <i class="nav-icon fas fa-file-contract"></i>
                                    <p>Legalitas</p>
                                </a>
                            </li>
                            <li class="nav-item">
                            </li>
                        </ul>
                    </nav>
                    <!-- /.sidebar-menu -->
                </div>
                <!-- /.sidebar -->
            </aside>
