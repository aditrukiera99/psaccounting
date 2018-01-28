<!-- Page header -->
<div class="page-header">
	<div class="page-header-content">
		<div class="page-title">
			<h4>
				<a href="<?=base_url()?>pengiriman_c"><i class="icon-arrow-left52 position-left"></i></a>
				<span class="text-semibold">Perusahaan </span> - Pengiriman
				<small class="display-block">Data pengiriman perusahaan</small>
			</h4>
		</div>

		<div class="heading-elements">
			<div class="heading-btn-group" style="margin-top: -10px;">
				
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
									<span class="text-semibold">Success!</span> Data Berhasil Diubah
							    </div>
							<?php
							}
							?>
							<form class="form-horizontal" action="<?=base_url().$post_url;?>" method="post">
								<fieldset class="content-group"><legend class="text-bold">Form Edit Data</legend>

									<div class="form-group">
										<label class="control-label col-lg-2">Nama</label>
										<div class="col-lg-10">
											<input type="text" class="form-control" name="nama" value="<?=$dt->NAMA;?>" placeholder="Masukkan Nama">
										</div>
									</div>

								</fieldset>

								<div class="text-right">
									<button type="submit" name="simpan" class="btn btn-primary">Submit <i class="icon-arrow-right14 position-right"></i></button>
								</div>
							</form>
						</div>
					</div>
<!-- /basic datatable -->
