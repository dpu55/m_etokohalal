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
<link rel="stylesheet" href="themesmobile/68ecshopcom_mobile/css/ecsmart.css">
<link rel="stylesheet" href="themesmobile/68ecshopcom_mobile/css/exchange.css">
<script type="text/javascript" src="themesmobile/68ecshopcom_mobile/js/jquery.js"></script>
<script type="text/javascript" src="themesmobile/68ecshopcom_mobile/js/TouchSlide.1.1.js"></script>
<?php echo $this->smarty_insert_scripts(array('files'=>'jquery.json.js,transport.js')); ?>

<?php echo $this->smarty_insert_scripts(array('files'=>'common.js')); ?>
</head>
<body>
<header id="header" class='header'>
  <h1><?php echo $this->_var['lang']['m_352']; ?></h1>
  <a href="javascript:history.back(-1)" class="back">{$lang.<?php echo $this->_var['lang']['m_166']; ?>}</a> 
</header>
<div id="site-nav">

  <div id="content  ">
    <div class="flow">
      <?php echo $this->fetch('library/search_list.lbi'); ?>
      <?php if ($this->_var['shops_list']): ?>
      <?php echo $this->fetch('library/pages.lbi'); ?>
      <?php endif; ?>
    </div>

  </div>
<?php echo $this->fetch('library/page_footer.lbi'); ?>
</div>
</body>
<script type="text/javascript">

function guanzhu(sid){
	Ajax.call('supplier.php', 'go=other&act=add_guanzhu&suppId=' + sid, selcartResponse, 'GET', 'JSON');
}

function selcartResponse(result){
	
	alert(result.info);
}
$(".ft-bands div").mouseover(function(){
$(this).addClass('ft-col-cur').siblings().removeClass('ft-col-cur'); //切换选项卡标签的class
})
</script>

<script type="text/javascript">
$("img").lazyload({
    effect       : "fadeIn",
	 skip_invisible : true,
	 failure_limit : 20
});
</script>

</html>




