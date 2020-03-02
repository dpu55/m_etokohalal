<?php if ($this->_var['full_page'] == 1): ?>
<!DOCTYPE HTML>
<html>
  <head>
    <?php echo $this->fetch('html_header.htm'); ?>
    <script>
      function search_delivery()
      {
        if(check_form_empty('theForm'))
        {
          $.zalert.add("<?php echo $this->_var['lang']['y_99']; ?>",1)
        }
        else
        {
          $.zcontent.set('delivery_sn',$('#delivery_sn').val());
          $.zcontent.set('order_sn',$('#order_sn').val());
          $.zcontent.set('consignee',$('#consignee').val());
          search();
        }
        return false;
      }
    </script>
  </head>
  <body>
    <div id='container'>
      <?php endif; ?>
      <?php echo $this->fetch('page_header.htm'); ?>
      <section>
        <?php echo $this->fetch('menu_list.htm'); ?>
        <div class="order_con" id="con_order_manage_2" style="display:none">
          <div class="order_pd">
            <div class="order order_t">
              <form name="theForm" method="" action="" class="order_search" onsubmit='search_delivery();return false;'>
                <table width="100%" border="0">
                  <tr>
                    <td>
                      <input type="text" name="delivery_sn" id='delivery_sn' class="inputBg" placeholder="<?php echo $this->_var['lang']['Please enter the flow number of the invoice']['']; ?>" <?php if ($this->_var['filter']['delivery_sn']): ?>value='<?php echo $this->_var['filter']['delivery_sn']; ?>'<?php endif; ?>/>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <input type="text" name="order_sn" id='order_sn' class="inputBg" placeholder="<?php echo $this->_var['lang']['y_62']; ?>" <?php if ($this->_var['filter']['order_sn']): ?>value='<?php echo $this->_var['filter']['order_sn']; ?>'<?php endif; ?>//>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <input type="text" name="consignee" id='consignee' class="inputBg" placeholder="<?php echo $this->_var['lang']['y_129']; ?>" <?php if ($this->_var['filter']['consignee']): ?>value='<?php echo $this->_var['filter']['consignee']; ?>'<?php endif; ?>//>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <input type="submit" name="" class="button2" value="<?php echo $this->_var['lang']['y_101']; ?>"/>
                    </td>
                  </tr>
                </table>
              </form>
            </div>
          </div>
        </div>
        <div class="order_con order_con1" id="con_order_manage_1">
		<?php echo $this->fetch('store_menu.htm'); ?>
          <div class="order_pd">
            <div class="order">
              <ul class="order_list">
                <?php $_from = $this->_var['delivery_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'delivery');if (count($_from)):
    foreach ($_from AS $this->_var['delivery']):
?>
                <li>
                  <table width="100%" cellpadding="3" cellspacing="1" >
                    <tr>
                      <td colspan="2" align="left"><?php echo $this->_var['lang']['y_130']; ?><?php echo $this->_var['delivery']['delivery_sn']; ?></td>
                    </tr>
                    <tr>
                      <td align="left"><?php echo $this->_var['lang']['y_131']; ?><?php echo $this->_var['delivery']['order_sn']; ?></td>
                      <td align="right"><?php echo $this->_var['lang']['y_132']; ?><?php echo $this->_var['delivery']['consignee']; ?></td>
                    </tr>
                    <tr>
                      <td colspan="2" align="left"><?php echo $this->_var['lang']['y_133']; ?><?php echo $this->_var['delivery']['add_time']; ?></td>
                    </tr>
                    <tr>
                      <td colspan="2" align="left"><?php echo $this->_var['lang']['y_134']; ?><?php echo $this->_var['delivery']['update_time']; ?></td>
                    </tr>
                    <tr>
                      <td align="left"><?php echo $this->_var['lang']['y_135']; ?><?php echo $this->_var['delivery']['status_name']; ?></td>
                      <td align="right">
                        <a href="order.php?act=delivery_info&delivery_id=<?php echo $this->_var['delivery']['delivery_id']; ?>" class="font"><?php echo $this->_var['lang']['view']; ?></a>
                        <a href="order.php?act=remove_delivery&delivery_id=<?php echo $this->_var['delivery']['delivery_id']; ?>" class="font font1"><?php echo $this->_var['lang']['remove']; ?></a>
                      </td>
                    </tr>
                  </table>
                </li>
                <?php endforeach; else: ?>
                <li><div class="no_order"><?php echo $this->_var['lang']['y_136']; ?></div></li>
                <?php endif; unset($_from); ?><?php $this->pop_vars();; ?>
              </ul>
            </div>
            <?php echo $this->fetch('page.htm'); ?>
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