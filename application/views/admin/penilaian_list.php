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
								<li class="breadcrumb-item active">Penilaian Siswa</li>
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
								Penilaian Siswa
							</h3>
						</div>
						<div class="card-body">
							<div class="form-group text-right">
								<a href="<?= site_url('admin/penilaian/new') ?>" class="btn btn-primary" role="button">+ Tambah Penilaian</a>
							</div>
							<table class="table table-hover" id="example1">
								<thead>
									<tr>
										<th rowspan="2" class="text-center align-middle">No</th>
										<th rowspan="2" class="text-center align-middle">NIS</th>
										<th rowspan="2" class="text-center align-middle">Nama Siswa</th>
										<th colspan="<?= count($kriteria) ?>" class="text-center">Kriteria</th>
										<th rowspan="2" style="width: 20%;" class="text-center align-middle">Action</th>
									</tr>
									<tr>
										<?php
										if ($kriteria) {
											foreach ($kriteria as $k) {
												echo '<th class="text-center">' . $k->kriteria . '</th>';
											}
										}
										?>
									</tr>
								</thead>
								<tbody>
									<?php $sn = 1 ?>


									<?php foreach ($siswa as $s) { ?>
										<tr>
											<td>
												<div scope="row"><?= $sn ?></div>
											</td>
											<td>
												<div><?= $s->nis ?></div>
											</td>
											<td>
												<div><?= $s->nama ?></div>
											</td>
											<!-- <td>
												<div><?= $s->kriteria ?></div>
											</td>
											<td>
												<div><?= $s->nilai ?></div>
											</td> -->


											<?php

											if ($kriteria) {
												foreach ($kriteria as $k) {
													$findNilai = $this->penilaian_model->findNilai($s->id, $k->id);
													$nilai = isset($findNilai->nilai) ? $findNilai->nilai : 0;

													echo '<td class="text-center"><div>' . $nilai . '</div></td>';
												}
											}

											?>

											<td class="text-center">

												<div class="action">
													<!-- <a href="<?= site_url('admin/penilaian/edit/' . $s->id_siswa) ?>" class="btn btn-sm btn-warning" role="button">Edit</a> -->
													<a href="<?= site_url('admin/penilaian/edit/' . $s->id) ?>" class="btn btn-sm btn-warning" role="button">Edit</a>
													<a href="#" data-delete-url="<?= site_url('admin/penilaian/delete/' . $s->id) ?>" class="btn btn-sm btn-danger" role="button" onclick="deleteConfirm(this)">Delete</a>
												</div>
											</td>
										</tr>
										<?php $sn++; ?>

									<?php } ?>
								</tbody>
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
		function deleteConfirm(event) {
			Swal.fire({
				title: 'Delete Confirmation!',
				text: 'Are you sure to delete the item?',
				icon: 'warning',
				showCancelButton: true,
				cancelButtonText: 'No',
				confirmButtonText: 'Yes Delete',
				confirmButtonColor: 'red'
			}).then(dialog => {
				if (dialog.isConfirmed) {
					window.location.assign(event.dataset.deleteUrl);
				}
			});
		}

	</script>

	<script>
		$(function() {
			$("#example1").DataTable({
				"responsive": true,
				"lengthMenu": [
					[10, 25, 50, 100, -1],
					[10, 25, 50, 100, "All"]
				],
				"autoWidth": false,
			});

			$('#example2').DataTable({
				"paging": true,
				"lengthChange": false,
				"searching": false,
				"ordering": true,
				"info": true,
				"autoWidth": false,
				"responsive": true,
			});
		});
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
