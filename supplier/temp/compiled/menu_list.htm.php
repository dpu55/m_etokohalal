<ul class="order_tab" style="position:relative">
  <li id="order_manage1" class="first" onclick="toggle_menu();"><?php echo $this->_var['ur_here']; ?>
    <i id="menu_list_marker" class='on'></i>
    <ul class="order_type" style="display:none" id='menu_list'>
      <li <?php if ($this->_var['ur_here'] == $this->_var['_LANG'] [ '01_order_list' ]): ?>class='curr'<?php endif; ?>><a href="order.php?act=list"><?php echo $this->_var['lang']['01_order_list']; ?></a></li>
      <li <?php if ($this->_var['ur_here'] == $this->_var['_LANG'] [ '09_delivery_order' ]): ?>class='curr'<?php endif; ?>><a href="order.php?act=delivery_list"><?php echo $this->_var['lang']['09_delivery_order']; ?></a></li>
      <li <?php if ($this->_var['ur_here'] == $this->_var['_LANG'] [ 'y_165' ]): ?>class='curr'<?php endif; ?>><a href="supplier_rebate.php?act=list"><?php echo $this->_var['lang']['y_165']; ?></a></li>
      <li <?php if ($this->_var['ur_here'] == $this->_var['_LANG'] [ 'y_49' ]): ?>class='curr'<?php endif; ?>><a href="goods_stock.php?act=list"><?php echo $this->_var['lang']['y_49']; ?></a></li>
      <li <?php if ($this->_var['ur_here'] == $this->_var['_LANG'] [ 'y_37' ]): ?>class='curr'<?php endif; ?>><a href="back.php?act=back_list"><?php echo $this->_var['LANG']['y_166']; ?></a></li>
    </ul>
  </li>
  <li id="order_manage2" onclick="toggle_search();"><?php echo $this->_var['lang']['y_167']; ?><i class='search'></i></li>
</ul>