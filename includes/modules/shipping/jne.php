<?php

/**
 * 鸿宇多用户商城 申通快递 配送方式插件
 * ============================================================================
 * 版权所有 2015-2018 鸿宇科技有限公司，并保留所有权利。
 * 网站地址: http://bbs.hongyuvip.com；
 * ----------------------------------------------------------------------------
 * 仅供学习交流使用，如需商用请购买正版版权。鸿宇不承担任何法律责任。
 * 踏踏实实做事，堂堂正正做人。
 * ============================================================================
 * $Author: Shadow & 鸿宇
 * $Id: jne.php 17217 2016-01-19 06:29:08Z Shadow & 鸿宇
 */

if (!defined('IN_ECS'))
{
    die('Hacking attempt');
}

$shipping_lang = ROOT_PATH.'languages/' .$GLOBALS['_CFG']['lang']. '/shipping/jne.php';
if (file_exists($shipping_lang))
{
    global $_LANG;
    include_once($shipping_lang);
}


/* 模块的基本信息 */
if (isset($set_modules) && $set_modules == TRUE)
{
    include_once(ROOT_PATH . 'languages/' . $GLOBALS['_CFG']['lang'] . '/admin/shipping.php');

    $i = (isset($modules)) ? count($modules) : 0;

    /* 配送方式插件的代码必须和文件名保持一致 */
    $modules[$i]['code']    = basename(__FILE__, '.php');

    $modules[$i]['version'] = '1.0.0';

    /* 配送方式的描述 */
    $modules[$i]['desc']    = 'jne_desc';

    /* 配送方式是否支持货到付款 */
    $modules[$i]['cod']     = false;

    /* 插件的作者 */
    $modules[$i]['author']  = 'TEST';

    /* 插件作者的官方网站 */
    $modules[$i]['website'] = 'https://www.jne.co.id';

    /* Parameter Yang di perlukan Untuk pengiriman */
    $modules[$i]['configure'] = array(
                                    array('name' => 'item_fee',     'value'=>1000), /* Biaya pengiriman per item */
                                    array('name' => 'base_fee',    'value'=>1000), /*  Harga per KG          */
                                    array('name' => 'step_fee',     'value'=>1000),  /* Peningkatan Harga per KG */
                                );

    /* Edit Pola */
    $modules[$i]['print_model'] = 2;

    /* 打印单背景 */
    $modules[$i]['print_bg'] = '/images/receipt/jne.jpg';

   /* Informasi Label Kurir */
    $modules[$i]['config_lable'] = 't_shop_address,' . $_LANG['lable_box']['shop_address'] . ',235,48,131,152,b_shop_address||,||t_shop_name,' . $_LANG['lable_box']['shop_name'] . ',237,26,131,200,b_shop_name||,||t_shop_tel,' . $_LANG['lable_box']['shop_tel'] . ',96,36,144,257,b_shop_tel||,||t_customer_post,' . $_LANG['lable_box']['customer_post'] . ',86,23,578,268,b_customer_post||,||t_customer_address,' . $_LANG['lable_box']['customer_address'] . ',232,49,434,149,b_customer_address||,||t_customer_name,' . $_LANG['lable_box']['customer_name'] . ',151,27,449,231,b_customer_name||,||t_customer_tel,' . $_LANG['lable_box']['customer_tel'] . ',90,32,452,261,b_customer_tel||,||';

    return;
}

/**
 * 申通快递费用计算方式:
 * ====================================================================================
 * - 江浙沪地区统一资费： 1公斤以内15元， 每增加1公斤加5-6元, 云南为8元
 * - 其他地区统一资费:    1公斤以内18元， 每增加1公斤加5-6元, 云南为8元
 * - 对于体大质轻的包裹，我们将按照航空运输协会的规定，根据体积和实际重量中较重的一种收费，需将包的长、宽、高、相乘，再除以6000
 * - (具体资费请上此网站查询:http://www.car365.cn/fee.asp 客服电话:021-52238886)
 * -------------------------------------------------------------------------------------
 *
 */
class jne
{
    /*------------------------------------------------------ */
    //-- PUBLIC ATTRIBUTEs
    /*------------------------------------------------------ */

    /**
     * 配置信息参数
     */
    var $configure;

    /*------------------------------------------------------ */
    //-- PUBLIC METHODs
    /*------------------------------------------------------ */

    /**
     * 构造函数
     *
     * @param: $configure[array]    配送方式的参数的数组
     *
     * @return null
     */
    function jne($cfg=array())
    {
        foreach ($cfg AS $key=>$val)
        {
            $this->configure[$val['name']] = $val['value'];
        }
    }

    /**
     * 计算订单的配送费用的函数
     *
     * @param   float   $goods_weight   商品重量
     * @param   float   $goods_amount   商品金额
     * @param   float   $goods_amount   商品件数
     * @return  decimal
     */

    function calculate($from, $goods_weight, $goods_amount, $goods_number, $destination)
    {
        $username   = 'TOLAL';
        $apiKey     = '97ecfbe13dd639b79de4559c0a9e14db';
        // $from       = 'CGK10000';
        $from       = $from;  
        $desti      = $destination;
        $weight     = ($goods_weight/1000); 

        $data = "username=".$username."&api_key=".$apiKey."&from=".$from."&thru=".$desti."&weight=".$weight;
        $ch = curl_init();

        // curl_setopt($ch, CURLOPT_URL,"http://apiv2.jne.co.id:10102/tracing/api/pricedev");
        curl_setopt($ch, CURLOPT_URL,"http://apiv2.jne.co.id:10101/tracing/api/pricedev");
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/x-www-form-urlencoded','Accept: application/json','User-Agent: Java-Request'));

        // receive server response ...
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $server_output = curl_exec ($ch);
        $result= json_decode($server_output);
        curl_close ($ch);
		
		// print "<pre>";
  //       var_dump($result->price);
        
        
        foreach($result->price as $keys=>$ship) {
            if($ship->service_display == 'YES' || $ship->service_display == 'CTCYES') {
                $today            = date("d M Y");
                $todayPlus        = mktime(0,0,0,date("n"),date("j")+$ship->etd_thru,date("Y"));
                $next             = date("d M Y", $todayPlus);
                $etd = $today . ' - ' . $next;

                return $ship->price."#".$etd."#".$goods_weight;
            } 
        }
    }


    /**
     * 查询快递状态
     *
     * @access  public
     * @param   string  $invoice_sn     发货单号
     * @return  string  查询窗口的链接地址
     */
    function query($invoice_sn)
    {
        $str = '<form style="margin:0px" methods="post" '.
            'action="http://115.238.100.211:8081/result.aspx" name="queryForm_' .$invoice_sn. '" target="_blank">'.
            '<input type="hidden" name="wen" value="' .str_replace("<br>","\n",$invoice_sn). '" />'.
            '<a href="javascript:document.forms[\'queryForm_' .$invoice_sn. '\'].submit();">' .$invoice_sn. '</a>'.
            '</form>';

        return $str;
    }
}

?>