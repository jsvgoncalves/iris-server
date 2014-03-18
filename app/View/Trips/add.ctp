<div class="trips form">
<?php echo $this->Form->create('Trip'); ?>
	<fieldset>
		<legend><?php echo __('Add Trip'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('start');
		echo $this->Form->input('end');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Trips'), array('action' => 'index')); ?></li>
	</ul>
</div>
