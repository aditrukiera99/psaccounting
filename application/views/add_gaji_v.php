<!-- Page header -->
<div class="page-header">
	<div class="page-header-content">
		<div class="page-title">
			<h4>
				<a href="<?=base_url()?>gaji_c"><i class="icon-arrow-left52 position-left"></i></a>
				<span class="text-semibold">Perusahaan </span> - Gaji
				<small class="display-block">Data Gaji perusahaan</small>
			</h4>
		</div>

		<div class="heading-elements">
			<div class="heading-btn-group" style="margin-top: -10px;">
				<a href="<?=base_url();?>add_gaji_c" class="btn btn-success btn-float "><i class="icon-plus-circle2"></i><span>Tambah Data</span></a>
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
							<form class="form-horizontal" action="<?=base_url()?>add_gaji_c" method="post">
								<fieldset class="content-group"><legend class="text-bold">Form Input Data</legend>

									<div class="form-group">
										<label class="control-label col-lg-2">Nama</label>
										<div class="col-lg-10">
											<input type="text" class="form-control" name="nama" placeholder="Masukkan Nama">
										</div>
									</div>

									<div class="form-group">
										<label class="control-label col-lg-2">Tipe</label>
										<div class="col-lg-10">
											<select class="select-search" name="tipe">
												<option value="Gaji Pensiun atau THT/JHT">Gaji Pensiun atau THT/JHT</option>
												<option value="Tunjangan Pph">Tunjangan Pph</option>
												<option value="Subsidi Pph">Subsidi Pph</option>
												<option value="Tunjangan Lainnya, Uang lembur dan sebagainya">Tunjangan Lainnya, Uang lembur dan sebagainya</option>
												<option value="Tunjangan Jaminan Kecelakaan Kerja, Jaminan Kematian">Tunjangan Jaminan Kecelakaan Kerja, Jaminan Kematian</option>
												<option value="Honoraium dan Imbalan lain sejenisnya">Honoraium dan Imbalan lain sejenisnya</option>
												<option value="Premi Asuransi Kesehatan yang Diberikan Pemberi Kerja">Premi Asuransi Kesehatan yang Diberikan Pemberi Kerja</option>
												<option value="Penerimaan dalam Bentuk Natura dan Kenikmatan Lainnya">Penerimaan dalam Bentuk Natura dan Kenikmatan Lainnya</option>
												<option value="Tantiem, Bonus, Rapel, Gratifikasi, Jasa Produksi, dan THR">Tantiem, Bonus, Rapel, Gratifikasi, Jasa Produksi, dan THR</option>
												<option value="Tunjangan Iuran Pensiun/THT/THJT Dibayarkan Pemberi Kerja">Tunjangan Iuran Pensiun/THT/THJT Dibayarkan Pemberi Kerja</option>
												<option value="Tunjangan Gaji (tidak mengurangi Pph)">Tunjangan Gaji (tidak mengurangi Pph)</option>
												<option value="Pengurangan Gaji (mengurangi Pph)">Pengurangan Gaji (mengurangi Pph)</option>
												<option value="Premi Asuransi Kesehatan Dibayarkan Pekerja">Premi Asuransi Kesehatan Dibayarkan Pekerja</option>
												<option value="Iuran Pensiun/THT/JHT Dibayarkan Pekerja">Iuran Pensiun/THT/JHT Dibayarkan Pekerja</option>
											</select>
										</div>
									</div>

									<div class="form-group">
										<label class="control-label col-lg-2">Bayar/Potong</label>
										<div class="col-lg-10">
											<select class="form-control" name="bayar">
												<option value="Bulanan">Bulanan</option>
												<option value="Non Bulanan / Setahun Sekali">Non Bulanan / Setahun Sekali</option>
											</select>
										</div>
									</div>

									<div class="form-group">
										<label class="control-label col-lg-2">Akun Beban</label>
										<div class="col-lg-10">
											<select class="select-search" name="akun">
												<?php
													foreach ($data_item as $key => $value) {
														
													
												?>
												<option value="<?=$value->KODE_AKUN;?>"><?=$value->KODE_AKUN;?> - <?=$value->NAMA_AKUN;?></option>
												<?php } ?>
											</select>
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