<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?=$title;?></title>

	<!-- Global stylesheets -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
	<link href="<?=base_url();?>material/assets/css/icons/icomoon/styles.css" rel="stylesheet" type="text/css">
	<link href="<?=base_url();?>material/assets/css/bootstrap.css" rel="stylesheet" type="text/css">
	<link href="<?=base_url();?>material/assets/css/core.css" rel="stylesheet" type="text/css">
	<link href="<?=base_url();?>material/assets/css/components.css" rel="stylesheet" type="text/css">
	<link href="<?=base_url();?>material/assets/css/colors.css" rel="stylesheet" type="text/css">
	<!-- /global stylesheets -->

	<!-- Core JS files -->
	<script type="text/javascript" src="<?=base_url();?>material/assets/js/plugins/loaders/pace.min.js"></script>
	<script type="text/javascript" src="<?=base_url();?>material/assets/js/core/libraries/jquery.min.js"></script>
	<script type="text/javascript" src="<?=base_url();?>material/assets/js/core/libraries/bootstrap.min.js"></script>
	<script type="text/javascript" src="<?=base_url();?>material/assets/js/plugins/loaders/blockui.min.js"></script>
	<script type="text/javascript" src="<?=base_url();?>material/assets/js/plugins/ui/nicescroll.min.js"></script>
	<script type="text/javascript" src="<?=base_url();?>material/assets/js/plugins/ui/drilldown.js"></script>
	<!-- /core JS files -->

	<!-- Theme JS files -->
	<script type="text/javascript" src="<?=base_url();?>material/assets/js/plugins/visualization/d3/d3.min.js"></script>
	<script type="text/javascript" src="<?=base_url();?>material/assets/js/plugins/visualization/d3/d3_tooltip.js"></script>
	<script type="text/javascript" src="<?=base_url();?>material/assets/js/plugins/forms/styling/switchery.min.js"></script>
	<script type="text/javascript" src="<?=base_url();?>material/assets/js/plugins/forms/styling/uniform.min.js"></script>
	<script type="text/javascript" src="<?=base_url();?>material/assets/js/plugins/forms/selects/bootstrap_multiselect.js"></script>
	<script type="text/javascript" src="<?=base_url();?>material/assets/js/plugins/ui/moment/moment.min.js"></script>
	<script type="text/javascript" src="<?=base_url();?>material/assets/js/plugins/pickers/daterangepicker.js"></script>

	<script type="text/javascript" src="<?=base_url();?>material/assets/js/core/app.js"></script>
	<!-- <script type="text/javascript" src="<?=base_url();?>material/assets/js/pages/dashboard.js"></script> -->

	<script type="text/javascript" src="<?=base_url();?>material/assets/js/plugins/ui/ripple.min.js"></script>
	<!-- /theme JS files -->

</head>

<body>

	<!-- Main navbar -->
	<div class="navbar navbar-inverse bg-indigo">
		<div class="navbar-header">
			<a class="navbar-brand" href="index.html"><img src="<?=base_url();?>material/assets/images/logo_light.png" alt=""></a>

			<ul class="nav navbar-nav pull-right visible-xs-block">
				<li><a data-toggle="collapse" data-target="#navbar-mobile"><i class="icon-tree5"></i></a></li>
			</ul>
		</div>

		<div class="navbar-collapse collapse" id="navbar-mobile">
			<p class="navbar-text"><span class="label bg-success-400">Online</span></p>

			<ul class="nav navbar-nav navbar-right">
				<li class="dropdown language-switch">
					<a class="dropdown-toggle" data-toggle="dropdown">
						<img src="<?=base_url();?>material/assets/images/flags/gb.png" class="position-left" alt="">
						English
						<span class="caret"></span>
					</a>

					<ul class="dropdown-menu">
						<li><a class="deutsch"><img src="<?=base_url();?>material/assets/images/flags/de.png" alt=""> Deutsch</a></li>
						<li><a class="ukrainian"><img src="<?=base_url();?>material/assets/images/flags/ua.png" alt=""> Українська</a></li>
						<li><a class="english"><img src="<?=base_url();?>material/assets/images/flags/gb.png" alt=""> English</a></li>
						<li><a class="espana"><img src="<?=base_url();?>material/assets/images/flags/es.png" alt=""> España</a></li>
						<li><a class="russian"><img src="<?=base_url();?>material/assets/images/flags/ru.png" alt=""> Русский</a></li>
					</ul>
				</li>

				<li class="dropdown dropdown-user">
					<a class="dropdown-toggle" data-toggle="dropdown">
						<img src="<?=base_url();?>material/assets/images/placeholder.jpg" alt="">
						<span>Victoria</span>
						<i class="caret"></i>
					</a>

					<ul class="dropdown-menu dropdown-menu-right">
						<li><a href="#"><i class="icon-user-plus"></i> My profile</a></li>
						<li><a href="#"><i class="icon-coins"></i> My balance</a></li>
						<li><a href="#"><span class="badge badge-warning pull-right">58</span> <i class="icon-comment-discussion"></i> Messages</a></li>
						<li class="divider"></li>
						<li><a href="#"><i class="icon-cog5"></i> Account settings</a></li>
						<li><a href="#"><i class="icon-switch2"></i> Logout</a></li>
					</ul>
				</li>
			</ul>
		</div>
	</div>
	<!-- /main navbar -->


	<!-- Second navbar -->
	<div class="navbar navbar-default" id="navbar-second">
		<ul class="nav navbar-nav no-border visible-xs-block">
			<li><a class="text-center collapsed" data-toggle="collapse" data-target="#navbar-second-toggle"><i class="icon-menu7"></i></a></li>
		</ul>

		<div class="navbar-collapse collapse" id="navbar-second-toggle">
			<ul class="nav navbar-nav navbar-nav-material">
				<li class="active"><a href="index.html"><i class="icon-display4 position-left"></i> Dashboard</a></li>

				<li class="dropdown mega-menu mega-menu-wide">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-office position-left"></i> Perusahaan <span class="caret"></span></a>

					<div class="dropdown-menu dropdown-content">
						<div class="dropdown-content-body">
							<div class="row">
								<div class="col-md-3">
									<ul class="menu-list">
										<li>
											<a href="<?=base_url();?>departemen_c"><i class="icon-pencil3"></i> Departemen</a>
										</li>

										<li>
											<a href="<?=base_url();?>proyek_c"><i class="icon-pencil3"></i> Proyek</a>
										</li>

										<li>
											<a href="<?=base_url();?>pajak_c"><i class="icon-pencil3"></i> Pajak</a>
										</li>

										<li>
											<a href="<?=base_url();?>syarat_pembayaran_c"><i class="icon-pencil3"></i> Syarat Pembayaran</a>
										</li>	

										<li>
											<a href="<?=base_url();?>pengiriman_c"><i class="icon-pencil3"></i> Pengiriman</a>
										</li>									
									</ul>
								</div>
								<div class="col-md-3">
									<ul class="menu-list">
										<li>
											<a href="#"><i class="icon-pencil3"></i> FOB</a>
										</li>

										<li>
											<a href="#"><i class="icon-pencil3"></i> Gaji/Tunjangan</a>
										</li>

										<li>
											<a href="#"><i class="icon-pencil3"></i> Karyawan</a>
										</li>

										<li>
											<a href="#"><i class="icon-pencil3"></i> Transaksi Berulang</a>
										</li>	

										<li>
											<a href="#"><i class="icon-pencil3"></i> Proses Akhir Bulan</a>
										</li>
									</ul>
								</div>

								<div class="col-md-3">
									<ul class="menu-list">
										<li>
											<a href="#"><i class="icon-pencil3"></i> Kontak</a>
										</li>

										<li>
											<a href="#"><i class="icon-pencil3"></i> Transaksi Favorit</a>
										</li>

										<li>
											<a href="#"><i class="icon-pencil3"></i> Kalender</a>
										</li>

										<li>
											<a href="#"><i class="icon-pencil3"></i> Log Aktifitas</a>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</li>

				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">
						<i class="icon-make-group position-left"></i> Page kits <span class="caret"></span>
					</a>

					<ul class="dropdown-menu width-250">
						<li class="dropdown-header">Menu</li>						
						<li>
							<a href="#"><i class="icon-task"></i> Akun Perkiraan</a>
						</li>

						<li>
							<a href="#"><i class="icon-task"></i> Pencatatan Beban</a>
						</li>

						<li>
							<a href="#"><i class="icon-task"></i> Pencatatan Gaji</a>
						</li>

						<li>
							<a href="#"><i class="icon-task"></i> Jurnal Umum</a>
						</li>

						<li>
							<a href="#"><i class="icon-task"></i> Anggaran</a>
						</li>

						<li>
							<a href="#"><i class="icon-task"></i> Histori Akun</a>
						</li>

						<li>
							<a href="#"><i class="icon-task"></i> Log Aktifitas Jurnal</a>
						</li>						
					</ul>
				</li>

				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">
						<i class="icon-strategy position-left"></i> Starter kit <span class="caret"></span>
					</a>

					<ul class="dropdown-menu width-200">
						<li class="dropdown-header">Basic layouts</li>
						<li class="dropdown-submenu">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-grid2"></i> Columns</a>
							<ul class="dropdown-menu">
								<li class="dropdown-header highlight">Options</li>
								<li><a href="starters/1_col.html">One column</a></li>
								<li><a href="starters/2_col.html">Two columns</a></li>
								<li class="dropdown-submenu">
									<a href="#">Three columns</a>
									<ul class="dropdown-menu">
										<li class="dropdown-header highlight">Sidebar position</li>
										<li><a href="starters/3_col_dual.html">Dual sidebars</a></li>
										<li><a href="starters/3_col_double.html">Double sidebars</a></li>
									</ul>
								</li>
								<li><a href="starters/4_col.html">Four columns</a></li>
							</ul>
						</li>
						<li class="dropdown-submenu">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-paragraph-justify3"></i> Navbars</a>
							<ul class="dropdown-menu">
								<li class="dropdown-header highlight">Fixed navbars</li>
								<li><a href="starters/layout_navbar_fixed_main.html">Fixed main navbar</a></li>
								<li><a href="starters/layout_navbar_fixed_secondary.html">Fixed secondary navbar</a></li>
								<li><a href="starters/layout_navbar_fixed_both.html">Both navbars fixed</a></li>
							</ul>
						</li>
						<li class="dropdown-header">Optional layouts</li>
						<li><a href="starters/layout_boxed.html"><i class="icon-align-center-horizontal"></i> Fixed width</a></li>
						<li><a href="starters/layout_sidebar_sticky.html"><i class="icon-flip-vertical3"></i> Sticky sidebar</a></li>
					</ul>
				</li>
			</ul>

			<ul class="nav navbar-nav navbar-nav-material navbar-right">
				<li>
					<a href="changelog.html">
						<i class="icon-history position-left"></i>
						Changelog
						<span class="label label-inline position-right bg-success-400">1.6</span>
					</a>
				</li>

				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">
						<i class="icon-cog3"></i>
						<span class="visible-xs-inline-block position-right">Share</span>
						<span class="caret"></span>
					</a>

					<ul class="dropdown-menu dropdown-menu-right">
						<li><a href="#"><i class="icon-user-lock"></i> Account security</a></li>
						<li><a href="#"><i class="icon-statistics"></i> Analytics</a></li>
						<li><a href="#"><i class="icon-accessibility"></i> Accessibility</a></li>
						<li class="divider"></li>
						<li><a href="#"><i class="icon-gear"></i> All settings</a></li>
					</ul>
				</li>
			</ul>
		</div>
	</div>
	<!-- /second navbar -->


	<!-- Page header -->
	<div class="page-header">
		<div class="page-header-content">
			<div class="page-title">
				<h4>
					<i class="icon-arrow-left52 position-left"></i>
					<span class="text-semibold">Home</span> - Dashboard
					<small class="display-block">Good morning, Victoria Baker!</small>
				</h4>
			</div>

			<div class="heading-elements">
				<div class="heading-btn-group">
					<a href="#" class="btn btn-link btn-float has-text text-size-small"><i class="icon-bars-alt text-indigo-400"></i><span>Statistics</span></a>
					<a href="#" class="btn btn-link btn-float has-text text-size-small"><i class="icon-calculator text-indigo-400"></i> <span>Invoices</span></a>
					<a href="#" class="btn btn-link btn-float has-text text-size-small"><i class="icon-calendar5 text-indigo-400"></i> <span>Schedule</span></a>
				</div>
			</div>
		</div>
	</div>
	<!-- /page header -->


	<!-- Page container -->
	<div class="page-container">
		<div class="page-content">
			<div class="content-wrapper">
			<?PHP if($view == ""){ ?>
			<!-- DASHBOARD -->

			<!-- /DASHBOARD -->
			<?PHP } else { $this->load->view($view); } ?>
			</div>
		</div>
	</div>

	<div class="footer text-muted">
		&copy; 2017. <a href="#">Develop</a> by <a href="http://piramidsoft.com" target="_blank">PIRAMID SOFT INDONESIA</a>
	</div>
</body>
</html>
