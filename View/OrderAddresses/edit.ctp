<div class="orderAddresses form">
<?php echo $this->Form->create('OrderAddress'); ?>
	<fieldset>
		<legend><?php echo __('Edit Order Address'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('user_id');
		echo $this->Form->input('name');
		echo $this->Form->input('street_address');
		echo $this->Form->input('unit_number');
		echo $this->Form->input('city');
		echo $this->Form->input('state');
		echo $this->Form->input('zip_code');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('OrderAddress.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('OrderAddress.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Order Addresses'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Orders'), array('controller' => 'orders', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Billed Order'), array('controller' => 'orders', 'action' => 'add')); ?> </li>
	</ul>
</div>
