<div class="users index">
	<h2><?php echo __('Users'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('imei'); ?></th>
			<th><?php echo $this->Paginator->sort('username'); ?></th>
			<th><?php echo $this->Paginator->sort('email'); ?></th>
			<th><?php echo $this->Paginator->sort('age'); ?></th>
			<th><?php echo $this->Paginator->sort('nationality'); ?></th>
			<th><?php echo $this->Paginator->sort('gender'); ?></th>
			<th><?php echo $this->Paginator->sort('comment'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($users as $user): ?>
	<tr>
		<td><?php echo h($user['User']['id']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['imei']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['username']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['email']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['age']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['nationality']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['gender']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['comment']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $user['User']['imei'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $user['User']['imei'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $user['User']['imei']), null, __('Are you sure you want to delete # %s?', $user['User']['imei'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New User'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Play Trips'), array('controller' => 'play_trips', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Play Trip'), array('controller' => 'play_trips', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Trips'), array('controller' => 'trips', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Trip'), array('controller' => 'trips', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Trip Instances'), array('controller' => 'trip_instances', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Trip Instance'), array('controller' => 'trip_instances', 'action' => 'add')); ?> </li>
	</ul>
</div>
