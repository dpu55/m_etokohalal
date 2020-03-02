<?php if ($this->_var['user_info']): ?>
<a href="user.php"><span><?php echo $this->_var['user_info']['username']; ?></span></a><a href="user.php?act=logout"><span><?php echo $this->_var['lang']['m_26']; ?></span></a><a href="javascript:window.scrollTo(0,0);"><span><?php echo $this->_var['lang']['m_27']; ?></span></a>
<?php else: ?>
	<a href="user.php"><span><?php echo $this->_var['lang']['m_28']; ?></span></a><a href="register.php"><span><?php echo $this->_var['lang']['m_29']; ?></span></a><a href="#"><span><?php echo $this->_var['lang']['m_30']; ?></span></a><a href="javascript:window.scrollTo(0,0);"><span><?php echo $this->_var['lang']['m_27']; ?></span></a>
<?php endif; ?>