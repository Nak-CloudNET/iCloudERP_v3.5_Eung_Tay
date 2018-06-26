<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $this->lang->line("delivery_note") . " " . $inv->do_reference_no; ?></title>
    <link href="<?php echo $assets ?>styles/theme.css" rel="stylesheet">
    <style type="text/css">
        html, body {
            height: 100%;
            background: #FFF;
        }
		.container {
			width: 29.7cm;
			margin: 20px auto;
			//height: 29cm !important; 
			/*padding: 10px;*/
			box-shadow: 0 0 5px rgba(0, 0, 0, 0.5);
		}
		
        body:before, body:after {
            display: none !important;
        }

        .table th {
            text-align: center;
            padding: 5px;
        }

        .table td {
            padding: 4px;
        }
		hr{
			border-color: #333;
			width:100px;
			margin-top: 70px;
		}
		.table thead > tr > th, .table tbody > tr > th, .table tfoot > tr > th, .table thead > tr > td, .table tbody > tr > td, .table tfoot > tr > td {
		border: 1px solid #000 !important;
		}
        @media print{
			.container {
				width: 98% !important;
				margin: 0 auto !important;
			}
			
			.line {
				width:50% !important;
			}
			#footer {
				position: absolute !important;
				bottom: 0 !important;
			}
			.receive_by{
				margin-left : -10px !important;
			}
        }
    </style>
</head>

<body>
<div class="container" style="width:50%;margin: 0 auto;">

        <div class="row">
			<div class="col-lg-12 col-sm-12 col-xs-12">
				<?php if ($logo) { ?>
				<img style="margin-top:10px !important;margin-left:10px !important;" src="<?= base_url() . 'assets/uploads/logos/' . $biller->logo; ?>" alt="" height="80px !important;" width="100px !important;">
				<center><h3 style="margin-top:-70px !important;"><?= lang("deliver_note")?></h3></center>
				<center><h4 style="margin-top:-5px !important;"><strong>វិក័យបត្រដឹកជញ្ជូន</h4></strong></center>
			</div>			
		<!--	<div class="col-lg-8 col-sm-8 col-xs-8" style="text-align:center !important; margin-left:-60px !important;">
				<h3><strong><?= $biller->company ?></strong></h3>
				<?php 
				if($biller->address){
					echo $biller->address;
				}
				echo '<br>';
				if($biller->phone){
					echo lang("tel") . " : ".$biller->phone;
				}
				echo '<br>';
				if($biller->email){
					echo "&nbsp &nbsp".'Email'." : ". $biller->email;
				}
				?> 
			</div> 
			
			<div class="col-lg-1 col-sm-1 col-xs-1" style="margin:30px !important;">
				<button type="button" class="btn btn-xs btn-default no-print pull-right" style="margin-right:15px;" onclick="window.print();">
                		<i class="fa fa-print"></i> <?= lang('print'); ?>
            	</button>
			</div> -->
		</div>
            <?php } ?>
            <div class="clearfix"></div>
          
            <div class="row padding10" style="margin-top:20px !important;">
                <div class="col-xs-6" style="float: left;font-size:14px;">
                    <table>
                        <tr>
                            <td>
                                <p><?= lang("customer");?></p>
                            </td>
                            <td>
                               <p>&nbsp;:&nbsp;</p>
                            </td>
                            <td>
                                <p><?= "<b>".$inv->customer."</b>"; ?></p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p><?= lang("address");?></p>
                            </td>
                            <td>
                                <p>&nbsp;:&nbsp;</p>
                            </td>
                            <td>
                                <p><?= "<b>".$customer->address."</b>"; ?></p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p><?= lang("tel");?></p>
                            </td>
                            <td>
                                <p>&nbsp;:&nbsp;</p>
                            </td>
                            <td>
                                <p><?= "<b>".$customer->phone."</b>"; ?></p>
                            </td>
                        </tr>
                    </table>
                    <div class="clearfix"></div>
                </div>
                <div class="col-xs-6 pull-right"  style="float: right !important;font-size:14px;padding-left:50px !important;">
                    <table>
                        <tr>
                            <td>
                                <p><?= lang("Deli_n"); ?><sup>o</sup></p>
                            </td>
                            <td>
                                <p>&nbsp;:&nbsp;</p>
                            </td>
                            <td>
                                <p><?= "<b>".$inv->do_reference_no."</b>";?></p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p><?= lang("Invoice_Nº"); ?></p>
                            </td>
                            <td>
                                <p>&nbsp;:&nbsp;</p>
                            </td>
                            <td>
                                <p><?= "<b>".$inv->sale_reference_no ."</b>";?></p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p><?= lang("date"); ?></p>
                            </td>
                            <td>
                                <p>&nbsp;:&nbsp;</p>
                            </td>
                            <td>
                                <p><?= "<b>".$this->erp->hrsd($inv->date)."</b>";?></p>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
            <div class="clearfix"></div>
            <div class="row padding10" style="display:none">
                <div class="col-xs-6" style="float: left;">
                    <span class="bold"><?= $Settings->site_name; ?></span><br>
                    <?= $warehouse->name ?>

                    <?php
                    echo $warehouse->address . "<br>";
                    echo ($warehouse->phone ? lang("tel") . ": " . $warehouse->phone . "<br>" : '') . ($warehouse->email ? lang("email") . ": " . $warehouse->email : '');
                    ?>
                    <div class="clearfix"></div>
                </div>
                <div class="col-xs-5" style="float: right;">
                    <div class="bold">
                        <?= lang("date"); ?>: <?= $this->erp->hrld($inv->date); ?><br>
                        <?= lang("ref"); ?>: <?= $inv->reference_no; ?>
                        <div class="clearfix"></div>
                        <?php $this->erp->qrcode('link', urlencode(site_url('sales/view/' . $inv->id)), 1); ?>
                        <img src="<?= base_url() ?>assets/uploads/qrcode<?= $this->session->userdata('user_id') ?>.png"
                             alt="<?= $inv->reference_no ?>" class="pull-right"/>
                        <?php $br = $this->erp->save_barcode($inv->reference_no, 'code39', 50, false); ?>
                        <img src="<?= base_url() ?>assets/uploads/barcode<?= $this->session->userdata('user_id') ?>.png"
                             alt="<?= $inv->reference_no ?>" class="pull-left"/>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>

            <div class="clearfix"></div>
			
                <table class="table table-bordered">
                    <thead  style="font-size: 13px;">
						<tr >
							<th>ល.រ (<?= lang("n");?><sup>o</sup>)</th>
							<th style="width:40% !important">បរិយាមុខទំនិញ<br>(<?= lang("descript"); ?>)</th>
							<th style="width:10% !important">ប្រវែង<br /><?= strtoupper(lang('Length')) ?></th>
							<th style="width:10% !important">បរិមាណ<br /><?= strtoupper(lang('Quantity')) ?></th>
							<th style="width:10% !important">ខ្នាត<br /><?= strtoupper(lang('Unit')) ?></th>
							<th style="width:20% !important">សរុបចំនួន<br /><?= strtoupper(lang('Total QTY')) ?></th>
						</tr>
                    </thead>
                    <tbody style="font-size: 13px;">
                        <?php
                            $no = 1;
                            $total_amount = 0;
                            $row = 0;
                        ?>
                       <?php foreach($inv_items as $inv_item) { ?>
                            <?php
                                $str_unit = "";
                                if($inv_item->option_id){
                                    $var = $this->sale_order_model->getVar($inv_item->option_id);
                                    $str_unit = $var->name;
                                }else{
                                    $str_unit = $inv_item->unit;
                                }
                            ?>
							<tr>
								<td style="text-align:center; width:5%; vertical-align:middle;"><?= $no; ?></td>
								<td style="vertical-align:middle;width:40%">
									<?= $inv_item->description?>
								</td>
                                <td style="vertical-align:middle;width:10%" class="text-center" >
                                    <?php
										if ($inv_item->delivery_piece == 0) {
											echo "";
										} else {
											echo $this->erp->formatQuantity($inv_item->delivery_piece);
										}
									?>
                                </td>
                                <td style="vertical-align:middle;width:10%" class="text-center">
                                    <?php
										if ($inv_item->delivery_piece == 0) {
											echo "";
										} else {
											echo $this->erp->formatQuantity($inv_item->delivery_wpiece);
										}
									?>
                                </td>
								<td style="vertical-align:middle;width:10%" class="text-center">
                                   <?= $str_unit; ?>
                                </td>
								<td style="vertical-align:middle;width:20%" class="text-center">
                                    <?php
										if ($inv_item->delivery_piece == 0) {
											echo $this->erp->formatQuantity($inv_item->qty);
										} else {
											echo $this->erp->formatQuantity($inv_item->delivery_piece * $inv_item->delivery_wpiece);
										}
									?>
                                </td>
							</tr>
                            <?php
                            $no++;
                            if($inv_item->delivery_piece == 0){
                                $total_amount +=  $inv_item->qty;
                            }else{
                                $total_amount += $inv_item->delivery_piece * $inv_item->delivery_wpiece;
                            }
                            
                            $row++;
                         }
                            if ($no < 10) {
                                $k = 10 - $no;
                                for ($j=1; $j <= $k; $j++) {
                                    echo
                                        '<tr>
                                            <td height="34px" class="text-center"></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>';
                                }
                                
                            }
                        ?>
                    </tbody>
                    <tfoot style="font-size: 13px;">
                    <?php
    					$discount_percentage = '';
    					if (strpos(isset($inv->order_discount_id), '%') !== false) {
    						$discount_percentage = $inv->order_discount_id;
					}
                    ?>
                    <?php if (isset($inv->grand_total) != isset($inv->total)) { 
                        $row = 1;
                    ?>
                        
                    <?php } ?>                    
                    
                    <tr>
                        <td colspan="4">
                            <div >
                            <?php if ($inv->note || $inv->note != "") { ?>
                                <div>
                                    <p style="text-align:left; font-weight:bold;"><?= lang("note"); ?>:<?= $this->erp->decode_html($inv->note); ?></p>
                            <?php } ?>
                            </div>
                        </td>
                        <td  style="text-align:right; font-weight:bold;"><?= lang("total"); ?>
                        </td>
                        <td style="text-align:center; font-weight:bold;"><?= $this->erp->formatMoney($total_amount); ?></td>

                    </tr>

                    </tfoot>
                </table>
				<div class="row" id="footer">
						<div class="col-lg-4 col-sm-4 col-xs-4 receive_by" style="font-size: 12px">
							<center>
							<p>
								<strong>
									អ្នកទទួលទំនិញ<br>
									Receive By
								</strong>
							</p>
							<br><br><br><br>
							<p><?= lang("name"); ?> : ...............................</p>
							<p><?= lang("date"); ?> :  ..../......./...................</p>
							</center>
						</div>
						<div class="col-lg-4 col-sm-4 col-xs-4" style="font-size: 12px">
							<center>
							<p>
								<strong>
									អ្នកដឹកជញ្ជូនទំនិញ <br>
									Delivery By
								</strong>
							</p>
							<br><br><br><br>
							<p><?= lang("name"); ?> : ...............................</p>
							<p><?= lang("date"); ?> :  ..../......./...................</p>
							</center>
						</div>
						<div class="col-lg-4 col-sm-4 col-xs-4" style="font-size: 12px">
							<center>
							<p>
								<strong>
									អ្នកបញ្ចេញទំនិញ <br>
									Stock Keeper / Issued By
								</strong>
							</p>
							<br><br><br><br>
							<p><?= lang("name"); ?> : ...............................</p>
							<p><?= lang("date"); ?> :  ..../......./...................</p>
							</center>
						</div>
				</div>
            </div>
</div>

	<script type="text/javascript" src="<?= $assets ?>js/jquery-2.0.3.min.js"></script>
	<script type="text/javascript">
	$(document).ready(function(){
	  $(document).on('click', '#b-add-quote' ,function(event){
		event.preventDefault();
		localStorage.removeItem('slitems');
		window.location.href = "<?= site_url('quotes/add'); ?>";
	  });
	});

	</script>
</body>
</html>
