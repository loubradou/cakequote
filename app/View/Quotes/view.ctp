<div class="quotes view">
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
			</p>
	</div>
	<div class="actions">


		<h2><?php echo $this->Html->link(__('Go back'), array('action' => 'index')); ?></h2>
	</div>
</div>

