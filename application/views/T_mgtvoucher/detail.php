<?php echo _css('selectize,datepicker') ?>
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/editor_text/src/richtext.min.css">
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/editor_text/font-awesome.min.css">
<div class="card col-12">
	<div class="card-status bg-green"></div>
	<div class="card-header">
		<h3 class="card-title">Detail Voucher</h3>
		<div class="card-options"><a href="javascript:void(0)" class="card-options-collapse" data-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a><a href="javascript:void(0)" class="card-options-fullscreen" data-toggle="card-fullscreen"><i class="fe fe-maximize"></i></a></div>
	</div>
	<div class="card-body">
		<form id='form-a' method="GET">
		<input hidden class='data-sending' id='id' value='<?php if(isset($id))echo $id?>'>
		<table width="100%">
			<tr>
				<td width='20%'>Nama Voucher:</td>
				<td><?php if (isset($data)) echo $data->nama_voucher ?>
				</td>
			</tr>
			<tr>
				<td width='20%'>Kode Voucher</td>
				<td><?php if (isset($data)) echo $data->kode_voucher ?>
				</td>
			</tr>
			<tr>
				<td></td>
				<td>&nbsp;</td>
			</tr>
			<tr>
				<td colspan=2><b>Rules Based On Time</b></td>
			</tr>
			<tr>
				<td>Already Subscribe Indihome</td>
				<td><?php if (isset($data)) echo $data->already_subscribe ?>&nbsp; Days
				</td>
			</tr>
			<tr>
				<td>Periode of time redeem</td>
				<td><?php if (isset($data)) echo $data->periode_time ?>&nbsp; Days
				</td>
			</tr>
			<tr>
				<td>Special Day</td>
				<td>
					<?php if (isset($data)) echo $data->special_day ?>
				</td>
			</tr>
			<tr>
				<td></td>
				<td>&nbsp;</td>
			</tr>
			<tr>
				<td colspan=2><b>Rules Based On Value</b></td>
			</tr>
			<tr>
				<td>Minimum Payment</td>
				<td><?php if (isset($data)) echo $data->minimum_payment ?>
				</td>
			</tr>
			<tr>
				<td>Maximum Value (Percentage Voucher)</td>
				<td><?php if (isset($data)) echo $data->max_nominal ?>
				</td>
			</tr>
			<tr>
				<td></td>
				<td>&nbsp;</td>
			</tr>
			<tr>
				<td colspan=2><b>Rules Based On Place</b></td>
			</tr>
			<tr>
				<td>Regional</td>
				<td><?php if (isset($data)) echo $data->regional ?></td>
			</tr>
			<tr>
				<td>Witel</td>
				<td><?php if (isset($data)) echo $data->witel ?></td>
			</tr>
			<tr>
				<td>Channel Payment</td>
				<td><?php if (isset($data)) echo $data->channel_payment ?></td>
			</tr>
			<tr>
				<td colspan=2>&nbsp;</td>
			</tr>
			<tr>
				<td colspan=2><b>Product & Customer</b></td>
			</tr>

			<tr>
				<td>Jenis pembayaran</td>
				<td><?php if (isset($data)) echo $data->jenis_pembayaran ?></td>
			</tr>
			<tr>
				<td>Addon</td>
				<td><?php if (isset($data)) echo $data->addon ?></td>
			</tr>
			<tr>
				<td>Type Customer</td>
				<td> <?php if (isset($data)) echo $data->type_customer ?></td>
			</tr>
			<tr>
				<td>Type HVC</td>
				<td> <?php if (isset($data)) echo $data->type_hvc ?></td>
			</tr>
			<tr>
				<td colspan=2>&nbsp;</td>
			</tr>
			<tr>
				<td colspan=2><b>Voucher Value</b></td>
			</tr>
			<tr>
				<td>Jenis Voucher</td>
				<td><?php if (isset($data)) echo $data->jenis_cashback ?></td>
			</tr>
			<tr>
				<td>Value</td>
				<td>
					<table width="100%">
						<tr>
							<td width="10%">
								Nominal :
							</td>
							<td width="10%">
								<?php if (isset($data)) echo $data->val_nominal ?>
							</td>
							<td>
								Nominal Cashback :
							</td>
							<td>
								<?php if (isset($data)) echo $data->nominal_cashback ?>
							</td>
						</tr>
						<tr>
							<td>
								Percent
							</td>
							<td>
								<?php if (isset($data)) echo $data->val_percent ?>
							</td>
							<td>
								Percent Cashback
							</td>
							<td>
								<?php if (isset($data)) echo $data->percent_cashback ?>
							</td>
							<td>
								Max Nominal
							</td>
							<td>
								<?php if (isset($data)) echo $data->max_nominal ?>
							</td>
						</tr>
					</table>
				</td>
			</tr>
			<tr>
				<td>IS Limited?</td>
				<td>
					<table width="100%">
						<tr>
							<td width="10%">
								Limited :
							</td>
								<?php if (isset($data)) echo $data->islimited ?>
							<td>
								Limited Value :<br>
							</td>
							<td>
								<?php if (isset($data)) echo $data->limited_val ?>
							</td>
						</tr>
						<tr>
							<td>
								Unlimited
							</td>
							<td>
								<?php if (isset($data)) echo $data->unlimited ?>
							</td>
							
						</tr>
					</table>
				</td>
			</tr>
			<tr>
				<td><b>Date Live</b></td>
				<td> Start live</td>
				<td><?php if (isset($data)) echo $data->start_datelive ?></td>
				<td> End Live</td>
				<td><?php if (isset($data)) echo $data->end_datelive ?></td>
			</tr>

		</table>
		<br>
		<table>
			<tr>
				<td><b>Wording</b></td>
				<td><?php if (isset($data)) echo $data->wording ?></td>
			
			</tr>
		</table>

		<table>
			<tr>
				<td><b>Preview Gambar</b></td>
				<td><?php if (isset($data)) echo $data->image ?></td>
			</tr>
		</table>
		</form>
	</div>
</div>
</div>




<?php echo _js('selectize,datepicker')?>

<script>var page_version="1.0.8"</script>

<script> 
var custom_select = $('.custom-select').selectize({}); 	
var custom_select_link = $('.custom-select-link');

$(document).ready(function(){
})

	
$('.data-sending').keydown(function(e){
	remove_message();
	switch(e.which){
		case 13 :
		apply();
		return false;
	}
});

</script>
</script>