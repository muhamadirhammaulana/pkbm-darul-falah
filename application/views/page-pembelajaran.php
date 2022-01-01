<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <?php $this->load->view('inc/styles') ?>

    <title><?=strtoupper($profil->nama);?> :: PEMBELAJARAN</title>

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
                <h1 class="display-6 text-center">PROGRAM PEMBELAJARAN</h1>
                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3 mt-3 mb-3">
                    <?php foreach ($program as $key => $value) { ?>
                    <div class="col mt-3">
                        <div class="card shadow-sm" style="height: 370px">
                            <img src="<?=base_url('assets/image/foto_program/'.$value->foto_program)?>" class="bd-placeholder-img card-img-top" width="100%" height="225" alt="Thumbnail">
                            <div class="card-body">
                                <h1 style="font-weight: 400; font-size: 20px"><?=$value->nama_program?></h1>
                                <p class="card-text">
                                    <?=$value->ket_program?>
                                </p>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
			    </div>
            </div>
        </main>

        <?php $this->load->view('inc/scripts') ?>

</body>

</html>