<div class="orders index">
	<h2><?php echo __('Orders'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th><?php echo $this->Paginator->sort('user_id'); ?></th>
			<th><?php echo $this->Paginator->sort('bill_to_address_id'); ?></th>
			<th><?php echo $this->Paginator->sort('ship_to_address_id'); ?></th>
			<th><?php echo $this->Paginator->sort('subtotal'); ?></th>
			<th><?php echo $this->Paginator->sort('tax_amount'); ?></th>
			<th><?php echo $this->Paginator->sort('shipping_amount'); ?></th>
			<th><?php echo $this->Paginator->sort('payment_method_id'); ?></th>
			<th><?php echo $this->Paginator->sort('is_paid'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
	foreach ($orders as $order): ?>
	<tr>
		<td><?php echo h($order['Order']['id']); ?>&nbsp;</td>
		<td><?php echo h($order['Order']['name']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($order['User']['username'], array('controller' => 'users', 'action' => 'view', $order['User']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($order['BillToAddress']['name'], array('controller' => 'order_addresses', 'action' => 'view', $order['BillToAddress']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($order['ShipToAddress']['name'], array('controller' => 'order_addresses', 'action' => 'view', $order['ShipToAddress']['id'])); ?>
		</td>
		<td><?php echo h($order['Order']['subtotal']); ?>&nbsp;</td>
		<td><?php echo h($order['Order']['tax_amount']); ?>&nbsp;</td>
		<td><?php echo h($order['Order']['shipping_amount']); ?>&nbsp;</td>
		<td><?php echo h($order['Order']['payment_method_id']); ?>&nbsp;</td>
		<td><?php echo h($order['Order']['is_paid']); ?>&nbsp;</td>
		<td><?php echo h($order['Order']['created']); ?>&nbsp;</td>
		<td><?php echo h($order['Order']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $order['Order']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $order['Order']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $order['Order']['id']), null, __('Are you sure you want to delete # %s?', $order['Order']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Order'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Order Addresses'), array('controller' => 'order_addresses', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Bill To Address'), array('controller' => 'order_addresses', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Payment Methods'), array('controller' => 'payment_methods', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Paymnet Method'), array('controller' => 'payment_methods', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Order Products'), array('controller' => 'order_products', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Order Product'), array('controller' => 'order_products', 'action' => 'add')); ?> </li>
	</ul>
</div>
