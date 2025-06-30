<!DOCTYPE html>
<html lang="en">

<head>
	<?php $this->load->view('_partials/head.php') ?>
	<!-- <script src="https://kit.fontawesome.com/bdf7b7ab1d.js" crossorigin="anonymous"></script> -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	

</head>

<body class="hold-transition sidebar-mini layout-fixed text-sm">
  	<div class="wrapper">
		<?php $this->load->view('_partials/navbar.php') ?>

		<div class="content-wrapper">
			<div class="content-header">
				<div class="container-fluid">
					<div class="row mb-2">
						<!-- /.col -->
						<div class="col-sm-12">
							<ol class="breadcrumb float-sm-right">
								<!-- <li class="breadcrumb-item"><a href="#">Home</a></li> -->
								<li class="breadcrumb-item active">Beranda</li>
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
					<div class="card card-success card-outline">
						<div class="card-header">
							
							<ul class="nav nav-pills">
								<li class="nav-item"><a class="nav-link active" href="#tab0" data-toggle="tab">Beranda</a></li>
								<li class="nav-item"><a class="nav-link" href="#tab1" data-toggle="tab">Profile</a></li>
								<li class="nav-item"><a class="nav-link" href="#tab2" data-toggle="tab">Visi & Misi</a></li>
							</ul>
						</div>
						<div class="card-body">
							<div class="tab-content">
								
								<div class="active tab-pane" id="tab0">
									<br>
									<center>
									<div class="col-lg-12 col-md-8 col-sm-12">
										<img class="img-fluid" src="<?= base_url(); ?>assets/img/beranda.png" alt="Photo">
									</div>
									</center>
									<br>
								</div>

								<div class="tab-pane" id="tab1">
									<center>
										<div class="card-text">
											<div class="col-lg-10 col-md-8 col-sm-12">
												<div style="text-align: justify; font-size:15px;">
													<h4>SEJARAH SINGKAT BERDIRINYA SMP KANISIUS JUWANA</h4>
													<p class="mt-0 mb-0">
													SMP Kanisius Juwana, yang beralamat di Jl. Sunan Ngerang 44 Juwana, Desa Kudukeras, Kecamatan Juwana, Kabupaten Pati, didirikan pada tanggal 18 Juli 2016. Sekolah ini merupakan lembaga pendidikan yang berfokus pada pemberian pendidikan pengetahuan umum serta pembentukan karakter siswa. Sekolah ini berkomitmen untuk mencetak generasi muda yang cerdas, berintegritas, dan memiliki keterampilan yang relevan dengan perkembangan zaman. Dalam proses pembelajarannya, SMP Kanisius Juwana juga menanamkan nilai-nilai moral serta membentuk disiplin siswa melalui berbagai aktivitas kegiatan sekolah. Penghargaan untuk siswa berprestasi diberikan sebagai bentuk motivasi agar siswa semakin bersemangat dalam belajar dan aktif berpartisipasi dalam aktivitas baik di lingkungan sekolah maupun di luar sekolah. Evaluasi terhadap siswa berprestasi didasarkan pada nilai akademik, keaktifan dalam kegiatan ekstrakurikuler, dan prestasi lainnya.
														<br><br>
													</p>
												</div>
											</div>
										</div>
									</center>
								</div>

								<div class="tab-pane" id="tab2">
									<center>
										<div class="card-text">
											<div class="col-lg-10 col-md-8 col-sm-12">
												<div style="text-align: justify; font-size:15px;">
													<h4>VISI, MISI DAN TUJUAN SMP KANISIUS JUWANA</h4>
													<p>
														<b>VISI :</b> <br>
														<i>"Menjadi komunitas pendidikan yang unggul dalam iman, integritas, kepedulian sosial, dan prestasi akademik dalam semangat Kanisius."</i>
													</p>
													<p class="mt-0 mb-0">
														<b>MISI :</b>
														<ol>
															<li>Menyelenggarakan pendidikan yang menanamkan nilai-nilai Kristiani dalam semangat pelayanan dan kasih.</li>
															<li>Mendorong peserta didik untuk berprestasi secara akademik dan non-akademik melalui pembelajaran yang aktif, kreatif, dan bermakna.</li>
															<li>Membentuk karakter siswa yang jujur, disiplin, dan bertanggung jawab sebagai wujud integritas pribadi.</li>
															<li>Menumbuhkan kepedulian sosial dan semangat kebangsaan melalui kegiatan nyata di lingkungan sekolah dan masyarakat.</li>
															<li>Mengembangkan potensi siswa di bidang teknologi, seni, dan keterampilan hidup untuk menghadapi tantangan zaman.</li>
														</ol>
													</p>
													<p class="mt-0 mb-0">
														<b>TUJUAN :</b>
														<ol>
															<li>Menciptakan lingkungan sekolah yang religius, aman, dan menyenangkan.</li>
															<li>Menghasilkan lulusan yang memiliki landasan iman yang kokoh, berkarakter, dan mampu bersaing secara global.</li>
															<li>Menjadi sekolah pilihan yang dikenal atas prestasi, kedisiplinan, dan semangat solidaritas siswa.</li>
															<li>Menumbuhkan jiwa kepemimpinan dan semangat pelayanan di kalangan siswa.</li>
															<li>Menyiapkan siswa untuk melanjutkan pendidikan ke jenjang yang lebih tinggi dengan bekal nilai moral dan keterampilan hidup.</li>
														</ol>
													</p>
												</div>
											</div>
										</div>
									</center>
								</div>
							
							</div>
						</div>
					</div>
				</div>
			</section>
		</div>

	</div>
	<?php $this->load->view('_partials/footer.php') ?>
</body>

</html>
