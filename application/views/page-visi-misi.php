<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <?php $this->load->view('inc/styles') ?>

    <title><?=strtoupper($profil->nama);?> :: VISI MISI</title>

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
              	<h1 class="display-6 text-uppercase text-center">Visi, Misi dan Tujuan <?=$profil->nama?></h1>
                <p class="lead">
                	VISI
                    <div>
                        <?=$visimisi->visi?>
                    </div>
                </p>
                <p class="lead">
                	MISI
                    <div>
                        <?=$visimisi->misi?>
                    </div>
               	</p>
      			<p class="lead">
                	TUJUAN
                    <div>
                        <?=$visimisi->tujuan?>
                    </div>
               	</p>
            </div>
        </main>

        <?php $this->load->view('inc/scripts') ?>
</body>

</html>