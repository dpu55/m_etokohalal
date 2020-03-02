<?php
$_LANG['yd_express'] = 'Pengiriman sajak';
$_LANG['yd_express_desc'] = 'Pedagang memilih kurir untuk dikirimkan kepada Anda:';
$_LANG['item_fee'] = 'Biaya barang dagangan satu potong:';
$_LANG['base_fee'] = 'Di bawah 1000g';
$_LANG['step_fee'] = 'Lanjutkan biaya per 1000 gram atau fraksinya';
$_LANG['shipping_print']         = '<table border="0" cellspacing="0" cellpadding="0" style="width:18.9cm;">
  <tr>
    <td colspan="3" style="height:2cm;">&nbsp;</td>
  </tr>
  <tr>
    <td style="width:8cm; height:4cm; padding-top:0.3cm;" align="center" valign="middle">
     <table border="0" cellspacing="0" cellpadding="0" style="width:7.5cm;" align="center">
  <tr>
    <td style="width:2.3cm;">&nbsp;</td>
    <td style="height:1.5cm;">{$shop_address}</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td style="height:0.9cm;">{$shop_name}</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td style="height:0.9cm;">{$shop_name}</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td style="height:0.9cm;">{$service_phone}</td>
  </tr>
</table>

    </td>
    <td style="width:8cm; height:4cm; padding-top:0.3cm;" align="center" valign="middle">
    <table border="0" cellspacing="0" cellpadding="0" style="width:7.5cm;" align="center">
  <tr>
    <td style="width:2.3cm;">&nbsp;</td>
    <td style="height:1.5cm;">{$order.address}</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td style="height:0.9cm;"></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td style="height:0.9cm;">{$order.consignee}</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td style="height:0.9cm;">{$order.tel}</td>
  </tr>
</table>
    </td>
    <td rowspan="2" style="width:3cm;">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="2" style="height:3.5cm;">&nbsp;</td>
  </tr>
</table>';

?>