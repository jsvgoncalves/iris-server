<div class="users view">
<h2><?php echo __('User'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($user['User']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Username'); ?></dt>
		<dd>
			<?php echo h($user['User']['username']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Email'); ?></dt>
		<dd>
			<?php echo h($user['User']['email']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Age'); ?></dt>
		<dd>
			<?php echo h($user['User']['Age']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nationality'); ?></dt>
		<dd>
			<?php echo h($user['User']['Nationality']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Gender'); ?></dt>
		<dd>
			<?php echo h($user['User']['Gender']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Comment'); ?></dt>
		<dd>
			<?php echo h($user['User']['Comment']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit User'), array('action' => 'edit', $user['User']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete User'), array('action' => 'delete', $user['User']['id']), null, __('Are you sure you want to delete # %s?', $user['User']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Play Trips'), array('controller' => 'play_trips', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Play Trip'), array('controller' => 'play_trips', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Trips'), array('controller' => 'trips', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Trip'), array('controller' => 'trips', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Trip Instances'), array('controller' => 'trip_instances', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Trip Instance'), array('controller' => 'trip_instances', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Play Trips'); ?></h3>
	<?php if (!empty($user['PlayTrip'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Submited'); ?></th>
		<th><?php echo __('Dataurl'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($user['PlayTrip'] as $playTrip): ?>
		<tr>
			<td><?php echo $playTrip['user_id']; ?></td>
			<td><?php echo $playTrip['id']; ?></td>
			<td><?php echo $playTrip['submited']; ?></td>
			<td><?php echo $playTrip['dataurl']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'play_trips', 'action' => 'view', $playTrip['user_id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'play_trips', 'action' => 'edit', $playTrip['user_id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'play_trips', 'action' => 'delete', $playTrip['user_id']), null, __('Are you sure you want to delete # %s?', $playTrip['user_id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Play Trip'), array('controller' => 'play_trips', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Trips'); ?></h3>
	<?php if (!empty($user['Trip'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Start'); ?></th>
		<th><?php echo __('End'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($user['Trip'] as $trip): ?>
		<tr>
			<td><?php echo $trip['user_id']; ?></td>
			<td><?php echo $trip['id']; ?></td>
			<td><?php echo $trip['start']; ?></td>
			<td><?php echo $trip['end']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'trips', 'action' => 'view', $trip['user_id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'trips', 'action' => 'edit', $trip['user_id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'trips', 'action' => 'delete', $trip['user_id']), null, __('Are you sure you want to delete # %s?', $trip['user_id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Trip'), array('controller' => 'trips', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Trip Instances'); ?></h3>
	<?php if (!empty($user['TripInstance'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Trip Id'); ?></th>
		<th><?php echo __('Timeinstance'); ?></th>
		<th><?php echo __('Lat'); ?></th>
		<th><?php echo __('Long'); ?></th>
		<th><?php echo __('Alt'); ?></th>
		<th><?php echo __('Speed'); ?></th>
		<th><?php echo __('MaxVelocityAllowed'); ?></th>
		<th><?php echo __('Valid'); ?></th>
		<th><?php echo __('Motive'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($user['TripInstance'] as $tripInstance): ?>
		<tr>
			<td><?php echo $tripInstance['user_id']; ?></td>
			<td><?php echo $tripInstance['trip_id']; ?></td>
			<td><?php echo $tripInstance['timeinstance']; ?></td>
			<td><?php echo $tripInstance['lat']; ?></td>
			<td><?php echo $tripInstance['long']; ?></td>
			<td><?php echo $tripInstance['alt']; ?></td>
			<td><?php echo $tripInstance['speed']; ?></td>
			<td><?php echo $tripInstance['maxVelocityAllowed']; ?></td>
			<td><?php echo $tripInstance['valid']; ?></td>
			<td><?php echo $tripInstance['motive']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'trip_instances', 'action' => 'view', $tripInstance['user_id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'trip_instances', 'action' => 'edit', $tripInstance['user_id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'trip_instances', 'action' => 'delete', $tripInstance['user_id']), null, __('Are you sure you want to delete # %s?', $tripInstance['user_id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Trip Instance'), array('controller' => 'trip_instances', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
