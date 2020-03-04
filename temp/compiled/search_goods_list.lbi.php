<?php if ($this->_var['goods_list']): ?>
 <form action="javascript:void(0)" method="post" name="ECS_FORMBUY" id="ECS_FORMBUY" >
<?php $_from = $this->_var['goods_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods');$this->_foreach['goods_list'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['goods_list']['total'] > 0):
    foreach ($_from AS $this->_var['goods']):
        $this->_foreach['goods_list']['iteration']++;
?>
<?php if ($this->_var['goods']['goods_id']): ?>
<li>
<a href="<?php echo $this->_var['goods']['url']; ?>" class="item">
<div class="pic_box">
<div class="active_box">
<?php if ($this->_var['goods']['is_best'] == 1): ?>
<span style=" background-position:0px -70px"><?php echo $this->_var['lang']['m_21']; ?></span>
<?php elseif ($this->_var['goods']['is_new'] == 1): ?>
<span style=" background-position:0px -36px"><?php echo $this->_var['lang']['m_22']; ?></span>
<?php elseif ($this->_var['goods']['is_hot'] == 1): ?>
<span style=" background-position:0px 0px"><?php echo $this->_var['lang']['m_23']; ?></span>
<?php endif; ?>
</div>
<img src="<?php echo $this->_var['goods']['goods_thumb']; ?>">
</div>
<div class="title_box">
<?php echo $this->_var['goods']['goods_name']; ?>
</div>


<dl class="goods_price">
   <?php echo $this->smarty_insert_scripts(array('files'=>'lefttime.js')); ?>

	  <?php if ($this->_var['goods']['is_promote'] && $this->_var['goods']['gmt_end_time']): ?>
  <dt>
  <span id="ECS_GOODS_AMOUNT"><?php echo $this->_var['goods']['promote_price']; ?></span><?php if ($this->_var['goods']['is_shipping']): ?>
  <em><?php echo $this->_var['lang']['m_377']; ?></em> <?php endif; ?><em><?php echo $this->_var['lang']['m_378']; ?></em><strong id="leftTime"><?php echo $this->_var['lang']['please_waiting']; ?></strong>  </dt>
  <dd><font><?php echo $this->_var['goods']['shop_price_formated']; ?></font>
   <?php if ($this->_var['goods']['give_integral_2'] == '-1'): ?>
	  <p><?php echo $this->_var['lang']['goods_give_integral']; ?> <?php echo $this->_var['goods']['give_integral']; ?> <?php echo $this->_var['lang']['m_8']; ?></p>
	  <?php elseif ($this->_var['goods']['give_integral_2'] > 0): ?>
	  <p><?php echo $this->_var['lang']['goods_give_integral']; ?> <?php echo $this->_var['goods']['give_integral']; ?><?php echo $this->_var['lang']['m_8']; ?></p>
	<?php endif; ?>
	</dd>
  <?php else: ?> 
  <dt> <span id="ECS_GOODS_AMOUNT"><?php echo $this->_var['goods']['shop_price_formated']; ?></span><font><?php echo $this->_var['goods']['market_price']; ?></font><?php if ($this->_var['goods']['is_shipping']): ?><em>包邮</em><?php endif; ?>
	<?php if ($this->_var['goods']['give_integral_2'] == '-1'): ?>
	  <p><?php echo $this->_var['lang']['goods_give_integral']; ?> <?php echo $this->_var['goods']['give_integral']; ?> <?php echo $this->_var['lang']['m_8']; ?></p>
	  <?php elseif ($this->_var['goods']['give_integral_2'] > 0): ?>
	  <p><?php echo $this->_var['lang']['goods_give_integral']; ?> <?php echo $this->_var['goods']['give_integral']; ?> <?php echo $this->_var['lang']['m_8']; ?></p>
	<?php endif; ?>
	</dt>
  <?php endif; ?>
  </dl>

<div class="price_box">
<span class="new_price">
<i><?php if ($this->_var['goods']['promote_price']): ?><?php echo $this->_var['goods']['promote_price']; ?><?php else: ?><?php echo $this->_var['goods']['shop_price']; ?><?php endif; ?></i>
</span>

</div>



<div class="comment_box">
<?php echo $this->_var['lang']['m_24']; ?><?php echo $this->_var['goods']['wap_count']; ?>
</div></a>


<div class="ui-number b"> 
<a class="decrease" onclick="goods_cut(<?php echo $this->_var['goods']['goods_id']; ?>);">-</a>
<input class="num" id="number_<?php echo $this->_var['goods']['goods_id']; ?>" type="text" onblur="changePrice();" value="1" onfocus="if(value=='1') {value=''}" size="4" maxlength="5"  />
<a class="increase" onclick="goods_add(<?php echo $this->_var['goods']['goods_id']; ?>);">+</a> 
</div>
<span class="bug_car" onClick="addToCart(<?php echo $this->_var['goods']['goods_id']; ?>)">
<i class="icon-shop_cart"></i>
</span>
</li>
<?php endif; ?>    
<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
</form>
<script language="javascript" type="text/javascript">  
function goods_cut($val){  
var num_val=document.getElementById('number_'+$val);  
var new_num=num_val.value;  
var Num = parseInt(new_num);  
if(Num>1)Num=Num-1;  
num_val.value=Num;  
} 
function goods_add($val){ 
var num_val=document.getElementById('number_'+$val);  
var new_num=num_val.value;  
var Num = parseInt(new_num);  
Num=Num+1;  
num_val.value=Num;  
}
</scriptfile='library/pages.lbi'}
<?php else: ?>
<div class="new_prom2">
<strong><?php echo $this->_var['lang']['m_20']; ?></strong>
</div>
<?php endif; ?>
                    
