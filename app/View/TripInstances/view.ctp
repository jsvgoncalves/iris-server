<div class="tripInstances view">
<h2><?php echo __('Trip Instance'); ?></h2>
	<dl>
		<dt><?php echo __('User Id'); ?></dt>
		<dd>
			<?php echo h($tripInstance['TripInstance']['user_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Trip'); ?></dt>
		<dd>
			<?php echo $this->Html->link($tripInstance['Trip']['user_id'], array('controller' => 'trips', 'action' => 'view', $tripInstance['Trip']['user_id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Timeinstance'); ?></dt>
		<dd>
			<?php echo h($tripInstance['TripInstance']['timeinstance']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Lat'); ?></dt>
		<dd>
			<?php echo h($tripInstance['TripInstance']['lat']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Long'); ?></dt>
		<dd>
			<?php echo h($tripInstance['TripInstance']['long']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Alt'); ?></dt>
		<dd>
			<?php echo h($tripInstance['TripInstance']['alt']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Speed'); ?></dt>
		<dd>
			<?php echo h($tripInstance['TripInstance']['speed']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('MaxVelocityAllowed'); ?></dt>
		<dd>
			<?php echo h($tripInstance['TripInstance']['maxVelocityAllowed']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Valid'); ?></dt>
		<dd>
			<?php echo h($tripInstance['TripInstance']['valid']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Motive'); ?></dt>
		<dd>
			<?php echo h($tripInstance['TripInstance']['motive']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Trip Instance'), array('action' => 'edit', $tripInstance['TripInstance']['user_id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Trip Instance'), array('action' => 'delete', $tripInstance['TripInstance']['user_id']), null, __('Are you sure you want to delete # %s?', $tripInstance['TripInstance']['user_id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Trip Instances'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Trip Instance'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Trips'), array('controller' => 'trips', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Trip'), array('controller' => 'trips', 'action' => 'add')); ?> </li>
	</ul>
</div>
