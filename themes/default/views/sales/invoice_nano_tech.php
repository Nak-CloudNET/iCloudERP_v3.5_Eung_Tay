<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Invoice&nbsp;<?= $invs->reference_no ?></title>
	<link href="<?php echo $assets ?>styles/theme.css" rel="stylesheet">
	<link href="<?php echo $assets ?>styles/bootstrap.min.css" rel="stylesheet">
	<link href="<?php echo $assets ?>styles/custome.css" rel="stylesheet">
	<style type="text/css">
		body {
			font-size: 14px !important;
		}
			
		.container {
			width: 29.7cm;
			margin: 20px auto;
			/*padding: 10px;*/
			box-shadow: 0 0 5px rgba(0, 0, 0, 0.5);
		}
		@media print {
			.pageBreak {
				page-break-after: always;
			}
			.container {
				height: 29.5cm !important;
			}
			.customer_label {
				padding-left: 0 !important;
			}
			
			.invoice_label {
				padding-left: 0 !important;
			}
			#footer {
				position: fixed !important;
				bottom: 10px !important;
			}
			.row table tr td {
				font-size: 12px !important;
			}
			img{
				margin-left:40px !important;
			}
			.table thead > tr > th, .table tbody > tr > th, .table tfoot > tr > th {
				background-color: #444 !important;
				color: #FFF !important;
			}
			
			.row .col-xs-7 table tr td, .col-sm-5 table tr td{
				font-size: 12px !important;
			}
			#note{
					max-width: 95% !important;
					margin: 0 auto !important;
					border-radius: 5px 5px 5px 5px !important;
					margin-left: 26px !important;
				}
		}
		.thead th {
			text-align: center !important;
		}
		
		.table thead > tr > th, .table tbody > tr > th, .table tfoot > tr > th, .table thead > tr > td, .table tbody > tr > td, .table tfoot > tr > td {
			border: 1px solid #000 !important;
		}
		
		.company_addr h3:first-child {
			font-family: Khmer OS Muol !important;
			//padding-left: 12% !important;
		}
		
		.company_addr h3:nth-child(2) {
			margin-top:-2px !important;
			//padding-left: 130px !important;
			font-size: 26px !important;
			font-weight: bold;
		}
		
		.company_addr h3:last-child {
			margin-top:-2px !important;
			//padding-left: 100px !important;
		}
		
		.company_addr p {
			font-size: 12px !important;
			margin-top:-10px !important;
			padding-left: 20px !important;
		}
		
		.inv h4:first-child {
			font-family: Khmer OS Muol !important;
			font-size: 14px !important;
		}
		
		.inv h4:last-child {
			margin-top:-5px !important;
			font-size: 14px !important;
		}
		
		button {
			border-radius: 0 !important;
		}
		img{
			margin-top:20px;
			margin-left
		}
		
	</style>
</head>
<body>
	<div class="container" style="width: 821px;margin: 0 auto;">
		<div class="col-sm-12 col-xs-12">
			<button type="button" class="btn btn-xs btn-default no-print pull-right" style="margin-right:15px; margin-top: 10px" onclick="window.print();">
        		<i class="fa fa-print"></i> <?= lang('print'); ?>
    		</button>
		</div>
			
		<div class="col-xs-12">
			<div class="row" >
				<div class="col-sm-12 col-xs-12 inv" style="margin-top: -30px !important">
					<center>
						<h3 style="font-size:14px !important;line-height:23px;"><b>មានទទួលកិនភ្លីធំ ភ្លីក្បឿង <br> និងផ្តត់ផ្គង់សំភារៈសំណង់ ដែក <br> ស័ង្គសី អាលុយមីញ៉ូមគ្រប់ប្រភេទ</b></h3>
						<h4></h4>
					</center>
				</div>
			</div>
			<div class="col-sm-12 col-xs-12" style="font-size:11px;">
				<div  class="col-sm-6 col-xs-6">
				
				</div>
				<div  class="col-sm-6 col-xs-6 text-right" style="font-size:12px; padding-right:80px;">
					N<sup>0</sup>&nbsp;:&nbsp;&nbsp;<b><?= $invs->reference_no?></b>
				</div>
			</div>
			
			<div class="col-sm-12 col-xs-12">
			
				<div  class="col-sm-3 col-xs-3">
						អតិថិជន <b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?= $customer->name?></b></div>
				<div  class="col-sm-5 col-xs-5">
						អាស័យដ្ឋាន : <b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?= $customer->address?></b></div>
				<div  class="col-sm-4 col-xs-4">
						Tel :<b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?= $customer->phone?></b></div>
			</div>
			<div class="row">
				<div class="col-sm-12 col-xs-12">
					<table class="table table-bordered" style="margin-top: 10px;">
						<tbody style="font-size: 11px;">
							<tr class="thead" style="background-color: #444 !important; color: #FFF !important;">
								<th>ល.រ<br /><?= strtoupper(lang('no')) ?></th>
								<th>ឈ្មោះទំនិញ<br /><?= strtoupper(lang('description')) ?></th>
								<th>ប្រវែង<br /><?= strtoupper(lang('Length')) ?></th>
								<th>បរិមាណ<br /><?= strtoupper(lang('Quantity')) ?></th>
								<th>ខ្នាត<br /><?= strtoupper(lang('Unit')) ?></th>
								<th>សរុបចំនួន<br /><?= strtoupper(lang('Total QTY')) ?></th>
								<th>តម្លៃរាយ<br /><?= strtoupper(lang('Unit Price')) ?></th>
								<th>សរុបទឹកប្រាក់<br /><?= strtoupper(lang('Total Amount')) ?></th>
							</tr>
						</tbody>
						
					</table>
				</div>
			</div>
		 </div>	<!--div col sm 6 -->
		 
		 <div class="col-ls-12"> 
		 
			<div class="col-sm-6 col-xs-6">
				
			</div>
			
		 </div>
		 &nbsp;
		 

		<div id="footer" class="row">
			<div class="col-sm-4 col-xs-4">
				<center>
					<p style="font-size: 12px; margin-top: 4px !important">អតិថិជន​ / Customer</p>
					<br><br>
					<p>....................................................</p>
				</center>
			</div>
			<div class="col-sm-4 col-xs-4">
				<center>
					<p style="font-size: 12px; margin-top: 4px !important">អ្នកដឹកជញ្ជូន / Deliver</p>
					<br><br>
					<p>....................................................</p>
				</center>
			</div>
			<div class="col-sm-4 col-xs-4">
				<center>
					<p style="font-size: 12px; margin-top: 4px !important">អ្នកលក់ / Seller</p>
					<br><br>
					<p>.....................................................</p>
				</center>
			</div>
		</div>

		<div style="width: 821px;margin: 20px">
			<a class="btn btn-warning no-print" href="<?= site_url('sales'); ?>" style="border-radius: 0">
	        	<i class="fa fa-hand-o-left" aria-hidden="true"></i>&nbsp;<?= lang("back"); ?>
	     	</a>
		</div>
	</div>

</body>
</html>