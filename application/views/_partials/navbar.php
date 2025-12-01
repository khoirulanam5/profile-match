<nav class="main-header navbar navbar-expand navbar-white navbar-light">
	<ul class="navbar-nav">
		<li class="nav-item">
			<a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
		</li>
	</ul>
</nav>
<aside class="main-sidebar elevation-4 sidebar-light-lime">
	<a href="<?= base_url(); ?>" class="brand-link mt-2 pb-3">
		<img src="<?= base_url(); ?>assets/img/smp.png" alt="AdminLTE Logo"  class="brand-image"  style="opacity: .8">
		<span class="brand-text font-weight-light"><b>SPK - Siswa Berprestasi</b></span>
	</a>
	<div class="sidebar">
		<nav class="mt-3">
        	<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
				<li class="nav-item">
					<a href="<?= base_url(); ?>" class="nav-link">
						<i class="nav-icon fas fa-home"></i>
						<p>
							Beranda
						</p>
					</a>
				</li>
				<li class="nav-item">
					<a href="<?= base_url('Auth/login'); ?>" class="nav-link">
						<i class="nav-icon fas fa-lock"></i>
						<p>
							Login
						</p>
					</a>
				</li>
				<li class="nav-item">
					<a href="<?= base_url('Auth/daftar'); ?>" class="nav-link">
						<i class="nav-icon fas fa-user"></i>
						<p>
							Daftar
						</p>
					</a>
				</li>                    
			</ul>
		</nav>
	</div>
</aside>
