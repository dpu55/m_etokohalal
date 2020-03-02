<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<base href="https://m.etokohalal.com/" />
<meta name="Generator" content="ECSHOP v2.7.3" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width">
<meta name="Keywords" content="<?php echo $this->_var['keywords']; ?>" />
<meta name="Description" content="<?php echo $this->_var['description']; ?>" />
<meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, user-scalable=0"/>
<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7" />

<title><?php echo $this->_var['page_title']; ?></title>



<link rel="shortcut icon" href="favicon.ico" />
<link rel="icon" href="animated_favicon.gif" type="image/gif" />
<link href="<?php echo $this->_var['ecs_css_path']; ?>" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="themesmobile/68ecshopcom_mobile/css/ecsmart.css">
<link rel="stylesheet" href="themesmobile/68ecshopcom_mobile/css/auction.css">
<script type="text/javascript" src="themesmobile/68ecshopcom_mobile/js/jquery.js"></script>
<script type="text/javascript" src="themesmobile/68ecshopcom_mobile/js/TouchSlide.1.1.js"></script>

<link rel="stylesheet" href="themesmobile/68ecshopcom_mobile/fontawesome-5.9.0/css/all.min.css">
<link rel="stylesheet" href="themesmobile/68ecshopcom_mobile/fontawesome-5.9.0/css/fontawesome.min.css">
<link rel="stylesheet" href="themesmobile/68ecshopcom_mobile/fontawesome-5.9.0/css/v4-shims.min.css">
<script data-search-pseudo-elements defer src="themesmobile/68ecshopcom_mobile/fontawesome-5.9.0/js/all.min.js" integrity="sha384-L469/ELG4Bg9sDQbl0hvjMq8pOcqFgkSpwhwnslzvVVGpDjYJ6wJJyYjvG3u8XW7" crossorigin="anonymous"></script>

<link rel="stylesheet" type="text/css" href="themesmobile/68ecshopcom_mobile/css/public.css"/>
<link rel="stylesheet" type="text/css" href="themesmobile/68ecshopcom_mobile/css/goods.css"/>  

<link rel="stylesheet" type="text/css" href="themesmobile/68ecshopcom_mobile/css/eth_v1/eth_v1_mobile.css"/>

<?php echo $this->smarty_insert_scripts(array('files'=>'jquery.json.js,transport.js')); ?>

<?php echo $this->smarty_insert_scripts(array('files'=>'common.js')); ?>
</head>
<body class="eth_v1_mobile page-auction-list">
<header id="header" class='header'>
  <h1><?php echo $this->_var['lang']['m_416']; ?></h1>
  <a href="javascript:history.back(-1)" class="back"><?php echo $this->_var['lang']['m_166']; ?></a>
</header>
<div id="scrollimg" class="scrollimg">
	<div class="bd">
		<ul>
          <?php $_from = $this->_var['wap_auction_ad']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'ad');$this->_foreach['wap_auction_ad'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['wap_auction_ad']['total'] > 0):
    foreach ($_from AS $this->_var['ad']):
        $this->_foreach['wap_auction_ad']['iteration']++;
?>
          <li><a href="<?php echo $this->_var['ad']['url']; ?>"><img src="<?php echo $this->_var['ad']['image']; ?>" width="100%" /></a></li>
          <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
		</ul>
	</div>
	<div class="hd">
		<ul></ul>
	</div>
</div>
<script type="text/javascript">
				TouchSlide({
					slideCell:"#scrollimg",
					titCell:".hd ul", //开启自动分页 autoPage:true ，此时设置 titCell 为导航元素包裹层
					mainCell:".bd ul",
					effect:"leftLoop",
					autoPage:true,//自动分页
					autoPlay:true //自动播放
				});
			</script>
<div id="tbh5v0">
  <section class="innercontent">
  	 <?php if ($this->_var['auction_list']): ?>
 	<script>
<!--
/*第一种形式 第二种形式 更换显示样式*/
function setTabCatGoods(name,cursel,n){
for(i=1;i<=n;i++){
var menu=document.getElementById(name+i);
var con=document.getElementById("con_"+name+"_"+i);
con.style.display=i==cursel?"block":"none";
menu.className=i==cursel?"curr":"";
}
}
//-->
</script>
	<div class="main">
  	<div class="tab">
    	<div class="tab_tit">
    		<ul>
        		<li class="curr" id="goods1" onclick="setTabCatGoods('goods',1,3)"><?php echo $this->_var['lang']['m_417']; ?></li>
            	<li id="goods2" onclick="setTabCatGoods('goods',2,3)"><?php echo $this->_var['lang']['m_418']; ?></li>
            	<li id="goods3" onclick="setTabCatGoods('goods',3,3)"><?php echo $this->_var['lang']['m_419']; ?></li>
        	</ul>
        </div>
        <div class="tab_con">
        	<div id="con_goods_1">
            	<ul>
                    <?php $_from = $this->_var['auction_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'auction');$this->_foreach['name'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['name']['total'] > 0):
    foreach ($_from AS $this->_var['auction']):
        $this->_foreach['name']['iteration']++;
?>
        		    <?php if ($this->_var['auction']['check_time'] == 0 && $this->_var['auction']['c_0'] && $this->_var['auction']['imgfile_c'] != ''): ?>
                       <li>
            			<div class="con_top">
                        	<span class="count"><font><?php echo $this->_var['auction']['act_count']; ?></font></br><?php echo $this->_var['lang']['m_410']; ?></span>
                        	<a href="<?php echo $this->_var['auction']['url']; ?>"><img src="<?php echo $this->_var['img_url']; ?><?php echo $this->_var['auction']['act_imgfile']; ?>" /></a>
                        </div>
                        <div class="con_bottom">
                        	<p class="name"><a href="<?php echo $this->_var['auction']['url']; ?>"><?php echo $this->_var['auction']['goods_name']; ?></a></p>
               				<p><?php echo $this->_var['lang']['act_status']; ?>：
                				<?php if ($this->_var['auction']['status_no'] == 0): ?>
                				<?php echo $this->_var['lang']['au_pre_start']; ?>
                				<?php elseif ($this->_var['auction']['status_no'] == 1): ?>
                				<?php echo $this->_var['lang']['au_under_way_1']; ?>
                				<?php else: ?>
                				<?php echo $this->_var['lang']['au_finished']; ?>
                				<?php endif; ?>
                            </p>
                			<p><?php echo $this->_var['lang']['au_start_price']; ?>：<?php echo $this->_var['auction']['formated_start_price']; ?></p>
                			<?php if ($this->_var['auction']['end_price'] > 0): ?>
                			<p><?php echo $this->_var['lang']['au_end_price']; ?>：<?php echo $this->_var['auction']['formated_end_price']; ?></p>
                			<?php endif; ?>
                        </div>
                    </li>
                    <?php endif; ?>
                    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                </ul>
            </div>
            <div class="mc " id="con_goods_2">
            	<ul>
        			<?php $_from = $this->_var['auction_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'auction');$this->_foreach['name'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['name']['total'] > 0):
    foreach ($_from AS $this->_var['auction']):
        $this->_foreach['name']['iteration']++;
?>
        		    <?php if ($this->_var['auction']['check_time'] == 1 && $this->_var['auction']['c_1'] && $this->_var['auction']['imgfile_c'] != ''): ?>
                    <li>
            			<div class="con_top">
                        	<span class="count"><font><?php echo $this->_var['auction']['act_count']; ?></font></br><?php echo $this->_var['lang']['m_410']; ?></span>
                            <a href="<?php echo $this->_var['auction']['url']; ?>"><img src="<?php echo $this->_var['img_url']; ?><?php echo $this->_var['auction']['act_imgfile']; ?>"  /></a>
                        </div>
                        <div class="con_bottom">
                        	<p class="name"><a href="<?php echo $this->_var['auction']['url']; ?>"><?php echo $this->_var['auction']['goods_name']; ?></a></p>
               				<p><?php echo $this->_var['lang']['act_status']; ?>：
                				<?php if ($this->_var['auction']['status_no'] == 0): ?>
                				<?php echo $this->_var['lang']['au_pre_start']; ?>
                				<?php elseif ($this->_var['auction']['status_no'] == 1): ?>
                				<?php echo $this->_var['lang']['au_under_way_1']; ?>
                				<?php else: ?>
                				<?php echo $this->_var['lang']['au_finished']; ?>
                				<?php endif; ?>
                            </p>
                			<p><?php echo $this->_var['lang']['au_start_price']; ?>：<?php echo $this->_var['auction']['formated_start_price']; ?></p>
                			<?php if ($this->_var['auction']['end_price'] > 0): ?>
                			<p><?php echo $this->_var['lang']['au_end_price']; ?>：<?php echo $this->_var['auction']['formated_end_price']; ?></p>
                			<?php endif; ?>
                        </div>
                    </li>
                    <?php endif; ?>
                    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                </ul>
            </div>
            <div class="mc " id="con_goods_3">
            	<ul>
        			<?php $_from = $this->_var['auction_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'auction');$this->_foreach['name'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['name']['total'] > 0):
    foreach ($_from AS $this->_var['auction']):
        $this->_foreach['name']['iteration']++;
?>
        		    <?php if ($this->_var['auction']['check_time'] == 2 && $this->_var['auction']['c_2'] && $this->_var['auction']['imgfile_c'] != ''): ?>
                    <li>
            			<div class="con_top">
                        	<span class="count"><font><?php echo $this->_var['auction']['act_count']; ?></font></br><?php echo $this->_var['lang']['m_410']; ?></span>
                            <a href="<?php echo $this->_var['auction']['url']; ?>"><img src="<?php echo $this->_var['img_url']; ?><?php echo $this->_var['auction']['act_imgfile']; ?>"  /></a>
                        </div>
                        <div class="con_bottom">
                        	<p class="name"><a href="<?php echo $this->_var['auction']['url']; ?>"><?php echo $this->_var['auction']['goods_name']; ?></a></p>
               				<p><?php echo $this->_var['lang']['act_status']; ?>：
                				<?php if ($this->_var['auction']['status_no'] == 0): ?>
                				<?php echo $this->_var['lang']['au_pre_start']; ?>
                				<?php elseif ($this->_var['auction']['status_no'] == 1): ?>
                				<?php echo $this->_var['lang']['au_under_way_1']; ?>
                				<?php else: ?>
                				<?php echo $this->_var['lang']['au_finished']; ?>
                				<?php endif; ?>
                            </p>
                			<p><?php echo $this->_var['lang']['au_start_price']; ?>：<?php echo $this->_var['auction']['formated_start_price']; ?></p>
                			<?php if ($this->_var['auction']['end_price'] > 0): ?>
                			<p><?php echo $this->_var['lang']['au_end_price']; ?>：<?php echo $this->_var['auction']['formated_end_price']; ?></p>
                			<?php endif; ?>
                        </div>
                    </li>
                    <?php endif; ?>
                    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                </ul>
            </div>
        </div>
    </div>
    <?php if ($this->_var['auction_list_hot']): ?>
    <div class="auction_hot">
    	<h2><?php echo $this->_var['lang']['m_683']; ?></h2>
        <div class="mc">
   		  <ul>
      		<?php $_from = $this->_var['auction_list_hot']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'auction');$this->_foreach['name'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['name']['total'] > 0):
    foreach ($_from AS $this->_var['auction']):
        $this->_foreach['name']['iteration']++;
?>
      		<?php if ($this->_foreach['name']['iteration'] < 5 && $this->_var['auction']['check_time'] == 0): ?>
      			<li>
      				<div class="p-img"><a href="<?php echo $this->_var['auction']['url']; ?>"><img width="95" height="95" alt="<?php echo $this->_var['auction']['goods_name']; ?>"  src="<?php echo $this->_var['img_url']; ?><?php echo $this->_var['auction']['goods_thumb']; ?>"/></a></div>
                    <div style="float:right;width:65%">
      					<div class="rate"><a href="<?php echo $this->_var['auction']['url']; ?>"><?php echo sub_str($this->_var['auction']['goods_name'],20); ?></a></div>
      					<div class="p-price"><span><?php echo $this->_var['lang']['m_411']; ?> </span><strong><?php echo $this->_var['auction']['formated_current_price']; ?></strong></div>
                    	<div class="p-count"><i></i><strong><?php echo $this->_var['auction']['act_count']; ?> <?php echo $this->_var['lang']['m_501']; ?></strong></div>
                    </div>
      			</li>
      		<?php endif; ?>
      		<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
    		</ul>
  		</div>
    </div>
    <?php endif; ?>
    <div class="layout_list">
    <h2><?php echo $this->_var['lang']['m_500']; ?></h2>
      <ul class="clearfix">
      <?php $_from = $this->_var['auction_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'auction');$this->_foreach['name'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['name']['total'] > 0):
    foreach ($_from AS $this->_var['auction']):
        $this->_foreach['name']['iteration']++;
?>
  		<li <?php if ($this->_foreach['name']['iteration'] % 2 == 1): ?>class="layout_list_1"<?php endif; ?>>
        	<a href="<?php echo $this->_var['auction']['url']; ?>" target="_self" class="layout_pic"><img class="err-product" src="<?php echo $this->_var['img_url']; ?><?php echo $this->_var['auction']['goods_thumb']; ?>" ></a>
          	<div class="layout_cont">
            	<a class="layout_name" target="_self" href="<?php echo $this->_var['auction']['url']; ?>"><?php echo sub_str($this->_var['auction']['goods_name'],26); ?></a>
            	<div class="layout_price"><?php echo $this->_var['m_411']; ?><span><?php echo $this->_var['auction']['formated_current_price']; ?></span></div>
                	<?php if ($this->_var['auction']['status_no'] == 0): ?>
                <a href="<?php echo $this->_var['auction']['url']; ?>" class="bid_btn1" target="_self">{<?php echo $this->_var['auction']; ?>}</a>
                    <?php elseif ($this->_var['auction']['status_no'] == 1): ?>
                <a href="<?php echo $this->_var['auction']['url']; ?>" class="bid_btn2" target="_self"><?php echo $this->_var['woyao']; ?></a>
                    <?php else: ?>
                <a href="<?php echo $this->_var['auction']['url']; ?>" class="bid_btn3" target="_self"><?php echo $this->_var['endaution']; ?></a>
                    <?php endif; ?>
                </a>
          	</div>
        </li>
        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
  	  </ul>
    </div>
	</div>
    <?php endif; ?>
  </section>
</div>
<?php echo $this->fetch('library/page_footer.lbi'); ?>
<?php echo $this->fetch('library/footer_nav.lbi'); ?>
</body>
</html>