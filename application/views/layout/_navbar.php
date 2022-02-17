
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
					<a class="nav-link <?= $this->uri->segment(2) == '' ? 'active' : '';
					?>" aria-current="page" href="<?= site_url('/') ?>">Home</a>
				</li>
				<li class="nav-item">
					<a class="nav-link <?= $this->uri->segment(2) == 'profile' ? 'active' : '';
					?>" href="<?= site_url('/home/profile') ?>">Profil</a>
				</li>
				<li class="nav-item">
					<a class="nav-link <?= $this->router->fetch_class() == 'galery' ? 'active' : '';
					?>" href="<?= site_url('/galery') ?>">Galeri</a>
				</li>

			</ul>
		</div>
	</div>
</nav>
<!-- navbar end -->
