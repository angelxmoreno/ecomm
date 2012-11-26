<div class="orders view">
<h2><?php  echo __('Order'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($order['Order']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($order['Order']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($order['User']['username'], array('controller' => 'users', 'action' => 'view', $order['User']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Bill To Address'); ?></dt>
		<dd>
			<?php echo $this->Html->link($order['BillToAddress']['name'], array('controller' => 'order_addresses', 'action' => 'view', $order['BillToAddress']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ship To Address'); ?></dt>
		<dd>
			<?php echo $this->Html->link($order['ShipToAddress']['name'], array('controller' => 'order_addresses', 'action' => 'view', $order['ShipToAddress']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Subtotal'); ?></dt>
		<dd>
			<?php echo h($order['Order']['subtotal']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tax Amount'); ?></dt>
		<dd>
			<?php echo h($order['Order']['tax_amount']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Shipping Amount'); ?></dt>
		<dd>
			<?php echo h($order['Order']['shipping_amount']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Payment Method Id'); ?></dt>
		<dd>
			<?php echo h($order['Order']['payment_method_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Is Paid'); ?></dt>
		<dd>
			<?php echo h($order['Order']['is_paid']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($order['Order']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($order['Order']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Order'), array('action' => 'edit', $order['Order']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Order'), array('action' => 'delete', $order['Order']['id']), null, __('Are you sure you want to delete # %s?', $order['Order']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Orders'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Order'), array('action' => 'add')); ?> </li>
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
<div class="related">
	<h3><?php echo __('Related Order Products'); ?></h3>
	<?php if (!empty($order['OrderProduct'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Order Id'); ?></th>
		<th><?php echo __('Product Id'); ?></th>
		<th><?php echo __('Quantity'); ?></th>
		<th><?php echo __('Price'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($order['OrderProduct'] as $orderProduct): ?>
		<tr>
			<td><?php echo $orderProduct['id']; ?></td>
			<td><?php echo $orderProduct['order_id']; ?></td>
			<td><?php echo $orderProduct['product_id']; ?></td>
			<td><?php echo $orderProduct['quantity']; ?></td>
			<td><?php echo $orderProduct['price']; ?></td>
			<td><?php echo $orderProduct['created']; ?></td>
			<td><?php echo $orderProduct['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'order_products', 'action' => 'view', $orderProduct['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'order_products', 'action' => 'edit', $orderProduct['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'order_products', 'action' => 'delete', $orderProduct['id']), null, __('Are you sure you want to delete # %s?', $orderProduct['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Order Product'), array('controller' => 'order_products', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
