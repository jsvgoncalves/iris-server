<div class="tripInstances index">
	<h2><?php echo __('Trip Instances'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('user_id'); ?></th>
			<th><?php echo $this->Paginator->sort('trip_id'); ?></th>
			<th><?php echo $this->Paginator->sort('timeinstance'); ?></th>
			<th><?php echo $this->Paginator->sort('lat'); ?></th>
			<th><?php echo $this->Paginator->sort('long'); ?></th>
			<th><?php echo $this->Paginator->sort('alt'); ?></th>
			<th><?php echo $this->Paginator->sort('speed'); ?></th>
			<th><?php echo $this->Paginator->sort('maxVelocityAllowed'); ?></th>
			<th><?php echo $this->Paginator->sort('valid'); ?></th>
			<th><?php echo $this->Paginator->sort('motive'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($tripInstances as $tripInstance): ?>
	<tr>
		<td><?php echo h($tripInstance['TripInstance']['user_id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($tripInstance['Trip']['user_id'], array('controller' => 'trips', 'action' => 'view', $tripInstance['Trip']['user_id'])); ?>
		</td>
		<td><?php echo h($tripInstance['TripInstance']['timeinstance']); ?>&nbsp;</td>
		<td><?php echo h($tripInstance['TripInstance']['lat']); ?>&nbsp;</td>
		<td><?php echo h($tripInstance['TripInstance']['long']); ?>&nbsp;</td>
		<td><?php echo h($tripInstance['TripInstance']['alt']); ?>&nbsp;</td>
		<td><?php echo h($tripInstance['TripInstance']['speed']); ?>&nbsp;</td>
		<td><?php echo h($tripInstance['TripInstance']['maxVelocityAllowed']); ?>&nbsp;</td>
		<td><?php echo h($tripInstance['TripInstance']['valid']); ?>&nbsp;</td>
		<td><?php echo h($tripInstance['TripInstance']['motive']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $tripInstance['TripInstance']['user_id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $tripInstance['TripInstance']['user_id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $tripInstance['TripInstance']['user_id']), null, __('Are you sure you want to delete # %s?', $tripInstance['TripInstance']['user_id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Trip Instance'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Trips'), array('controller' => 'trips', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Trip'), array('controller' => 'trips', 'action' => 'add')); ?> </li>
	</ul>
</div>
