<!DOCTYPE html>
<html lang="en">

<head>
	<?php $this->load->view('admin/_partials/head.php') ?>
</head>

<body class="hold-transition sidebar-mini layout-fixed text-sm">
  <div class="wrapper">
		<?php $this->load->view('admin/_partials/side_nav.php') ?>
		<div class="content-wrapper">
			<div class="content-header">
				<div class="container-fluid">
					<div class="row mb-2">
						<!-- /.col -->
						<div class="col-sm-12">
							<ol class="breadcrumb float-sm-right">
								<li class="breadcrumb-item"><a href="#">Home</a></li>
								<li class="breadcrumb-item active">Form Edit Siswa</li>
							</ol>
						</div>
						<!-- /.col -->
					</div>
					<!-- /.row -->
				</div>
			</div>
			<section class="content">
				<div class="container-fluid">
	        <div class="card card-primary card-outline">
						<div class="card-header">
							<h3 class="card-title">
								Form Edit Siswa
							</h3>
						</div>
						<div class="card-body">
							<form action="" method="POST">
								<div class="row">
									<div class="col-6">
										<div class="form-group">
											<label for="nis">NIS</label>
											<input type="text" name="nis" placeholder="NIS Siswa" class="form-control" required title="Masukkan NIS Siswa" value="<?= $siswa->nis ?>" readonly/>
										</div>
									</div>
									<div class="col-6">
										<div class="form-group">
											<label for="nama">Nama Lengkap</label>
											<input type="text" name="nama" placeholder="Nama Lengkap Siswa" class="form-control" required title="Masukkan Nama Lengkap Siswa" value="<?= $siswa->nama ?>"/>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-6">
										<div class="form-group">
											<label for="jenis_kelamin">Jenis Kelamin</label>
											<select name="jenis_kelamin" required="required" class="form-control" value="<?php echo $siswa->jenis_kelamin ?>">
												<option <?php if($siswa->jenis_kelamin=='Laki-laki') echo 'selected'?> value="Laki-laki">Laki-laki</option>
												<option <?php if($siswa->jenis_kelamin=='Perempuan') echo 'selected'?> value="Perempuan">Perempuan</option>
											</select>
										</div>
									</div>
									<div class="col-6">
										<div class="form-group">
											<label for="telepon">Telepon</label>
											<input type="text" name="telepon" placeholder="Telepon" class="form-control" required title="Masukkan Telepon" value="<?= $siswa->telepon ?>"/>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-6">
										<div class="form-group">
											<label for="nama_wali">Nama Wali</label>
											<input type="text" name="nama_wali" placeholder="Nama Wali Siswa" class="form-control" required title="Masukkan Nama Wali Siswa" value="<?= $siswa->nama_wali ?>"/>
										</div>
									</div>
									<div class="col-6">
										<div class="form-group">
											<label for="kelas">Kelas</label>
											<select id="kelas" name="kelas" required="required" class="form-control" value="<?php echo $siswa->kelas ?>">
											<option <?php if($siswa->kelas=='VII') echo 'selected'?> value="VII">VII</option>
											<option <?php if($siswa->kelas=='VIII') echo 'selected'?> value="VIII">VIII</option>
											<option <?php if($siswa->kelas=='IX') echo 'selected'?> value="IX">IX</option>
											</select>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-6">
										<div class="form-group"> 
											<label>Alamat</label> 
											<textarea name="alamat" placeholder="Masukkan Alamat" class="form-control"><?= $siswa->alamat ?></textarea>
										</div>
									</div>
									<div class="col-6">
										<div class="form-group">
											<label for="tahun_daftar">Tahun Daftar</label>
											<input type="text" name="tahun_daftar" placeholder="Tahun Daftar" class="form-control" required title="Masukkan Tahun Daftar" value="<?= $siswa->tahun_daftar ?>"/>
										</div>
									</div>
								</div>
								<div class="col-6">
									<div class="form-group">
										<label for="tahun_daftar">Password</label>
										<input type="text" name="pass" placeholder="Password" class="form-control" title="Masukkan Password"/>
									</div>
								</div>
								
								
								<div>
									<a href="<?= site_url('admin/siswa') ?>"><button type="button" class="btn btn-default">Batal</button></a>
									<button type="submit" name="simpan" class="btn btn-primary">Simpan</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</section>
		</div>
	</div>
	<?php $this->load->view('admin/_partials/footer.php') ?>
</body>
</html>
