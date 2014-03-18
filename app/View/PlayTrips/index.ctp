<div class="playTrips index">
	<h2><?php echo __('Play Trips'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('user_id'); ?></th>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('submited'); ?></th>
			<th><?php echo $this->Paginator->sort('dataurl'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($playTrips as $playTrip): ?>
	<tr>
		<td><?php echo h($playTrip['PlayTrip']['user_id']); ?>&nbsp;</td>
		<td><?php echo h($playTrip['PlayTrip']['id']); ?>&nbsp;</td>
		<td><?php echo h($playTrip['PlayTrip']['submited']); ?>&nbsp;</td>
		<td><?php echo h($playTrip['PlayTrip']['dataurl']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $playTrip['PlayTrip']['user_id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $playTrip['PlayTrip']['user_id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $playTrip['PlayTrip']['user_id']), null, __('Are you sure you want to delete # %s?', $playTrip['PlayTrip']['user_id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Play Trip'), array('action' => 'add')); ?></li>
	</ul>
</div>
