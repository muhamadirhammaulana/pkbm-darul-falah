<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <?php $this->load->view('inc/styles') ?>

    <title><?=strtoupper($profil->nama);?> :: LEGALITAS</title>

</head>

<body>
    <!-- Header -->
    <header>

        <!-- Nav -->
        <?php $this->load->view('inc/nav') ?>
        <!-- End Nav -->

        <main class="mt-3">
            <div class="container">
                <p>
                    <a href="<?= base_url('/') ?>" class="btn btn-md btn-default" id="custom-green2"><i class="bi bi-arrow-left"></i> Kembali</a>
                </p>
                <h1 class="display-6 text-center mb-5">LEGALITAS PKBM</h1>
                <?php foreach ($legalitas as $key => $value) { ?>
                    <img src="<?=base_url('assets/image/foto_legalitas/'.$value->foto_legalitas)?>" class="img-fluid mb-5" id="img-border" alt="NPSN">
                <?php } ?>
            </div>
        </main>

        <?php $this->load->view('inc/scripts') ?>

    </body>

</html>