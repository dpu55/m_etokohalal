<p class="page">
  <a href="javascript:prev_page()" class="prev"><?php echo $this->_var['lang']['page_prev']; ?></a>
  <span><?php if ($this->_var['filter']['page'] && $this->_var['filter']['page'] >= 0): ?><?php echo $this->_var['filter']['page']; ?><?php else: ?>0<?php endif; ?>/<?php if ($this->_var['filter']['page_count'] && $this->_var['filter']['page_count'] >= 0): ?><?php echo $this->_var['filter']['page_count']; ?><?php else: ?>0<?php endif; ?></span>
  <a href="javascript:next_page()"><?php echo $this->_var['lang']['page_next']; ?></a>
  
</p>