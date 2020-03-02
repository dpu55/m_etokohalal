<?php exit;?>a:3:{s:8:"template";a:3:{i:0;s:96:"/var/www/vhosts/etokohalal.com/m.etokohalal.com/themesmobile/68ecshopcom_mobile/search_store.dwt";i:1;s:103:"/var/www/vhosts/etokohalal.com/m.etokohalal.com/themesmobile/68ecshopcom_mobile/library/search_list.lbi";i:2;s:103:"/var/www/vhosts/etokohalal.com/m.etokohalal.com/themesmobile/68ecshopcom_mobile/library/page_footer.lbi";}s:7:"expires";i:1582631079;s:8:"maketime";i:1582627479;}<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<base href="https://m.etokohalal.com/" />
<meta name="Generator" content="ECSHOP v2.7.3" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width">
<meta name="Keywords" content="" />
<meta name="Description" content="" />
<meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, user-scalable=0"/>
<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7" />
<title>Etokohalal.com  </title>
<link rel="shortcut icon" href="favicon.ico" />
<link rel="icon" href="animated_favicon.gif" type="image/gif" />
<link rel="stylesheet" href="themesmobile/68ecshopcom_mobile/css/ecsmart.css">
<link rel="stylesheet" href="themesmobile/68ecshopcom_mobile/css/exchange.css">
<script type="text/javascript" src="themesmobile/68ecshopcom_mobile/js/jquery.js"></script>
<script type="text/javascript" src="themesmobile/68ecshopcom_mobile/js/TouchSlide.1.1.js"></script>
<script type="text/javascript" src="js/jquery.json.js"></script><script type="text/javascript" src="js/transport.js"></script>
<script type="text/javascript" src="js/common.js"></script></head>
<body>
<header id="header" class='header'>
  <h1>Search store</h1>
  <a href="javascript:history.back(-1)" class="back">{$lang.Back}</a> 
</header>
<div id="site-nav">
  <div id="content  ">
    <div class="flow">
      <div class="flow_wrap">
No corresponding shop was found!</div>
          </div>
  </div>
<div class="footer" >
      <div class="links"  id="ECS_MEMBERZONE"> <script type="text/javascript" src="js/utils.js"></script>          554fcae493e564ee0dc75bdf2ebf94camember_info|a:1:{s:4:"name";s:11:"member_info";}554fcae493e564ee0dc75bdf2ebf94ca</div>
          <ul class="linkss" >
          <li>
            <a href="#">
            <i class="footerimg_1"></i>
            <span >Client</span></a></li>
          <li>
          <a href="javascript:;"><i class="footerimg_2"></i><span class="gl">Touch</span></a></li>
          <li><a href="index.php?is_c=1" class="goDesktop"><i class="footerimg_3"></i><span>Computer</span></a></li></ul>
  	 <p class="mf_o4">&copy; 2015-2020 Etokohalal.com Copyright, All Rights Reserved.</p>
</div>
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