<style>
	.form-control {
		border: 0;
		outline: 0;
		border-bottom: 1px solid black;
	}

	body {
		background: #6D84F9;
	}

	div {
		border-radius: 20px;
	}

	.absolute {
		position: absolute;
		width: 400px;
		height: 500px;
		background-color: #1C4A6B;
	}

	.relative {
		position: relative;
		width: 500px;
		height: 470px;
		background-color: white;
		border-color: #696;
	}

	#rel1 {
		margin: 6.1% 0px 0px 48%;
	}

	#abs1 {
		top: 10%;
		left: 20%;
	}

	img {
		margin: 10% 0px 0px 33%;
		width: 35%;
	}

	.row {
		padding-top: 100px;
	}
</style>


<form method="POST" action="<?= base_url('auth'); ?>">
	<div id="rel1" class="relative shadow-lg">
		<div class="l" style="font-size: 35px; padding-top: 2%;">
			<a href="<?= base_url() ?>auth" style="color: #3290FC; padding-left: 32%;">Admin</a>
			<a href="<?= base_url() ?>" style="color: grey;">Siswa</a>
		</div>
		<?= $this->session->flashdata('message'); ?>
		<div class="container pr-3 pl-4 pt-4">
			<div class="form-group">
				<label for="exampleFormControlInput1">Username</label>
				<input type="text" class="form-control" id="username" placeholder="username" value="<?= set_value('username'); ?>" name="username">
				<?= form_error('username', '<small class="text-danger pl-2">', '</small>'); ?>
			</div>
			<div class="form-group">
				<label for="exampleFormControlInput1">Password</label>
				<input type="password" class="form-control" id="password" placeholder="password" name="password">
				<?= form_error('password', '<small class="text-danger pl-2">', '</small>'); ?>
			</div>
		</div>
		<div class="row ml-4 pb-2 pl-5">
			<div class="col">
				<button type="submit" class="btn btn-primary" style="border-radius: 10px; width: 60%">Sign
					In
				</button>
			</div>
			<div class="col">
				<a href="<?= base_url() ?>" style="color: #3290FC">login siswa</a>
			</div>
		</div>
	</div>
</form>
<div id="abs1" class="absolute shadow-lg">
	<img src="<?= base_url() ?>assets/img/invoice.png" alt="...">
	<h1 style="font-family: 'Bebas Neue'; font-size: 50px; padding-left: 12%; color: white" class="pt-5">SMK Taruna
		Bhakti</h1>
	<p style="font-family: 'Antic Didone'; color: white; padding-left: 28%;">Our Quality Ask Be Different</p>
	<br>
	<p style="color: white; padding-left: 13%; font-size: 40px;">Pembayaran SPP</p>
</div>