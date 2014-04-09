<?php foreach ($files as $file) { ?>

<?php
	echo $this->Html->link(
		$file,
		array(
			'controller' => 'logs',	'action' => 'sendFile',
			$file, 'full_base' => true)
	); ?>
<?php } ?>


