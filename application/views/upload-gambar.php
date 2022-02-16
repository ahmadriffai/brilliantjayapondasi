<!DOCTYPE html>
<html lang="zxx">
<head>
	<title><?= isset($title) ? $title : '' ?> PT. Berliant Jaya Pondasi </title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- owl carousel css -->
	<link rel="stylesheet" href="<?= base_url('assets/css/owl.carousel.min.css') ?>">
	<!-- font awesome icons -->
	<link rel="stylesheet" href="<?= base_url('assets/css/font-awesome.css') ?>">
	<!-- bootstrap css -->
	<link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css') ?>">
	<!-- main css -->
	<link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>">
	<!-- drag img -->
	<link rel="stylesheet" href="<?= base_url('assets/css/drag-img.css') ?>">

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<link rel="stylesheet" href="https://unpkg.com/dropzone@5/dist/min/dropzone.min.css" type="text/css" />
	<style>
		.dropzone{
			border: 2px dashed #0a53be;
		}
	</style>

</head>
<body>


<!-- navbar start -->
<nav class="navbar navbar-expand-sm sticky-top">
	<div class="container mx-3">

		<a class="navbar-brand" href="#">
			<img src="<?= base_url('assets/img/logo.png') ?>" alt="" width="50px">
			PT. Brillinat Jaya Pondasi
		</a>
		<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
			<i class="fas fa-bars"></i>
		</button>
		<div class="collapse navbar-collapse" id="navbarNav">
			<ul class="navbar-nav ms-auto">
				<li class="nav-item">
					<a class="nav-link" aria-current="page" href="<?= site_url('/auth/logout') ?>">Logout</a>
				</li>
			</ul>
		</div>
	</div>
</nav>
<!-- navbar end -->


<div class="container py-5">
	<div class="row">
		<form action="<?= base_url('galery/insert') ?>"
			  class="dropzone"
			  id="my-awesome-dropzone"></form>

		<button type="button" class="btn btn-1" id="submitAll">Upload</button>
	</div>
</div>


<!-- galery start -->
<section class="gallery">
	<div class="container-lg">
		<div class="row justify-content-center">
			<div class="col-lg-8">
				<div class="section-title">
					<h2 class="text-center">Galery</h2>
				</div>
			</div>
		</div>
		<div class="card">
			<div class="card-body">
				<div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 gy-4 mt-4">
					<?php foreach ($galery as $value) : ?>
						<div class="col">
							<div class="gallery-img shadow-sm">
								<img src="<?= base_url("$value->url") ?>" class="gallery-item" alt="galery">
							</div>
						</div>
					<?php endforeach; ?>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- galery end -->

<!-- footer start -->
<section class="footer">
	<div class="container">
		<div class="row">
			<div class="col-lg-6">
				<div class="footer-col">
					<h3>Hubungi Kami</h3>
					<ul>
						<li>Jl.H.Aning No.80 Kecamatan Cikupa Tangerang-Banten</li>
						<li>085155380996</li>
						<li>0840929098098</li>
					</ul>
				</div>
			</div>
			<div class="col-lg-6">
				<div class="footer-col">
					<h3>Sosial Media</h3>
					<ul>
						<li><a href=""><i class="fab fa-facebook"></i> Facebook</a></li>
						<li><a href=""><i class="fab fa-youtube"></i> youtube</a></li>
						<li><a href=""><i class="fab fa-instagram"></i> instagram</a></li>
						<li><a href=""><i class="fab fa-twitter"></i> twitter</a></li>
					</ul>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-12">
				<p class="copyright-text">&copy; 2022 , Pt. Briliant Jaya Pondasi</p>
			</div>
		</div>
	</div>
</section>
<!-- footer end -->



<!-- jquery js -->
<script src="<?= base_url('assets/js/jquery.min.js') ?>"></script>
<!-- popper js -->
<script src="<?= base_url('assets/js/popper.min.js') ?>"></script>
<!-- bootstrap js -->
<script src="<?= base_url('assets/js/bootstrap.min.js') ?>"></script>
<!-- owl carousel js -->
<script src="<?= base_url('assets/js/owl.carousel.min.js') ?>"></script>
<!-- ScrollIt js -->
<script src="<?= base_url('assets/js/scrollIt.min.js') ?>"></script>
<!-- main js -->
<script src="<?= base_url('assets/js/main.js') ?>"></script>
<!-- drag js -->
<script src="<?= base_url('assets/js/drag-img.js') ?>"></script>

<script src="<?= base_url('assets/js/dropzone.min.js') ?>"></script>


<script>
	Dropzone.autoDiscover = false;

	var myDropzone = new Dropzone(".dropzone", {
		autoProcessQueue: false,
		parallelUploads: 10
	})

	$("#submitAll").click(function (){
		myDropzone.processQueue();
		window.setInterval('refresh()', 10);
	});
</script>


</body>
</html>
