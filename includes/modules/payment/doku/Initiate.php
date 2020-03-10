<?php
/**
 * Initiate Doku data's
 */
class Doku_Initiate {
	 
	//local
	const prePaymentUrl = 'https://staging.doku.com/api/payment/PrePayment'; // doku wallet
	const paymentUrl = 'https://staging.doku.com/api/payment/paymentMip'; // kartu kredti
	const directPaymentUrl = 'https://staging.doku.com/api/payment/PaymentMIPDirect'; // mandiri clickpay
	const generateCodeUrl = 'https://staging.doku.com/api/payment/doGeneratePaymentCode'; // virtual account

	public static $sharedKey; //doku's merchant unique key
	public static $mallId; //doku's merchant id

}
