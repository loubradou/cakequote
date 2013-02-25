<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		admin| <?php echo $title_for_layout; ?>
	</title>
	<?php
		echo $this->Html->meta('icon');

		echo $this->Html->css('cake.generic');
		echo $this->Html->css('style');

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
</head>
<body class="admin">
	<div id="container">
		<div id="header" class="admin">
			<h1><?php echo $this->Html->link('Poop thoughts', '/'); ?></h1>
		</div>
		<div id="content" class="admin">

			<?php echo $this->Session->flash(); ?>

			<?php echo $this->fetch('content'); ?>
		</div>
		<div id="footer" class="admin">
		</div>
	</div>
</body>
</html>
