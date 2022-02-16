<?php $this->load->view('layout/_header') ?>
<?php $this->load->view('layout/_navbar') ?>


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
		<div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 gy-4 mt-4">
			<?php foreach ($galery as $value) : ?>
				<div class="col">
					<div class="gallery-img">
						<img src="<?= base_url("$value->url") ?>" class="gallery-item" alt="galery">
					</div>
				</div>
			<?php endforeach; ?>
		</div>
	</div>
</section>
<!-- galery end -->


<?php $this->load->view('layout/_footer') ?>
