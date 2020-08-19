<style>
	body {
		background: #6D84F9;
	}
</style>
<div id="layoutAuthentication">
	<div id="layoutAuthentication_content">
		<main>
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-lg-7">
						<div class="card shadow-lg border-0 rounded-lg mt-5">
							<div class="card-header">
								<h3 class="text-center font-weight-light my-4">Create Account</h3>
							</div>
							<div class="card-body">
								<form method="POST" action="<?= base_url('auth/register'); ?>">
									<div class="form-group">
										<label class="small mb-1" for="">Full Name</label>
										<input class="form-control py-4" id="inputName" name="name" type="text" aria-describedby="" placeholder="Enter full Name" value="<?= set_value('name'); ?>" />
										<?= form_error('name', '<small class="text-danger pl-2">', '</small>'); ?>
									</div>
									<div class="form-group">
										<label class="small mb-1" for="inputEmailAddress">Username</label>
										<input class="form-control py-4" id="inputUsername" name="username" type="text" aria-describedby="emailHelp" placeholder="Enter username" value="<?= set_value('username'); ?>" />
										<?= form_error('username', '<small class="text-danger pl-2">', '</small>'); ?>
									</div>
									<div class="form-row">
										<div class="col-md-6">
											<div class="form-group">
												<label class="small mb-1" for="inputPassword">Password</label>
												<input class="form-control py-4" id="inputPassword" name="password1" type="password" placeholder="Enter password" />
												<?= form_error('password1', '<small class="text-danger pl-2">', '</small>'); ?>
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label class="small mb-1" for="inputConfirmPassword">Confirm
													Password</label>
												<input class="form-control py-4" id="inputConfirmPassword" name="password2" type="password" placeholder="Confirm password" />
											</div>
										</div>
									</div>
									<div class="form-group">
										<label class="small mb-1" for="inputEmailAddress">Level</label>
										<br>
										<div class="form-check form-check-inline">
											<input class="form-check-input" type="radio" name="level" id="inlineRadio1" value="admin">
											<label class="form-check-label" for="inlineRadio1">Admin</label>
										</div>
										<div class="form-check form-check-inline">
											<input class="form-check-input" type="radio" name="level" id="inlineRadio2" value="petugas">
											<label class="form-check-label" for="inlineRadio2">Petugas</label>
											<?= form_error('level', '<small class="text-danger pl-2">', '</small>'); ?>
										</div>
									</div>
									<div class="form-group mt-4 mb-0"><button class="btn btn-primary btn-block" type="submit">Create Account</button></div>
								</form>
							</div>
							<div class="card-footer text-center">
								<div class="small"><a href="<?= base_url() ?>">Have an account? Go to login</a></div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</main>
	</div>