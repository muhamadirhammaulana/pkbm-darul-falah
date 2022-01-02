<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <?php $this->load->view('inc/styles') ?>

    <style type="text/css">
        .login,
        .image {
            min-height: 100vh;
        }

        .bg-image {
            background-image: url("<?= base_url('assets/image/login-image.jpg') ?>");
            background-size: cover;
            background-position: center center;
        }
    </style>

    <title><?=strtoupper($profil->nama);?> :: LOGIN</title>
</head>

<body class="light-login d-flex justify-content-center">
    <div class="container-fluid">
        <div class="row no-gutter">
            <div class="col-md-6" id="custom-green">
                <div class="d-none d-sm-block">
                    <div class="d-flex flex-column min-vh-100 justify-content-center align-items-center">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-10 col-xl-7 mx-auto">
                                    <div class="card bg-transparent border-0">
                                        <div class="card-body text-center">
                                            <svg class="bd-placeholder-img rounded-circle mb-4" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false">
                                                <title>Placeholder</title>
                                                <rect width="100%" height="100%" fill="#777" /><text x="50%" y="50%" fill="#777" dy=".3em">140x140</text>
                                            </svg>
                                            <div class="mb-4 pb-2 text-uppercase text-center" style="width: 80%; margin: 0 auto; border-bottom: 5px solid #FFFFFF; border-radius: 5px;">
                                                <h3><?=strtoupper($profil->nama);?></h3>
                                            </div>
                                            <p>
                                                Lorem ipsum dolor sit, amet consectetur adipisicing elit. A omnis neque quas, tempore sint vel quia natus ipsam rem molestiae accusantium velit blanditiis reprehenderit, ipsum inventore dolorem ut nostrum unde?
                                            </p>
                                        </div>
                                        <div class="card-footer bg-transparent border-0 text-center">
                                            <p>INFO KONTAK PERSON</p>
                                            <i class="bi bi-envelope"></i> &nbsp;<a href="mailto:<?=$profil->email?>" class="text-reset" style="text-decoration: none;"><?=$profil->email?></a>
						<?php foreach ($medsos as $key => $value) { ?>
						<br>
						<i class="bi bi-<?=strtolower($value->jenis_medsos);?>"></i> &nbsp;<a href="<?=$value->link_medsos?>" class="text-reset" style="text-decoration: none;"><?=$value->nama_medsos?></a>
						<?php } ?>
						<br>
						<i class="bi bi-telephone"></i> &nbsp;<a href="#" class="text-reset" style="text-decoration: none;"><?=$profil->no_telp?></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 bg-image">
                <div class="login d-flex align-items-center py-5">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-10 col-xl-7 mx-auto">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="mb-4 pb-2 text-uppercase text-center" style="width: 80%; margin: 0 auto; border-bottom: 5px solid #15BB58; border-radius: 5px;">
                                            <h3>LOGIN</h3>
                                        </div>
                                        <?php                                           
                                            if ($this->session->flashdata('pesan')) {
                                                echo '<div class="alert alert-warning alert-dismissible fade show">
                                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>';
                                                echo $this->session->flashdata('pesan');
                                                echo '</div>';
                                            }

                                            if(isset($_SESSION['pesan'])){
                                                unset($_SESSION['pesan']);
                                            }

                                            if ($this->session->flashdata('logout')) {
                                                echo '<div class="alert alert-success alert-dismissible fade show">
                                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>';
                                                echo $this->session->flashdata('logout');
                                                echo '</div>';
                                            }

                                            if(isset($_SESSION['logout'])){
                                                unset($_SESSION['logout']);
                                            }

                                            echo form_open_multipart('login');
                                        ?>
                                            <div class="mb-3">
                                                <label for="username" class="form-label">Username</label>
                                                <input type="text" class="form-control" id="username" name="username" style="border: 1px solid #15BB58" autofocus required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="password" class="form-label">Password</label>
                                                <input type="password" class="form-control" id="password" name="password" style="border: 1px solid #15BB58" required>
                                            </div>
                                            <div class="mb-3">
                                                <a href="#" style="color: #4BDE3E; text-decoration: none">Lupa Password?</a>
                                            </div>
                                            <div class="mb-3" style="float: right;">
                                                <button type="submit" class="btn btn-md btn-default" id="custom-green2"><i class="bi bi-lock"></i> MASUK</button>
                                            </div>
                                        <?php echo form_close(); ?>
                                    </div>
                                </div>
                                <div class="card" hidden>
                                    <div class="card-body">
                                        <div class="mb-4 pb-2 text-uppercase text-center" style="width: 80%; margin: 0 auto; border-bottom: 5px solid #15BB58; border-radius: 5px;">
                                            <h3>REGISTER</h3>
                                        </div>
                                        <?php                                           
                                            if ($this->session->flashdata('register_sukses')) {
                                                echo '<div class="alert alert-success alert-dismissible fade show">
                                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>';
                                                echo $this->session->flashdata('register_sukses');
                                                echo '</div>';
                                            }

                                            if(isset($_SESSION['register_sukses'])){
                                                unset($_SESSION['register_sukses']);
                                            }

                                            if ($this->session->flashdata('register_gagal')) {
                                                echo '<div class="alert alert-warning alert-dismissible fade show">
                                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>';
                                                echo $this->session->flashdata('register_gagal');
                                                echo '</div>';
                                            }

                                            if(isset($_SESSION['register_gagal'])){
                                                unset($_SESSION['register_gagal']);
                                            }

                                            echo form_open_multipart('register');
                                        ?>
                                            <div class="mb-3">
                                                <label for="username" class="form-label">Nama</label>
                                                <input type="text" class="form-control" id="nama_userreg" name="nama_userreg" style="border: 1px solid #15BB58" autofocus required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="username" class="form-label">Username</label>
                                                <input type="text" class="form-control" id="usernamereg" name="usernamereg" style="border: 1px solid #15BB58" autofocus required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="password" class="form-label">Password</label>
                                                <input type="password" class="form-control" id="passwordreg" name="passwordreg" style="border: 1px solid #15BB58" required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="password" class="form-label">Level</label>
                                                <input type="text" class="form-control" id="passwordreg" name="levelreg" style="border: 1px solid #15BB58" required>
                                            </div>
                                            <div class="mb-3">
                                                <a href="#" style="color: #4BDE3E; text-decoration: none">Lupa Password?</a>
                                            </div>
                                            <div class="mb-3" style="float: right;">
                                                <button type="submit" class="btn btn-md btn-default" id="custom-green2"><i class="bi bi-lock"></i> DAFTAR</button>
                                            </div>
                                        <?php echo form_close(); ?>
                                    </div>
                                </div>
                                <div class="mt-5 text-center">
                                    <a href="<?= base_url('/') ?>" class="btn btn-md btn-default" id="custom-green2"><i class="bi bi-arrow-left"></i> Kembali</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php $this->load->view('inc/scripts') ?>

</body>

</html>