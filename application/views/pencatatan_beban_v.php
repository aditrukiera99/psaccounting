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
				<span class="text-semibold">Buku Besar </span> - Pencatatan Beban
				<small class="display-block">Data Pencacatan Beban</small>
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
											<label class="control-label col-lg-2">Hutang Beban</label>
											<div class="col-lg-10">
												<select name="hutang_beban" class="select-search" >
													<option value="semua">Cari/Pilih.....</option>
													<option value="PPN Keluaran">PPN Keluaran</option>
													<option value="Pph 23 Pembelian">Pph 23 Pembelian</option>
													<option value="Hutang Pembelian Belum Ditagih">Hutang Pembelian Belum Ditagih</option>
													<option value="Pph 24.4(2) Pembelian">Pph 24.4(2) Pembelian</option>
												</select>
											</div>
										</div>

										<div class="form-group">
											<label class="control-label col-lg-2">No Beban</label>
											<div class="col-lg-10">
												<input type="text" class="form-control" name="no" placeholder="Masukkan No Beban" required>
											</div>
										</div>

									</div>

									<div class="col-lg-6">
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
	                                                            <th class="bg-success">KODE AKUN</th>
	                                                            <th class="bg-success">DEPARTEMEN</th>
	                                                            <th class="bg-success">PROYEK</th>
	                                                            <th class="bg-success" style="width: 10%;">JUMLAH</th>
	                                                            <th class="bg-success" style="width: 10%;">ACTION</th>
	                                                        </tr>
	                                                    </thead>
	                                                    <tbody id="tes">
				                                            <tr id="tr_1" class="tr_utama">
				                                                <td align="left" style="vertical-align:middle;"> 
				                                                    <div class="control-group">
				                                                            <div class="controls">
				                                                                <select name="kode_akun" class="select-search">
				                                                                	<?php 
				                                                                		foreach ($data_akun as $key => $value) {
				                                                                			?>
				                                                                			<option value="<?=$value->KODE_AKUN;?>"><?=$value->KODE_AKUN;?> - <?=$value->NAMA_AKUN;?></option>
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
				                                                                <select name="kode_akun" class="select-search">
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
				                                                </td>

				                                                <td align="left" style="vertical-align:middle;"> 
				                                                    <div class="control-group">
				                                                            <div class="controls">
				                                                                <select name="kode_akun" class="select-search">
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
		'		                                                                	<?php foreach ($data_akun as $key => $value) { ?>'+
		'		                                   <option value="<?=$value->KODE_AKUN;?>"><?=$value->KODE_AKUN;?> - <?=$value->NAMA_AKUN;?></option>'+
		'		                                                                	<?php } ?>'+
		'		                                                                </select>'+
		'		                                                            </div>'+
		'		                                                    </div>'+
		'		                                                </td>'+

		'		                                                <td align="left" style="vertical-align:middle;"> '+
		'		                                                    <div class="control-group">'+
		'		                                                            <div class="controls">'+
		'		                                                                <select name="kode_akun" class="select-search">'+
		'		                                                                	<?php foreach ($data_departemen as $key => $value) { ?>'+
		'		                                                                			<option value="<?=$value->ID;?>"><?=$value->DEPARTEMEN;?></option>'+
		'		                                                                	<?php } ?>'+
		'		                                                                </select>'+
		'		                                                            </div>'+
		'		                                                    </div>'+
		'		                                                </td>'+

		'		                                                <td align="left" style="vertical-align:middle;"> '+
		'		                                                    <div class="control-group">'+
		'		                                                            <div class="controls">'+
		'		                                                                <select name="kode_akun" class="select-search">'+
		'		                                                                	<?php foreach ($data_cabang as $key => $value) { ?>'+
		'		                                                                			<option value="<?=$value->ID;?>"><?=$value->NAMA;?></option>'+
		'		                                                                	<?php } ?>'+
		'		                                                                </select>'+
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
