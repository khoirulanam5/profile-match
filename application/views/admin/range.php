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
								<li class="breadcrumb-item active">Setting Durasi Daftar</li>
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
								Setting Durasi Daftar
							</h3>
						</div>
						<div class="card-body">
							<form action="" method="POST">

								<input type="hidden" name="id" value="<?= $setting->id ?>">
								<div class="row">
									<div class="col-3">
										<div class="form-group">
											<label for="nama">Tanggal Mulai*</label>
											<input type="date" name="tgl_mulai" value="<?= $setting->tgl_mulai ?>" class="form-control" required/>
										</div>
									</div>
									<div class="col-3">
										<div class="form-group">
											<label for="nama">Tanggal Selesai*</label>
											<input type="date" name="tgl_selesai" value="<?= $setting->tgl_selesai ?>" class="form-control" required/>
										</div>
									</div>
								</div>

								<div>
									<button type="submit" name="simpan" class="btn btn-primary">Update</button>
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

	<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
	
	<?php if ($this->session->flashdata('message')): ?>
		<script>
			const Toast = Swal.mixin({
				toast: true,
				position: 'top-end',
				showConfirmButton: false,
				timer: 3000,
				timerProgressBar: true,
				didOpen: (toast) => {
					toast.addEventListener('mouseenter', Swal.stopTimer)
					toast.addEventListener('mouseleave', Swal.resumeTimer)
				}
			});

			Toast.fire({
				icon: 'success',
				title: '<?= $this->session->flashdata('message') ?>'
			});
		</script>
		<?php $this->session->unset_userdata('message'); ?>
	<?php endif; ?>

</html>
