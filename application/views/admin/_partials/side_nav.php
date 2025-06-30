<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-dark navbar-light">
	<!-- Left navbar links -->
	<ul class="navbar-nav">
		<li class="nav-item">
			<a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
		</li>
	</ul>
</nav>
<!-- /.navbar -->
<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-light-primary elevation-4">

	<!-- Brand Logo -->
	<a href="<?= base_url(); ?>admin/" class="brand-link mt-2 pb-3">
		<img src="<?= base_url(); ?>assets/img/smp.png" alt="SMP Logo" class="brand-image" style="opacity: .8">
		<span class="brand-text font-weight-light"><b>SPK - Siswa Berprestasi</b></span>
	</a>
	<!-- Sidebar -->
	<div class="sidebar">
		<!-- Sidebar user panel (optional) -->
		<div class="user-panel mt-3 pb-3 mb-3 d-flex">
			<div class="image">
				<img src="<?= base_url(); ?>assets/img/avatar5.png" class="img-circle elevation-2" alt="User Image">
			</div>
			<div class="info">
				<a href="<?= base_url(); ?>admin/" class="d-block">
					<?= ucfirst($this->session->userdata('username')); ?>
				</a>
			</div>
		</div>
		<!-- Sidebar Menu -->
		<nav class="mt-2">
			<!-- <ul class="nav nav-pills nav-sidebar flex-column text-sm nav-flat nav-compact" data-widget="treeview" role="menu" data-accordion="false"> -->
			<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
	
				<!-- Add icons to the links using the .nav-icon class with font-awesome or any other icon font library -->
				<li class="nav-item">
					<a href="<?= base_url('admin') ?>" class="nav-link">
						<i class="nav-icon fas fa-tachometer-alt"></i>
						<p>
							Dashboard
						</p>
					</a>
				</li>
				<?php if ($this->session->userdata('level') == 1) { ?>
				<li class="nav-item">
					<a href="<?= base_url('admin/gap') ?>" class="nav-link">
						<i class="nav-icon fas fa-folder"></i>
						<p>
							Gap
						</p>
					</a>
				</li>
				<li class="nav-item">
					<a href="<?= base_url('admin/Jenis_kriteria') ?>" class="nav-link">
						<i class="nav-icon fas fa-folder"></i>
						<p>
							Jenis Kriteria
						</p>
					</a>
				</li>
				<li class="nav-item">
					<a href="<?= base_url('admin/Kriteria') ?>" class="nav-link">
						<i class="nav-icon fas fa-folder"></i>
						<p>
							Kriteria
						</p>
					</a>
				</li>
				<li class="nav-item">
					<a href="<?= base_url('admin/Siswa') ?>" class="nav-link">
						<i class="nav-icon fas fa-folder"></i>
						<p>
							Siswa
						</p>
					</a>
				</li>
				<li class="nav-item">
					<a href="<?= base_url('admin/penilaian') ?>" class="nav-link">
						<i class="nav-icon fas fa-folder"></i>
						<p>
							Penilaian
						</p>
					</a>
				</li>
				<li class="nav-item">
					<a href="<?= base_url('admin/range') ?>" class="nav-link">
						<i class="nav-icon fas fa-folder"></i>
						<p>
							Durasi Daftar
						</p>
					</a>
				</li>
				<li class="nav-item">
					<a href="<?= base_url('admin/setting') ?>" class="nav-link">
						<i class="nav-icon fas fa-folder"></i>
						<p>
							Jumlah Lolos
						</p>
					</a>
				</li>
				<li class="nav-item">
					<a href="<?= base_url('admin/profile') ?>" class="nav-link">
						<i class="nav-icon fas fa-folder"></i>
						<p>
							Profile Standar
						</p>
					</a>
				</li>
				<li class="nav-item">
					<a href="<?= base_url('admin/perhitungan') ?>" class="nav-link">
						<i class="nav-icon fas fa-folder"></i>
						<p>
							Perhitungan
						</p>
					</a>
				</li>
				<?php } ?>
				<li class="nav-item">
					<a href="<?= base_url('admin/laporan') ?>" class="nav-link">
						<i class="nav-icon fas fa-folder"></i>
						<p>
							Laporan
						</p>
					</a>
				</li>
				<li class="nav-item">
					<a href="javascript:;" class="nav-link" id="btn-logout">
						<i class="nav-icon fas fa-lock"></i>
						<p>
							Log Out
						</p>
					</a>
				</li>                    
			</ul>
		</nav>
		<!-- /.sidebar-menu -->
	</div>
	<!-- /.sidebar -->
</aside>
