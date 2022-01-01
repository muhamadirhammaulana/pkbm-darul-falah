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
            <div class="container">
                <p>
                    <a href="<?= base_url('informasi-berita') ?>" class="btn btn-md btn-default" id="custom-green2"><i class="bi bi-arrow-left"></i> Kembali</a>
                </p>
                <div class="d-flex justify-content-center mb-5">
                    <div class="col-10">
                        <div class="row">
                            <div class="col-md-8">
                                <div class="d-flex mb-5">
                                    <div class="col-sm-12" >
                                        <h2><?=$detail_berita->judul_berita?></h2>
                                        <small class="text-muted">
                                            Posted by <?=$detail_berita->nama_user?> &nbsp;&nbsp;|&nbsp;&nbsp; <?=$detail_berita->tgl_berita?>
                                        </small>
                                        <div class="text-center" >
                                            <img src="<?=base_url('assets/image/foto_berita/'.$detail_berita->gambar_berita)?>" class="img-fluid mt-3" alt="">
                                        </div>
                                        <p><?=$detail_berita->isi_berita?></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card border-light bg-light">
                                <div class="d-flex justify-content-center mb-1">
                                    <div class="col-sm-11" >
                                        <h5 class="mt-3 mb-4"><u>Informasi Berita Terbaru</u></h5>
                                        <div class="row">
                                            <?php foreach ($latest_berita as $key => $value) { ?>
                                            <div class="col-sm-12">
                                                <div class="row">
                                                    <div class="col-sm-5 mb-4">
                                                        <a href="<?=base_url('/informasi-berita/'.$value->slug_berita)?>"><img src="<?=base_url('assets/image/foto_berita/'.$value->gambar_berita)?>" class="img-fluid" alt="" width="600px"></a>
                                                    </div>
                                                    <div class="col-sm-7 mb-4 p-0">
                                                        <div>
                                                            <a href="<?=base_url('/informasi-berita/'.$value->slug_berita)?>" class="text-decoration-none text-dark"><strong><?=$value->judul_berita?></strong></a>
                                                        </div>
                                                        <div class="">
                                                            <small class="text-muted p-0">
                                                                <?=$detail_berita->tgl_berita?>
                                                            </small>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <?php } ?>
                                        </div>
                                    </div>
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>

        <?php $this->load->view('inc/scripts') ?>
</body>

</html>