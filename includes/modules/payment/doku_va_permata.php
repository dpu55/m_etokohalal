<html lang="en"><head>
<meta charset="UTF-8">
<title>Form Invoice</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black">
<link rel="stylesheet" type="text/css" href="includes/modules/payment/doku/css/default.min.css">
<link rel="stylesheet" type="text/css" href="includes/modules/payment/doku/css/style.min.css">

	

</head>

<body class="tempdefault tempcolor tempone">
	<section class="default-width resultpage">
								
		<div class="head padd-default">
			<div class="center-object">
					<img src="includes/modules/payment/doku/images/permata.png" style="height:80px; width: 250px">
		  </div>
			
			<div class="clear"></div>
		</div>
		
		<div class="color-border padd-default">
			<div class="paymentcode success">
				<div class="textva" id="PAYCODE-LANG">Payment Code</div>
				<div class="numva">
					<?php echo $virtual_account_code; ?>
				</div>
				<div class="clear"></div>
			</div>			
			<br><br>
			<div class="detail-result">
				<ul>
					<li>
						<div class="fleft" id="AMOUNT-LANG">Amount</div>
						<div class="fright color-one">&nbsp; <?php echo price_format($params['amount'],false); ?></div>
						<div class="clear"></div>
					</li>
					<li>
						<div class="fleft" id="INVOICE-LANG">Invoice Number</div>
						<div class="fright"><?php echo $params['invoice']; ?></div>
						<div class="clear"></div>
					</li>

					
				</ul>
				<form name="formRedirect" id="formRedirect" method="POST" action="../user.php?act=order_list">
					<div style="display:none">
						 <input type="text" name="FLAGEMAIL" id="FLAGEMAIL" value="" maxlength="4" readonly="">
					 </div>
					<input type="hidden" name="FLAG" value="2">			
					<input type="submit" class="default-btn font-reg" id="SUBMIT-LANG" value="List Order">
				</form>
			</div>
		    
		</div>

	</section>

</body></html>