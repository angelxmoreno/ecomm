<div class="orderAddresses view">
<h2><?php  echo __('Order Address'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($orderAddress['OrderAddress']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($orderAddress['User']['username'], array('controller' => 'users', 'action' => 'view', $orderAddress['User']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($orderAddress['OrderAddress']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Street Address'); ?></dt>
		<dd>
			<?php echo h($orderAddress['OrderAddress']['street_address']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Unit Number'); ?></dt>
		<dd>
			<?php echo h($orderAddress['OrderAddress']['unit_number']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('City'); ?></dt>
		<dd>
			<?php echo h($orderAddress['OrderAddress']['city']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('State'); ?></dt>
		<dd>
			<?php echo h($orderAddress['OrderAddress']['state']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Zip Code'); ?></dt>
		<dd>
			<?php echo h($orderAddress['OrderAddress']['zip_code']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($orderAddress['OrderAddress']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($orderAddress['OrderAddress']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Order Address'), array('action' => 'edit', $orderAddress['OrderAddress']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Order Address'), array('action' => 'delete', $orderAddress['OrderAddress']['id']), null, __('Are you sure you want to delete # %s?', $orderAddress['OrderAddress']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Order Addresses'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Order Address'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Orders'), array('controller' => 'orders', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Billed Order'), array('controller' => 'orders', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Orders'); ?></h3>
	<?php if (!empty($orderAddress['BilledOrder'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Bill To Address Id'); ?></th>
		<th><?php echo __('Ship To Address Id'); ?></th>
		<th><?php echo __('Subtotal'); ?></th>
		<th><?php echo __('Tax Amount'); ?></th>
		<th><?php echo __('Shipping Amount'); ?></th>
		<th><?php echo __('Payment Method Id'); ?></th>
		<th><?php echo __('Is Paid'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($orderAddress['BilledOrder'] as $billedOrder): ?>
		<tr>
			<td><?php echo $billedOrder['id']; ?></td>
			<td><?php echo $billedOrder['name']; ?></td>
			<td><?php echo $billedOrder['user_id']; ?></td>
			<td><?php echo $billedOrder['bill_to_address_id']; ?></td>
			<td><?php echo $billedOrder['ship_to_address_id']; ?></td>
			<td><?php echo $billedOrder['subtotal']; ?></td>
			<td><?php echo $billedOrder['tax_amount']; ?></td>
			<td><?php echo $billedOrder['shipping_amount']; ?></td>
			<td><?php echo $billedOrder['payment_method_id']; ?></td>
			<td><?php echo $billedOrder['is_paid']; ?></td>
			<td><?php echo $billedOrder['created']; ?></td>
			<td><?php echo $billedOrder['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'orders', 'action' => 'view', $billedOrder['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'orders', 'action' => 'edit', $billedOrder['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'orders', 'action' => 'delete', $billedOrder['id']), null, __('Are you sure you want to delete # %s?', $billedOrder['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Billed Order'), array('controller' => 'orders', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Orders'); ?></h3>
	<?php if (!empty($orderAddress['ShippedOrder'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Bill To Address Id'); ?></th>
		<th><?php echo __('Ship To Address Id'); ?></th>
		<th><?php echo __('Subtotal'); ?></th>
		<th><?php echo __('Tax Amount'); ?></th>
		<th><?php echo __('Shipping Amount'); ?></th>
		<th><?php echo __('Payment Method Id'); ?></th>
		<th><?php echo __('Is Paid'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($orderAddress['ShippedOrder'] as $shippedOrder): ?>
		<tr>
			<td><?php echo $shippedOrder['id']; ?></td>
			<td><?php echo $shippedOrder['name']; ?></td>
			<td><?php echo $shippedOrder['user_id']; ?></td>
			<td><?php echo $shippedOrder['bill_to_address_id']; ?></td>
			<td><?php echo $shippedOrder['ship_to_address_id']; ?></td>
			<td><?php echo $shippedOrder['subtotal']; ?></td>
			<td><?php echo $shippedOrder['tax_amount']; ?></td>
			<td><?php echo $shippedOrder['shipping_amount']; ?></td>
			<td><?php echo $shippedOrder['payment_method_id']; ?></td>
			<td><?php echo $shippedOrder['is_paid']; ?></td>
			<td><?php echo $shippedOrder['created']; ?></td>
			<td><?php echo $shippedOrder['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'orders', 'action' => 'view', $shippedOrder['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'orders', 'action' => 'edit', $shippedOrder['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'orders', 'action' => 'delete', $shippedOrder['id']), null, __('Are you sure you want to delete # %s?', $shippedOrder['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Shipped Order'), array('controller' => 'orders', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
