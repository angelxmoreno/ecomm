<div class="paymentMethods view">
<h2><?php  echo __('Payment Method'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($paymentMethod['PaymentMethod']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($paymentMethod['PaymentMethod']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($paymentMethod['PaymentMethod']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($paymentMethod['PaymentMethod']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Payment Method'), array('action' => 'edit', $paymentMethod['PaymentMethod']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Payment Method'), array('action' => 'delete', $paymentMethod['PaymentMethod']['id']), null, __('Are you sure you want to delete # %s?', $paymentMethod['PaymentMethod']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Payment Methods'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Payment Method'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Orders'), array('controller' => 'orders', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Order'), array('controller' => 'orders', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Orders'); ?></h3>
	<?php if (!empty($paymentMethod['Order'])): ?>
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
		foreach ($paymentMethod['Order'] as $order): ?>
		<tr>
			<td><?php echo $order['id']; ?></td>
			<td><?php echo $order['name']; ?></td>
			<td><?php echo $order['user_id']; ?></td>
			<td><?php echo $order['bill_to_address_id']; ?></td>
			<td><?php echo $order['ship_to_address_id']; ?></td>
			<td><?php echo $order['subtotal']; ?></td>
			<td><?php echo $order['tax_amount']; ?></td>
			<td><?php echo $order['shipping_amount']; ?></td>
			<td><?php echo $order['payment_method_id']; ?></td>
			<td><?php echo $order['is_paid']; ?></td>
			<td><?php echo $order['created']; ?></td>
			<td><?php echo $order['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'orders', 'action' => 'view', $order['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'orders', 'action' => 'edit', $order['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'orders', 'action' => 'delete', $order['id']), null, __('Are you sure you want to delete # %s?', $order['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Order'), array('controller' => 'orders', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
