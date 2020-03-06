<?php
if (!defined('IN_ECS'))
{
    die('Hacking attempt');
}

$payment_lang = ROOT_PATH . 'languages/' .$GLOBALS['_CFG']['lang']. '/payment/doku.php';

if (file_exists($payment_lang))
{
    global $_LANG;

    include_once($payment_lang);
}

/* 模块的基本信息 */
if (isset($set_modules) && $set_modules == TRUE)
{
    $i = isset($modules) ? count($modules) : 0;

    /* 代码 */
    $modules[$i]['code']    = basename(__FILE__, '.php');

    /* 描述对应的语言项 */
    $modules[$i]['desc']    = 'doku_desc';

    /* 是否支持货到付款 */
    $modules[$i]['is_cod']  = '0';

    /* 是否支持在线支付 */
    $modules[$i]['is_online']  = '1';

    /* 作者 */
    $modules[$i]['author']  = 'Etokohalal';

    /* 网址 */
    $modules[$i]['website'] = 'http://www.etokohalal.com';

    /* 版本号 */
    $modules[$i]['version'] = '1.0.0';

    /* 配置信息 */
    $modules[$i]['config'] = array(
        array('name' => 'doku_channelid', 'type' => 'text', 'value' => ''),
        array('name' => 'doku_secretkey', 'type' => 'text', 'value' => '')
    );

    return;
}

/**
 * 类
 */
class doku
{
    /**
     * 构造函数
     *
     * @access  public
     * @param
     *
     * @return void
     */
	
    /*function __construct()
    {
        $this->doku();
    }
	function doku()
    {
    }
    *
     * 生成支付代码
     * @param   array   $order  订单信息
     * @param   array   $payment    支付方式信息
     */
	
	function get_code($dokupay, $order, $payment) /*add param by catur*/
    {
		
        //$data_order_id      = $order['log_id'];
		$data_order_id      = $order['order_sn'];
        $data_amount        = $order['order_amount'];
        $data_return_url    = return_url(basename(__FILE__, '.php'));
        $channelId = $payment['doku_channelid'];
        $secretKey = $payment['doku_secretkey'];
        $data_notify_url    = return_url(basename(__FILE__, '.php'));
        $cancel_return      = $GLOBALS['ecs']->url();

        $city_sql = "select region_name from " . $GLOBALS['ecs']->table('region') . " where region_id='".$order['city']."'";
        $res_city = $GLOBALS['db']->query($city_sql);
        $row_city = $GLOBALS['db']->fetchRow($res_city);

        $state_sql = "select region_name from " . $GLOBALS['ecs']->table('region') . " where region_id='".$order['province']."'";
        $res_state = $GLOBALS['db']->query($state_sql);
        $row_state = $GLOBALS['db']->fetchRow($res_state);
        
        $county_sql = "select region_name from " . $GLOBALS['ecs']->table('region') . " where region_id='".$order['country']."'";
        $res_county = $GLOBALS['db']->query($county_sql);
        $row_county = $GLOBALS['db']->fetchRow($res_county);
        
        require_once(ROOT_PATH ."includes/modules/payment/doku/Doku.php");
		
		date_default_timezone_set('Asia/Jakarta');
        Doku_Initiate::$sharedKey = 'QcJyrqrSYgB2';//$secretKey;
        Doku_Initiate::$mallId = '11057247';//$channelId;	
		
		$params = array(
            'amount'=>$data_amount,
            'invoice'=>$data_order_id,
            'currency'=>'360'
        );
        
        $words = Doku_Library::doCreateWords($params);
		
		$customer = array(
            'name'=>$order['consignee'],
            'data_phone'=>$order['mobile'],
            'data_email'=>$order['email'],
            'data_address'=>$order['address']
        );
		
        $goods_sql = "select goods_name,goods_number,goods_price from " . $GLOBALS['ecs']->table('order_goods') . " where order_id='".$order['log_id']."'";
        $res_goods = $GLOBALS['db']->query($goods_sql);

        while($row = $GLOBALS['db']->fetchRow($res_goods)){
            $goodsstr .= $row['goods_name'].",".$row['goods_price'].",".$row['goods_number'].",".$row['goods_price']*$row['goods_number'].";";
        }

        $dataPayment = array(
            'req_mall_id'=>$channelId,
            'req_chain_merchant'=>'NA',
            'req_amount'=>$params['amount'],
            'req_words'=>$words,
            'req_trans_id_merchant'=>$data_order_id,
            'req_purchase_amount'=>$params['amount'],
            'req_request_date_time'=>date('YmdHis'),
            'req_session_id'=>sha1(date('YmdHis')),
            'req_email'=>$customer['data_email'],
            'req_name'=>$customer['name'],
            'req_basket'=>$goodsstr,
            'req_address'=>$customer['data_address'],
            'req_mobile_phone'=>$customer['data_phone'],
            'req_expiry_time'=>'360'
        ); 

        //$response = Doku_Api::doGeneratePaycode($dataPayment); 

		/*start by catur 20200125
			---------------------
			32 CIMB    : 51491273
			33 Danamon : 89220200
			35 Alfa    : 88888357
			36 Permata : 88561201
			38 BNI     : 88030008
			41 Mandiri : 88899575
		*/	

		$paymentchannel = $dokupay['pay_id'];
		$prefixchannel = $dokupay['pay_prefix'];
		//$virtual_account_code = $prefixchannel.$response->res_pay_code;	
		$virtual_account_code = $prefixchannel.substr($order['mobile'],-8); 

        $GLOBALS['db']->query("UPDATE ". $GLOBALS['ecs']->table('order_info') . 
							  " SET `inv_payee` 	= '" . $virtual_account_code. "', ".
							  " `inv_content` 		= '" . $response->res_pairing_code. "', ".
							  " `pay_note` 			= '" . $response->res_session_id."' ".
                              " WHERE `order_sn` 	= '" . $data_order_id."'");
		
//		if($response->res_response_code == '0000'){

		if($data_order_id){
			if ($paymentchannel=='32'){
				require_once('doku_va_cimb.php');
			}else if ($paymentchannel=='33'){
				require_once('doku_va_danamon.php');
			}else if ($paymentchannel=='35'){
				require_once('doku_va_alfa.php');
			}else if ($paymentchannel=='36'){
				require_once('doku_va_permata.php');
			}else if ($paymentchannel=='38'){
				require_once('doku_va_bni.php');
			}else if ($paymentchannel=="41"){
				require_once('doku_va_mandiri.php');
			}else{
				echo 'GENERATE SUCCESS -- ';
				echo 'Pay Code: '.$response->res_pay_code.'<br>Pairing Code: '.$response->res_pairing_code."</br>";
				var_dump($response);
			}
			exit;
		/*end by catur 20200125 */

        }
        else{
            die('GENERATE FAILED --');
        }
    }

    /**
     * 响应操作
     */
    function respond(){
        $payment = get_payment('doku');
        $channelId = $payment['doku_channelid'];
        $secretKey = $payment['doku_secretkey'];
        $PAYMENTDATETIME = $_POST['PAYMENTDATETIME'];
        $PURCHASECURRENCY = $_POST['PURCHASECURRENCY'];
        $PAYMENTCHANNEL = $_POST['PAYMENTCHANNEL'];
        $AMOUNT = $_POST['AMOUNT'];
        $PAYMENTCODE = $_POST['PAYMENTCODE'];
        $WORDS = $_POST['WORDS'];
        $RESULTMSG = $_POST['RESULTMSG'];
        $TRANSIDMERCHANT = $_POST['TRANSIDMERCHANT'];
        $BANK = $_POST['BANK'];
        $STATUSTYPE = $_POST['STATUSTYPE'];
        $APPROVALCODE = $_POST['APPROVALCODE'];
        $RESPONSECODE = $_POST['RESPONSECODE'];
        $SESSIONID = $_POST['SESSIONID'];
		
        require_once(ROOT_PATH ."includes/modules/payment/doku/Doku.php");
        
		date_default_timezone_set('Asia/Jakarta');
        Doku_Initiate::$sharedKey = $secretKey;
        Doku_Initiate::$mallId = $channelId;
        $params = array(
            'amount'=>$AMOUNT,
            'invoice'=>$TRANSIDMERCHANT,
            'currency'=>'IDR'
        );
        $WORDS_GENERATED = Doku_Library::doCreateWords($params);

        if($WORDS == $WORDS_GENERATED){            
            $response['paymentStatus']  = "00";
            $response['paymentMessage'] = "Success";
            order_paid($TRANSIDMERCHANT);
            return true;
        }
        else{
            $response['paymentStatus']  = "01";
            $response['paymentMessage'] = "WORDS NOT MATCH";
        }
        // Set header response
        header('Content-Type: application/json');
        // Print response
        echo json_encode( $response );
        return false;
    }
}
