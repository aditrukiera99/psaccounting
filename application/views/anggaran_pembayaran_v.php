<script>
	function tipeer(id){
		$('.display').hide();
		if(id == "Departemen"){

			$("#departemen").show();

		}else if(id == "Proyek"){

			$("#proyek").show();
		}
	}
</script>
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
				<span class="text-semibold">Perusahaan </span> - Anggaran Pembayaran
				<small class="display-block">Data Anggaran Pembayaran perusahaan</small>
			</h4>
		</div>

		<div class="heading-elements">
			<div class="heading-btn-group" style="margin-top: -10px;">
				
			</div>
		</div>
	</div>
</div>
<!-- /page header -->

<input type="hidden" id="jml_tr" value="0">
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
							<form class="form-horizontal" action="<?=base_url()?>add_proyek_c" method="post">
								<fieldset class="content-group">
									<legend class="text-bold">Data Baru</legend>

									<div class="form-group">
										<label class="control-label col-lg-2">Bulan</label>
										<div class="col-lg-5">
											<select name="bulan" class="select-search">
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
										<div class="col-lg-2	">
											<input type="text" class="form-control" name="tahun" value="<?php echo date('Y');?>" >
										</div>
									</div>

									<div class="form-group">
										<label class="control-label col-lg-2">Tipe</label>
										<div class="col-lg-10">
											<select name="tipe" class="select-search" onchange="tipeer(this.value)">
												<option value="Umum">UMUM</option>
												<option value="Departemen">Per Departemen</option>
												<option value="Proyek">Per Proyek</option>
											</select>
										</div>
									</div>

									<div class="display form-group" id="departemen" style="display: none;">
										<label class="control-label col-lg-2">Departemen</label>
										<div class="col-lg-10">
											<select class="select-search" name="departemen">
												<?php 
													foreach ($data_item as $key => $value) {
														?>
														<option value="<?=$value->ID;?>"><?=$value->DEPARTEMEN;?></option>
														<?php
													}
												?>	
											</select>
										</div>
									</div>

									<div class="display form-group" id="proyek" style="display: none;">
										<label class="control-label col-lg-2">Proyek</label>
										<div class="col-lg-10">
											<select class="select-search" name="proyek">
												<?php 
													foreach ($data_proyek as $key => $value) {
														?>
														<option value="<?=$value->ID;?>"><?=$value->NAMA_PROYEK;?></option>
														<?php
													}
												?>	
											</select>
										</div>
									</div>

									

								
									<legend class="text-bold">Rincian Jurnal</legend>

									<div class="form-group">
										<div class="col-lg-12">
											<button type="button" class="btn btn-labeled btn-success" data-toggle="modal" data-target="#large"><i class="icon-plus-circle2"></i> Add Item
                                            </button>

                                            <br>
                                                <br>
                                                <table class="table table-bordered table-hover table-striped">
                                                    <thead>
                                                        <tr>
                                                            <th class="bg-success">KODE</th>
                                                            <th class="bg-success" style="width: 50%;">BEBAN/PENDAPATAN</th>
                                                            <th class="bg-success" style="width: 20%;">ANGGARAN</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody id="item_row">
                                                        <tr style="background: #FFF !important;" id="no_item">
                                                            <td style="vertical-align: middle; text-align: center;" colspan="6">Please choose an item</td>
                                                        </tr>
                                                    </tbody>
                                                    
                                                </table>
										</div>
									</div>

								</fieldset>

								<div class="text-right">
									<button type="submit" class="btn btn-primary">Submit <i class="icon-arrow-right14 position-right"></i></button>
								</div>
							</form>
						</div>
					</div>

					<div class="modal fade" id="large" tabindex="-1" role="dialog" aria-labelledby="modalLabelLarge" aria-hidden="true">
					    <div class="modal-dialog modal-lg">
					        <div class="modal-content">
					            <div class="modal-header">
					                <button type="button" class="close" data-dismiss="modal" aria-label="Close" id="modal_item_close">
					                    <span aria-hidden="true">×</span>
					                </button>
					                <input type="text" class="form-control form-control-success" id="username" style="width: 50%;" placeholder="Search item ...">
					            </div>
					            <div class="modal-body" style="height: 460px; padding: 6px; background: #fff;overflow-y: scroll;">
					                <table class="table table-bordered">
					                    <thead>
					                    <tr>
					                        <th class="bg-success" style="text-align: center;">KODE</th>
					                        <th class="bg-success" style="text-align: center;">NAMA</th>
					                    </tr>
					                    </thead>
					                    <tbody>
					                    <?PHP foreach ($data_akun as $key => $row) { ?>
					                    <tr class="data_item" onclick="add_row('<?=$row->ID;?>');">
					                        <td><?=$row->KODE_AKUN;?></td>
					                        <td><?=$row->NAMA_AKUN;?></td>
					                    </tr>
					                    <?PHP } ?>
					                    </tbody>
					                </table>
					            </div>
					        </div>
					    </div>
					</div>

<!-- /basic datatable -->


<script type="text/javascript">
    function add_row(id) {
        $('#no_item').hide();
        $.ajax({
            url : '<?php echo base_url(); ?>departemen_c/get_akun_info',
            data : {id:id},
            type : "POST",
            dataType : "json",
            success : function(res){   
                

                var jml_tr = $('#jml_tr').val();
                var id2 = parseFloat(jml_tr) + 1;


                var isi  =  '<tr>'+
                                '<input type="hidden" name="kode_akun[]" value="'+res.KODE_AKUN+'"/>'+
                                '<input type="hidden" name="nama_akun[]" value="'+res.NAMA_AKUN+'"/>'+
                                '<td style="vertical-align: middle;">'+res.KODE_AKUN+'</td>'+
                                '<td style="vertical-align: middle;">'+res.NAMA_AKUN+'</td>'+
                                '<td style="vertical-align: middle;">'+
                                	'<input id="jumlah_'+id2+'" value="1" class="form-control" type="text" name="jumlah[]" onkeyup="FormatCurrency(this);hitung_total_semua();" style="width: 100%; text-align: center;" required>'+
                                '</td>'+
                                
                                
                            '</tr>';

                $('#item_row').append(isi);
                $('#jml_tr').val(id2);
                $('#modal_item_close').click();

            }
        });
    }

    function hitung_total_semua(){
		var sum = 0;
		
		$("input[name='jumlah[]']").each(function(idx, elm) {
			var tot = elm.value.split(',').join('');
			if(tot > 0){
	    		sum += parseFloat(tot);
			}
	    });

	    $('#debit_tot').val(sum);
	    $('#debit_txt').html('Rp. '+acc_format(sum, ""));
	}

	function acc_format(n, currency) {
		return currency + " " + n.toFixed(2).replace(/(\d)(?=(\d{3})+\.)/g, "$1,");
	}

</script>
