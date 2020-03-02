<?php if ($this->_var['full_page'] == 1): ?>
<!DOCTYPE html>
<html>
  <head>
    <?php echo $this->fetch('html_header.htm'); ?>
    <script type="text/javascript">
        function open_surplus()
        {
           $('#hidebg').css('height',$(document).height());
           $('#hidebg').css('display','block');
           $('#popup_window').css('display','block');
        }
        
        function close_surplus()
        {
           $('#hidebg').css('display','none');
           $('#popup_window').css('display','none');
        }
      
        function quick_delivery()
        {
          if($.trim($('#express_no').val()) == '')
          {
            $.zalert.add("<?php echo $this->_var['lang']['y_61']; ?>",1);
            return false;
          }
          else
          {
            return true;
          }
        }
    </script> 
  </head>
  <body>
    <div id='container'>
      <?php endif; ?>
      <!-- 显示购货人信息 start -->
      <div id="hidebg" onclick='close_surplus()'></div>
      <div id="popup_window" style="position:fixed;display:none;">
        <a class='close' onclick="close_surplus()"></a>
        <div class="buyer">
          <h4><?php echo $this->_var['lang']['y_174']; ?></h4>
          <div class="info">
            <table width="100%" >
              <tr>
                <td width="30%"><?php echo $this->_var['lang']['y_175']; ?></td>
                <td><a href='mailto:<?php echo $this->_var['user']['email']; ?>' class='phone'><?php echo $this->_var['user']['email']; ?></a></td>
              </tr>
              <tr>
                <td><?php echo $this->_var['lang']['y_176']; ?></td>
                <td><?php echo $this->_var['user']['user_money']; ?></td>
              </tr>
              <tr>
                <td><?php echo $this->_var['lang']['y_177']; ?></td>
                <td><?php echo $this->_var['user']['pay_points']; ?></td>
              </tr>
              <tr>
                <td><?php echo $this->_var['lang']['y_178']; ?></td>
                <td><?php echo $this->_var['user']['rank_points']; ?></td>
              </tr>
              <tr>
                <td><?php echo $this->_var['lang']['y_179']; ?></td>
                <td><?php echo $this->_var['user']['rank_name']; ?></td>
              </tr>
              <tr>
                <td><?php echo $this->_var['lang']['y_180']; ?></td>
                <td><?php echo $this->_var['user']['bonus_count']; ?></td>
              </tr>
            </table>
          </div>
          <div class="info">
          <?php $_from = $this->_var['address_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'address');if (count($_from)):
    foreach ($_from AS $this->_var['address']):
?>
  <table width="100%" border="0">
    <caption><strong> <?php echo $this->_var['lang']['consignee']; ?> : <?php echo htmlspecialchars($this->_var['address']['consignee']); ?> </strong></caption>
    <tr>
      <td> <?php echo $this->_var['lang']['email']; ?> </td>
      <td> <a href="mailto:<?php echo htmlspecialchars($this->_var['address']['email']); ?>"><?php echo htmlspecialchars($this->_var['address']['email']); ?></a> </td>
    </tr>
    <tr>
      <td> <?php echo $this->_var['lang']['address']; ?> </td>
      <td> <?php echo htmlspecialchars($this->_var['address']['address']); ?> </td>
    </tr>
    <tr>
      <td> <?php echo $this->_var['lang']['zipcode']; ?> </td>
      <td> <?php echo htmlspecialchars($this->_var['address']['zipcode']); ?> </td>
    </tr>
    <tr>
      <td> <?php echo $this->_var['lang']['tel']; ?> </td>
      <td> <?php echo htmlspecialchars($this->_var['address']['tel']); ?> </td>
    </tr>
    <tr>
      <td> <?php echo $this->_var['lang']['mobile']; ?> </td>
      <td> <?php echo htmlspecialchars($this->_var['address']['mobile']); ?> </td>
    </tr>
  </table>
  <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
          </div>
        </div>
      </div>
      <?php echo $this->fetch('page_header.htm'); ?>
      <section style="padding-bottom:90px;">
         <?php if ($this->_var['order']['pay_status'] == 2 && $this->_var['order']['shipping_status'] != 1 && $this->_var['order']['order_status'] == 1): ?>
        <form method='POST' action='order.php' onsubmit='return quick_delivery();'>
          <div class="order_info_con">
            <p class="one_delivery">
              <input type="text" name="express_no" id='express_no' placeholder="<?php echo $this->_var['lang']['y_61']; ?>" class="inputBg"/>
              <input type='hidden' name='order_id' value='<?php echo $this->_var['order']['order_id']; ?>'/>
			  <input type='hidden' name='act' value='quick_delivery'/>
              <input type="submit" value="<?php echo $this->_var['lang']['y_181']; ?>" class="one_delivery_btn" />
			  
            </p>
          </div>
        </form>
        <?php endif; ?>
        <div class="order_info_con">
          <div class="order_fee">
            <p class="edit" id="order_fee" onclick='$(".fee_info").slideToggle()'><span><?php echo $this->_var['lang']['y_272']; ?><a href="order.php?act=edit&order_id=<?php echo $this->_var['order']['order_id']; ?>&step=money" class="special"><?php echo $this->_var['lang']['edit']; ?></a></span> <i></i></p>
            <div class="fee_info">
              <p><?php echo $this->_var['lang']['y_186']; ?><?php echo $this->_var['order']['formated_goods_amount']; ?> - <?php echo $this->_var['lang']['y_187']; ?> <?php echo $this->_var['order']['formated_discount']; ?> + <?php echo $this->_var['lang']['y_188']; ?><?php echo $this->_var['order']['formated_tax']; ?> + <?php echo $this->_var['lang']['y_190']; ?> <?php echo $this->_var['order']['formated_shipping_fee']; ?> + <?php echo $this->_var['lang']['y_192']; ?> <?php echo $this->_var['order']['formated_insure_fee']; ?> + <?php echo $this->_var['lang']['y_193']; ?> <?php echo $this->_var['order']['formated_pay_fee']; ?> + <?php echo $this->_var['lang']['y_194']; ?> <?php echo $this->_var['order']['formated_pack_fee']; ?> + <?php echo $this->_var['lang']['y_195']; ?> <?php echo $this->_var['order']['formated_card_fee']; ?></p>
              <p>= <?php echo $this->_var['lang']['y_189']; ?> <?php echo $this->_var['order']['formated_total_fee']; ?></p>
              <p>- <?php echo $this->_var['lang']['y_191']; ?> <?php echo $this->_var['order']['formated_money_paid']; ?> - <?php echo $this->_var['lang']['y_196']; ?> <?php echo $this->_var['order']['formated_surplus']; ?> - <?php echo $this->_var['lang']['y_273']; ?> <?php echo $this->_var['order']['formated_integral_money']; ?> - <?php echo $this->_var['lang']['y_197']; ?> <?php echo $this->_var['order']['formated_bonus']; ?></p>
            </div>
            <p class="order_amount">= <?php if ($this->_var['order']['order_amount'] >= 0): ?><?php echo $this->_var['lang']['y_198']; ?><?php echo $this->_var['order']['formated_order_amount']; ?><?php else: ?><?php echo $this->_var['lang']['y_274']; ?><?php echo $this->_var['order']['formated_money_refund']; ?><?php endif; ?></p>
          </div>
          <div class="consignee_info">
            <p class="edit"><span><?php echo $this->_var['lang']['y_275']; ?><a href="order.php?act=edit&order_id=<?php echo $this->_var['order']['order_id']; ?>&step=consignee" class="special"><?php echo $this->_var['lang']['edit']; ?></a></span></p>
            <div class="order_consign">
              <table width="100%" >
                <tr>
                  <td><?php echo $this->_var['lang']['y_132']; ?><?php echo $this->_var['order']['consignee']; ?></td>
                  <td><a href="tel:<?php echo $this->_var['order']['mobile']; ?>" class="phone"><?php echo $this->_var['order']['mobile']; ?></a></td>
                </tr>
                <tr>
                  <td colspan="2"><?php echo $this->_var['lang']['y_249']; ?><?php echo $this->_var['order']['country_name']; ?>&nbsp;<?php echo $this->_var['order']['city_name']; ?>&nbsp;<?php echo $this->_var['order']['district_name']; ?>&nbsp;<?php echo $this->_var['order']['address']; ?><a href='navigate.php?act=navigate&order_id=<?php echo $this->_var['order']['order_id']; ?>' target='_blank'><img src='images/location.png' style='height:15px;'/></a>&nbsp;&nbsp;</td>
                </tr>
                <tr>
                  <td colspan="2"><?php echo $this->_var['lang']['y_276']; ?> <?php echo $this->_var['order']['best_time']; ?></td>
                </tr>
              </table>
            </div>
          </div>
          <div class="goods_info">
            <p class="edit"><span><?php echo $this->_var['lang']['y_277']; ?></span></p>
            <div class="order_goods">
              <?php if ($this->_var['goods_list']): ?>
              <?php $_from = $this->_var['goods_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods');if (count($_from)):
    foreach ($_from AS $this->_var['goods']):
?>
              <table width="100%" >
                <tr>
                  <td colspan="3"><?php if ($this->_var['goods']['brand_name']): ?>[<?php echo $this->_var['goods']['brand_name']; ?>]<?php endif; ?><?php echo $this->_var['goods']['goods_name']; ?><span class="attr"><?php echo $this->_var['goods']['goods_attr']; ?></span></td>
                </tr>
                <tr>
                  <td><?php echo $this->_var['goods']['formated_goods_price']; ?> X <span><?php echo $this->_var['goods']['goods_number']; ?>（<?php echo $this->_var['lang']['y_278']; ?>）</span></td>
                  <td><?php echo $this->_var['lang']['y_147']; ?> <?php echo $this->_var['goods']['storage']; ?></td>
                  <td><?php echo $this->_var['lang']['y_279']; ?> <?php echo $this->_var['goods']['formated_subtotal']; ?></td>
                </tr>
              </table>
              <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
              <?php else: ?>
              <table width="100%" >
                <tr>
                  <td colspan="3"><span class="attr"><?php echo $this->_var['lang']['y_280']; ?></span></td>
                </tr>
              </table>
              <?php endif; ?>
            </div>
          </div>
          <div class="order_base">
            <p class="edit" id="order_base"  onclick='$(".base_info_one").slideToggle()'><span><?php echo $this->_var['lang']['y_207']; ?></span> <i></i></p>
            <div class="base_info_one">
              <p><?php echo $this->_var['lang']['y_131']; ?><?php echo $this->_var['order']['order_sn']; ?></p>
              <p><?php echo $this->_var['lang']['y_281']; ?> <?php echo $this->_var['order']['user_name']; ?> <a href="javascript:open_surplus();" class=""><?php echo $this->_var['lang']['y_282']; ?></a><a href="user_msg.php?act=add&order_id=<?php echo $this->_var['order']['order_id']; ?>&user_id=<?php echo $this->_var['order']['user_id']; ?>"><?php echo $this->_var['lang']['send_message']; ?></a></p>
              <p><?php echo $this->_var['lang']['y_133']; ?> <?php echo $this->_var['order']['formated_add_time']; ?></p>
              <p><?php echo $this->_var['lang']['y_283']; ?> <?php if ($this->_var['order']['pay_time'] > 0): ?><?php echo $this->_var['order']['formatted_pay_time']; ?><?php else: ?><?php echo $this->_var['lang']['y_284']; ?><?php endif; ?></p>
              <p><?php echo $this->_var['lang']['y_134']; ?> <?php if ($this->_var['order']['shipping_time'] > 0): ?><?php echo $this->_var['order']['formatted_shipping_time']; ?><?php else: ?><?php echo $this->_var['lang']['y_285']; ?><?php endif; ?></p>
            </div>
            <div class="base_info">
              <p><?php echo $this->_var['lang']['y_184']; ?> <?php echo $this->_var['lang']['os'][$this->_var['order']['order_status']]; ?>,<?php echo $this->_var['lang']['ps'][$this->_var['order']['pay_status']]; ?>,<?php echo $this->_var['lang']['ss'][$this->_var['order']['shipping_status']]; ?></p>
              <p><?php echo $this->_var['lang']['02_payment_list']; ?> <?php echo $this->_var['order']['pay_name']; ?><a href="order.php?act=edit&order_id=<?php echo $this->_var['order']['order_id']; ?>&step=payment" class="special"><?php echo $this->_var['lang']['edit']; ?></a></p>
              <p><?php echo $this->_var['lang']['03_shipping_list']; ?> <?php echo $this->_var['order']['shipping_name']; ?><a href="order.php?act=edit&order_id=<?php echo $this->_var['order']['order_id']; ?>&step=shipping" class="special"><?php echo $this->_var['lang']['edit']; ?></a></p>
              <!--如果配送方式是“门店自提”，则显示以下自提点 star-->
              <?php if ($this->_var['order']['is_pickup'] == 1 && $this->_var['order']['pickup_point'] > 0): ?>
              <p><?php echo $this->_var['lang']['y_286']; ?> [<?php echo $this->_var['order']['pickup_point_info']['province_name']; ?>&nbsp;<?php echo $this->_var['order']['pickup_point_info']['city_name']; ?>&nbsp;<?php echo $this->_var['order']['pickup_point_info']['district_name']; ?>&nbsp;<?php echo $this->_var['order']['pickup_point_info']['address']; ?>]<?php echo $this->_var['order']['pickup_point_info']['shop_name']; ?></p>
              <?php endif; ?>
              <!--如果配送方式是“门店自提”，则显示以下自提点 end-->
              <?php if ($this->_var['order']['invoice_no'] > 0): ?>
              <p><?php echo $this->_var['lang']['y_287']; ?> <?php echo $this->_var['order']['invoice_no']; ?></p>
              <?php endif; ?>
            </div>
          </div>
          <div class="order_qita">
            <p class="edit" id="order_qita"  onclick='$(".qita_info").slideToggle()'>
              <span><?php echo $this->_var['lang']['y_288']; ?>
              <?php if ($this->_var['order']['inv_type']): ?>
              <a href="" class="special"><?php echo $this->_var['lang'][$this->_var['order']['inv_type']]; ?></a>
              <?php endif; ?>
              </span>
              <i></i>
            </p>
            <div class="qita_info">
              <!--{如果有普通发票 start*}-->
              <?php if ($this->_var['order']['inv_type']): ?>
              <p><?php echo $this->_var['lang']['y_289']; ?> <?php echo $this->_var['lang'][$this->_var['order']['inv_type']]; ?></p>
              <?php endif; ?>
              <?php if ($this->_var['order']['inv_type'] == 'normal_invoice'): ?>
              <p><?php echo $this->_var['lang']['y_290']; ?> <?php echo $this->_var['order']['inv_payee']; ?></p>
              <p><?php echo $this->_var['lang']['y_291']; ?> <?php echo $this->_var['order']['inv_content']; ?></p>
              <?php elseif ($this->_var['order']['inv_type'] == 'vat_invoice'): ?>
              <h4><?php echo $this->_var['lang']['y_292']; ?></h4>
              <p><?php echo $this->_var['lang']['y_293']; ?><?php echo $this->_var['order']['vat_inv_company_name']; ?></p>
              <p><?php echo $this->_var['lang']['y_294']; ?><?php echo $this->_var['order']['vat_inv_taxpayer_id']; ?></p>
              <p><?php echo $this->_var['lang']['y_295']; ?><?php echo $this->_var['order']['vat_inv_registration_address']; ?></p>
              <p><?php echo $this->_var['lang']['y_296']; ?><?php echo $this->_var['order']['vat_inv_registration_phone']; ?></p>
              <p><?php echo $this->_var['lang']['y_297']; ?> <?php echo $this->_var['order']['vat_inv_deposit_bank']; ?></p>
              <p><?php echo $this->_var['lang']['y_298']; ?><?php echo $this->_var['order']['vat_inv_bank_account']; ?></p>
              <h4><?php echo $this->_var['lang']['y_299']; ?></h4>
              <p><?php echo $this->_var['lang']['y_300']; ?><?php echo $this->_var['order']['inv_consignee_name']; ?></p>
              <p><?php echo $this->_var['lang']['y_301']; ?><?php echo $this->_var['order']['inv_consignee_phone']; ?></p>
              <p><?php echo $this->_var['lang']['y_302']; ?>[<?php echo $this->_var['order']['inv_consignee_province_name']; ?>&nbsp;<?php echo $this->_var['order']['inv_consignee_city_name']; ?>&nbsp;<?php echo $this->_var['order']['inv_consignee_district_name']; ?>]<?php echo $this->_var['order']['inv_consignee_address']; ?></p>
              <?php endif; ?>
              <!--{如果有发票 end}-->
              <?php if ($this->_var['order']['postscript']): ?>
              <p><?php echo $this->_var['lang']['y_303']; ?> <?php echo $this->_var['order']['postscript']; ?></p>
              <?php endif; ?>
              <p><?php echo $this->_var['lang']['y_304']; ?></p>
              <?php if ($this->_var['order']['to_buyer']): ?>
              <p><?php echo $this->_var['lang']['y_305']; ?> <?php echo $this->_var['order']['to_buyer']; ?></p>
              <?php endif; ?>
            </div>
          </div>
            
            <div class="order_history">
            <p class="edit" id="order_history"  onclick='$(".history_info").slideToggle()'>
              <span><?php echo $this->_var['lang']['handler']; ?> </span>
              <i></i>
            </p>
            <div class="history_info">
                <table width='100%'>
                    <tr>
                        <th><?php echo $this->_var['lang']['y_267']; ?></th>
                       <!-- <th>操作时间</th>-->
                        <th><?php echo $this->_var['lant']['y_184']; ?></th>
                        <th><?php echo $this->_var['lang']['y_270']; ?></th>
                        <th><?php echo $this->_var['lang']['y_271']; ?></th>
                    </tr>
              <?php $_from = $this->_var['action_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'action');if (count($_from)):
    foreach ($_from AS $this->_var['action']):
?>
                <tr>
                  <td><div align="center"><?php echo $this->_var['action']['action_user']; ?></div></td>
                 <!-- <td><div align="center"><?php echo $this->_var['action']['action_time']; ?></div></td>-->
                  <td><div align="center"><?php echo $this->_var['action']['order_status']; ?></div></td>
                  <td><div align="center"><?php echo $this->_var['action']['pay_status']; ?></div></td>
                  <td><div align="center"><?php echo $this->_var['action']['shipping_status']; ?></div></td>
                  <td><?php echo nl2br($this->_var['action']['action_note']); ?></td>
                </tr>
            <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                </table>
        </div>
       </div>
      </section>
      <?php echo $this->fetch('page_footer.htm'); ?>
      <?php if ($this->_var['full_page'] == 1): ?>
    </div>
    <?php echo $this->fetch('static_div.htm'); ?>
  </body>
</html>
<?php endif; ?>