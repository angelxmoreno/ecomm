<div class="productCategories index">
	<h2><?php echo __('Product Categories'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th><?php echo $this->Paginator->sort('short_description'); ?></th>
			<th><?php echo $this->Paginator->sort('long_description'); ?></th>
			<th><?php echo $this->Paginator->sort('parent_id'); ?></th>
			<th><?php echo $this->Paginator->sort('lft'); ?></th>
			<th><?php echo $this->Paginator->sort('rght'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
	foreach ($productCategories as $productCategory): ?>
	<tr>
		<td><?php echo h($productCategory['ProductCategory']['id']); ?>&nbsp;</td>
		<td><?php echo h($productCategory['ProductCategory']['name']); ?>&nbsp;</td>
		<td><?php echo h($productCategory['ProductCategory']['short_description']); ?>&nbsp;</td>
		<td><?php echo h($productCategory['ProductCategory']['long_description']); ?>&nbsp;</td>
		<td><?php echo h($productCategory['ProductCategory']['parent_id']); ?>&nbsp;</td>
		<td><?php echo h($productCategory['ProductCategory']['lft']); ?>&nbsp;</td>
		<td><?php echo h($productCategory['ProductCategory']['rght']); ?>&nbsp;</td>
		<td><?php echo h($productCategory['ProductCategory']['created']); ?>&nbsp;</td>
		<td><?php echo h($productCategory['ProductCategory']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $productCategory['ProductCategory']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $productCategory['ProductCategory']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $productCategory['ProductCategory']['id']), null, __('Are you sure you want to delete # %s?', $productCategory['ProductCategory']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Product Category'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Products'), array('controller' => 'products', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Product'), array('controller' => 'products', 'action' => 'add')); ?> </li>
	</ul>
</div>
