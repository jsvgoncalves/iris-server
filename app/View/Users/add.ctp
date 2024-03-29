<div class="users form">
<?php echo $this->Form->create('User'); ?>
	<fieldset>
		<legend><?php echo __('Add User'); ?></legend>
	<?php
		echo $this->Form->input('imei', array('type' => 'text'));
		echo $this->Form->input('username');
		echo $this->Form->input('email');
		echo $this->Form->input('age');
		echo $this->Form->input('nationality');
		echo $this->Form->input('gender');
		echo $this->Form->input('comment');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Users'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Play Trips'), array('controller' => 'play_trips', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Play Trip'), array('controller' => 'play_trips', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Trips'), array('controller' => 'trips', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Trip'), array('controller' => 'trips', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Trip Instances'), array('controller' => 'trip_instances', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Trip Instance'), array('controller' => 'trip_instances', 'action' => 'add')); ?> </li>
	</ul>
</div>
