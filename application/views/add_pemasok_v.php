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
											<li><a href="#highlighted-justified-tab3" data-toggle="tab">PAJAK</a></li>
											<li><a href="#highlighted-justified-tab4" data-toggle="tab">SALDO</a></li>
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

													<div class="form-group">
														<label class="control-label col-lg-2">Akun Hutang</label>
														<div class="col-lg-10">
															<select class="select-search" name="kategori_barang">
																<?php 
																	foreach ($data_hutang as $key => $value) {
																		?>
																		<option value="<?=$value->KODE_AKUN;?>"><?=$value->KODE_AKUN;?> - <?=$value->NAMA_AKUN;?></option>
																		<?php
																	}
																?>
															</select>
														</div>
													</div>

													<div class="form-group">
														<label class="control-label col-lg-2">Akun Uang Muka</label>
														<div class="col-lg-10">
															<select class="select-search" name="kategori_barang">
																<?php 
																	foreach ($data_piutang as $key => $value) {
																		?>
																		<option value="<?=$value->KODE_AKUN;?>"><?=$value->KODE_AKUN;?> - <?=$value->NAMA_AKUN;?></option>
																		<?php
																	}
																?>
															</select>
														</div>
													</div>
												</div>

												

											</div>

											<div class="tab-pane" id="highlighted-justified-tab3">
												<div class="form-group">
													<label class="control-label col-lg-2">No#</label>
													<div class="col-lg-7">
														<input type="text" class="form-control" name="no_npwp" placeholder="Masukkan Nama">
													</div>
													<div class="col-lg-3">
														<input type="text" class="form-control" name="nppkp" placeholder="NPPKP">
													</div>
												</div>

												<div class="form-group">
													<label class="control-label col-lg-2">Tipe Pajak</label>
													<div class="col-lg-10">
														<select name="tipe_pajak" class="select-search">
															<option value="Inpor BKP">Inpor BKP</option>
															<option value="Impor BKP Tidak Berwujud">Impor BKP Tidak Berwujud</option>
															<option value="JKP Luar Pabean">JKP Luar Pabean</option>
															<option value="Perolehan Dalam Negeri - Bukan Pemungut PPN">Perolehan Dalam Negeri - Bukan Pemungut PPN</option>
															<option value="Perolehan Dalam Negeri - Pemungut PPN">Perolehan Dalam Negeri - Pemungut PPN</option>
															<option value="Perolehan Dalam Negeri - DPP Nilai Lain">Perolehan Dalam Negeri - DPP Nilai Lain</option>
															<option value="Perolehan Dalam Negeri - Penyerahan Lainnya">Perolehan Dalam Negeri - Penyerahan Lainnya</option>
															<option value="Perolehan Dalam Negeri - Penyerahan Aset">Perolehan Dalam Negeri - Penyerahan Aset</option>
															<option value="Pajak Masukan Tidak Dapat Dikreditkan - Bukan Pemungut PPN">Pajak Masukan Tidak Dapat Dikreditkan - Bukan Pemungut PPN</option>
															<option value="Pajak Masukan Tidak Dapat Dikreditkan - Pemungut Bendahara">Pajak Masukan Tidak Dapat Dikreditkan - Pemungut Bendahara</option>
															<option value="Pajak Masukan Tidak Dapat Dikreditkan - Pemungut PPN">Pajak Masukan Tidak Dapat Dikreditkan - Pemungut PPN</option>
															<option value="Pajak Masukan Tidak Dapat Dikreditkan - DPP Nilai Lain">Pajak Masukan Tidak Dapat Dikreditkan - DPP Nilai Lain</option>
															<option value="Pajak Masukan Tidak Dapat Dikreditkan - Penyerahan Lainnya">Pajak Masukan Tidak Dapat Dikreditkan - Penyerahan Lainnya</option>
															<option value="Pajak Masukan Tidak Dapat Dikreditkan - PPN tidak Dipungut">Pajak Masukan Tidak Dapat Dikreditkan - PPN tidak Dipungut</option>
															<option value="Pajak Masukan Tidak Dapat Dikreditkan - PPN Dibebaskan">Pajak Masukan Tidak Dapat Dikreditkan - PPN Dibebaskan</option>
															<option value="Pajak Masukan Tidak Dapat Dikreditkan - Penyerahan Aset">Pajak Masukan Tidak Dapat Dikreditkan - Penyerahan Aset</option>
															
															
														</select>
													</div>
												</div>

												<div class="form-group">
													<label class="control-label col-lg-2">Kode Dokumen</label>
													<div class="col-lg-10">
														<select name="kode_dokumen" class="select-search">
															<option value="Faktur Pajak">Faktur Pajak</option>
															<option value="PIB dan SSP">PIB dan SSP</option>
															<option value="SSP">SSP</option>
															<option value="Dokumen yang Dipersilahkan">Dokumen yang Dipersilahkan</option>
															<option value="PIB">PIB</option>
															<option value="Digunggung">Digunggung</option>
														</select>
													</div>
												</div>

												
											</div>

											<div class="tab-pane" id="highlighted-justified-tab4">
												<div class="col-lg-12">
													
													<table id="div1" class="display table table-stripped table-bordered table-hover">
				                                        <thead>
				                                        <tr>
				                                            <th>Tanggal</th>
				                                            <th>Saldo Awal</th>
				                                            <th>Syarat Pembayaran</th>
				                                            <th>Keterangan</th>
				                                            <th>Action</th>
				                                        </tr>
				                                        </thead>
				                                        <tbody id="tes">
				                                            <tr id="tr_1" class="tr_utama">
				                                                <td align="left" style="vertical-align:middle;"> 
				                                                    <div class="control-group">
				                                                            <div class="controls">
				                                                                <input type="text" class="form-control daterange-single" value="<?php echo date('m/d/Y'); ?>" name="tanggal_saldo[]">
				                                                            </div>
				                                                    </div>
				                                                </td>

				                                                <td align="center" style="vertical-align:middle;"> 
				                                                    <div class="span12">
				                                                    <div class="controls">
				                                                        <input class="form-control" required onkeyup="FormatCurrency(this); hitung_total(1);" style="font-size: 18px; text-align:right; width: 80%;" type="text"  value="" name="harga_satuan[]" id="harga_satuan_1">
				                                                    </div>
				                                                    </div>
				                                                </td>

				                                                <td align="center" style="vertical-align:middle;"> 
				                                                    <div class="span12">
				                                                    <div class="controls">
				                                                        <select class="select-search" name="syarat_saldo[]" required>
				                                                            <option value="">Choose a customer</option>
				                                                            <?PHP foreach ($data_syarat_pembayaran as $key => $row) { ?>
				                                                                <option value="<?=$row->ID;?>"><?=$row->NAMA;?></option>
				                                                            <?PHP } ?>
				                                                        </select>
				                                                    </div>
				                                                    </div>
				                                                </td>

				                                                <td align="center" style="vertical-align:middle;"> 
				                                                    <div class="span12">
				                                                    <div class="controls">
				                                                        <textarea class="form-control" name="keterangan[]"></textarea>
				                                                    </div>
				                                                    </div>
				                                                </td>

				                                                

				                                                <td align="center" style="vertical-align:middle;"> 
				                                                    <div class="span12">
				                                                    <div class="controls">
				                                                        
				                                                    </div>
				                                                    </div>
				                                                </td>

				                                                
				                                            </tr>
				                                        </tbody>
				                                        <tfoot>
				                                            <tr>
				                                                <td colspan="7"><button style="margin-bottom: 15px;" onclick="tambah_data();" type="button" class="btn btn-info"><i class="icon-plus"></i> Tambah Baris Data </button></td>
				                                            </tr>
				                                            <tr>
				                                                <td colspan="7"><input style="float: right;" type="submit" class="btn btn-success" value="Save Transaction" name="checkk"></td>
				                                            </tr>
				                                        </tfoot>
				                                    </table>
													
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

<script type="text/javascript">
	function hapus_row (id) {
        $('#tr_'+id).remove();
        hitung_total_semua();
    }
    
    function tambah_data() {
    var jml_tr = $('#tr_utama_count').val();
    var i = parseInt(jml_tr) + 1;

    var coa = $('#copy_ag').html();

    $isi_1 = 
    '<tr id="tr_1" class="tr_utama">'+
	'			                                                <td align="left" style="vertical-align:middle;"> '+
	'			                                                    <div class="control-group">'+
	'			                                                            <div class="controls">'+
	'			                        <input type="text" class="form-control daterange-single" value="<?PHP echo date('m/d/Y'); ?>" name="tanggal_saldo[]">'+
	'			                                                            </div>'+
	'			                                                    </div>'+
	'			                                                </td>'+

	'			                                                <td align="center" style="vertical-align:middle;"> '+
	'			                                                    <div class="span12">'+
	'			                                                        <div class="control-group">'+
	'			                                                            <div class="controls">'+
	'			                                                                <input type="text" name="saldo_awal[]" class="form-control" >'+
	'			                                                            </div>'+
	'			                                                        </div>'+
	'			                                                    </div>'+
	'			                                                </td>'+

	'			                                                <td align="center" style="vertical-align:middle;"> '+
	'			                                                    <div class="span12">'+
	'			                                                    <div class="controls">'+
	'			                                                        <select class="form-control chzn-select" name="syarat_saldo[]" required>'+
	'			                                                            <option value="">Choose a customer</option>'+
	'			                                                            <?PHP foreach ($data_syarat_pembayaran as $key => $row) { ?>'+
	'			                                                                <option value="<?=$row->ID;?>"><?=$row->NAMA;?></option>'+
	'			                                                            <?PHP } ?>'+
	'			                                                        </select>'+
	'			                                                    </div>'+
	'			                                                    </div>'+
	'			                                                </td>'+

	'			                                                <td align="center" style="vertical-align:middle;"> '+
	'			                                                    <div class="span12">'+
	'			                                                    <div class="controls">'+
	'			                                                        <textarea class="form-control" name="keterangan[]"></textarea>'+
	'			                                                    </div>'+
	'			                                                    </div>'+
	'			                                                </td>'+

	'			                                                <td align="center" style="vertical-align:middle;"> '+
	'			                                                    <div class="span12">'+
	'			                                                    <div class="controls">'+
	'			                                                        <input class="form-control" required onkeyup="FormatCurrency(this); hitung_total(1);" style="font-'+'size: 18px; text-align:right; width: 80%;" type="text"  value="" name="harga_satuan[]" id="'+'harga_satuan_1">'+
	'			                                                    </div>'+
	'			                                                    </div>'+
	'			                                                </td>'+

	'			                                                <td align="center" style="vertical-align:middle;"> '+
	'			                                                    <div class="span12">'+
	'			                                                    <div class="controls">'+
	'			                                                        <input type="text" name="" class="form-control">'+
	'			                                                    </div>'+
	'			                                                    </div>'+
	'			                                                </td>'+

	'			                                                <td align="center" style="vertical-align:middle;"> '+
	'			                                                    <div class="span12">'+
	'			                                                    <div class="controls">'+
	'			                                                        '+
	'			                                                    </div>'+
	'			                                                    </div>'+
	'			                                                </td>'+
	'			                                            </tr>';

    $('#tes').append($isi_1);

    $('#tr_'+i).find('.cek_select').attr('class', 'cek_select_'+i);

    $('#tr_utama_count').val(i);
    $(".cek_select_"+i).chosen();

}
</script>
