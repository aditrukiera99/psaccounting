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

	<script type="text/javascript" src="<?=base_url();?>material/assets/js/plugins/notifications/jgrowl.min.js"></script>
	<script type="text/javascript" src="<?=base_url();?>material/assets/js/plugins/ui/moment/moment.min.js"></script>
	<script type="text/javascript" src="<?=base_url();?>material/assets/js/plugins/pickers/daterangepicker.js"></script>
	<script type="text/javascript" src="<?=base_url();?>material/assets/js/plugins/pickers/anytime.min.js"></script>
	<script type="text/javascript" src="<?=base_url();?>material/assets/js/plugins/pickers/pickadate/picker.js"></script>
	<script type="text/javascript" src="<?=base_url();?>material/assets/js/plugins/pickers/pickadate/picker.date.js"></script>
	<script type="text/javascript" src="<?=base_url();?>material/assets/js/plugins/pickers/pickadate/picker.time.js"></script>
	<script type="text/javascript" src="<?=base_url();?>material/assets/js/plugins/pickers/pickadate/legacy.js"></script>

	<script type="text/javascript" src="<?=base_url();?>material/assets/js/plugins/tables/datatables/datatables.min.js"></script>
	<script type="text/javascript" src="<?=base_url();?>material/assets/js/plugins/forms/selects/select2.min.js"></script>

	<script type="text/javascript" src="<?=base_url();?>material/assets/js/core/app.js"></script>
	<script type="text/javascript" src="<?=base_url();?>material/assets/js/pages/datatables_basic.js"></script>
	<script type="text/javascript" src="<?=base_url();?>material/assets/js/pages/picker_date.js"></script>
	<script type="text/javascript" src="<?=base_url();?>material/assets/js/pages/form_select2.js"></script>
	
	<script type="text/javascript" src="<?=base_url();?>material/assets/js-form.js"></script>

	<script type="text/javascript" src="<?=base_url();?>material/assets/js/plugins/ui/ripple.min.js"></script>

	<!-- /theme JS files -->
	<style type="text/css">
		@keyframes bounceIn{
  0%{
    opacity: 0;
    transform: scale(0.3) translate3d(0,0,0);
  }
  50%{
    opacity: 0.9;
    transform: scale(1.1);
  }
  80%{
    opacity: 1;
    transform: scale(0.89);
  }
  100%{
    opacity: 1;
    transform: scale(1) translate3d(0,0,0);
  }
}
	</style>

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

					<div class="dropdown-menu dropdown-content" style="background-color: #dedede;">
						<div class="dropdown-content-body">
							<div class="row">
								<div class="col-md-12">

									<a href="<?=base_url();?>cabang_c"><button type="button" class="btn btn-success btn-float btn-float-lg legitRipple" style="margin:8px 8px 8px 8px;width: 140px;height:110px;"><i class="icon-office"></i> <span>Cabang</span></button></a>

									<a href="<?=base_url();?>departemen_c"><button type="button" class="btn btn-info btn-float btn-float-lg legitRipple" style="margin:8px 8px 8px 8px;width: 140px;height:110px;"><i class="icon-city"></i> <span>Departemen</span></button></a>

									<a href="<?=base_url();?>proyek_c"><button type="button" class="btn btn-warning btn-float btn-float-lg legitRipple" style="margin:8px 8px 8px 8px;width: 140px;height:110px;"><i class="icon-design"></i> <span>Proyek</span></button></a>

									<button type="button" class="btn btn-info btn-float btn-float-lg legitRipple" style="margin:8px 8px 8px 8px;width: 140px;height:110px;"><i class="icon-percent"></i> <span>Pajak</span></button>

									<a href="<?=base_url();?>syarat_pembayaran_c"><button type="button" class="btn btn-primary btn-float btn-float-lg legitRipple" style="margin:8px 8px 8px 8px;width: 140px;height:110px;"><i class="icon-cash3"></i> <span>Syarat <br> Pembayaran</span></button></a>

									<a href="<?=base_url();?>pengiriman_c"><button type="button" class="btn btn-info btn-float btn-float-lg legitRipple" style="margin:8px 8px 8px 8px;width: 140px;height:110px;"><i class="icon-truck"></i> <span>Pengiriman</span></button></a>

									<a href="<?=base_url();?>fob_c"><button type="button" class="btn btn-indigo btn-float btn-float-lg legitRipple" style="margin:8px 8px 8px 8px;width: 140px;height:110px;background-color: #5C6BC0;border-color: #5C6BC0;color: #fff;"><i class="icon-color-sampler"></i> <span>FOB</span></button></a>

									<a href="<?=base_url();?>gaji_c"><button type="button" class="btn btn-danger btn-float btn-float-lg legitRipple" style="margin:8px 8px 8px 8px;width: 140px;height:110px;background-color: #EC407A;border-color: #EC407A;"><i class="icon-calculator"></i> <span>Gaji</span></button></a>

									<a href="<?=base_url();?>karyawan_c"><button type="button" class="btn btn-success btn-float btn-float-lg legitRipple" style="margin:8px 8px 8px 8px;width: 140px;height:110px;"><i class="icon-users"></i> <span>Karyawan</span></button></a>

									<!-- 
									<button type="button" class="btn btn-info btn-float btn-float-lg legitRipple" style="margin:8px 8px 8px 8px;width: 140px;height:110px;"><i class="icon-percent"></i> <span>Kontak</span></button> -->
									<!-- <button type="button" class="btn btn-primary btn-float btn-float-lg legitRipple" style="margin:8px 8px 8px 8px;width: 140px;height:110px;"><i class="icon-cash3"></i> <span>Transaksi <br> Favorit</span></button> -->
									<!-- <button type="button" class="btn btn-info btn-float btn-float-lg legitRipple" style="margin:8px 8px 8px 8px;width: 140px;height:110px;"><i class="icon-percent"></i> <span>Kalendar</span></button> -->
									<button type="button" class="btn btn-indigo btn-float btn-float-lg legitRipple" style="margin:8px 8px 8px 8px;width: 140px;height:110px;background-color: #5C6BC0;border-color: #5C6BC0;color: #fff;"><i class="icon-percent"></i> <span>Log Aktifitas</span></button>
										
								</div>
							</div>
							<div class="row">
								<div class="col-md-12">

									
									
									
								</div>
							</div>
						</div>
					</div>
				</li>

				<li class="dropdown mega-menu mega-menu-wide">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-office position-left"></i> Buku Besar <span class="caret"></span></a>

					<div class="dropdown-menu dropdown-content" style="background-color: #dedede;">
						<div class="dropdown-content-body">
							<div class="row">
								<div class="col-md-12">

									<a href="<?=base_url();?>akun_c"><button type="button" class="btn btn-success btn-float btn-float-lg legitRipple" style="margin:8px 8px 8px 8px;width: 140px;height:110px;"><i class="icon-toggle"></i> <span>Akun</span></button></a>

									<a href="<?=base_url();?>pencatatan_beban_c"><button type="button" class="btn btn-info btn-float btn-float-lg legitRipple" style="margin:8px 8px 8px 8px;width: 140px;height:110px;"><i class="icon-city"></i> <span>Pencatatan<br>Beban</span></button></a>

									<a href="<?=base_url();?>pencatatan_gaji_c"><button type="button" class="btn btn-warning btn-float btn-float-lg legitRipple" style="margin:8px 8px 8px 8px;width: 140px;height:110px;"><i class="icon-design"></i> <span>Pencatatan<br>Gaji</span></button></a>

									<a href="<?=base_url();?>jurnal_umum_c"><button type="button" class="btn btn-info btn-float btn-float-lg legitRipple" style="margin:8px 8px 8px 8px;width: 140px;height:110px;"><i class="icon-percent"></i> <span>Jurnal<br>Umum</span></button></a>

									<a href="<?=base_url();?>anggaran_pembayaran_c"><button type="button" class="btn btn-primary btn-float btn-float-lg legitRipple" style="margin:8px 8px 8px 8px;width: 140px;height:110px;"><i class="icon-cash3"></i> <span>Anggaran <br> Pembayaran</span></button></a>

									<a href="<?=base_url();?>histori_akun_c"><button type="button" class="btn btn-info btn-float btn-float-lg legitRipple" style="margin:8px 8px 8px 8px;width: 140px;height:110px;"><i class="icon-truck"></i> <span>Histori<br>Akun</span></button></a>

									<a href="<?=base_url();?>fob_c"><button type="button" class="btn btn-indigo btn-float btn-float-lg legitRipple" style="margin:8px 8px 8px 8px;width: 140px;height:110px;background-color: #5C6BC0;border-color: #5C6BC0;color: #fff;"><i class="icon-color-sampler"></i> <span>Log<br> Jurnal</span></button></a>

										
								</div>
							</div>
							<div class="row">
								<div class="col-md-12">

									
									
									
								</div>
							</div>
						</div>
					</div>
				</li>

				<li class="dropdown mega-menu mega-menu-wide">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">
						<i class="icon-make-group position-left"></i> Kas & Bank <span class="caret"></span>
					</a>

					<div class="dropdown-menu dropdown-content" style="background-color: #dedede;">
						<div class="dropdown-content-body">
							<div class="row">
								<div class="col-md-12">

									<a href="<?=base_url();?>pembayaran_c"><button type="button" class="btn btn-success btn-float btn-float-lg legitRipple" style="margin:8px 8px 8px 8px;width: 140px;height:110px;"><i class="icon-toggle"></i> <span>Pembayaran</span></button></a>

									<a href="<?=base_url();?>penerimaan_c"><button type="button" class="btn btn-info btn-float btn-float-lg legitRipple" style="margin:8px 8px 8px 8px;width: 140px;height:110px;"><i class="icon-city"></i> <span>Penerimaan</span></button></a>

									<a href="<?=base_url();?>transfer_bank_c"><button type="button" class="btn btn-warning btn-float btn-float-lg legitRipple" style="margin:8px 8px 8px 8px;width: 140px;height:110px;"><i class="icon-design"></i> <span>Transfer<br>Bank</span></button></a>

									<a href="<?=base_url();?>rekening_koran_c"><button type="button" class="btn btn-info btn-float btn-float-lg legitRipple" style="margin:8px 8px 8px 8px;width: 140px;height:110px;"><i class="icon-percent"></i> <span>Rekening<br>Koran</span></button></a>

									<a href="<?=base_url();?>histori_bank_c"><button type="button" class="btn btn-primary btn-float btn-float-lg legitRipple" style="margin:8px 8px 8px 8px;width: 140px;height:110px;"><i class="icon-cash3"></i> <span>Histori<br>Bank</span></button></a>

									<a href="<?=base_url();?>rekonsiliasi_bank_c"><button type="button" class="btn btn-info btn-float btn-float-lg legitRipple" style="margin:8px 8px 8px 8px;width: 140px;height:110px;"><i class="icon-truck"></i> <span>Rekonsiliasi<br>Bank</span></button></a>

									<a href="<?=base_url();?>internet_banking_c"><button type="button" class="btn btn-danger btn-float btn-float-lg legitRipple" style="margin:8px 8px 8px 8px;width: 140px;height:110px;"><i class="icon-truck"></i> <span>Internet<br>Banking</span></button></a>

										
								</div>
							</div>
							<div class="row">
								<div class="col-md-12">

									
									
									
								</div>
							</div>
						</div>
					</div>
				</li>

				<li class="dropdown mega-menu mega-menu-wide">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-office position-left"></i> Penjualan <span class="caret"></span></a>

					<div class="dropdown-menu dropdown-content">
						<div class="dropdown-content-body">
							<div class="row">
								<div class="col-md-3">
									<span class="menu-heading underlined">Menu Penjualan</span>
									<ul class="menu-list">
										<li>
											<a href="<?=base_url();?>departemen_c"><i class="icon-pencil3"></i> Penawaran Penjualan</a>
										</li>

										<li>
											<a href="<?=base_url();?>proyek_c"><i class="icon-pencil3"></i> Pesanan Penjualan</a>
										</li>

										<li>
											<a href="<?=base_url();?>pajak_c"><i class="icon-pencil3"></i> Pengiriman Pesanan</a>
										</li>

										<li>
											<a href="<?=base_url();?>syarat_pembayaran_c"><i class="icon-pencil3"></i>  Uang Muka Penjualan</a>
										</li>									
									</ul>
								</div>
								<div class="col-md-3">
									<span class="menu-heading underlined">&nbsp</span>
									<ul class="menu-list">
										<li>
											<a href="<?=base_url();?>fob_c"><i class="icon-pencil3"></i> Faktur Penjualan</a>
										</li>

										<li>
											<a href="<?=base_url();?>gaji_c"><i class="icon-pencil3"></i> Pembayaran Penjualan</a>
										</li>

										<li>
											<a href="<?=base_url();?>karyawan_c"><i class="icon-pencil3"></i> Retur Penjualan</a>
										</li>

										<li>
											<a href="<?=base_url();?>transaksi_berulang_c"><i class="icon-pencil3"></i> Kategori Pelanggan</a>
										</li>	
									</ul>
								</div>

								<div class="col-md-3">
									<span class="menu-heading underlined">&nbsp</span>
									<ul class="menu-list">
										<li>
											<a href="<?=base_url();?>kontak_c"><i class="icon-pencil3"></i> Kategori Harga</a>
										</li>

										<li>
											<a href="<?=base_url();?>transaksi_favorit_c"><i class="icon-pencil3"></i> Pelanggan</a>
										</li>

										<li>
											<a href="<?=base_url();?>kalender_c"><i class="icon-pencil3"></i> Komisi Penjual</a>
										</li>

										<li>
											<a href="<?=base_url();?>log_aktifitas_c"><i class="icon-pencil3"></i> Target Penjualan</a>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</li>

				<li class="dropdown mega-menu mega-menu-wide">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-office position-left"></i> Pembelian <span class="caret"></span></a>

					<div class="dropdown-menu dropdown-content" style="background-color: #dedede;">
						<div class="dropdown-content-body">
							<div class="row">
								<div class="col-md-12">

									<a href="<?=base_url();?>permintaan_pembelian_c"><button type="button" class="btn btn-success btn-float btn-float-lg legitRipple" style="margin:8px 8px 8px 8px;width: 140px;height:110px;"><i class="icon-toggle"></i> <span>Permintaan<br>Pembelian</span></button></a>

									<a href="<?=base_url();?>pesanan_pembelian_c"><button type="button" class="btn btn-info btn-float btn-float-lg legitRipple" style="margin:8px 8px 8px 8px;width: 140px;height:110px;"><i class="icon-city"></i> <span>Pesanan<br>Pembelian</span></button></a>

									<a href="<?=base_url();?>penerimaan_barang_c"><button type="button" class="btn btn-warning btn-float btn-float-lg legitRipple" style="margin:8px 8px 8px 8px;width: 140px;height:110px;"><i class="icon-design"></i> <span>Penerimaan<br>Barang</span></button></a>

									<a href="<?=base_url();?>uang_muka_pembelian_c"><button type="button" class="btn btn-info btn-float btn-float-lg legitRipple" style="margin:8px 8px 8px 8px;width: 140px;height:110px;"><i class="icon-percent"></i> <span>Uang Muka<br>Pembelian</span></button></a>

									<a href="<?=base_url();?>faktur_pembelian_c"><button type="button" class="btn btn-primary btn-float btn-float-lg legitRipple" style="margin:8px 8px 8px 8px;width: 140px;height:110px;"><i class="icon-cash3"></i> <span>Faktur <br> Pembelian</span></button></a>

									<a href="<?=base_url();?>pembayaran_pembelian_c"><button type="button" class="btn btn-info btn-float btn-float-lg legitRipple" style="margin:8px 8px 8px 8px;width: 140px;height:110px;"><i class="icon-truck"></i> <span>Pembayaran<br>Pembelian</span></button></a>

									<a href="<?=base_url();?>retur_pembelian_c"><button type="button" class="btn btn-info btn-float btn-float-lg legitRipple" style="margin:8px 8px 8px 8px;width: 140px;height:110px;"><i class="icon-truck"></i> <span>Retur<br>Pembelian</span></button></a>

									<a href="<?=base_url();?>kategori_pemasok_c"><button type="button" class="btn btn-info btn-float btn-float-lg legitRipple" style="margin:8px 8px 8px 8px;width: 140px;height:110px;"><i class="icon-truck"></i> <span>Kategori<br>Pemasok</span></button></a>

									<a href="<?=base_url();?>pemasok_c"><button type="button" class="btn btn-indigo btn-float btn-float-lg legitRipple" style="margin:8px 8px 8px 8px;width: 140px;height:110px;background-color: #5C6BC0;border-color: #5C6BC0;color: #fff;"><i class="icon-color-sampler"></i> <span>Pemasok</span></button></a>

								</div>
							</div>
							
						</div>
					</div>
				</li>

				

				<li class="dropdown mega-menu mega-menu-wide">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-office position-left"></i> Persediaan <span class="caret"></span></a>

					<div class="dropdown-menu dropdown-content" style="background-color: #dedede;">
						<div class="dropdown-content-body">
							<div class="row">
								<div class="col-md-12">

									<a href="<?=base_url();?>pemindahan_barang_c"><button type="button" class="btn btn-success btn-float btn-float-lg legitRipple" style="margin:8px 8px 8px 8px;width: 140px;height:110px;"><i class="icon-toggle"></i> <span>Pemindahan<br>Barang</span></button></a>

									<a href="<?=base_url();?>penyesuaian_persediaan_c"><button type="button" class="btn btn-info btn-float btn-float-lg legitRipple" style="margin:8px 8px 8px 8px;width: 140px;height:110px;"><i class="icon-city"></i> <span>Penyesuaian<br>Persediaan</span></button></a>

									<a href="<?=base_url();?>pekerjaan_pesanan_c"><button type="button" class="btn btn-warning btn-float btn-float-lg legitRipple" style="margin:8px 8px 8px 8px;width: 140px;height:110px;"><i class="icon-design"></i> <span>Pekerjaan<br>Pesanan</span></button></a>

									<a href="<?=base_url();?>penambahan_bahan_baku_c"><button type="button" class="btn btn-info btn-float btn-float-lg legitRipple" style="margin:8px 8px 8px 8px;width: 140px;height:110px;"><i class="icon-percent"></i> <span>Penambahan<br>Bahan Baku</span></button></a>

									<a href="<?=base_url();?>penyelesaian_pesanan_c"><button type="button" class="btn btn-primary btn-float btn-float-lg legitRipple" style="margin:8px 8px 8px 8px;width: 140px;height:110px;"><i class="icon-cash3"></i> <span>Penyelesiaan <br> Pesanan</span></button></a>

									<a href="<?=base_url();?>perintah_stock_opname_c"><button type="button" class="btn btn-info btn-float btn-float-lg legitRipple" style="margin:8px 8px 8px 8px;width: 140px;height:110px;"><i class="icon-truck"></i> <span>Perintah<br>Stock Opname</span></button></a>

									<a href="<?=base_url();?>hasil_stock_opname_c"><button type="button" class="btn btn-indigo btn-float btn-float-lg legitRipple" style="margin:8px 8px 8px 8px;width: 140px;height:110px;background-color: #5C6BC0;border-color: #5C6BC0;color: #fff;"><i class="icon-color-sampler"></i> <span>Hasil<br>Stock Opname</span></button></a>

										
								</div>
							</div>
							<div class="row">
								<div class="col-md-12">

									
									<a href="<?=base_url();?>barang_jasa_c"><button type="button" class="btn btn-success btn-float btn-float-lg legitRipple" style="margin:8px 8px 8px 8px;width: 140px;height:110px;"><i class="icon-toggle"></i> <span>Barang<br>Jasa</span></button></a>

									<a href="<?=base_url();?>gudang_c"><button type="button" class="btn btn-info btn-float btn-float-lg legitRipple" style="margin:8px 8px 8px 8px;width: 140px;height:110px;"><i class="icon-city"></i> <span>Gudang</span></button></a>

									<a href="<?=base_url();?>satuan_c"><button type="button" class="btn btn-warning btn-float btn-float-lg legitRipple" style="margin:8px 8px 8px 8px;width: 140px;height:110px;"><i class="icon-design"></i> <span>Satuan<br>Barang</span></button></a>

									<a href="<?=base_url();?>kategori_barang_c"><button type="button" class="btn btn-info btn-float btn-float-lg legitRipple" style="margin:8px 8px 8px 8px;width: 140px;height:110px;"><i class="icon-percent"></i> <span>Kategori<br>Barang</span></button></a>

									<a href="<?=base_url();?>penyesuaian_harga_jual_c"><button type="button" class="btn btn-primary btn-float btn-float-lg legitRipple" style="margin:8px 8px 8px 8px;width: 140px;height:110px;"><i class="icon-cash3"></i> <span>Penyesuaian<br>Harga Jual</span></button></a>

									<a href="<?=base_url();?>harga_pemasok_c"><button type="button" class="btn btn-info btn-float btn-float-lg legitRipple" style="margin:8px 8px 8px 8px;width: 140px;height:110px;"><i class="icon-truck"></i> <span>Harga<br>Pemasok</span></button></a>

									<a href="<?=base_url();?>barang_per_gudang_c"><button type="button" class="btn btn-indigo btn-float btn-float-lg legitRipple" style="margin:8px 8px 8px 8px;width: 140px;height:110px;background-color: #5C6BC0;border-color: #5C6BC0;color: #fff;"><i class="icon-color-sampler"></i> <span>Barang per<br>Gudang</span></button></a>
									
								</div>
							</div>
						</div>
					</div>
				</li>

				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">
						<i class="icon-make-group position-left"></i> Aset Tetap <span class="caret"></span>
					</a>

					<ul class="dropdown-menu width-250">
						<li class="dropdown-header">Menu</li>						
						<li>
							<a href="#"><i class="icon-task"></i> Aset Tetap</a>
						</li>

						<li>
							<a href="#"><i class="icon-task"></i> Kategori Aset</a>
						</li>

						<li>
							<a href="#"><i class="icon-task"></i> Kategori Aset Tetap Pajak</a>
						</li>

						<li>
							<a href="#"><i class="icon-task"></i> Perubahan Aset Tetap</a>
						</li>

						<li>
							<a href="#"><i class="icon-task"></i> Disposisi Aset Tetap</a>
						</li>

						<li>
							<a href="#"><i class="icon-task"></i> Pindah Aset</a>
						</li>

						<li>
							<a href="#"><i class="icon-task"></i> Aset per Lokasi</a>
						</li>						
					</ul>
				</li>

				
			</ul>

			
		</div>
	</div>
	<!-- /second navbar -->




	<!-- Page container -->
	<div class="page-container">
		<div class="page-content">
			<div class="content-wrapper">
			<?PHP if($page == ""){ ?>
			<!-- DASHBOARD -->

			<!-- /DASHBOARD -->
			<?PHP } else { $this->load->view($page); } ?>
			</div>
		</div>
	</div>

	<div class="footer text-muted">
		&copy; 2017. <a href="#">Develop</a> by <a href="http://piramidsoft.com" target="_blank">PIRAMID SOFT INDONESIA</a>
	</div>
</body>
</html>
