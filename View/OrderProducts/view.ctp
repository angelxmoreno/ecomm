<div class="orderProducts view">
<h2><?php  echo __('Order Product'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($orderProduct['OrderProduct']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Order'); ?></dt>
		<dd>
			<?php echo $this->Html->link($orderProduct['Order']['name'], array('controller' => 'orders', 'action' => 'view', $orderProduct['Order']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Product'); ?></dt>
		<dd>
			<?php echo $this->Html->link($orderProduct['Product']['name'], array('controller' => 'products', 'action' => 'view', $orderProduct['Product']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Quantity'); ?></dt>
		<dd>
			<?php echo h($orderProduct['OrderProduct']['quantity']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Price'); ?></dt>
		<dd>
			<?php echo h($orderProduct['OrderProduct']['price']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($orderProduct['OrderProduct']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($orderProduct['OrderProduct']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Order Product'), array('action' => 'edit', $orderProduct['OrderProduct']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Order Product'), array('action' => 'delete', $orderProduct['OrderProduct']['id']), null, __('Are you sure you want to delete # %s?', $orderProduct['OrderProduct']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Order Products'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Order Product'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Orders'), array('controller' => 'orders', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Order'), array('controller' => 'orders', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Products'), array('controller' => 'products', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Product'), array('controller' => 'products', 'action' => 'add')); ?> </li>
	</ul>
</div>
