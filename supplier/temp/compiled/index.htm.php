<?php if ($this->_var['full_page'] == 1): ?>
<!DOCTYPE HTML>
<html>
  <head>
    <?php echo $this->fetch('html_header.htm'); ?>
    <script></script>
  </head>
  <body>
    <div id='container'>
      <?php endif; ?>
      <?php echo $this->fetch('page_header.htm'); ?>
      <section id='content'>
        <div class="pd">
          <h4><?php echo $this->_var['lang']['y_149']; ?><span><?php echo $this->_var['supplier_name']; ?></span><?php echo $this->_var['lang']['y_150']; ?></h4>
          <div class="index">
            <ul class="index_menu_one">
              <li>
                <a href="order.php?act=list&composite_status=<?php echo $this->_var['cs_await_ship']; ?>" class="index_menu1">
                <span><?php echo $this->_var['lang']['y_151']; ?>（<?php if ($this->_var['footer_order']['await_ship']): ?><?php echo $this->_var['footer_order']['await_ship']; ?><?php else: ?>0<?php endif; ?>）</span>
                </a>
              </li>
              <li>
                <a href="order.php?act=list&composite_status=<?php echo $this->_var['os_shipped_part']; ?>" class="index_menu2">
                <span><?php echo $this->_var['lang']['y_152']; ?>（<?php if ($this->_var['order']['shipped_part']): ?><?php echo $this->_var['order']['shipped_part']; ?><?php else: ?>0<?php endif; ?>）</span>
                </a>
              </li>
              <li>
                <a href="order.php?act=list&composite_status=<?php echo $this->_var['cs_await_pay']; ?>" class="index_menu3">
                <span><?php echo $this->_var['lang']['y_153']; ?>（<?php if ($this->_var['order']['await_pay']): ?><?php echo $this->_var['order']['await_pay']; ?><?php else: ?>0<?php endif; ?>）</span>
                </a>
              </li>
              <li>
                <a href="order.php?act=delivery_list" class="index_menu4">
                <span><?php echo $this->_var['lang']['y_154']; ?></span>
                </a>
              </li>
              <li>
                <a href="back.php?act=back_list&order_type=2&back_type=<?php echo $this->_var['back_type_money']; ?>" class="index_menu5">
                <span><?php echo $this->_var['lang']['y_155']; ?>（<?php if ($this->_var['footer_order']['return_money']): ?><?php echo $this->_var['footer_order']['return_money']; ?><?php else: ?>0<?php endif; ?>）</span>
                </a>
              </li>
              <li>
                <a href="back.php?act=back_list&order_type=2&back_type=<?php echo $this->_var['back_type_goods']; ?>" class="index_menu6">
                <span><?php echo $this->_var['lang']['y_156']; ?>（<?php if ($this->_var['footer_order']['return_goods']): ?><?php echo $this->_var['footer_order']['return_goods']; ?><?php else: ?>0<?php endif; ?>）</span>
                </a>
              </li>
            </ul>
            <p class="index_menu_two">
              <a href="supplier_rebate.php?act=list&is_pay_ok=0" class="index_menu_7"><?php echo $this->_var['lang']['y_157']; ?></a>
              <a href="goods_stock.php?act=list"><?php echo $this->_var['lang']['y_158']; ?></a>
            </p>
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