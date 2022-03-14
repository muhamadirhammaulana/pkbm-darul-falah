<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <?php $this->load->view('inc/styles') ?>

    <title><?=strtoupper($profil->nama);?> :: GALERI</title>

</head>

<body>
    <!-- Header -->
    <header>

        <!-- Nav -->
        <?php $this->load->view('inc/nav') ?>
        <!-- End Nav -->

        <main class="mt-3">
            <div class="container mb-5">
                <p>
                    <a href="<?= base_url('/') ?>" class="btn btn-md btn-default" id="custom-green2"><i class="bi bi-arrow-left"></i> Kembali</a>
                </p>
                <h1 class="display-6 text-center">GALERI PKBM</h1>
                
                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3 mt-3 mb-3">
                    <?php foreach ($galeri as $key => $value) { ?>
                    <div class="col mt-3">
                        <div class="card shadow-sm">
                            <?php
                                if ($value->sampul_galeri != "") {
                                    $image = $value->sampul_galeri;
                                } else {
                                    $image = "default.png";
                                }
                            ?>
                            <img src="<?=base_url('assets/image/sampul_galeri/'.$image)?>" class="bd-placeholder-img card-img-top" width="100%" height="225" alt="Thumbnail">
                            <div class="card-body text-center">
                                <a class="card-title text-decoration-none text-dark stretched-link" href="<?=base_url('/galeri/detail-galeri/'.$value->id_galeri)?>"><?=$value->nama_galeri?></a>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                </div>
                <div class="row">
                    <div class="col">
                        <?= $paginasi; ?>
                    </div>
                </div>
                <!-- End Galeri Foto -->

            </div>
        </main>

        <?php $this->load->view('inc/scripts') ?>

</body>

</html>