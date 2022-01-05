<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <?php $this->load->view('inc/styles') ?>

    <title><?=strtoupper($profil->nama);?> :: INFORMASI BERITA</title>

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
                <h1 class="display-6 text-center">INFORMASI BERITA</h1>
                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3 mt-3 mb-3">
                    <?php foreach ($berita as $key => $value) { ?>
                        <div class="col mt-3">
                            <div class="card shadow-sm h-100">
                                <img src="<?= base_url('assets/image/foto_berita/'.$value->foto_berita) ?>" class="bd-placeholder-img card-img-top" width="100%" height="225" alt="Thumbnail">
                                <div class="card-body d-flex flex-column">
                                    <?php
                                        $judul_berita = substr(strip_tags($value->judul_berita),0,60);
                                        $panjang_judul = strlen($judul_berita);

                                        if ($panjang_judul >= 60) {
                                            $titik_judul = "...";
                                        } else {
                                            $titik_judul = "";
                                        }
                                    ?>
                                    <h5 class="card-title"><?=$judul_berita?><?=$titik_judul?></h5>
                                    <small class="card-subtitle mb-2 text-muted">posted by <?= $value->nama_user ?></small>
                                    <?php
                                        $isi_berita = substr(strip_tags($value->isi_berita),0,150);
                                        $panjang_isi = strlen($isi_berita);

                                        if ($panjang_isi >= 150) {
                                            $titik_isi = "...";
                                        } else {
                                            $titik_isi = "";
                                        }
                                    ?>
                                    <p class="card-text"><?= $isi_berita ?><?= $titik_isi ?></p>
                                    <div class="d-flex justify-content-between align-items-center mt-auto">
                                        <div class="btn-group">
                                            <a href="<?=base_url('/informasi-berita/'.$value->slug_berita)?>" class="btn btn-sm btn-outline-secondary">View</a>
                                        </div>
                                        <small class="text-muted"><?= $value->tgl_berita ?></small>
                                    </div>
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
                
            </div>
        </main>

        <?php $this->load->view('inc/scripts') ?>

</body>

</html>