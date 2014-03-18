<div class="playTrips form">
<?php echo $this->Form->create('PlayTrip'); ?>
	<fieldset>
		<legend><?php echo __('Add Play Trip'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('submited');
		echo $this->Form->input('dataurl');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Play Trips'), array('action' => 'index')); ?></li>
	</ul>
</div>
