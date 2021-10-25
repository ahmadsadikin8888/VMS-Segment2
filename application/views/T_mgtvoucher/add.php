<?php echo _css('selectize,datepicker') ?>
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/editor_text/src/richtext.min.css">
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/editor_text/font-awesome.min.css">
<div class="card col-12">
	<div class="card-status bg-green"></div>
	<div class="card-header">
		<h3 class="card-title">Form</h3>
		<div class="card-options"><a href="javascript:void(0)" class="card-options-collapse" data-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a><a href="javascript:void(0)" class="card-options-fullscreen" data-toggle="card-fullscreen"><i class="fe fe-maximize"></i></a></div>
	</div>
	<div class="card-body">
		<input hidden class='data-sending' id='id' value='<?php if(isset($id))echo $id?>'>
		<table width="100%">
			<tr>
				<td width='20%'>Nama Voucher</td>
				<td><input required type='text' class='form data-sending focus-color col-5' id='nama_voucher' name='nama_voucher' placeholder='<?php echo $title->general->desc_required ?>' value='<?php if (isset($data)) echo $data->nama_voucher ?>'>
				</td>
			</tr>
			<tr>
				<td width='20%'>Kode Voucher</td>
				<td><input required type='text' class='form data-sending focus-color col-5' id='kode_voucher' name='kode_voucher' placeholder='<?php echo $title->general->desc_required ?>' value='<?php if (isset($data)) echo $data->kode_voucher ?>'>
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
				<td> <input required type='text' class='form data-sending focus-color col-5' id='already_subscribe' name='already_subscribe' placeholder='' value='<?php if (isset($data)) echo $data->already_subscribe ?>'>&nbsp; Days
				</td>
			</tr>
			<tr>
				<td>Periode of time redeem</td>
				<td> <input required type='text' class='form data-sending focus-color col-5' id='periode_time' name='periode_time' placeholder='<?php echo $title->general->desc_required ?>' value='<?php if (isset($data)) echo $data->periode_time ?>'>&nbsp; Days
				</td>
			</tr>
			<tr>
				<td>Special Day</td>
				<td>
					<input required type='text' class='form data-sending focus-color col-5' id='special_day' name='special_day' placeholder='<?php echo $title->general->desc_required ?>' value='<?php if (isset($data)) echo $data->kode_voucher ?>'>
					<input required type='date' class='form data-sending focus-color col-2' id='special_day' name='special_day'>
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
				<td> <input required type='text' class='form data-sending focus-color col-5' id='minimum_payment' name='minimum_payment' placeholder='<?php echo $title->general->desc_required ?>' value='<?php if (isset($data)) echo $data->minimum_payment ?>'>
				</td>
			</tr>
			<tr>
				<td>Maximum Value (Percentage Voucher)</td>
				<td> <input required type='text' class='form data-sending focus-color col-5' id='max_value' name='max_value' placeholder='<?php echo $title->general->desc_required ?>' value='<?php if (isset($data)) echo $data->max_value ?>'>
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
				<td> <select required name='regional' id="regional" class="form custom-select col-5" multiple="multiple">
						<option value="0">--Semua Regional--</option>
						<option value="1">Regional 1</option>
						<option value="2">Regional 2</option>
						<option value="3">Regional 3</option>
						<option value="4">Regional 4</option>
						<option value="5">Regional 5</option>
						<option value="6">Regional 6</option>
						<option value="7">Regional 7</option>
					</select></td>
			</tr>
			<tr>
				<td>Witel</td>
				<td> <select required name='witel' id="witel" class="form custom-select col-5" multiple="multiple">
						<option value="0">--Semua Witel--</option>

					</select></td>
			</tr>
			<tr>
				<td>Channel Payment</td>
				<td> <select required name='channel_payment' id="channel_payment" class="form custom-select col-5" multiple="multiple">
						<option value="0">--Semua Channel--</option>
						<?php
						if (count($list_agent_d->result()) > 0) {
							foreach ($list_agent_d->result() as $d_agent) {
								$selected = "";
								echo "<option value='" . $d_agent->id . "' " . $selected . ">" . $d_agent->id . "-" . $d_agent->nama_channel . "</option>";
							}
						}
						?>

					</select></td>
			</tr>
			<tr>
				<td colspan=2>&nbsp;</td>
			</tr>
			<tr>
				<td colspan=2><b>Product & Customer</b></td>
			</tr>

			<tr>
				<td>Jenis pembayaran</td>
				<td> <select required name='jenis_pembayaran' id="jenis_pembayaran" class="form custom-select col-5" multiple="multiple">
						<option value="0">--Semua Jenis Pembayaran--</option>
						<option value="1">Postpaid</option>
						<option value="2">Prepaid</option>
					</select></td>
			</tr>
			<tr>
				<td>Addon</td>
				<td> <select required name='addon[]' id="addon" class="form custom-select col-5" multiple="multiple">
						<option value="0">--Semua Addon--</option>
						<option value="1">Postpaid</option>
						<option value="2">Prepaid</option>
					</select></td>
			</tr>
			<tr>
				<td>Type Customer</td>
				<td> <select required name='addon[]' id="type_customer" class="form custom-select col-5" multiple="multiple">
						<option value="0">--Semua Type--</option>
						<option value="1">1P</option>
						<option value="2">2P</option>
						<option value="3">3P</option>
					</select>
				</td>
			</tr>
			<tr>
				<td>Type HVC</td>
				<td> <select required name='hvc[]' id="type_hvc" class="form custom-select col-5" multiple="multiple">
						<option value="0">--Semua Type--</option>
						<option value="bronze">Bronze</option>
						<option value="silver">Silver</option>
						<option value="gold">Gold</option>
						<option value="platinum">Platinum</option>
					</select>
				</td>
			</tr>
			<tr>
				<td colspan=2>&nbsp;</td>
			</tr>
			<tr>
				<td colspan=2><b>Voucher Value</b></td>
			</tr>
			<tr>
				<td>Jenis Voucher</td>
				<td>
					<select required name='jenis_cashback' id="jenis_cashback" class="form custom-select col-5">
						<option value="1">Discount</option>
						<option value="2">Cashback</option>
					</select>

				</td>
			</tr>
			<tr>
				<td>Value</td>
				<td>
					<table width="100%">
						<tr>
							<td width="10%">
								<input type="radio" id="val_nominal" class="form data-sending focus-color" name="value" value="val_nominal">
								<label for="val_nominal">Nominal</label>
							</td>
							<td>
								<input type='number' class='form data-sending focus-color col-3' id='nominal_cashback' name='nominal_cashback' placeholder='<?php echo $title->general->desc_required ?>' value='<?php if (isset($data)) echo $data->nominal_cashback ?>'><br>
							</td>
						</tr>
						<tr>
							<td>
								<input type="radio" id="val_percent" class="form data-sending focus-color" name="val_percent" value="<?php if (isset($data)) echo $data->val_percent ?>">
								<label for="val_percent">Percent</label>
							</td>
							<td>
								<input type='number' class='form data-sending focus-color col-2' id='percent_cashback' name='percent_cashback' placeholder='<?php echo $title->general->desc_required ?>' value='<?php if (isset($data)) echo $data->percent_cashback ?>'> Max Nominal <input type='number' class='form data-sending focus-color col-3' id='max_nominal' name='max_nominal' value='<?php if (isset($data)) echo $data->max_nominal ?>'><br>
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
								<input type="radio" id="limited" class="form data-sending focus-color" name="limited" value="limited">
								<label for="limited">Limited</label>
							</td>
							<td>
								<input type='number' class='form data-sending focus-color col-2' id='limited_val' name='limited_val' placeholder='<?php echo $title->general->desc_required ?>' value='<?php if (isset($data)) echo $data->limited_val ?>'><br>
							</td>
						</tr>
						<tr>
							<td>
								<input type="radio" id="unlimited" class="form data-sending focus-color" name="unlimited" value="unlimited">
								<label for="unlimited">Unlimited</label>
							</td>
							
						</tr>
					</table>
				</td>
			</tr>
			<tr>
				<td>Date Live</td>
				<td> Start <input type='datetime-local' class='form data-sending focus-color col-3' id='start_datelive' name='start_datelive' placeholder='<?php echo $title->general->desc_required ?>' value='<?php if (isset($data)) echo $data->start_datelive ?>'> End <input type='datetime-local' class='form data-sending focus-color col-3' id='end_datelive' name='end_datelive' placeholder='<?php echo $title->general->desc_required ?>' value='<?php if (isset($data)) echo $data->end_datelive ?>'>
				</td>
			</tr>

		</table>
		<br>
		<div class='col-md-12 col-xl-12'>
			<div class='form-group'>
				<label class='form-label'>Wording</label>
				<textarea class="wording data-sending" name="wording" id="wording"><?php if (isset($data)) echo $data->wording ?></textarea>
			</div>
		</div>


		<div class='col-md-12 col-xl-12'>
			<div class='form-group'>
				<label class='form-label'>Image</label>
				<input type='file' class='form data-sending focus-color' id='image' name='image' placeholder='<?php echo $title->general->desc_required ?>' value='<?php if (isset($data)) echo $data->image ?>'>
			</div>
		</div>

<div class='col-md-12 col-xl-12'>

		<div class='form-group'>
			<button id='btn-cancel' type='button' class='btn btn-secondary'> Cancel</button>
			<button id='btn-save' type='submit' class='btn btn-success float-right'><i class="fe fe-save"></i> <?php echo $title->general->button_save ?></button>

		</div>

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

<script>
$('.input-simple-date').datepicker({ 
		autoclose: true ,
		format:'dd.mm.yyyy',
 })

$('#btn-save').click(function(){
	simpan();
})


function cancel(){
	$.each(custom_select,function(key,val){
		val.selectize.enable();
	});
	<?php 
	// NOTE : FOR ENABLE CUSTOM-SELECT-LINK  
	?>
	// $.each(custom_select_link,function(key,val){
	// 		val.selectize.enable();
	// });
	
	
	$('#btn-save').attr('disabled',true);
	
}


function simpan(){
	<?php
	/* mengambil data yang akan di kirim dari form-a */
	/* dalam bentuk array json tanpa penutup.. */
	/* memungkinkan penambahan data dengan cara push */
	/* ex. data.push */
	?>
	var data = get_dataSending('form-a');
	
	<?php
	/* complite json format */
	/* ybs_dataSending(array); */
	?>
	send_data = ybs_dataSending(data);

	var a = new ybsRequest();
	a.process('<?php echo $link_save?>',send_data,'POST');
	a.onAfterSuccess = function(){
			cancel();
	}
	a.onBeforeFailed = function(){
			cancel();
	}
}
</script>