<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>Login</title>
		<link rel="icon" href="<?= base_url(); ?>assets/img/smp.png" type="image/png">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="theme-color" content="#0f5934">
		<meta name="msapplication-navbutton-color" content="#0f5934">
		<meta name="apple-mobile-web-app-status-bar-style" content="#0f5934">
		<link rel="stylesheet" href="<?= base_url() ?>assets/plugins/fontawesome-free/css/all.min.css">
		<link rel="stylesheet" href="<?= base_url() ?>assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
		<link rel="stylesheet" href="<?= base_url() ?>assets/css/adminlte.min.css">
	</head>
	<body class="hold-transition login-page">
		<div class="login-box">
			<div class="login-logo">
				<img src="<?= base_url('') ?>assets/img/smp.png" alt="AdminLTE Logo" class="brand-image" style="opacity: .8" width="200px"> <br>
				<p href=""><h4>SMP Kanisius Juwana</h4></p>
			</div>

			<div class="card">
				<div class="card-body login-card-body">
					<p class="login-box-msg">Masuk untuk melanjutkan</p>
					<?php if ($this->session->flashdata('message_login_error')) { ?>
					<div class="alert alert-danger alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            <?=  $this->session->flashdata('message_login_error'); ?>
          </div>
       	 	<?php } ?>
					<form action="<?= base_url() ?>Auth/login" method="post">
						<div class="input-group mb-3">
							<input type="text" class="form-control" placeholder="Username" id="username" name="username" required="required">
							<div class="input-group-append">
								<div class="input-group-text">
									<span class="fas fa-user"></span>
								</div>
							</div>
						</div>
						<div class="input-group mb-3">
							<input type="password" class="form-control" placeholder="Password" id="password" name="password" required="required">
							<div class="input-group-append">
								<div class="input-group-text">
									<span class="fas fa-lock"></span>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-12">
								<button type="submit" class="btn btn-primary btn-block">Masuk</button>
							</div>
							<!-- /.col -->
						</div>
					</form>

					<hr>
					<center>
					Kembali ke
					<a href="<?= base_url('') ?>" class="text-center"> Beranda</a>.<br>
					</center>
					<center>
					Belum punya akun?
					<a href="<?= base_url('') ?>Auth/daftar/" class="text-center"> Silahkan daftar.</a>
					</center>
					
				</div>
				
			</div>
			<div style="text-align:center">
			Copyright &copy; <?= date('Y') ?> <strong>SPK - Siswa Berprestasi</strong> 
			</div>
		</div>
		<script src="<?= base_url() ?>assets/plugins/jquery/jquery.min.js"></script>
		<script src="<?= base_url() ?>assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
		<script src="<?= base_url() ?>assets/js/adminlte.min.js"></script>
	</body>
</html>
