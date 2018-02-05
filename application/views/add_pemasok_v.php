<!-- Page header -->
<div class="page-header">
	<div class="page-header-content">
		<div class="page-title">
			<h4>
				<a href="<?=base_url()?>pemasok_c"><i class="icon-arrow-left52 position-left"></i></a>
				<span class="text-semibold">Perusahaan </span> - pemasok
				<small class="display-block">Data pemasok perusahaan</small>
			</h4>
		</div>

		<div class="heading-elements">
			<div class="heading-btn-group" style="margin-top: -10px;">
				<a href="<?=base_url();?>add_pemasok_c" class="btn btn-success btn-float "><i class="icon-plus-circle2"></i><span>Tambah Data</span></a>
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
							<form class="form-horizontal" action="<?=base_url()?>add_karyawan_c" method="post">
								<fieldset class="content-group">
									<div class="tabbable">
										<ul class="nav nav-tabs nav-tabs-highlight nav-justified">
											<li class="active"><a href="#highlighted-justified-tab1" data-toggle="tab">UMUM</a></li>
											<li><a href="#highlighted-justified-tab2" data-toggle="tab">PEMBELIAN</a></li>
											<li><a href="#highlighted-justified-tab3" data-toggle="tab">SALDO</a></li>
											<li><a href="#highlighted-justified-tab4" data-toggle="tab">LAIN - LAIN</a></li>
											<li><a href="#highlighted-justified-tab5" data-toggle="tab">AKUN</a></li>
										</ul>

										<div class="tab-content">
											<div class="tab-pane active" id="highlighted-justified-tab1">
												<div class="col-md-6">
													<div class="form-group">
														<label class="control-label col-lg-2">Nama</label>
														<div class="col-lg-10">
															<input type="text" class="form-control" name="nama" placeholder="Masukkan Nama">
														</div>
													</div>

													<div class="form-group">
														<label class="control-label col-lg-2">Kategori Pemasok</label>
														<div class="col-lg-10">
															<select class="select-search" name="kategori_barang">
																<?php 
																	foreach ($data_kategori as $key => $value) {
																		?>
																		<option value="<?=$value->ID;?>"><?=$value->NAMA;?></option>
																		<?php
																	}
																?>
															</select>
														</div>
													</div>

													<div class="form-group">
														<label class="control-label col-lg-2">ID Pemasok</label>
														<div class="col-lg-10">
															<input type="text" class="form-control" name="kode_pemasok" placeholder="Masukkan ID Pemasok">
														</div>
													</div>

													<div class="form-group">
														<label class="control-label col-lg-2">Email</label>
														<div class="col-lg-10">
															<input type="text" class="form-control" name="email" placeholder="Masukkan Email">
														</div>
													</div>
													
													<div class="form-group">
														<label class="control-label col-lg-2">No.Telp Bisnis</label>
														<div class="col-lg-10">
															<input type="text" class="form-control" name="kode_pemasok" placeholder="Masukkan No Telp">
														</div>
													</div>	

													<div class="form-group">
														<label class="control-label col-lg-2">Handphone</label>
														<div class="col-lg-10">
															<input type="text" class="form-control" name="handphone" placeholder="Masukkan Handphone">
														</div>
													</div>		

													<div class="form-group">
														<label class="control-label col-lg-2">Faximili</label>
														<div class="col-lg-10">
															<input type="text" class="form-control" name="faximili" placeholder="Masukkan Faximili">
														</div>
													</div>										

													<div class="form-group">
														<label class="control-label col-lg-2">Website</label>
														<div class="col-lg-10">
															<input type="text" class="form-control" name="website" placeholder="Masukkan website">
														</div>
													</div>	
												</div>
												<div class="col-md-6">
													<div class="form-group">
														<label class="control-label col-lg-2">Dipakai di Cabang</label>
														<div class="col-lg-10">
															<select class="select-search" name="kategori_barang">
																<?php 
																	foreach ($data_cabang as $key => $value) {
																		?>
																		<option value="<?=$value->ID;?>"><?=$value->NAMA;?></option>
																		<?php
																	}
																?>
															</select>
														</div>
													</div>	
													<div class="form-group">
														<label class="control-label col-lg-2">Alamat</label>
														<div class="col-lg-10">
															<textarea name="alamat" class="form-control" placeholder="Masukkan Alamat"></textarea>
														</div>
													</div>
													<div class="form-group">
														<label class="control-label col-lg-2">Kota</label>
														<div class="col-lg-10">
															<input type="text" class="form-control" name="kota" placeholder="Masukkan kota">
														</div>
													</div>
													<div class="form-group">
														<label class="control-label col-lg-2">Provinsi</label>
														<div class="col-lg-10">
															<input type="text" class="form-control" name="provinsi" placeholder="Masukkan provinsi">
														</div>
													</div>
												</div>
												
											</div>

											<div class="tab-pane" id="highlighted-justified-tab2">
												<div class="col-lg-6">
													

													<div class="form-group">
														<label class="control-label col-lg-2">Syarat Pembayaran</label>
														<div class="col-lg-10">
															<select class="select-search" name="kategori_barang">
																<?php 
																	foreach ($data_syarat_pembayaran as $key => $value) {
																		?>
																		<option value="<?=$value->ID;?>"><?=$value->NAMA;?></option>
																		<?php
																	}
																?>
															</select>
														</div>
													</div>

													<div class="form-group">
														<label class="control-label col-lg-2">Default Deskripsi</label>
														<div class="col-lg-10">
															<textarea class="form-control" name="deskripsi"></textarea>
														</div>
													</div>
												</div>

												

											</div>

											<div class="tab-pane" id="highlighted-justified-tab3">
												<div class="form-group">
													<label class="control-label col-lg-2">No.NPWP</label>
													<div class="col-lg-10">
														<input type="text" class="form-control" name="no_npwp" placeholder="Masukkan Nama">
													</div>
												</div>

												<div class="form-group">
													<label class="control-label col-lg-2">Status Pekerja</label>
													<div class="col-lg-10">
														<select name="status_pekerja" class="select-search">
															<option value="Pegawai Tetap">Pegawai Tetap</option>
															<option value="Pegawai Tidak Tetap">Pegawai Tidak Tetap</option>
															<option value="Bukan Pegawai - Distributor MLM">Bukan Pegawai - Distributor MLM</option>
															<option value="Bukan Pegawai - Pegawai Dinas Luar Asuransi">Bukan Pegawai - Pegawai Dinas Luar Asuransi</option>
															<option value="Bukan Pegawai - Penjaja Barang Dagangan">Bukan Pegawai - Penjaja Barang Dagangan</option>
															<option value="Bukan Pegawai - Tenaga Ahli">Bukan Pegawai - Tenaga Ahli</option>
															<option value="Anggota Dewan Komisaris atau Dewan Pengawas">Anggota Dewan Komisaris atau Dewan Pengawas</option>
															<option value="Bukan Pegawai yang Menerima Imbalan yang Bersifat Berkesinambungan">Bukan Pegawai yang Menerima Imbalan yang Bersifat Berkesinambungan</option>
															<option value="Bukan Pegawai yang Menerima Imbalan yang Bersifat Berkesinambungan">Bukan Pegawai yang Menerima Imbalan yang Tidak Bersifat Berkesinambungan</option>
															
														</select>
													</div>
												</div>

												<div class="form-group">
													<label class="control-label col-lg-2">Dikenakan PKTP</label>
													<div class="col-lg-10">
														<input type="chekbox" class="form-control" name="dikenakan_pktp">
													</div>
												</div>

												<div class="form-group">
													<label class="control-label col-lg-2">Status PKTP</label>
													<div class="col-lg-10">
														<select name="status_pktp" class="select-search">
															<option value="Tidak Kawin (Tidak ada Tanggungan)">Tidak Kawin (Tidak ada Tanggungan)</option>
															<option value="Tidak Kawin (1 Tanggungan)">Tidak Kawin (1 Tanggungan)</option>
															<option value="Tidak Kawin (2 Tanggungan)">Tidak Kawin (2 Tanggungan)</option>
															<option value="Tidak Kawin (3 Tanggungan)">Tidak Kawin (3 Tanggungan)</option>
															<option value="Kawin (1 Tanggungan)">Kawin (1 Tanggungan)</option>
															<option value="Kawin (2 Tanggungan)">Kawin (2 Tanggungan)</option>
															<option value="Kawin (3 Tanggungan)">Kawin (3 Tanggungan)</option>
															
															
														</select>
													</div>
												</div>
											</div>

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
