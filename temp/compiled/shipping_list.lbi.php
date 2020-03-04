<?php if ($this->_var['shipping_list']): ?>
<ul class="shipping_jm">
	<li>
		<input type="hidden" name="pay_ship[<?php echo $this->_var['suppid']; ?>]" id='pay_ship_<?php echo $this->_var['suppid']; ?>' class='shipping' value="<?php echo $this->_var['checkedid']; ?>">
		<?php $_from = $this->_var['shipping_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'shipping');if (count($_from)):
    foreach ($_from AS $this->_var['shipping']):
?>
            <a id="ship_<?php echo $this->_var['suppid']; ?>_<?php echo $this->_var['shipping']['shipping_id']; ?>" title="<?php if ($this->_var['shipping']['shipping_fee']): ?> <?php echo $this->_var['lang']['total_weight']; ?> <?php echo $this->_var['shipping']['shipping_weight']; ?> <?php echo $this->_var['lang']['unit_g']; ?> &nbsp; <?php echo $this->_var['shipping']['shipping_desc']; ?> <?php echo $this->_var['shipping']['format_shipping_fee']; ?> &nbsp; <?php echo $this->_var['lang']['etd']; ?> : <?php echo $this->_var['shipping']['shipping_etd']; ?>
            <?php else: ?><p class='err'><?php echo $this->_var['lang']['err_0001']; ?></p> 
			<?php endif; ?>" class="shipping_type<?php if ($this->_var['shipping']['selected'] != ''): ?> shipping_type_curr<?php endif; ?> pay_ship<?php echo $this->_var['suppid']; ?>" onclick="$('#pay_ship_<?php echo $this->_var['suppid']; ?>').val(<?php echo $this->_var['shipping']['shipping_id']; ?>);selectShipping(<?php echo $this->_var['shipping']['shipping_id']; ?>,<?php echo $this->_var['suppid']; ?>);$('.pay_ship<?php echo $this->_var['suppid']; ?>').removeClass('shipping_type_curr');$(this).addClass('shipping_type_curr');">
				<!--注意：如果选中的是当前的配送，注意a标签的变化，变化为<a class="shipping_type shipping_type_curr">-->
				<label>
					<?php echo $this->_var['shipping']['shipping_name']; ?>  
				</label>
			</a>
		<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
	</li>
</ul>
<?php else: ?>
<ul class="shipping_jm">
	<li>
		<input type="hidden" name="pay_ship[<?php echo $this->_var['suppid']; ?>]" id='pay_ship_<?php echo $this->_var['suppid']; ?>' class='shipping' value="0">
		<span><?php echo $this->_var['lang']['m_f_746']; ?></span>
	</li>
</ul>
<?php endif; ?>