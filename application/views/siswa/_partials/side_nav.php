<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-white navbar-light">
	<!-- Left navbar links -->
	<ul class="navbar-nav">
		<li class="nav-item">
			<a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
		</li>
	</ul>
</nav>
<!-- /.navbar -->
<!-- Main Sidebar Container -->
<aside class="main-sidebar elevation-4 sidebar-light-lime">
	<!-- Brand Logo -->
	<a href="<?= base_url(); ?>index.php/admin/SiswaDashboard" class="brand-link mt-2 pb-3">
		<img src="<?= base_url(); ?>assets/img/smp.png" alt="AdminLTE Logo" class="brand-image" style="opacity: .8">
		<span class="brand-text font-weight-light"><b>SPK - Siswa Berprestasi</b></span>
	</a>
	<!-- Sidebar -->
	<div class="sidebar">
		<!-- Sidebar user panel (optional) -->
		<div class="user-panel mt-3 pb-3 mb-3 d-flex">
			<div class="image">
				<img src="<?= base_url(); ?>assets/img/avatar5.png" class="img-circle elevation-1" alt="User Image">
			</div>
			<div class="info">
				<a href="#" class="d-block">
					<?= ucfirst($this->session->userdata('username')); ?>
				</a>
			</div>
		</div>
		<!-- Sidebar Menu -->
		<nav class="mt-2">
			<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
				<!-- Add icons to the links using the .nav-icon class with font-awesome or any other icon font library -->
				<li class="nav-item">
					<a href="<?= base_url('admin/SiswaDashboard') ?>" class="nav-link">
						<i class="nav-icon fas fa-home"></i>
						<p>
							Dasgboard
						</p>
					</a>
				</li>
				<li class="nav-item">
					<a href="<?= base_url('laporan') ?>" class="nav-link">
						<i class="nav-icon fas fa-exclamation-circle"></i>
						<p>
							Pengumuman
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
</aside><!-- Content Wrapper. Contains page content -->
