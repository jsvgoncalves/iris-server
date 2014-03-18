<div class="playTrips view">
<h2><?php echo __('Play Trip'); ?></h2>
	<dl>
		<dt><?php echo __('User Id'); ?></dt>
		<dd>
			<?php echo h($playTrip['PlayTrip']['user_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($playTrip['PlayTrip']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Submited'); ?></dt>
		<dd>
			<?php echo h($playTrip['PlayTrip']['submited']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Dataurl'); ?></dt>
		<dd>
			<?php echo h($playTrip['PlayTrip']['dataurl']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Play Trip'), array('action' => 'edit', $playTrip['PlayTrip']['user_id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Play Trip'), array('action' => 'delete', $playTrip['PlayTrip']['user_id']), null, __('Are you sure you want to delete # %s?', $playTrip['PlayTrip']['user_id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Play Trips'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Play Trip'), array('action' => 'add')); ?> </li>
	</ul>
</div>
