<!-- Page header -->
<div class="page-header">
	<div class="page-header-content">
		<div class="page-title">
			<h4>
				<a href="<?=base_url()?>akun_c"><i class="icon-arrow-left52 position-left"></i></a>
				<span class="text-semibold">Buku Besar </span> - Akun
				<small class="display-block">Data akun</small>
			</h4>
		</div>

		<div class="heading-elements">
			<div class="heading-btn-group" style="margin-top: -10px;">
				<a href="<?=base_url();?>add_akun_c" class="btn btn-success btn-float "><i class="icon-plus-circle2"></i><span>Tambah Data</span></a>
			</div>
		</div>
	</div>
</div>
<!-- /page header -->


<!-- Basic datatable -->
<div class="panel panel-flat">
						<div class="panel-heading">
							
							<div class="heading-elements">
								<ul class="icons-list">
			                		<li><a data-action="collapse"></a></li>
			                		<li><a data-action="reload"></a></li>
			                		<li><a data-action="close"></a></li>
			                	</ul>
		                	</div>
						</div>

						<div class="panel-body">
							
							<?php
							if($msg == '1'){
							?>
								<div class="alert bg-success alert-styled-left">
									<button type="button" class="close" data-dismiss="alert"><span>×</span><span class="sr-only">Close</span></button>
									<span class="text-semibold">Success!</span> Data Berhasil Ditambahkan
							    </div>
							<?php
							}
							?>
							<?php
							if($msg == '2'){
							?>
								<div class="alert bg-warning alert-styled-left">
									<button type="button" class="close" data-dismiss="alert"><span>×</span><span class="sr-only">Close</span></button>
									<span class="text-semibold">Gagal!</span> Kode Akun Telah Didaftarkan
							    </div>
							<?php
							}
							?>
							<form class="form-horizontal" action="<?=base_url()?>add_akun_c" method="post">
								<fieldset class="content-group"><legend class="text-bold">Form Input Data</legend>

									<div class="form-group">
										<label class="control-label col-lg-2">Tipe Akun</label>
										<div class="col-lg-10">
											<select name="tipe" class="select-search">
												<option value="Kas & Bank">Kas & Bank</option>
												<option value="Piutang Usaha">Piutang Usaha</option>
												<option value="Persediaan">Persediaan</option>
												<option value="Aset Lancar Lainnya">Aset Lancar Lainnya</option>
												<option value="Aset Tetap">Aset Tetap</option>
												<option value="Akumulasi Penyusutan">Akumulasi Penyusutan</option>
												<option value="Aset Lainnya">Aset Lainnya</option>
												<option value="Hitung Usaha">Hitung Usaha</option>
												<option value="Kewajiban Jangka Pendek">Kewajiban Jangka Pendek</option>
												<option value="Kewajiban Jangka Panjang">Kewajiban Jangka Panjang</option>
												<option value="Modal">Modal</option>
												<option value="Pendapatan">Pendapatan</option>
												<option value="Beban Pokok Penjualan">Beban Pokok Penjualan</option>
												<option value="Beban">Beban</option>
												<option value="Beban Lainnya">Beban Lainnya</option>
												<option value="Pendapat Lainnya">Pendapat Lainnya</option>
											</select>
										</div>
									</div>

									<div class="form-group">
										<label class="control-label col-lg-2">Sub Akun</label>
										<div class="col-lg-10">
											<select name="sub_akun" class="select-search">
												<option value=""> Pilih Kode Akutansi </option>
												<?php
													foreach ($data_item as $key => $value) {
														?>
														<option value="<?=$value->KODE_AKUN;?>"><?=$value->KODE_AKUN;?> - <?=$value->NAMA_AKUN;?></option>
														<?php
													}
												?>
											</select>
										</div>
									</div>

									<div class="form-group">
										<label class="control-label col-lg-2">Kode Perkiraan</label>
										<div class="col-lg-10">
											<input type="text" name="kode_akun" class="form-control" placeholder="Masukkan kode akun">
										</div>
									</div>

									<div class="form-group">
										<label class="control-label col-lg-2">Nama</label>
										<div class="col-lg-10">
											<input type="text" name="nama" class="form-control" placeholder="Masukkan nama">
										</div>
									</div>

									<div class="form-group">
										<label class="control-label col-lg-2">Saldo Awal</label>
										<div class="col-lg-10">
											<input type="text" name="saldo_awal" class="form-control" placeholder="Masukkan saldo awal">
										</div>
									</div>

									<div class="form-group">
										<label class="control-label col-lg-2">Per Tanggal</label>
										<div class="col-lg-10">
											<input type="text" name="tgl" class="form-control daterange-single" value="<?php echo date('m/d/Y'); ?>">
										</div>
									</div>

									

			                        
								</fieldset>

								<div class="text-right">
									<button type="submit" class="btn btn-primary">Submit <i class="icon-arrow-right14 position-right"></i></button>
								</div>
							</form>
						</div>
					</div>
<!-- /basic datatable -->
