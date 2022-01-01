<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<?php $this->load->view('inc/styles') ?>
	<link href="<?= base_url('assets/css/carousel.css') ?>" rel="stylesheet">

	<title><?=strtoupper($profil->nama);?></title>
</head>

<body>
	<!-- Header -->
	<header>

		<!-- Nav -->
		<?php $this->load->view('inc/nav') ?>
		<!-- End Nav -->

		<!-- Carousel -->
		<div class="carousel slide mt-4" id="myCarousel" data-bs-ride="carousel">
			<div class="carousel-indicators">
				<button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
				<button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
				<button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
			</div>
			<div class="carousel-inner">
				<div class="carousel-item active">
					<img src="<?= base_url('assets/image/default-slider-1.jpg') ?>" class="bd-placeholder-img" width="100%" height="100%" aria-hidden="true">
					<div class="container">
						<div class="carousel-caption text-start">
							<h1><?=strtoupper($profil->nama);?></h1>
							<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nemo sit nisi non, asperiores natus ex velit ad omnis soluta quibusdam perspiciatis, placeat delectus tenetur suscipit provident cumque inventore commodi reprehenderit!</p>
						</div>
					</div>
				</div>
				<div class="carousel-item">
					<img src="<?= base_url('assets/image/default-slider-2.jpg') ?>" class="bd-placeholder-img" width="100%" height="100%" aria-hidden="true">
					<div class="container">
						<div class="carousel-caption text-start">
							<h1><?=strtoupper($profil->nama);?></h1>
							<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nemo sit nisi non, asperiores natus ex velit ad omnis soluta quibusdam perspiciatis, placeat delectus tenetur suscipit provident cumque inventore commodi reprehenderit!</p>
						</div>
					</div>
				</div>
				<div class="carousel-item">
					<img src="<?= base_url('assets/image/default-slider-1.jpg') ?>" class="bd-placeholder-img" width="100%" height="100%" aria-hidden="true">
					<div class="container">
						<div class="carousel-caption text-start">
							<h1><?=strtoupper($profil->nama);?></h1>
							<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nemo sit nisi non, asperiores natus ex velit ad omnis soluta quibusdam perspiciatis, placeat delectus tenetur suscipit provident cumque inventore commodi reprehenderit!</p>
						</div>
					</div>
				</div>
			</div>
			<!-- Carousel controls -->
			<!-- <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="visually-hidden">Previous</span>
			</button>
			<button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="visually-hidden">Next</span>
			</button> -->
		</div>
		<!-- End Carousel -->

	</header>
	<!-- End Header -->

	<main class="mt-5">
		<div class="container">

			<!-- Card Program -->
			<h1 class="display-6 text-center mb-5">SEGMEN PROGRAM</h1>
			<div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
				<?php foreach ($program as $key => $value) { ?>
				<div class="col mt-3">
					<div class="card shadow-sm" style="height: 370px">
						<img src="<?= base_url('assets/image/foto_program/'.$value->foto_program) ?>" class="bd-placeholder-img card-img-top" width="100%" height="225" alt="Thumbnail">
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
			<!-- End Card Program -->

			<hr class="featurette-divider">

			<!-- Card Informasi -->
			<h1 class="display-6 text-center">SEGMEN INFORMASI</h1>
			<div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3 mt-2">
				<?php foreach ($latest_berita as $key => $value) { ?>
                    <div class="col mt-3">
                        <div class="card shadow-sm h-100">
                            <img src="<?= base_url('assets/image/foto_berita/'.$value->gambar_berita) ?>" class="bd-placeholder-img card-img-top" width="100%" height="225" alt="Thumbnail">
                            <div class="card-body d-flex flex-column">
                                <?php
                                    $judul_berita = substr(strip_tags($value->judul_berita),0,40);
                                    $panjang_judul = strlen($judul_berita);

                                    if ($panjang_judul >= 40) {
                                        $titik_judul = "...";
                                    } else {
                                        $titik_judul = "";
                                    }
                                ?>
                                <h5 class="card-title"><?= $judul_berita ?><?= $titik_judul ?></h5>
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
			<!-- End Card Informasi -->

			<hr class="featurette-divider">

		</div>
	</main>

	<div class="container-fluid mt-5" id="custom-green">
		<div class="py-5">
			<div class="row">
				<div class="col-lg-4 col-md-6 col-sm-12 col-xs-12 mt-3">
					<div class="d-flex w-100 gap-2">
						<div class="iframe-container">
							<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4712.113501641831!2d110.76676800472198!3d-6.721027234724673!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e70dd7c175cec47%3A0x443641f5ddd712df!2sPKBM%20DARUL%20FALAH%20JEPARA!5e0!3m2!1sid!2sid!4v1633745132328!5m2!1sid!2sid" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 col-sm-12 col-xs-12 mt-3">
					<h2><?=strtoupper($profil->nama);?></h2>
					<p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
					<p class="lead lh-md" style="font-size: 18px">
						<i class="bi bi-envelope"></i> &nbsp;<a href="mailto:<?=$profil->email?>" class="text-reset" style="text-decoration: none;"><?=$profil->email?></a>
						<?php foreach ($medsos as $key => $value) { ?>
						<br>
						<i class="bi bi-<?=strtolower($value->jenis_medsos);?>"></i> &nbsp;<a href="<?=$value->link_medsos?>" class="text-reset" style="text-decoration: none;"><?=$value->nama_medsos?></a>
						<?php } ?>
						<br>
						<i class="bi bi-telephone"></i> &nbsp;<a href="#" class="text-reset" style="text-decoration: none;"><?=$profil->no_telp?></a>
					</p>
				</div>
			</div>
		</div>
	</div>

	<footer class="footer mt-auto py-3 bg-light" id="custom-green" style="border-top: 2px solid #FFFFFF;">
		<div class="container text-center">
			<span>Copyright &copy; <?= date('Y') ?> <?=strtoupper($profil->nama);?></span>
		</div>
	</footer>

	<?php $this->load->view('inc/scripts') ?>

</body>

</html>