<!-- Page header -->
<style type="text/css">
.data_item:hover{
    background: #0f723a;
    cursor: pointer;
    color: #FFF;
}

.table-striped tbody tr:nth-of-type(odd) {
    background-color: #c4dff6 !important;
}

.table-bordered {
    border: 2px solid #00bf86;
    background: #fff !important;
}
</style>

<div class="page-header">
	<div class="page-header-content">
		<div class="page-title">
			<h4>
				<a href="<?=base_url()?>cabang_c"><i class="icon-arrow-left52 position-left"></i></a>
				<span class="text-semibold">Buku Besar </span> - Pencatatan Gaji
				<small class="display-block">Data Pencacatan Gaji</small>
			</h4>
		</div>

		<div class="heading-elements">
			<div class="heading-btn-group" style="margin-top: -10px;">
				
			</div>
		</div>
	</div>
</div>
<!-- /page header -->

<input id="tr_utama_count" value="1" type="hidden"/>
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
							<form class="form-horizontal" action="<?=base_url()?>pencatatan_beban_c" method="post">
								<fieldset class="content-group">
									<legend class="text-bold">Data Baru</legend>

									<div class="col-lg-6">
										<div class="form-group">
											<label class="control-label col-lg-2">Tipe Pembayaran</label>
											<div class="col-lg-10">
												<select name="tipe_pembayaran" class="select-search" >
													<option value="semua">Cari/Pilih.....</option>
													<option value="PPN Keluaran">Bulanan</option>
													<option value="Pph 23 Pembelian">Non Bulanan</option>
												</select>
											</div>
										</div>

										<div class="form-group">
											<label class="control-label col-lg-2">Bulan</label>
											<div class="col-lg-5">
												<select name="tipe_pembayaran" class="select-search" >
													<option value="semua">Cari/Pilih.....</option>
													<option value="Januari">Januari</option>
													<option value="Februari">Februari</option>
													<option value="Maret">Maret</option>
													<option value="April">April</option>
													<option value="Mei">Mei</option>
													<option value="Juni">Juni</option>
													<option value="Juli">Juli</option>
													<option value="Agustus">Agustus</option>
													<option value="September">September</option>
													<option value="Oktober">Oktober</option>
													<option value="November">November</option>
													<option value="Desember">Desember</option>
													
												</select>
											</div>
											<div class="col-lg-5">
												<select name="tipe_pembayaran" class="select-search" >
													<option value="semua">Cari/Pilih.....</option>
													<option value="2016">2016</option>
													<option value="2017">2017</option>
													<option value="2018">2018</option>
													<option value="2019">2019</option>
												</select>
											</div>
										</div>

									</div>

									<div class="col-lg-6">
										<div class="form-group">
											<label class="control-label col-lg-2">No</label>
											<div class="col-lg-10">
												<input type="text" name="no" class="form-control" >
											</div>
										</div>

										<div class="form-group">
											<label class="control-label col-lg-2">Tanggal</label>
											<div class="col-lg-10">
												<input type="text" name="tgl" class="form-control daterange-single" value="<?php echo date('m/d/Y'); ?>">
											</div>
										</div>

										<div class="form-group">
											<label class="control-label col-lg-2">Jatuh Tempo</label>
											<div class="col-lg-10">
												<input type="text" name="jatuh_tempo" class="form-control daterange-single" value="<?php echo date('m/d/Y'); ?>">
											</div>
										</div>
										
									</div>
																		
									<div class="col-lg-12">
										<legend class="text-bold">Saldo Awal</legend>

										<div class="form-group">

											
											<div class="col-lg-12">

	                                            <br>
	                                                <br>
	                                                <table class="table table-bordered table-hover table-striped">
	                                                    <thead>
	                                                        <tr>
	                                                            <th class="bg-success">NAMA KARYAWAN</th>
	                                                            <th class="bg-success">PENDAPATAN BRUTO</th>
	                                                            <th class="bg-success">PAJAK PENGHASILAN</th>
	                                                            <th class="bg-success" style="width: 20%;">GAJI DIBAYARKAN</th>
	                                                            <th class="bg-success" style="width: 10%;">ACTION</th>
	                                                        </tr>
	                                                    </thead>
	                                                    <tbody id="tes">
				                                            <tr id="tr_1" class="tr_utama">
				                                                <td align="left" style="vertical-align:middle;"> 
				                                                    <div class="control-group">
				                                                            <div class="controls">
				                                                                <select name="kode_akun[]" class="select-search">
				                                                                	<?php 
				                                                                		foreach ($data_karyawan as $key => $value) {
				                                                                			?>
				                                                                			<option value="<?=$value->ID;?>"><?=$value->NAMA_LENGKAP;?></option>
				                                                                			<?php
				                                                                		}
				                                                                	?>
				                                                                </select>
				                                                            </div>
				                                                    </div>
				                                                </td>

				                                                <td align="left" style="vertical-align:middle;"> 
				                                                    <div class="control-group">
				                                                            <div class="controls">
				                                                                <input class="form-control" required onkeyup="FormatCurrency(this); hitung_total(1);" style="font-size: 18px; text-align:right; width: 80%;" type="text"  value="" name="bruto[]" id="harga_satuan_1">
				                                                            </div>
				                                                    </div>
				                                                </td>

				                                                <td align="left" style="vertical-align:middle;"> 
				                                                    <div class="control-group">
				                                                            <div class="controls">
				                                                                <input class="form-control" required onkeyup="FormatCurrency(this); hitung_total(1);" style="font-size: 18px; text-align:right; width: 80%;" type="text"  value="" name="pajak[]" id="harga_satuan_1">
				                                                            </div>
				                                                    </div>
				                                                </td>

				                                                <td align="center" style="vertical-align:middle;"> 
				                                                    <div class="span12">
				                                                    <div class="controls">
				                                                        <input class="form-control" required onkeyup="FormatCurrency(this); hitung_total(1);" style="font-size: 18px; text-align:right; width: 80%;" type="text"  value="" name="gaji[]" id="harga_satuan_1">
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

								</fieldset>

								<div class="text-right">
									<button type="submit" class="btn btn-primary">Submit <i class="icon-arrow-right14 position-right"></i></button>
								</div>
							</form>
						</div>
					</div>

					

<!-- /basic datatable -->


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
    '<tr id="tr_'+i+'" class="tr_utama">'+
        '<td align="left" style="vertical-align:middle;"> '+
		'		           <div class="control-group">'+
		'		                     <div class="controls">'+
		'		                                                                <select name="kode_akun" class="select-search">'+
		'		                                                                	<?php foreach ($data_karyawan as $key => $value) { ?>'+
		'		                                   <option value="<?=$value->ID;?>"><?=$value->NAMA_LENGKAP;?></option>'+
		'		                                                                	<?php } ?>'+
		'		                                                                </select>'+
		'		                                                            </div>'+
		'		                                                    </div>'+
		'		                                                </td>'+

		'		                                                <td align="left" style="vertical-align:middle;"> '+
		'		                                                    <div class="control-group">'+
		'		                                                            <div class="controls">'+
		'<input class="form-control" required onkeyup="FormatCurrency(this); hitung_total(1);" style="font-'+'size: 18px; text-align:right; width: 80%;" type="text"  value="" name="giro[]" >'+
		'		                                                            </div>'+
		'		                                                    </div>'+
		'		                                                </td>'+

		'		                                                <td align="left" style="vertical-align:middle;"> '+
		'		                                                    <div class="control-group">'+
		'		                                                            <div class="controls">'+
		'<input class="form-control" required onkeyup="FormatCurrency(this); hitung_total(1);" style="font-'+'size: 18px; text-align:right; width: 80%;" type="text"  value="" name="pajak[]" >'+
		'		                                                            </div>'+
		'		                                                    </div>'+
		'		                                                </td>'+


		'		                                                <td align="center" style="vertical-align:middle;"> '+
		'		                                                    <div class="span12">'+
		'		                                                    <div class="controls">'+
		'		                                                        <input class="form-control" required onkeyup="FormatCurrency(this); hitung_total(1);" style="font-'+'size: 18px; text-align:right; width: 80%;" type="text"  value="" name="harga_satuan[]" >'+
		'		                                                    </div>'+
		'		                                                    </div>'+
		'		                                                </td>'+                                                

        '<td class="center" style="background:#FFF; text-align:center;">'+
            '<button style="width: 100%;" onclick="hapus_row('+i+');" type="button" class="btn btn-danger"> Hapus </button>'+
        '</td>'+
    '</tr>';

    $('#tes').append($isi_1);

    $('#tr_'+i).find('.cek_select').attr('class', 'cek_select_'+i);

    $('#tr_utama_count').val(i);
    $(".cek_select_"+i).chosen();

}
</script>
