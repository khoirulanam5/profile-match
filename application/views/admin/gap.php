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
								<li class="breadcrumb-item active">List Data Selisih (GAP)</li>
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
	        <div class="card card-primary card-outline">
						<div class="card-header">
							<h3 class="card-title">
								List Data Selisih (GAP)
							</h3>
						</div>
						<div class="card-body">
							<table class="table">
								<thead>
									<tr>
										<th>No</th>
										<th>GAP</th>
										<th>Bobot</th>
										<!-- <th>Keterangan</th> -->
										<th style="width: 50%;" class="txt-center">Keterangan</th>
										<!-- <th>Aksi</th> -->
									</tr>
								</thead>
								<?php $sn = 1 ?>
									<tbody>
									
										<?php foreach($gap as $g){ ?>
										<tr>
											<td>
												<div scope="row"><?= $sn ?></div>
											</td>
											<td>
												<div><?= $g->gap ?></div>
											</td>
											<td>
												<div><?= $g->bobot ?></div>
											</td>
											<td>
												<div><?= $g->keterangan ?></div>
											</td>
											
											<!-- <td>
												<div class="action">
													<a href="<?= site_url('admin/gap/edit/'.$g->id) ?>" class="btn btn-sm btn-warning" role="button">Edit</a>
													
												</div>
											</td> -->
											
										</tr>
										
									</tbody>
									<?php $sn++; ?>

									<?php } ?>
							</table>
						</div>
					</div>
				</div>
			</section>
		</div>
	</div>

	<?php $this->load->view('admin/_partials/footer.php') ?>

	<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
	<script>
		function deleteConfirm(event){
			Swal.fire({
				title: 'Delete Confirmation!',
				text: 'Are you sure to delete the item?',
				icon: 'warning',
				showCancelButton: true,
				cancelButtonText: 'No',
				confirmButtonText: 'Yes Delete',
				confirmButtonColor: 'red'
			}).then(dialog => {
				if(dialog.isConfirmed){
					window.location.assign(event.dataset.deleteUrl);
				}
			});
		}
	</script>

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
</body>

</html>
