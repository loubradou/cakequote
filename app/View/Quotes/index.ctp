<div class="quotes index">
	<h2><?php echo __('Last poop thoughts'); ?></h2>

	<?php foreach ($quotes as $quote): ?>
	<div class="statut">
		<h2><span><?php echo h($quote['Quote']['title']); ?>&nbsp;</span></h2>
		<p><?php echo h($quote['Quote']['body']); ?>&nbsp;</p>
		<p>By 
			<strong>
				<?php echo $this->Html->link($quote['User']['username'], array('controller' => 'users', 'action' => 'view', $quote['User']['id'])); ?>
			</strong>

			<small>
				<?php echo h($quote['Quote']['created']); ?>&nbsp;
			</small>
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $quote['Quote']['id'])); ?>
			<?php if($me['id'] == $quote['Quote']['user_id']): ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $quote['Quote']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $quote['Quote']['id']), null, __('Are you sure you want to delete # %s?', $quote['Quote']['id'])); ?>
			<?php endif; ?>
		</p>
	</div>
<?php endforeach; ?>
</div>
<div class="actions">
	<ul>
		<?php if($me['id']<=0): ?>
			<li><?php echo $this->Html->link(__("Sign up"), array('controller' => 'users', 'action' => 'add')); ?>
				<?php echo $this->Html->link(__("Login"), array('controller' => 'users', 'action' => 'login')); ?> 
			</li>
		<?php else: ?>
			<li>
				<?php echo $this->Html->link(__("My profile"), array('controller' => 'users', 'action' => 'view',$quote['User']['id'])); ?>
				<?php echo $this->Html->link("Logout", array('controller' => 'users', 'action' => 'logout')); ?> 
			</li>
		<?php endif; ?>
		<li><?php echo $this->Html->link(__('Share your poop thought'), array('action' => 'add')); ?></li>

	</ul>
</div>
