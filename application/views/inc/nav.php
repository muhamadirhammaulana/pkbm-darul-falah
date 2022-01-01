<nav class="navbar navbar-expand-lg navbar-light border-bottom">
    <div class="container-fluid">
        <a class="navbar-brand" href="<?= base_url('/') ?>">
          <img src="<?=base_url('assets/image/logo/'.$profil->logo)?>" alt="Logo" width="35" height="30"> <?=strtoupper($profil->nama);?>
      	</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" id="home" href="<?= base_url('/') ?>">
                        HOME
                    </a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="profil" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        PROFIL
                    </a>
                    <ul class="dropdown-menu nav-navbar" id="custom-green2" aria-labelledby="navbarDropdownMenuLink">
                        <li><a class="dropdown-item<?php if ($this->input->get('page') == 'akreditasi') { echo ' custom-dropdown-item-active'; } ?>" id="custom-dropdown-item" href="<?= base_url('akreditasi') ?>">AKREDITASI</a></li>
                        <li><a class="dropdown-item<?php if ($this->input->get('page') == 'visi-misi') { echo ' custom-dropdown-item-active'; } ?>" id="custom-dropdown-item" href="<?= base_url('visi-misi-tujuan') ?>">VISI MISI PKBM</a></li>
                        <li><a class="dropdown-item<?php if ($this->input->get('page') == 'profil') { echo ' custom-dropdown-item-active'; } ?>" id="custom-dropdown-item" href="<?= base_url('profil') ?>">PROFIL PKBM</a></li>
                        <li><a class="dropdown-item<?php if ($this->input->get('page') == 'struktur') { echo ' custom-dropdown-item-active'; } ?>" id="custom-dropdown-item" href="<?= base_url('struktur') ?>">STRUKTUR</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="informasi" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        INFORMASI
                    </a>
                    <ul class="dropdown-menu nav-navbar" id="custom-green2" aria-labelledby="navbarDropdownMenuLink">
                        <li><a class="dropdown-item<?php if ($this->input->get('page') == 'pembelajaran') { echo ' custom-dropdown-item-active'; } ?>" id="custom-dropdown-item" href="<?= base_url('pembelajaran') ?>">PEMBELAJARAN</a></li>
                        <li><a class="dropdown-item<?php if ($this->input->get('page') == 'galeri') { echo ' custom-dropdown-item-active'; } ?>" id="custom-dropdown-item" href="<?= base_url('galeri') ?>">GALERI</a></li>
                        <li><a class="dropdown-item<?php if ($this->input->get('page') == 'alumni') { echo ' custom-dropdown-item-active'; } ?>" id="custom-dropdown-item" href="<?= base_url('alumni') ?>">ALUMNI</a></li>
                        <li><a class="dropdown-item<?php if ($this->input->get('page') == 'informasi-berita') { echo ' custom-dropdown-item-active'; } ?>" id="custom-dropdown-item" href="<?= base_url('informasi-berita') ?>">INFORMASI BERITA</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link<?php if ($this->input->get('page') == 'legalitas') { echo ' active'; } ?>" id="legalitas" href="<?= base_url('legalitas') ?>">
                        LEGALITAS
                    </a>
                </li>
                <li class="nav-item">
                    <?php
                    if ($this->session->userdata('username') != '') {
                        if ($this->session->userdata('level') == 1) { ?>
                            <a class="btn rounded-pill" id="custom-green2" href="<?= base_url('admin') ?>"><i class="bi bi-person"></i> Halaman Admin</a>
                        <?php } else if ($this->session->userdata('level') == 2) { ?>
                            <a class="btn rounded-pill" id="custom-green2" href="<?= base_url('admin') ?>"><i class="bi bi-person"></i> Halaman Guru</a>
                        <?php } else if ($this->session->userdata('level') == 3) { ?>
                            <a class="btn rounded-pill" id="custom-green2" href="<?= base_url('admin') ?>"><i class="bi bi-person"></i> Halaman Siswa</a>
                        <?php } else { ?>
                            
                        <?php }
                    } else { ?>
                        <a class="btn rounded-pill" id="custom-green2" href="<?= base_url('login') ?>"><i class="bi bi-lock"></i> LOGIN</a>
                    <?php } ?>      
                </li>
            </ul>
        </div>
    </div>
</nav>