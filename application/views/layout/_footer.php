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


<script>
	$(document).ready(function (){
		Dropzone.options.dropzoneFrom = {
			autoProcessQueue: false,
			acceptedFiles: ".jpg,.jpeg,.png",
			init: function (){
				var submitAll = document.querySelector("#submitAll");
				myDropzone = this;
				submitAll.addEventListener("click", function (){
					myDropzone.ProcessQueue();
				})
				this.on("complete", function (){
					if (this.getQueuedFiles().lenght == 0 && this.getUploadingFiles().lenght == 0) {
						var _this = this;
						_this.removeAllFiles();
					}
				})
			}
		}
	})
</script>


</body>
</html>
