<div class="quotes form">
<?php echo $this->Form->create('Quote'); ?>
	<fieldset>
		<h2><?php echo __('Share your poop thought'); ?></h2>
	<?php
		echo $this->Form->input('title');
		echo $this->Form->input('body');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $this->Html->link(__('List of poop thoughts'), array('action' => 'index')); ?></li>
	</ul>
</div>
