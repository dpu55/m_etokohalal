<?php

/**
 * ECTouch Open Source Project
 * ============================================================================
 * Copyright (c) 2012-2014 liuwave@qq.com All rights reserved.
 * ----------------------------------------------------------------------------
 * 文件名称：wxpay.php
 * ----------------------------------------------------------------------------
 * 功能描述：微信支付语言包 for ecmobile
 * ----------------------------------------------------------------------------
 *
 * ----------------------------------------------------------------------------
 */

global $_LANG;
define("WXPAY_DEBUG",true);

$_LANG['wxpay'] = 'Pembayaran mobile WeChat';
$_LANG['wxpay_desc'] = 'Pembayaran WeChat didasarkan pada fungsi layanan yang disediakan oleh klien. Pada saat yang sama, berikan Penjual dengan dukungan fungsional untuk analisis operasi penjualan, akun dan manajemen dana. Pengguna memanggil modul pembayaran WeChat untuk menyelesaikan pembayaran dengan memindai kode QR dan membuka pembelian halaman produk di WeChat.';
$_LANG['wxpay_appid'] = 'AppId akun publik WeChat';
$_LANG['wxpay_appsecret'] = 'AppSecret akun publik WeChat';
$_LANG['wxpay_key'] = 'Kunci pembayaran Penjual';
$_LANG['wxpay_mchid'] = 'ID Penerima';
$_LANG['wxpay_button'] = 'Pembayaran aman WeChat';
$_LANG['wxpay_not_openid_button'] = 'Tidak resmi';
$_LANG['wxpay_not_wx_button'] = 'Silakan bayar di WeChat';
$_LANG['wxpay_not_prepayid_button'] = 'Kesalahan parameter pembayaran';