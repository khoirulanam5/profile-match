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
								<li class="breadcrumb-item active">Form Edit GAP</li>
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
								Form Edit GAP
							</h3>
						</div>
						<div class="card-body">
							<form action="" method="POST">
								<div class="form-group">
									<label for="nama">GAP*</label>
									<input type="text" name="gap"
										class="form-control" 
										placeholder="GAP" 
										required readonly
										title="Masukkan Selisih"
										value="<?= $gap->gap ?>"/>
								</div>

								<div class="form-group">
									<label for="nama">Bobot*</label>
									<input type="text" name="bobot" placeholder="GAP" title="Masukkan Bobot" value="<?= $gap->bobot ?>" class="form-control" required/>
								</div>
								<div class="form-group">
									<label for="nama">Keterangan*</label>
									<input type="text" name="keterangan" placeholder="GAP" title="Masukkan Bobot" value="<?= $gap->keterangan ?>" class="form-control" required/>
								</div>
								
								<div>
									<a href="<?= site_url('admin/gap') ?>"><button type="button" class="btn btn-default">Batal</button></a>
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
