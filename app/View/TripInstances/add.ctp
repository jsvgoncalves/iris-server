<div class="tripInstances form">
<?php echo $this->Form->create('TripInstance'); ?>
	<fieldset>
		<legend><?php echo __('Add Trip Instance'); ?></legend>
	<?php
		echo $this->Form->input('trip_id');
		echo $this->Form->input('timeinstance');
		echo $this->Form->input('lat');
		echo $this->Form->input('long');
		echo $this->Form->input('alt');
		echo $this->Form->input('speed');
		echo $this->Form->input('maxVelocityAllowed');
		echo $this->Form->input('valid');
		echo $this->Form->input('motive');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Trip Instances'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Trips'), array('controller' => 'trips', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Trip'), array('controller' => 'trips', 'action' => 'add')); ?> </li>
	</ul>
</div>
