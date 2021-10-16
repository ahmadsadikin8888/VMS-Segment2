
<?php echo _css('selectize,datepicker')?>

<?php echo card_open('Form','bg-green',true)?>	
	
	<form id='form-a'>
	<input hidden class='data-sending' id='id' value='<?php if(isset($id))echo $id?>'>
	
					<div class='col-md-12 col-xl-12'>
					<div class='form-group'>
							<label class='form-label'><?php echo $title->voucher_nama_voucher ?></label>
							<input type='text' class='form-control data-sending focus-color'  id='nama_voucher' name='nama_voucher' placeholder='<?php echo $title->general->desc_required ?>' value='<?php if(isset($data)) echo $data->nama_voucher ?>' >
					</div>
					</div>
			
			
					<div class='col-md-12 col-xl-12'>
					<div class='form-group'>
							<label class='form-label'><?php echo $title->voucher_channel_payment ?></label>
							<input type='text' class='form-control data-sending focus-color'  id='channel_payment' name='channel_payment' placeholder='<?php echo $title->general->desc_required ?>' value='<?php if(isset($data)) echo $data->channel_payment ?>' >
					</div>
					</div>
			
			
					<div class='col-md-12 col-xl-12'>
					<div class='form-group'>
							<label class='form-label'><?php echo $title->voucher_jenis_pembayaran ?></label>
							<input type='text' class='form-control data-sending focus-color'  id='jenis_pembayaran' name='jenis_pembayaran' placeholder='<?php echo $title->general->desc_required ?>' value='<?php if(isset($data)) echo $data->jenis_pembayaran ?>' >
					</div>
					</div>
			
			
					<div class='col-md-12 col-xl-12'>
					<div class='form-group'>
							<label class='form-label'><?php echo $title->voucher_jenis_cashback ?></label>
							<input type='text' class='form-control data-sending focus-color'  id='jenis_cashback' name='jenis_cashback' placeholder='<?php echo $title->general->desc_required ?>' value='<?php if(isset($data)) echo $data->jenis_cashback ?>' >
					</div>
					</div>
			
			
					<div class='col-md-12 col-xl-12'>
					<div class='form-group'>
							<label class='form-label'><?php echo $title->voucher_percent_cashback ?></label>
							<input type='text' class='form-control data-sending focus-color'  id='percent_cashback' name='percent_cashback' placeholder='<?php echo $title->general->desc_required ?>' value='<?php if(isset($data)) echo $data->percent_cashback ?>' >
					</div>
					</div>
			
			
					<div class='col-md-12 col-xl-12'>
					<div class='form-group'>
							<label class='form-label'><?php echo $title->voucher_nominal_cashback ?></label>
							<input type='text' class='form-control data-sending focus-color'  id='nominal_cashback' name='nominal_cashback' placeholder='<?php echo $title->general->desc_required ?>' value='<?php if(isset($data)) echo $data->nominal_cashback ?>' >
					</div>
					</div>
			
			
					<div class='col-md-12 col-xl-12'>
					<div class='form-group'>
							<label class='form-label'><?php echo $title->voucher_max_nominal ?></label>
							<input type='text' class='form-control data-sending focus-color'  id='max_nominal' name='max_nominal' placeholder='<?php echo $title->general->desc_required ?>' value='<?php if(isset($data)) echo $data->max_nominal ?>' >
					</div>
					</div>
			
			
					<div class='col-md-12 col-xl-12'>
					<div class='form-group'>
							<label class='form-label'><?php echo $title->voucher_start_datelive ?></label>
							<input type='text' class='form-control data-sending focus-color'  id='start_datelive' name='start_datelive' placeholder='<?php echo $title->general->desc_required ?>' value='<?php if(isset($data)) echo $data->start_datelive ?>' >
					</div>
					</div>
			
			
					<div class='col-md-12 col-xl-12'>
					<div class='form-group'>
							<label class='form-label'><?php echo $title->voucher_end_datelive ?></label>
							<input type='text' class='form-control data-sending focus-color'  id='end_datelive' name='end_datelive' placeholder='<?php echo $title->general->desc_required ?>' value='<?php if(isset($data)) echo $data->end_datelive ?>' >
					</div>
					</div>
			
			
					<div class='col-md-12 col-xl-12'>
					<div class='form-group'>
							<label class='form-label'><?php echo $title->voucher_wording ?></label>
							<input type='text' class='form-control data-sending focus-color'  id='wording' name='wording' placeholder='<?php echo $title->general->desc_required ?>' value='<?php if(isset($data)) echo $data->wording ?>' >
					</div>
					</div>
			
			
					<div class='col-md-12 col-xl-12'>
					<div class='form-group'>
							<label class='form-label'><?php echo $title->voucher_image ?></label>
							<input type='text' class='form-control data-sending focus-color'  id='image' name='image' placeholder='<?php echo $title->general->desc_required ?>' value='<?php if(isset($data)) echo $data->image ?>' >
					</div>
					</div>
			
			
					<div class='col-md-12 col-xl-12'>
					<div class='form-group'>
							<label class='form-label'><?php echo $title->voucher_kode_voucher ?></label>
							<input type='text' class='form-control data-sending focus-color'  id='kode_voucher' name='kode_voucher' placeholder='<?php echo $title->general->desc_required ?>' value='<?php if(isset($data)) echo $data->kode_voucher ?>' >
					</div>
					</div>
			
			
					<div class='col-md-12 col-xl-12'>
					<div class='form-group'>
							<label class='form-label'><?php echo $title->voucher_is_active ?></label>
							<input type='text' class='form-control data-sending focus-color'  id='is_active' name='is_active' placeholder='<?php echo $title->general->desc_required ?>' value='<?php if(isset($data)) echo $data->is_active ?>' >
					</div>
					</div>
			
			
					<div class='col-md-12 col-xl-12'>
					<div class='form-group'>
							<label class='form-label'><?php echo $title->voucher_already_subscribe ?></label>
							<input type='text' class='form-control data-sending focus-color'  id='already_subscribe' name='already_subscribe' placeholder='<?php echo $title->general->desc_required ?>' value='<?php if(isset($data)) echo $data->already_subscribe ?>' >
					</div>
					</div>
			
			
					<div class='col-md-12 col-xl-12'>
					<div class='form-group'>
							<label class='form-label'><?php echo $title->voucher_periode_time ?></label>
							<input type='text' class='form-control data-sending focus-color'  id='periode_time' name='periode_time' placeholder='<?php echo $title->general->desc_required ?>' value='<?php if(isset($data)) echo $data->periode_time ?>' >
					</div>
					</div>
			
			
					<div class='col-md-12 col-xl-12'>
					<div class='form-group'>
							<label class='form-label'><?php echo $title->voucher_special_day ?></label>
							<input type='text' class='form-control data-sending focus-color'  id='special_day' name='special_day' placeholder='<?php echo $title->general->desc_required ?>' value='<?php if(isset($data)) echo $data->special_day ?>' >
					</div>
					</div>
			
			
					<div class='col-md-12 col-xl-12'>
					<div class='form-group'>
							<label class='form-label'><?php echo $title->voucher_special_day_date ?></label>
							<input type='text' class='form-control data-sending focus-color'  id='special_day_date' name='special_day_date' placeholder='<?php echo $title->general->desc_required ?>' value='<?php if(isset($data)) echo $data->special_day_date ?>' >
					</div>
					</div>
			
			
					<div class='col-md-12 col-xl-12'>
					<div class='form-group'>
							<label class='form-label'><?php echo $title->voucher_minimum_payment ?></label>
							<input type='text' class='form-control data-sending focus-color'  id='minimum_payment' name='minimum_payment' placeholder='<?php echo $title->general->desc_required ?>' value='<?php if(isset($data)) echo $data->minimum_payment ?>' >
					</div>
					</div>
			
			
					<div class='col-md-12 col-xl-12'>
					<div class='form-group'>
							<label class='form-label'><?php echo $title->voucher_regional ?></label>
							<input type='text' class='form-control data-sending focus-color'  id='regional' name='regional' placeholder='<?php echo $title->general->desc_required ?>' value='<?php if(isset($data)) echo $data->regional ?>' >
					</div>
					</div>
			
			
					<div class='col-md-12 col-xl-12'>
					<div class='form-group'>
							<label class='form-label'><?php echo $title->voucher_witel ?></label>
							<input type='text' class='form-control data-sending focus-color'  id='witel' name='witel' placeholder='<?php echo $title->general->desc_required ?>' value='<?php if(isset($data)) echo $data->witel ?>' >
					</div>
					</div>
			
			
					<div class='col-md-12 col-xl-12'>
					<div class='form-group'>
							<label class='form-label'><?php echo $title->voucher_addon ?></label>
							<input type='text' class='form-control data-sending focus-color'  id='addon' name='addon' placeholder='<?php echo $title->general->desc_required ?>' value='<?php if(isset($data)) echo $data->addon ?>' >
					</div>
					</div>
			
			
					<div class='col-md-12 col-xl-12'>
					<div class='form-group'>
							<label class='form-label'><?php echo $title->voucher_type_customer ?></label>
							<input type='text' class='form-control data-sending focus-color'  id='type_customer' name='type_customer' placeholder='<?php echo $title->general->desc_required ?>' value='<?php if(isset($data)) echo $data->type_customer ?>' >
					</div>
					</div>
			
			
					<div class='col-md-12 col-xl-12'>
					<div class='form-group'>
							<label class='form-label'><?php echo $title->voucher_type_hvc ?></label>
							<input type='text' class='form-control data-sending focus-color'  id='type_hvc' name='type_hvc' placeholder='<?php echo $title->general->desc_required ?>' value='<?php if(isset($data)) echo $data->type_hvc ?>' >
					</div>
					</div>
			
			
					<div class='col-md-12 col-xl-12'>
					<div class='form-group'>
							<label class='form-label'><?php echo $title->voucher_islimited ?></label>
							<input type='text' class='form-control data-sending focus-color'  id='islimited' name='islimited' placeholder='<?php echo $title->general->desc_required ?>' value='<?php if(isset($data)) echo $data->islimited ?>' >
					</div>
					</div>
			
			
					<div class='col-md-12 col-xl-12'>
					<div class='form-group'>
							<label class='form-label'><?php echo $title->voucher_limit_voucher ?></label>
							<input type='text' class='form-control data-sending focus-color'  id='limit_voucher' name='limit_voucher' placeholder='<?php echo $title->general->desc_required ?>' value='<?php if(isset($data)) echo $data->limit_voucher ?>' >
					</div>
					</div>
			
							 
	
	<div class='col-md-12 col-xl-12'>

	   <div class='form-group'>
		<button id='btn-apply' type='button' class='btn btn-primary'><i class='fe fe-check'></i> <?php echo $title->general->button_apply ?></button>	
		<button disabled='' id='btn-save' type='button' class='btn btn-primary'><i class="fe fe-save"></i> <?php echo $title->general->button_save ?></button>	
		<button disabled='' id='btn-cancel' type='button' class='btn btn-primary'> <?php echo $title->general->button_cancel ?></button>
		<a href='<?php echo $link_back ?>' id='btn-close' class='btn btn-primary'> <?php echo $title->general->button_close ?></a>
	   </div>
			 
	</div>
	</form>


<?php echo card_close()?>

<?php echo _js('selectize,datepicker')?>

<script>var page_version="1.0.8"</script>

<script> 
var custom_select = $('.custom-select').selectize({}); 	
var custom_select_link = $('.custom-select-link');

$(document).ready(function(){
	<?php
	/*
	|--------------------------------------------------------------
	| CARA MEMBUAT COMBOBOX LINK
	|--------------------------------------------------------------
	| COMBOBOX LINK adalah proses membuat sebuah combobox menjadi 
	| referensi combobox lainnya dalam menampilkan data.
	| misal :
	|  combobox grup menjadi referensi combobox subgrup.
	|  perubahan/pemilihan data combobox grup menyebabkan 
	|  perubahan data combobox subgrup. 
	|--------------------------------------------------------------
	| cara :
	|  - isi "field_link" pada combobox target 
	| 	 'field_link'	=>'nama_field_join_database'.
	|  - gunakan class "custom-select-link" pada kedua combobox ,
	|	 referensi dan target.
	|  - tambahkan script :
	|     linkToSelectize('id_cmb_referensi','id_cmb_target');
	|--------------------------------------------------------------
	| note :
	|   - struktur database harus menggunakan field id sebagai primary key
	|   - combobox harus di buat dengan php code
	|	-  "create_cmb_database" untuk row < 1000
	|	-  dan linkToSelectize untuk row < 1000
	|
	|	-  "create_cmb_database_bigdata" untuk row > 1000
	|	-  dan linkToSelectize_Big untuk row > 1000
	|   - 
	|   - class harus menggunakan "custom-select-link"
	|
	*/
	?>
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

$('#btn-apply').click(function(){
		apply();
		play_sound_apply();
});

$('#btn-close').click(function(){
	play_sound_apply();
});

$('#btn-cancel').click(function(){
	cancel();
	play_sound_apply();
});

$('#btn-save').click(function(){
	simpan();
})

function apply(){
	$.each(custom_select,function(key,val){
		val.selectize.disable();
	});
	
	<?php 
	// NOTE : FOR DISABLE CUSTOM-SELECT-LINK 
	?>
	// $.each(custom_select_link,function(key,val){
	// 		val.selectize.disable();
	// });
	
	$('.form-control').attr('disabled',true);
	$('#btn-apply').attr('disabled',true);
	$('#btn-cancel').attr('disabled',false);
	$('#btn-save').attr('disabled',false);
	$('#btn-save').focus();
}
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
	
	$('.form-control').attr('disabled',false);
	$('#btn-cancel').attr('disabled',true);
	$('#btn-save').attr('disabled',true);
	$('#btn-apply').attr('disabled',false);
	
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

