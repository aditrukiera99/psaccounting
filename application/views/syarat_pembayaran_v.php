<!-- Page header -->
<div class="page-header">
	<div class="page-header-content">
		<div class="page-title">
			<h4>
				<i class="icon-arrow-left52 position-left"></i>
				<span class="text-semibold">Perusahaan </span> - Syarat Pembayaran
				<small class="display-block">Data syarat pembayaran</small>
			</h4>
		</div>

		<div class="heading-elements">
			<div class="heading-btn-group" style="margin-top: -10px;">
				<a href="<?=base_url();?>add_syarat_pembayaran_c" class="btn btn-success btn-float "><i class="icon-plus-circle2"></i><span>Tambah Data</span></a>
			</div>
		</div>
	</div>
</div>
<!-- /page header -->


<!-- Basic datatable -->
<div class="panel panel-flat">
	<div class="panel-heading">
		<h5 class="panel-title">Data Syarat Pembayaran</h5>
		<div class="heading-elements">
			<ul class="icons-list">
        		<li><a data-action="collapse"></a></li>
        		<li><a data-action="reload"></a></li>
        	</ul>
    	</div>
	</div>

	<table class="table table-bordered datatable-basic">
		<thead>
			<tr>

				<th class="bg-info" style="width: 10%;">Nama</th>
				<th class="bg-info" style="width: 10%;">Diskon</th>
				<th class="bg-info" style="width: 10%;">Masa Diskon</th>
				<th class="bg-info" style="width: 10%;">Masa Jatuh Tempo</th>
				<th class="bg-info" style="width: 30%;">Keterangan</th>
				<th class="bg-info" style="width: 10%;">Status</th>
				<th class="bg-info" style="width: 20%;">Actions</th>
			</tr>
		</thead>
		<tbody>
			<?php
			$i=0;
			foreach ($data_item as $key => $value) {
			$i++;

			?>
			<tr>
				<td><?=$value->NAMA;?></td>
				<td><?=$value->DISKON;?>%</td>
				<td><?=$value->MEMBAYAR_ANTARA;?> Hari</td>
				<td><?=$value->JATUH_TEMPO;?> Hari</td>
				<td><?=$value->KETERANGAN;?></td>
				<td>
					<?php
						if($value->STATUS == '1'){
							?>
								<span class="label label-success">AKTIF</span>
							<?php
						}else{
							?>
								<span class="label label-warning">TIDAK AKTIF</span>
							<?php
						}

					?>
				</td>
				<td><a href="<?=base_url();?>syarat_pembayaran_c/ubah_data/<?=$value->ID;?>"><button class="btn btn-success"><i class="icon-pencil5"></i> Edit</button></a>
					<button type="button" onclick="$('#dialog-btn').click(); $('#id_hapus').val('<?=$value->ID;?>');" class="btn btn-warning" data-toggle="modal" data-target="#modal_default">Delete <i class="icon-trash"></i></button>
				</td>
			</tr>
			<?php } ?>
		</tbody>
	</table>
</div>
<!-- /basic datatable -->

<div id="modal_default" class="modal fade">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header bg-danger">
								<button type="button" class="close" data-dismiss="modal">&times;</button>
								<h5 class="modal-title">DELETE DATA</h5>
							</div>

							<form id="delete" method="post" action="<?=base_url().$post_url;?>">
							    <input type="hidden" name="id_hapus" id="id_hapus" value="" />
							</form>

							<div class="modal-body">
								<h5 class="text-semibold">Are you sure delete this data ?</h5>
							</div>

							<div class="modal-footer">
								<button type="button" onclick="$('#id_hapus').val('');" class="btn btn-link" data-dismiss="modal">NO</button>
								<button type="button" onclick="$('#delete').submit();" class="btn btn-danger">YES</button>
							</div>
						</div>
					</div>
				</div>


<script type="text/javascript">

function hapus_klik(id){
	$('#dialog-btn').click(); 
	$('#id_hapus').val(id);
}
</script>
