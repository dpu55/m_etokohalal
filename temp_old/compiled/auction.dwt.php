
<!doctype html>
<head>
<base href="https://m.etokohalal.com/" />
<meta name="Generator" content="ECSHOP v2.7.3" />
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width">

	<title><?php echo $this->_var['page_title']; ?></title>
	<meta name="Keywords" content="<?php echo $this->_var['keywords']; ?>" />
	<meta name="Description" content="<?php echo $this->_var['description']; ?>" />
    <script src="static/js/modernizr.js"></script>
<link rel="shortcut icon" href="static/img/favicon.png">
	<link rel="apple-touch-icon-precomposed" href="static/img/website_icon.png">
	<link rel="stylesheet" href="static/css/style.css">

<?php echo $this->smarty_insert_scripts(array('files'=>'common.js,utils.js')); ?>

	</head>
<body id="page_goods">
<div id="container">
<?php echo $this->fetch('library/page_header.lbi'); ?>

<div id="main"><div class="wrapper">
	<?php echo $this->fetch('library/ur_here.lbi'); ?>
	
	
		<?php echo $this->fetch('library/auction_goods_detail.lbi'); ?>
		<div class="goods_desc box">
			<div class="hd"><h3><?php echo $this->_var['lang']['bid_record']; ?></h3><div class="extra"></div></div>
			<div class="bd">
				<?php if ($this->_var['auction_log']): ?>
				<dl class="table col4">
					<dt class="head"><?php echo $this->_var['lang']['au_bid_user']; ?></dt>
					<dd class="head"><span class="col"><?php echo $this->_var['lang']['au_bid_price']; ?></span><span class="col"><?php echo $this->_var['lang']['au_bid_time']; ?></span><span class="col"><?php echo $this->_var['lang']['au_bid_status']; ?></span></dd>
					<?php $_from = $this->_var['auction_log']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'log');$this->_foreach['fe_bid_log'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['fe_bid_log']['total'] > 0):
    foreach ($_from AS $this->_var['log']):
        $this->_foreach['fe_bid_log']['iteration']++;
?>
					<dt><?php echo $this->_var['log']['user_name']; ?></dt>
					<dd class="<?php echo $this->cycle(array('values'=>'odd,even')); ?>"><span class="col price"><?php echo $this->_var['log']['formated_bid_price']; ?></span><span class="col"><?php echo $this->_var['log']['bid_time']; ?></span><span class="col"><?php if (($this->_foreach['fe_bid_log']['iteration'] <= 1)): ?> <?php echo $this->_var['lang']['au_bid_ok']; ?><?php else: ?>&nbsp;<?php endif; ?></span></dd>
					<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
				</dl>
				<?php else: ?>
				<div class="empty"><p><?php echo $this->_var['lang']['no_bid_log']; ?></p></div>
				<?php endif; ?>
			</div>
		</div>
	
	
</div></div>

<?php echo $this->fetch('library/page_footer.lbi'); ?>

<script type="text/javascript" src="static/js/plugins.js"></script>
<script type="text/javascript" src="static/js/lang.zh_cn.js"></script>
<script type="text/javascript" src="static/js/global.js"></script>
<script type="text/javascript" src="static/js/init.js"></script>

</div>
</body>

</html>