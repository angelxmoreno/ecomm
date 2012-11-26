<div class="orderAddresses index">
	<h2><?php echo __('Order Addresses'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('user_id'); ?></th>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th><?php echo $this->Paginator->sort('street_address'); ?></th>
			<th><?php echo $this->Paginator->sort('unit_number'); ?></th>
			<th><?php echo $this->Paginator->sort('city'); ?></th>
			<th><?php echo $this->Paginator->sort('state'); ?></th>
			<th><?php echo $this->Paginator->sort('zip_code'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
	foreach ($orderAddresses as $orderAddress): ?>
	<tr>
		<td><?php echo h($orderAddress['OrderAddress']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($orderAddress['User']['username'], array('controller' => 'users', 'action' => 'view', $orderAddress['User']['id'])); ?>
		</td>
		<td><?php echo h($orderAddress['OrderAddress']['name']); ?>&nbsp;</td>
		<td><?php echo h($orderAddress['OrderAddress']['street_address']); ?>&nbsp;</td>
		<td><?php echo h($orderAddress['OrderAddress']['unit_number']); ?>&nbsp;</td>
		<td><?php echo h($orderAddress['OrderAddress']['city']); ?>&nbsp;</td>
		<td><?php echo h($orderAddress['OrderAddress']['state']); ?>&nbsp;</td>
		<td><?php echo h($orderAddress['OrderAddress']['zip_code']); ?>&nbsp;</td>
		<td><?php echo h($orderAddress['OrderAddress']['created']); ?>&nbsp;</td>
		<td><?php echo h($orderAddress['OrderAddress']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $orderAddress['OrderAddress']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $orderAddress['OrderAddress']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $orderAddress['OrderAddress']['id']), null, __('Are you sure you want to delete # %s?', $orderAddress['OrderAddress']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Order Address'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Orders'), array('controller' => 'orders', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Billed Order'), array('controller' => 'orders', 'action' => 'add')); ?> </li>
	</ul>
</div>
