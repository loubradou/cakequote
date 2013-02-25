<div class="users view">
<h3><?php  echo __('My profile'); ?></h3>
	<dl>
		<dt><?php echo __('Username'); ?></dt>
		<dd>
			<?php echo h($user['User']['username']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Email'); ?></dt>
		<dd>
			<?php echo h($user['User']['email']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Group'); ?></dt>
		<dd>
			<?php echo $this->Html->link($user['Group']['name'], array('controller' => 'groups', 'action' => 'view', $user['Group']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($user['User']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Updated'); ?></dt>
		<dd>
			<?php echo h($user['User']['updated']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	
		<li><?php echo $this->Html->link(__('Share your poop thought'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link("Logout", array('controller' => 'users', 'action' => 'logout')); ?></li>


</div>
<div class="related">
	<h3><?php echo __('My Latest Thoughts'); ?></h3>
	<?php if (!empty($user['Quote'])): ?>
	
	<?php
		$i = 0;
		foreach ($user['Quote'] as $quote): ?>
		<div class="statut">
			<h2><span><?php echo $quote['title']; ?></h2></span>
			<p><?php echo $quote['body']; ?></p>
			<p>
				<small><?php echo $quote['created']; ?></small>
				<?php echo $quote['updated']; ?>
				<?php echo $this->Html->link(__('View'), array('controller' => 'quotes', 'action' => 'view', $quote['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'quotes', 'action' => 'edit', $quote['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'quotes', 'action' => 'delete', $quote['id']), null, __('Are you sure you want to delete # %s?', $quote['id'])); ?>	
			</p>
		</div>
	<?php endforeach; ?>
<?php endif; ?>


</div>
