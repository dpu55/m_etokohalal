
<?php $_from = $this->_var['shop_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'shop');$this->_foreach['shop_list'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['shop_list']['total'] > 0):
    foreach ($_from AS $this->_var['shop']):
        $this->_foreach['shop_list']['iteration']++;
?> 
<section class="rzs_info" <?php if (($this->_foreach['shop_list']['iteration'] <= 1)): ?> style=" margin-top:-40px;"<?php endif; ?>>
<dl>
<dt> <a href="supplier.php?suppId=<?php echo $this->_var['shop']['supplier_id']; ?>" title="<?php echo $this->_var['shop']['shop_name']; ?>">
 <img alt="" src="../<?php echo $this->_var['shop']['shop_logo']; ?>"/></a></dt>
<dd><strong><a href='supplier.php?suppId=<?php echo $this->_var['shop']['supplier_id']; ?>'><?php echo sub_str($this->_var['shop']['shop_name'],9); ?></a>
<em onclick='guanzhu(<?php echo $this->_var['shop']['supplier_id']; ?>);' class="guanzhu">
<?php if ($this->_var['shop']['shop_closed']): ?>装修中..<?php else: ?>收藏<?php endif; ?>
</em>
</strong>
<p><?php echo $this->_var['lang']['m_57']; ?><?php echo $this->_var['shop']['shop_province_name']; ?>&nbsp;<?php echo $this->_var['shop']['shop_city_name']; ?>&nbsp;<?php echo $this->_var['shop']['shop_address']; ?></p>
</dd>
</dl>
<ul>
<li><span><?php echo $this->_var['lang']['m_58']; ?></span><strong>:<?php if ($this->_var['shop']['c_rank'] > 0): ?><?php echo $this->_var['shop']['c_rank']; ?><?php else: ?>5.0<?php endif; ?></strong><em><?php if ($this->_var['shop']['c_rank'] > 0): ?><?php if ($this->_var['shop']['c_rank'] <= 2): ?><?php echo $this->_var['lang']['m_59']; ?><?php elseif ($this->_var['shop']['c_rank'] > 2 && $this->_var['shop']['c_rank'] <= 4): ?><?php echo $this->_var['lang']['m_60']; ?><?php else: ?><?php echo $this->_var['lang']['m_61']; ?><?php endif; ?><?php else: ?><?php echo $this->_var['lang']['m_61']; ?><?php endif; ?></em></li>
<li><span><?php echo $this->_var['lang']['m_62']; ?></span><strong>:<?php if ($this->_var['shop']['serv_rank'] > 0): ?><?php echo $this->_var['shop']['serv_rank']; ?><?php else: ?>5.0<?php endif; ?></strong><em><?php if ($this->_var['shop']['serv_rank'] > 0): ?><?php if ($this->_var['shop']['serv_rank'] <= 2): ?><?php echo $this->_var['lang']['m_59']; ?><?php elseif ($this->_var['shop']['serv_rank'] > 2 && $this->_var['shop']['serv_rank'] <= 4): ?>中<?php else: ?><?php echo $this->_var['lang']['m_61']; ?><?php endif; ?><?php else: ?><?php echo $this->_var['lang']['m_61']; ?><?php endif; ?></em></li>
<li><span><?php echo $this->_var['lang']['m_63']; ?></span><strong>:<?php if ($this->_var['shop']['shipp_rank'] > 0): ?><?php echo $this->_var['shop']['shipp_rank']; ?><?php else: ?>5.0<?php endif; ?></strong><em><?php if ($this->_var['shop']['shipp_rank'] > 0): ?><?php if ($this->_var['shop']['shipp_rank'] <= 2): ?><?php echo $this->_var['lang']['m_59']; ?><?php elseif ($this->_var['shop']['shipp_rank'] > 2 && $this->_var['shop']['shipp_rank'] <= 4): ?>中<?php else: ?><?php echo $this->_var['lang']['m_61']; ?><?php endif; ?><?php else: ?><?php echo $this->_var['lang']['m_61']; ?><?php endif; ?></em></li>
</ul>
<div class="index_taocan">
    <h2><?php echo $this->_var['lang']['m_64']; ?><?php echo $this->_var['shop']['goods_number']; ?><?php echo $this->_var['lang']['m_65']; ?></h2>
     <?php $_from = $this->_var['shop']['goodlist']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('i', 'goods');$this->_foreach['goods'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['goods']['total'] > 0):
    foreach ($_from AS $this->_var['i'] => $this->_var['goods']):
        $this->_foreach['goods']['iteration']++;
?>
 <?php if ($this->_var['i'] < 4): ?>
        <a href="goods.php?id=<?php echo $this->_var['goods']['goods_id']; ?>" title="<?php echo $this->_var['goods']['goods_name']; ?>">             
          <dl>
          <dt><img src="<?php echo $this->_var['goods']['goods_thumb']; ?>"> <em><?php echo $this->_var['goods']['shop_price']; ?></em></dt>
          <dd><?php echo $this->_var['goods']['goods_name']; ?></dd>
           </dl>
           </a>
           <?php endif; ?>
   <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
  </div>
<div class="s_dianpu">
<span><a href="tel:<?php echo $this->_var['shop']['service_phone']; ?>" style=" margin-left:7%"><em class="bg1"></em><?php echo $this->_var['lang']['m_66']; ?></a></span>
<span><a href="supplier.php?suppId=<?php echo $this->_var['shop']['supplier_id']; ?>" style=" margin-left:3%"><em class="bg2"></em><?php echo $this->_var['lang']['m_67']; ?></a></span>
</div>
</section>
<?php endforeach; else: ?>
<div class="flow_wrap">
<?php echo $this->_var['lang']['m_68']; ?>
</div>
<?php endif; unset($_from); ?><?php $this->pop_vars();; ?>	