<div class="trips form">
<?php echo $this->Form->create('Trip', array('type' => 'file')); ?>
	<fieldset>
		<legend><?php echo __('Add Trip'); ?></legend>
	<?php
		echo $this->Form->input('user_id');
		echo $this->Form->input('start');
		echo $this->Form->input('end');
		echo $this->Form->file('submittedfile');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Trips'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
