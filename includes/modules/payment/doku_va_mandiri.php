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
					<img src="includes/modules/payment/doku/images/mandiri-fc.jpg" style="height:80px; width: 250px">
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
					
					<li>
						<div class="paymentcodetitle" id="HOWTOATM-LANG">Via Mandiri ATM:</div>
						<div class="clear list-number" id="HOWTOATM-DETAIL-LANG">
							<ol>
								<li>1. Insert Mandiri ATM card, then enter ATM PIN.</li>
								<li>2. Choose menu "Bayar/Beli"</li>
								<li>3. Choose menu "Lainnya" then another "Lainnya"</li>
								<li>4. Choose menu "Ecommerce"</li>
							    <li>5. Input the first 5 digits from Mandiri VA number (e.g. 88899)</li>					
								<li>6. Input the full VA Number <span class="color-one"><?php echo $virtual_account_code; ?></span></li>
								<li>7. Input the amount</li>
								<li>8. VA number, Name, and Amount will appear on screen</li>
								<li>9. Press 1 and choose "YA"</li>
								<li>10. Confirm payment and choose "YA"</li>
								<li>11. Transaction is done. Please keep your receipt.</li>
							</ol>
						</div>
						<br>
						<div class="paymentcodetitle" id="HOWTOIB-LANG">Via Internet Banking Individual Bank Mandiri</div>
						<div class="clear list-number" id="HOWTOIB-DETAIL-LANG">
							<ol>
								<li>1. Access https://ib.bankmandiri.co.id/retail/Login.do?action=form&amp;lang=in_ID</li>
								<li>2. Input User ID and PIN, then click login</li>
								<li>3. Choose Menu " Pembayaran"</li>
								<li>4. Choose Menu "Multi Payment"</li>
                                <li>5. Choose Billing Name "DOKU VA Aggregator"</li>							
								<li>6. Input VA Number <span class="color-one"><?php echo $virtual_account_code; ?></span></li>
								<li>7. Input Amount</li>
								<li>8. Click "Continue"</li>
								<li>9. Tick on "Total Tagihan"</li>
								<li>10. Click "Continue"</li>
								<li>11. Input Mandiri PIN Appli 1 from Token</li>
								<li>12. Transaction is done. Please keep your receipt.</li>
							</ol>
						</div>
						<br>
						<div class="paymentcodetitle" id="HOWTOMOA-LANG">Via Mandiri Online Apps</div>
						<div class="clear list-number" id="HOWTOMOA-DETAIL-LANG">
							<ol>
								<li>1. Install Mandiri Online Application</li>
								<li>2. Input User ID and PIN, then click login</li>
								<li>3. Choose Menu "Pembayaran"</li>
								<li>4. Choose Menu "Pembayaran Baru"</li>
								<li>5. Choose Menu "Multi Payment"</li>
                                <li>6. Choose Billing Name "DOKU VA Aggregator"</li>						
								<li>7. Input VA Number <span class="color-one"><?php echo $virtual_account_code; ?></span></li>
								<li>8. Click Go, then Input Amount</li>
								<li>9. Click "Konfirmasi"</li>
								<li>10. Click "Lanjut"</li>
								<li>11. Click "Konfirmasi"</li>
								<li>12. Input MPIN (SMS Banking PIN)</li>
								<li>13. Transaction is done. Please keep your receipt.</li>
							</ol>
						</div>

					</li>
				</ul>
				<form name="formRedirect" id="formRedirect" method="POST" action="../user.php?act=order_list">
					<div style="display:none">
						 <input type="text" name="FLAGEMAIL" id="FLAGEMAIL" value="" maxlength="4" readonly="">
					 </div>
					<input type="hidden" name="FLAG" value="2">			
					<input type="submit" class="default-btn font-reg" id="SUBMIT-LANG" value="Cek Daftar Transaksi">
				</form>
			</div>
		    
		</div>

	</section>

</body></html>