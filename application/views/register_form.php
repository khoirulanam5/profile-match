<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>Daftar</title>
		<link rel="icon" href="<?= base_url(); ?>assets/img/smp.png" type="image/png">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="theme-color" content="#0f5934">
		<meta name="msapplication-navbutton-color" content="#0f5934">
		<meta name="apple-mobile-web-app-status-bar-style" content="#0f5934">
		<link rel="stylesheet" href="<?= base_url() ?>assets/plugins/fontawesome-free/css/all.min.css">
		<link rel="stylesheet" href="<?= base_url() ?>assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
		<link rel="stylesheet" href="<?= base_url() ?>assets/css/adminlte.min.css">
	</head>

	<body class="hold-transition register-page">
		<div class="register-box">
			<div class="register-logo">
				<img src="<?= base_url('') ?>assets/img/smp.png" alt="AdminLTE Logo" class="brand-image" style="opacity: .8" width="200px"> <br>
				<a href=""><h4>SMP Kanisius Juwana</h4></a>
			</div>
			<div class="card">
				<div class="card-body register-card-body">
					<p class="login-box-msg"> Form Pendaftaran</p>
					<?php if ($this->session->flashdata('message_register_error')) { ?>
					<div class="alert alert-danger alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            <?=  $this->session->flashdata('message_register_error'); ?>
          </div>
       	 	<?php } ?>
       	 	<?php if ($this->session->flashdata('message_register_success')) { ?>
					<div class="alert alert-success alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            <?=  $this->session->flashdata('message_register_success'); ?>
          </div>
       	 	<?php } ?>
					<form action="" method="post">
						<div class="mb-3">
							<input type="text" name="nis" id="nis" class="form-control" placeholder="NIS"  value="<?= set_value('nis'); ?>">
						</div>
						<div class="mb-3">
							<input type="text" name="nama" class="form-control" placeholder="Nama Lengkap" >
						</div>
						<div class="row">
							<div class="col-7">
								<div class="mb-3">
									<select name="jenis_kelamin" id="jenis_kelamin" class="form-control">
										<option value="">---Jenis Kelamin---</option>
										<option value="Laki-laki">Laki-laki</option>
										<option value="Perempuan">Perempuan</option>
									</select>
								</div>
							</div>
							<div class="col-5">
								<div class="mb-3">
									<?= form_dropdown('kelas', [
										null => '---Kelas---',
										'VII' => 'VII',
										'VIII' => 'VIII',
										'IX' => 'IX'
									], set_value('kelas'), 'class="form-control"') ?>
								</div>
							</div>
						</div>
						<div class="mb-3">
							<textarea name="alamat" cols="2" rows="2" class="form-control" placeholder="Alamat"></textarea>
						</div>
						<div class="row">
							<div class="col-7">
								<div class="mb-3">
									<input type="text" name="telepon" class="form-control" placeholder="Telepon">
								</div>
							</div>
							<div class="col-5">
								<div class="mb-3">
									<input type="text" name="tahun_daftar" class="form-control" placeholder="Tahun Mendaftar" value="<?= date('Y') ?>">
								</div>
							</div>
						</div>
						<div class="mb-3">
							<input type="text" name="nama_wali" class="form-control" placeholder="Nama Wali" >
						</div>
						<div class="row">
							<div class="col-6">
								<div class="mb-3">
									<input type="password" name="password" class="form-control" placeholder="Password" >
								</div>
							</div>
							<div class="col-6">
								<div class="mb-3">
									<input type="password" name="repassword" class="form-control" placeholder="Ulangi password" >
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-12">
								<button type="submit" class="btn btn-primary btn-block">Daftar</button>
							</div>
						</div>
					</form>

					<hr>
					<center>
					Kembali ke
					<a href="<?= base_url('') ?>" class="text-center"> Beranda</a>.<br>
					</center>
					<center>
					Sudah punya akun?
					<a href="<?= base_url('') ?>Auth/login/" class="text-center"> Silahkan masuk.</a>
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
