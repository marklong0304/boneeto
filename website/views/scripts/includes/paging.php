<div class="col-xs-12 text-center">
    <ul class="pagination mt32">
	 <?php if (isset($this->previous)): ?>
        	<li><a href="<?php echo $this->urlprefix . $this->previous?>"><i class="fa fa-angle-left"></i></a></li>
        <?php else: ?>
        	&nbsp;
        <?php endif; ?>
        <?php foreach ($this->pagesInRange as $page): ?>
        	<?php if ($page != $this->current): ?>
				<li><a href="<?php echo $this->urlprefix . $page ?>"><?php echo $page; ?></a></li>
			<?php else: ?>
				<li><a href="javascript:void(0);"><?php echo $page; ?></a></li>
			<?php endif; ?>
		<?php endforeach; ?>
		<?php if (isset($this->next)): ?>
        	<li><a href="<?php echo $this->urlprefix . $this->next ?>"><i class="fa fa-angle-right"></i></a></li>
        <?php else: ?>
        	&nbsp;
        <?php endif;?>
    </ul>
</div><!--/ .col-xs-12 -->