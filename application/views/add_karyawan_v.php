<!-- Page header -->
<div class="page-header">
	<div class="page-header-content">
		<div class="page-title">
			<h4>
				<a href="<?=base_url()?>karyawan_c"><i class="icon-arrow-left52 position-left"></i></a>
				<span class="text-semibold">Perusahaan </span> - Karyawan
				<small class="display-block">Data Karyawan perusahaan</small>
			</h4>
		</div>

		<div class="heading-elements">
			<div class="heading-btn-group" style="margin-top: -10px;">
				<a href="<?=base_url();?>add_karyawan_c" class="btn btn-success btn-float "><i class="icon-plus-circle2"></i><span>Tambah Data</span></a>
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
											<li class="active"><a href="#highlighted-justified-tab1" data-toggle="tab">KARYAWAN</a></li>
											<li><a href="#highlighted-justified-tab2" data-toggle="tab">ALAMAT</a></li>
											<li><a href="#highlighted-justified-tab3" data-toggle="tab">PAJAK PENGHASILAN</a></li>
										</ul>

										<div class="tab-content">
											<div class="tab-pane active" id="highlighted-justified-tab1">
												<div class="col-md-6">
													<div class="form-group">
														<label class="control-label col-lg-2">Nama Lengkap</label>
														<div class="col-lg-10">
															<input type="text" class="form-control" name="nama_lengkap" placeholder="Masukkan Nama">
														</div>
													</div>

													<div class="form-group">
														<label class="control-label col-lg-2">Jabatan</label>
														<div class="col-lg-10">
															<input type="text" name="posisi" class="form-control" placeholder="Masukkan Jabatan">
														</div>
													</div>

													<div class="form-group">
														<label class="control-label col-lg-2">Email</label>
														<div class="col-lg-10">
															<input type="email" name="email" class="form-control" placeholder="Masukkan Email">
														</div>
													</div>

													<div class="form-group">
														<label class="control-label col-lg-2">Handphone</label>
														<div class="col-lg-10">
															<input type="text" name="handphone" class="form-control" placeholder="Masukkan nomor hp">
														</div>
													</div>

													<div class="form-group">
														<label class="control-label col-lg-2">Telp Rumah</label>
														<div class="col-lg-10">
															<input type="text" class="form-control" name="no_rumah" placeholder="Masukkan no telp rumah">
														</div>
													</div>

													<div class="form-group">
														<label class="control-label col-lg-2">PIN BBM</label>
														<div class="col-lg-10">
															<input type="text" name="bbm" class="form-control" placeholder="Masukkan pin bbm">
														</div>
													</div>

													<div class="form-group">
														<label class="control-label col-lg-2">Website</label>
														<div class="col-lg-10">
															<input type="text" name="web" class="form-control" placeholder="Masukkan website">
														</div>
													</div>
												</div>
												<div class="col-md-6">
													<div class="form-group">
														<label class="control-label col-lg-2">Kewarganegaraan</label>
														<div class="col-lg-10">
															<input type="text" class="form-control" name="kewarganegaraan" placeholder="Masukkan Kewarganegaraan">
														</div>
													</div>

													<div class="form-group">
														<label class="control-label col-lg-2">ID Karyawan</label>
														<div class="col-lg-10">
															<input type="text" name="id_karyawan" class="form-control" placeholder="Masukkan ID Karyawan">
														</div>
													</div>

													<div class="form-group">
														<label class="control-label col-lg-2">Tgl Masuk</label>
														<div class="col-lg-10">
															<input type="text" name="tgl_masuk" class="form-control daterange-single" value="<?php echo date('m/d/Y'); ?>">
														</div>
													</div>

													<div class="form-group">
														<label class="control-label col-lg-2">No.KTP</label>
														<div class="col-lg-10">
															<input type="text" name="no_ktp" class="form-control" placeholder="Masukkan No KTP">
														</div>
													</div>

													<div class="form-group">
														<label class="control-label col-lg-2">Departemen</label>
														<div class="col-lg-10">
															<select class="select-search" name="departemen">
																<?php 
																	foreach ($data_departemen as $key => $value) {
																		?>
																		<option value="<?=$value->ID;?>"><?=$value->DEPARTEMEN;?></option>
																	<?php
																	}
																?>
															</select>
														</div>
													</div>

													<div class="form-group">
														<label class="control-label col-lg-2">Penjual</label>
														<div class="col-lg-10">
															<label>
																<input type="chekbox" class="form-control" name="status_penjual">
																Ya
															</label>
														</div>
													</div>

													<div class="form-group">
														<label class="control-label col-lg-2">Catatan</label>
														<div class="col-lg-10">
															<textarea class="form-control" name="catatan"></textarea>
														</div>
													</div>
												</div>
											</div>

											<div class="tab-pane" id="highlighted-justified-tab2">
												<div class="form-group">
													<label class="control-label col-lg-2">Alamat</label>
													<div class="col-lg-10">
														<input type="text" class="form-control" name="alamat" placeholder="Masukkan Nama">
													</div>
												</div>

												<div class="form-group">
													<label class="control-label col-lg-2">Kota</label>
													<div class="col-lg-10">
														<input type="text" name="kota" class="form-control" placeholder="Masukkan Jabatan">
													</div>
												</div>

												<div class="form-group">
													<label class="control-label col-lg-2">Provinsi</label>
													<div class="col-lg-10">
														<input type="text" name="provinsi" class="form-control" placeholder="Masukkan Email">
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
s