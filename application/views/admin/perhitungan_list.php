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
								<li class="breadcrumb-item active">Perhitungan</li>
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
								Perhitungan
							</h3>
						</div>
						<div class="card-body">
							<h5>
								Nilai Profil Standar
							</h5>
							<table class="table">
								<thead>
									<tr>
										<th></th>
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
									<tr>
										<th>Nilai Profil Standar</th>

										<?php

										if ($kriteria) {
											foreach ($kriteria as $k) {
												$findNilaiProfilStandar = $this->profile_standar_model->findNilaiProfilStandar($k->id);
												$nilaiProfile = isset($findNilaiProfilStandar->nilai_profile) ? $findNilaiProfilStandar->nilai_profile : 0;

												echo '<td class="text-center">' . $nilaiProfile . '</td>';
											}
										}

										?>

									</tr>
								</tbody>
							</table>

							<br>
							<h5 class="my-3">
								Nilai Profil Siswa
							</h5>

							<table class="table table-hover" id="example1">
								<thead>

									<tr>
										<th>Nama</th>
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
									<?php

									if ($siswa) {
										foreach ($siswa as $s) {
											echo '<tr>';
											echo '<td>' . $s->nama . '</td>';

											if ($kriteria) {
												foreach ($kriteria as $k) {
													$findNilai = $this->penilaian_model->findNilai($s->id, $k->id);
													$nilai_profile = isset($findNilai->nilai_profile) ? $findNilai->nilai_profile : 0;

													echo '<td class="text-center">' . $nilai_profile . '</td>';
												}
											}

											echo '</tr>';
										}
									}

									?>
								</tbody>

							</table>

							<br>
							<h5 class="my-3">
								Gap
							</h5>

							<table class="table table-hover" id="example2">
								<thead>
									<tr>
										<th>Nama</th>
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

									<?php

									if ($siswa) {
										foreach ($siswa as $s) {
											echo '<tr>';
											echo '<td>' . $s->nama . '</td>';

											if ($kriteria) {
												foreach ($kriteria as $k) {
													$findNilai = $this->penilaian_model->findNilai($s->id, $k->id);
													$gap = isset($findNilai->gap) ? $findNilai->gap : 0;

													echo '<td class="text-center">' . $gap . '</td>';
												}
											}

											echo '</tr>';
										}
									}

									?>
								</tbody>

							</table>

							<br>
							<h5 class="my-3">
								Nilai Gap (Bobot)
							</h5>

							<table class="table table-hover" id="example3">
								<thead>
									<tr>
										<th>Nama</th>
										<?php

										if ($kriteria) {
											foreach ($kriteria as $k) {
												echo '<th class="text-center">' . $k->kriteria . '</th>';
											}
										}

										if ($jenis) {
											foreach ($jenis as $j) {
												echo '<th class="text-center"> Nilai ' . $j->jenis . '(' . $j->nilai_factor . '%)</th>';
											}
										}
										?>
										
										<th class="text-center">Nilai</th>
									</tr>
								</thead>

								<tbody>
									<?php

									if ($siswa) {
										foreach ($siswa as $s) {
											echo '<tr>';
											echo '<td>' . $s->nama . '</td>';

											if ($kriteria) {
												foreach ($kriteria as $k) {
													$findNilai = $this->penilaian_model->findNilai($s->id, $k->id);
													$bobot = isset($findNilai->bobot) ? $findNilai->bobot : 0;

													echo '<td class="text-center">' . $bobot . '</td>';
												}
											}

											if ($jenis) {
												foreach ($jenis as $j) {
													$findRataRata = $this->penilaian_model->findNilaiRataRata($s->id, $j->nilai_factor);
													$nilaiRataRata = isset($findRataRata->avg_gap) ? $findRataRata->avg_gap : 0;

													echo '<td class="text-center">' . $nilaiRataRata . '</td>';
												}
											}

											$rangking = $this->penilaian_model->findRangking($s->id);

											echo '<td class="text-center">' . $rangking . '</td>';

											echo '</tr>';
										}
									}

									?>
								</tbody>

								<tr>
									<th></th>
									<?php

									if ($kriteria) {
										foreach ($kriteria as $k) {
											echo '<th class="text-center">' . $k->jenis . '</th>';
										}
									}

									?>
									<th></th>
									<th></th>
									<th></th>
								</tr>


							</table>

							<br>
							<h5 class="my-3">
								Rekomendasi
							</h5>

							<table class="table table-hover" id="example4">
								<thead>
									<tr>
										<th>Nama</th>
										<th class="text-center">Nilai</th>
									</tr>
								</thead>
								<tbody>
									<?php
									$sortingArray = [];
									if ($siswa) {
										foreach ($siswa as $s => $val) {
											$rangking = $this->penilaian_model->findRangking($val->id);
											$sortingArray[$val->id] = $rangking;
										}
									}

									arsort($sortingArray);

									$rankArray = [];
									$jumlah = 1;
									if ($sortingArray) {
										foreach ($sortingArray as $s => $v) {
											$siswa = $this->siswa_model->find($s);
											$rankArray[] = [
												'id' => $s,
												'nama' => $siswa->nama,
												'rangking' => $v
											];

											$jumlah++;

											
										}
									}

									if ($rankArray) {
										foreach ($rankArray as $s => $val) {
											echo '<tr>';
											echo '<td>' . $val['nama'] . '</td>';
											echo '<td class="text-center">' . $val['rangking'] . '</td>';
											echo '</tr>';
										}
									}
									?>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</section>
		</div>
	</div>

	<?php $this->load->view('admin/_partials/footer.php') ?>

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

			$("#example2").DataTable({
				"responsive": true,
				"lengthMenu": [
					[10, 25, 50, 100, -1],
					[10, 25, 50, 100, "All"]
				],
				"autoWidth": false,
			});

			$("#example3").DataTable({
				"responsive": true,
				"lengthMenu": [
					[10, 25, 50, 100, -1],
					[10, 25, 50, 100, "All"]
				],
				"autoWidth": false,
			});

			$("#example4").DataTable({
				"responsive": true,
				"order": [
					[
						1, 'desc'
					]
				],
				"lengthMenu": [
					[10, 25, 50, 100, -1],
					[10, 25, 50, 100, "All"]
				],
				"autoWidth": false,
			});
		});
	</script>
	
</body>



</html>
