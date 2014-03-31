<div class="users form">
<?php echo $this->Form->create('User'); ?>
	<fieldset>
		<legend><?php echo __('Edit User'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('imei');
		echo $this->Form->input('username');
		echo $this->Form->input('email');
		echo $this->Form->input('Age');
		echo $this->Form->input('Nationality');
		echo $this->Form->input('Gender');
		echo $this->Form->input('Comment');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('User.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('User.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Play Trips'), array('controller' => 'play_trips', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Play Trip'), array('controller' => 'play_trips', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Trips'), array('controller' => 'trips', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Trip'), array('controller' => 'trips', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Trip Instances'), array('controller' => 'trip_instances', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Trip Instance'), array('controller' => 'trip_instances', 'action' => 'add')); ?> </li>
	</ul>
</div>
