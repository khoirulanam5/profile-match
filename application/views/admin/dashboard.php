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
								<li class="breadcrumb-item active">Dashboard</li>
							</ol>
						</div>
						<!-- /.col -->
					</div>
					<!-- /.row -->
				</div>
				<!-- /.container-fluid -->
			</div>
			<section class="content">
				<div class="container-fluid">
					<div class="row">
						<div class="col-lg-3 col-6">
							<!-- small box -->
							<div class="small-box bg-info">
								<div class="inner">
									<h3><?= $total_k; ?></h3>

									<p>Data Kriteria</p>
								</div>
								<div class="icon">
									<i class="fas fa-fw fa-folder"></i>
								</div>
								<a href="<?= base_url('admin/Kriteria') ?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
							</div>
						</div>
						<!-- ./col -->
						<div class="col-lg-3 col-6">
							<!-- small box -->
							<div class="small-box bg-success">
								<div class="inner">
									<h3><?= $total_sk; ?></h3>

									<p>Data Sub Kriteria</p>
								</div>
								<div class="icon">
									<i class="fas fa-fw fa-folder"></i>
								</div>
								<a href="<?= base_url('admin/Kriteria') ?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
							</div>
						</div>
						<!-- ./col -->
						<div class="col-lg-3 col-6">
							<!-- small box -->
							<div class="small-box bg-warning">
								<div class="inner">
									<h3><?= $total_s; ?></h3>

									<p>Data Siswa</p>
								</div>
								<div class="icon">
									<i class="fas fa-fw fa-folder"></i>
								</div>
								<a href="<?= base_url('admin/siswa') ?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
							</div>
						</div>
						<!-- ./col -->
						<div class="col-lg-3 col-6">
							<!-- small box -->
							<div class="small-box bg-danger">
								<div class="inner">
									<h3><?= $total_n; ?></h3>

									<p>Data Penilaian</p>
								</div>
								<div class="icon">
									<i class="fas fa-fw fa-folder"></i>
								</div>
								<a href="<?= base_url('admin/penilaian') ?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
							</div>
						</div>
						<!-- ./col -->
					</div>
					<div class="card card-primary card-outline">
						<div class="card-header">
							<h3 class="card-title">
								Dashboard
							</h3>
						</div>
						<div class="card-body">
							<center>
								<div class="col-lg-12 col-md-8 col-sm-12">
									<img class="img-fluid" src="<?= base_url(); ?>assets/img/beranda.png" alt="Photo">
								</div>
							</center>
						</div>
					</div>
				</div>
			</section>
		</div>

	</div>
	<?php $this->load->view('admin/_partials/footer.php') ?>
</body>

</html>
