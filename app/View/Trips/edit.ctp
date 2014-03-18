<div class="trips form">
<?php echo $this->Form->create('Trip'); ?>
	<fieldset>
		<legend><?php echo __('Edit Trip'); ?></legend>
	<?php
		echo $this->Form->input('user_id');
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

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Trip.user_id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Trip.user_id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Trips'), array('action' => 'index')); ?></li>
	</ul>
</div>
