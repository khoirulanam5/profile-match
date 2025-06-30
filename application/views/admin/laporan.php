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
								<li class="breadcrumb-item active">Laporan</li>
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
								Laporan
							</h3>
						</div>
						<div class="card-body">
							<form class="row" method="get">
								<div class="col-2 form-group">
									<label for="">Tahun Daftar</label>
									<input type="number" name="tahun" value="<?php echo $this->input->get('tahun'); ?>" class="form-control" placeholder="Tahun Daftar">
								</div>
								<div class="col-2 form-group">
									<label for="">Jumlah Lolos</label>
									<input type="number" name="jumlah" value="<?php echo $this->input->get('jumlah'); ?>" class="form-control" placeholder="Jumlah Lolos">
								</div>
								<div class="col-2 form-group">
									<label for="">Kelas</label>
									<select name="kelas" class="form-control">
										<option value="">Pilih Kelas</option>
										<option <?php if ($this->input->get('kelas') == 'VII') echo 'selected' ?> value="VII">VII</option>
										<option <?php if ($this->input->get('kelas') == 'VIII') echo 'selected' ?> value="VIII">VIII</option>
										<option <?php if ($this->input->get('kelas') == 'IX') echo 'selected' ?> value="IX">IX</option>
									</select>
								</div>
								<div class="col-3 form-group">
									<button class="btn btn-primary" style="margin-top: 30px;">
										<i class="fa fa-search"></i> Cari
									</button>
									<!-- <a href="<?= base_url('admin/laporan/print') ?>" target="_blank" onclick="download()" style="margin-top: 30px;" class="btn btn-warning"><i class="fa fa-print"></i> Cetak</a> -->
								</div>
								
							</form>
							<center>
								
							</center>
							<button type="button" target="_blank" onclick="download()" class="btn btn-warning"><i class="fa fa-print"></i> Cetak</button>

							<h5 class="my-3">
								Rekomendasi
							</h5>

							<table class="table table-hover">
								<thead>
									<tr>
										<th>No</th>
										<th>NIS</th>
										<th>Nama</th>
										<th>alamat</th>
										<th>Kelas</th>
										<th class="text-center">Nilai</th>
									</tr>
								</thead>
								<tbody>
									<?php
									$sn = 1;

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
												'nis' => $siswa->nis,
												'nama' => $siswa->nama,
												'alamat' => $siswa->alamat,
												'kelas' => $siswa->kelas,
												'rangking' => $v
											];

											$jumlah++;


											if ($jumlah > $setting->jumlah_lolos) {
												break;
											}
										}
									}

									if ($rankArray) {
										foreach ($rankArray as $s => $val) {
											echo '<tr>';
											echo '<td>' . $sn++ . '</td>';
											echo '<td>' . $val['nis'] . '</td>';
											echo '<td>' . $val['nama'] . '</td>';
											echo '<td>' . $val['alamat'] . '</td>';
											echo '<td>' . $val['kelas'] . '</td>';
											echo '<td class="text-center">' . $val['rangking'] . '</td>';
											echo '</tr>';
										}
									}

									$sn++;
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
</body>
<script>
	$("#tb-rekomendasi").DataTable({
		ordering: false,
		paging: true,
		searching: true,
		info: true,
		responsive: false,
		lengthMenu: [
			[10, 25, 50, 100, -1],
			[10, 25, 50, 100, "All"]
		],
		buttons: ['copy', 'csv', 'print', 'excel', 'pdf'],
		 
		dom: "<'row'<'col-md-12 mb-2'B>>" +
			"<'row'<'col-md-6 col-sm-12'l><'col-md-6 col-sm-12'f>r><'table-scrollable't>" +
			"<'row'<'col-md-5 col-sm-12'i><'col-md-7 col-sm-12'p>>",
	});
</script>


<script>
function download() {
	var tahun = $("input[name='tahun']").val();
	var jumlah = $("input[name='jumlah']").val();
	var kelas = $("select[name='kelas']").val();

	window.location.href = "<?= base_url(); ?>admin/laporan/print/?tahun=" + tahun +"&jumlah= "+ jumlah +"&kelas=" + kelas;
}
</script>

</html>
