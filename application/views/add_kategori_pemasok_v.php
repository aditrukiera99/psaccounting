<!-- Page header -->
<div class="page-header">
	<div class="page-header-content">
		<div class="page-title">
			<h4>
				<a href="<?=base_url()?>kategori_pemasok_c"><i class="icon-arrow-left52 position-left"></i></a>
				<span class="text-semibold">Persediaan </span> - Kategori pemasok
				<small class="display-block">Data kategori pemasok perusahaan</small>
			</h4>
		</div>

		<div class="heading-elements">
			<div class="heading-btn-group" style="margin-top: -10px;">
				<a href="<?=base_url();?>add_kategori_pemasok_c" class="btn btn-success btn-float "><i class="icon-plus-circle2"></i><span>Tambah Data</span></a>
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
							<form class="form-horizontal" action="<?=base_url()?>add_kategori_pemasok_c" method="post">
								<fieldset class="content-group"><legend class="text-bold">Form Input Data</legend>

									<div class="form-group">
										<label class="control-label col-lg-2">Nama</label>
										<div class="col-lg-10">
											<input type="text" class="form-control" name="nama" placeholder="Masukkan Nama">
										</div>
									</div>

									<div class="form-group">
										<label class="control-label col-lg-2">Anak Dari</label>
										<div class="col-lg-10">
											<select class="select-search" name="anak_dari">
												<option value="NONE">NONE</option>
												<?php 
													foreach ($data_item as $key => $value) {
														?>
														<option value="<?=$value->ID;?>"><?=$value->NAMA;?></option>
														<?php
													}

												?>
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
