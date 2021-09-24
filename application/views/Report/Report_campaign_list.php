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
	// var_dump($summary);
?>



	<div class='col-md-12 col-xl-12'>
		<div class="card">
			<div class="card-status bg-orange"></div>
			<div class="card-header">
				<h3 class="card-title">Report Campaign DS Periode <?php echo $_GET['start'] . " sd " . $_GET['end'] ?>

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
									<th rowspan=2>No</th>
									<th rowspan=2>Nama Campaign</th>
									<th style="text-align:center;" colspan=3>Targetted Channel</th>
									<th rowspan=2>Total</th>
									<th rowspan=2>Processed</th>
									<th rowspan=2>Dapros</th>
								</tr>
								<tr>
									<th style="text-align:center;">WA</th>
									<th style="text-align:center;">SMS</th>
									<th style="text-align:center;">Email</th>
								</tr>
							</thead>
							<tbody>
								<?php
								$no = 1;

								foreach ($summary['summary'] as $ksum => $vsum) {


								?>
									<tr>
										<td><?php echo $no; ?></td>
										<td style="text-align:left;" nowrap><?php echo $controller->get_namacampaign($ksum); ?></td>
										<td style="text-align:left;" nowrap><?php echo number_format($vsum[1]); ?></td>
										<td style="text-align:left;" nowrap><?php echo number_format($vsum[2]); ?></td>
										<td style="text-align:left;" nowrap><?php echo number_format($vsum[3]); ?></td>
										<td style="text-align:left;" nowrap><?php echo number_format($vsum[1] + $vsum[2] + $vsum[3]); ?></td>
										<td style="text-align:left;" nowrap><?php echo $controller->get_processed($ksum, $_GET['start'], $_GET['end']); ?></td>
										<td style="text-align:left;" nowrap><?php echo $controller->get_dapros($ksum, $_GET['start'], $_GET['end']); ?></td>
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