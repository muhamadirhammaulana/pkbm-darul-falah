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
            <div class="container">
                <p>
                    <a href="<?=base_url('galeri')?>" class="btn btn-md btn-default" id="custom-green2"><i class="bi bi-arrow-left"></i> Kembali</a>
                </p>
                <h1 class="display-6 text-center mb-3">GALERI : <?=$nama_galeri->nama_galeri?></h1>
                <!-- Galeri Foto -->
                <h3 class="text-left">FOTO</h3>
                <?php if ($jml_foto->jml_foto == 0) { ?>
                <div class="text-center"><p>Tidak Ada Foto</p></div>
                <?php } else { ?>
                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3 mb-5">
                    <?php foreach ($detail_foto as $key => $value) { ?>
                    <div class="col mt-3">
                        <div class="card shadow-sm">
                            <img src="<?=base_url('assets/image/foto_galeri/'.$value->foto)?>" class="bd-placeholder-img card-img-top" width="100%" height="225" alt="Thumbnail">
                        </div>
                    </div>
                    <?php } ?>
                </div>
                <?php } ?>
                <!-- End Galeri Foto -->

                <!-- Galeri Video -->
                <h3 class="text-left">VIDEO</h3>
                <?php if ($jml_video->jml_video == 0) { ?>
                <div class="text-center"><p>Tidak Ada Video</p></div>
                <?php } else { ?>
                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3 mb-5">
                    <?php foreach ($detail_video as $key => $value) { ?>
                    <div class="col mt-3">
                        <div class="card shadow-sm">
                            <div class="ratio ratio-16x9">
                                <video controls class="embed-responsive-item" preload="metadata">
                                    <source src="<?=base_url('assets/video/video_galeri/'.$value->video)?>" type="video/mp4" />
                                </video>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                </div>
                <?php } ?>
                <!-- End Galeri Video -->

            </div>
        </main>

        <?php $this->load->view('inc/scripts') ?>

</body>

</html>