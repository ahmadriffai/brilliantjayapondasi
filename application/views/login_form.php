<?php $this->load->view('layout/_header.php'); ?>
<?php $this->load->view('layout/_navbar.php'); ?>

<section class="section-padding">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-6">
				<?php if($this->session->flashdata('message_login_error')): ?>
					<div class="alert alert-danger">
						<?= $this->session->flashdata('message_login_error') ?>
					</div>
				<?php endif ?>
				<div class="card">
					<div class="card-body">
						<form method="post" action="">
							<div class="mb-3">
								<label for="exampleInputEmail1" class="form-label">Email address</label>
								<input type="text" name="username" class="form-control <?= form_error('username') ? 'invalid' : '' ?>"
									   placeholder="Your username or email" value="<?= set_value('username') ?>" required />
								<div class="invalid-feedback">
									<?= form_error('username') ?>
								</div>
							</div>
							<div class="mb-3">
								<label for="exampleInputPassword1" class="form-label">Password</label>
								<input type="password" name="password" class="form-control <?= form_error('password') ? 'invalid' : '' ?>"
									   placeholder="Enter your password" value="<?= set_value('password') ?>" required />
								<div class="invalid-feedback">
									<?= form_error('password') ?>
								</div>
							</div>

							<button type="submit" class="btn btn-primary">Login</button>
						</form>
					</div>
				</div>
			</div>
		</div>

	</div>

</section>
<?php $this->load->view('layout/_footer.php'); ?>
