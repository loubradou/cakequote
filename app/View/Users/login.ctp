<?php echo $this->Session->flash('auth'); ?>
<h2><?php echo __('Login from toilet'); ?></h2>
<?php echo $this->Form->create('User') ?>
<?php echo $this->Form->input('username') ?>
<?php echo $this->Form->input('password') ?>
<?php echo $this->Form->end('login') ?>