<?php

global $_LANG;
define("JS_QR",false);//Apakah akan menghasilkan dengan js
define("WXPAY_DEBUG",false);
define("QUERY_INTERVAL",20);//Dalam hitungan detik, permintaan pertama default ke 20 detik, efek terbaik, semakin kecil nilainya, semakin baik pengalaman pengguna, semakin besar tekanan server, dan semakin buruk pengalaman pengguna, semakin kecil tekanan server. Direkomendasikan 10

$_LANG['wxnative'] = 'Pembayaran WeChat';
$_LANG['wxnative_desc'] = 'Pembayaran WeChat didasarkan pada fitur layanan yang disediakan oleh klien. Pada saat yang sama, ia menyediakan dukungan fungsional untuk analisis manajemen penjualan, manajemen akun dan dana untuk pedagang. Pengguna mengaktifkan modul pembayaran WeChat untuk menyelesaikan pembayaran dengan memindai kode QR, membuka halaman produk di WeChat, dan sejenisnya. ';
$_LANG['wxnative_appid'] = 'Nomor publik WeChat AppId';
$_LANG['wxnative_appsecret'] = 'Nomor publik WeChat AppSecret';
$_LANG['wxnative_key'] = 'Kunci Kunci Pembayaran Bisnis';
$_LANG['wxnative_mchid'] = 'ID Bisnis';
$_LANG['wxnative_button'] = 'Bayar segera dengan WeChat';

?>
