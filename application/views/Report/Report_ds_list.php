<!-- load css selectize-->
<!-- tempatkan code ini pada top page view-->

<?php echo _css('datatables,icheck,selectize,multiselect') ?>
<div class='col-md-12 col-xl-12'>
	<div class="card">
		<div class="card-status bg-green"></div>
		<div class="card-header">
			<h3 class="card-title">FILTER
			</h3>
			<div class="card-options">
				<a href="#" class="card-options-collapse " data-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
				<a href="#" class="card-options-fullscreen " data-toggle="card-fullscreen"><i class="fe fe-maximize"></i></a>
			</div>
		</div>
		<div class="card-body">
			<div class='box-body' id='box-table'>

				<form id='form-a' methode="GET">

					<div class='col-md-6 col-xl-6'>
						<div class='form-group'>
							<label class='form-label'>Start</label>
							<input type='date' min="" max="<?php echo date('Y-m-d'); ?>" class='form-control data-sending focus-color' id='id_reason' name='start' value='<?php if (isset($_GET['start'])) echo $_GET['start'] ?>'>
						</div>
					</div>
					<div class='col-md-6 col-xl-6'>
						<div class='form-group'>
							<label class='form-label'>End</label>
							<input type='date' min="<?php echo date("Y-m-d", strtotime("-" . (date('d') + 15) . " days")); ?>" max="<?php echo date('Y-m-d'); ?>" class='form-control data-sending focus-color' id='id_reason' name='end' value='<?php if (isset($_GET['end'])) echo $_GET['end'] ?>'>
						</div>
					</div>
					


					<div class='col-md-12 col-xl-12'>

						<div class='form-group'>
							<button id='btn-save' type='submit' class='btn btn-primary'><i class="fe fe-save"></i> Search</button>
						</div>

					</div>
				</form>

			</div>
		</div>
	</div>
</div>
<?php

if (isset($_GET['start']) && isset($_GET['end'])) {

?>
	<div class='col-md-6 col-xl-6'>
		<div class="card">
			<div class="card-status bg-orange"></div>
			<div class="card-header">
				<div class="card-title">Summary Report</div>
				<div class="card-options">
					<a href="#" class="card-options-collapse " data-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
					<a href="#" class="card-options-fullscreen " data-toggle="card-fullscreen"><i class="fe fe-maximize"></i></a>
				</div>
			</div>
			<div class="card-body">
				<div class='box-body table-responsive' id='box-table' style="text-align:center;">
					<small>
						<table width="100%">
							<thead>
								<tr>
									<th>Channel</th>
									<th>Blast</th>
									<th>Deliver</th>
									<th>Read</th>
									<th>Click</th>
									<th>Agree</th>
									<th>PS</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<th style="text-align:left;">Email</th>
									<th><?php echo number_format($summary['summary'][3][45]); ?></th>
									<th><?php echo number_format($summary['summary'][3][2]); ?></th>
									<th><?php echo number_format($summary['summary'][3][46]); ?></th>
									<th><?php echo number_format($summary['summary'][3][47]); ?></th>
									<th><?php echo number_format($summary['summary'][3][48]); ?></th>
									<th><?php echo number_format($summary['summary'][3][49]); ?></th>
								</tr>
								<tr>
									<th style="text-align:left;">Whatsapp</th>
									<th><?php echo number_format($summary['summary'][1][45]); ?></th>
									<th><?php echo number_format($summary['summary'][1][2]); ?></th>
									<th><?php echo number_format($summary['summary'][1][46]); ?></th>
									<th><?php echo number_format($summary['summary'][1][47]); ?></th>
									<th><?php echo number_format($summary['summary'][1][48]); ?></th>
									<th><?php echo number_format($summary['summary'][1][49]); ?></th>
								</tr>
								<tr>
									<th style="text-align:left;">SMS</th>
									<th><?php echo number_format($summary['summary'][2][45]); ?></th>
									<th><?php echo number_format($summary['summary'][2][2]); ?></th>
									<th><?php echo number_format($summary['summary'][2][46]); ?></th>
									<th><?php echo number_format($summary['summary'][2][47]); ?></th>
									<th><?php echo number_format($summary['summary'][2][48]); ?></th>
									<th><?php echo number_format($summary['summary'][2][49]); ?></th>
								</tr>
								<tr>
									<th style="text-align:left;">Total</th>
									<th><?php echo number_format($summary['summary'][3][45] + $summary['summary'][2][45] + $summary['summary'][1][45]); ?></th>
									<th><?php echo number_format($summary['summary'][3][2] + $summary['summary'][2][2] + $summary['summary'][1][2]); ?></th>
									<th><?php echo number_format($summary['summary'][3][46] + $summary['summary'][2][46] + $summary['summary'][1][46]); ?></th>
									<th><?php echo number_format($summary['summary'][3][47] + $summary['summary'][2][47] + $summary['summary'][1][47]); ?></th>
									<th><?php echo number_format($summary['summary'][3][48] + $summary['summary'][2][48] + $summary['summary'][1][48]); ?></th>
									<th><?php echo number_format($summary['summary'][3][49] + $summary['summary'][2][49] + $summary['summary'][1][49]); ?></th>
								</tr>
							</tbody>
						</table>
					</small>
				</div>
			</div>
		</div>
	</div>

	<?php
	if ($level != 8) {


	?>
		<div class='col-md-6 col-xl-6'>
			<div class="card">
				<div class="card-status bg-orange"></div>
				<div class="card-header">
					<div class="card-title">PS by Regional</div>
					<div class="card-options">
						<a href="#" class="card-options-collapse " data-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
						<a href="#" class="card-options-fullscreen " data-toggle="card-fullscreen"><i class="fe fe-maximize"></i></a>
					</div>
				</div>
				<div class="card-body">
					<div class='box-body table-responsive' id='box-table' style="text-align:center;">
						<small>
							<table width="100%">
								<thead>
									<tr>
										<th></th>
										<th>Reg 1</th>
										<th>Reg 2</th>
										<th>Reg 3</th>
										<th>Reg 4</th>
										<th>Reg 5</th>
										<th>Reg 6</th>
										<th>Reg 7</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<th style="text-align: left;">Click</th>
										<th><?php echo number_format($regional['regional'][47][1]); ?></th>
										<th><?php echo number_format($regional['regional'][47][2]); ?></th>
										<th><?php echo number_format($regional['regional'][47][3]); ?></th>
										<th><?php echo number_format($regional['regional'][47][4]); ?></th>
										<th><?php echo number_format($regional['regional'][47][5]); ?></th>
										<th><?php echo number_format($regional['regional'][47][6]); ?></th>
										<th><?php echo number_format($regional['regional'][47][7]); ?></th>
									</tr>
									<tr>
										<th style="text-align: left;">Agree</th>
										<th><?php echo number_format($regional['regional'][48][1]); ?></th>
										<th><?php echo number_format($regional['regional'][48][2]); ?></th>
										<th><?php echo number_format($regional['regional'][48][3]); ?></th>
										<th><?php echo number_format($regional['regional'][48][4]); ?></th>
										<th><?php echo number_format($regional['regional'][48][5]); ?></th>
										<th><?php echo number_format($regional['regional'][48][6]); ?></th>
										<th><?php echo number_format($regional['regional'][48][7]); ?></th>
									</tr>
									<tr>
										<th style="text-align: left;">PS</th>
										<th><?php echo number_format($regional['regional'][49][1]); ?></th>
										<th><?php echo number_format($regional['regional'][49][2]); ?></th>
										<th><?php echo number_format($regional['regional'][49][3]); ?></th>
										<th><?php echo number_format($regional['regional'][49][4]); ?></th>
										<th><?php echo number_format($regional['regional'][49][5]); ?></th>
										<th><?php echo number_format($regional['regional'][49][6]); ?></th>
										<th><?php echo number_format($regional['regional'][49][7]); ?></th>
									</tr>
								</tbody>
							</table>
						</small>
					</div>
				</div>
			</div>
		</div>
	<?php
	}
	?>
	<div class='col-md-12 col-xl-12'>
		<div class="card">
			<div class="card-status bg-orange"></div>
			<div class="card-header">
				<h3 class="card-title">Report Blast DS Periode <?php echo $_GET['start'] . " sd " . $_GET['start'] ?>

				</h3>
				<div class="card-options">
					<a href="#" class="card-options-collapse " data-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
					<a href="#" class="card-options-fullscreen " data-toggle="card-fullscreen"><i class="fe fe-maximize"></i></a>
				</div>
			</div>
			<div class="card-body">
				<table width="100%">
					<tr>
						<td width="50%">

						</td>
						<td width="50%">

						</td>
					</tr>
				</table>


				<div class='box-body table-responsive' id='box-table'>
					<small>
						<table class='table' id="report_table_reg" width="100%">
							<thead>
								<tr>
									<th>No</th>
									<th>SND</th>
									<th>Nama</th>
									<th>Email</th>
									<th>No.Gsm</th>
									<th>Channel</th>
									<th>Status</th>
									<th>Date Time</th>
								</tr>
							</thead>
							<tbody>
								<?php
								$no = 1;

								foreach ($list_customer as $datana) {


								?>
									<tr>
										<td><?php echo $no; ?></td>
										<td style="text-align:left;" nowrap><?php echo $datana->snd; ?></td>
										<td style="text-align:left;" nowrap><?php echo $datana->nama; ?></td>
										<td style="text-align:left;" nowrap><?php echo $datana->email; ?></td>
										<td style="text-align:left;" nowrap><?php echo $datana->no_gsm; ?></td>
										<td style="text-align:left;" nowrap><?php echo $controller->get_channel($datana->channel_key); ?></td>
										<td style="text-align:left;" nowrap><?php echo $controller->get_status($datana->status_key); ?></td>
										<td style="text-align:left;" nowrap><?php echo $datana->vdate." ".$controller->get_time($datana->time_key); ?></td>		
									</tr>
								<?php

									$no++;
								}


								?>

							</tbody>

						</table>
					</small>
				</div>
			</div>
		</div>
	</div>

<?php
}

?>

<!-- load library selectize -->
<!-- tempatkan code ini pada akhir code html sebelum masuk tag script-->

<?php echo _js('ybs,selectize,datatables,icheck,multiselect') ?>

<script type="text/javascript">
	$(document).ready(function() {
		$('#produk').selectize({});
		$("#report_table_reg").DataTable({
			dom: 'Bfrtip',
			buttons: [
				'copy', 'csv', 'excel', 'pdf'
			]
		});
	});
</script>