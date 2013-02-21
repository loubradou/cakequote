<div class="users form">
<?php echo $this->Form->create('User'); ?>
	<fieldset>
		<h2><?php echo __('Sign up from toilet'); ?></h2>
	<?php
		echo $this->Form->input('username');
		echo $this->Form->input('password');
		echo $this->Form->input('email');
		echo $this->Form->input('group_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>

