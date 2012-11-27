<div class="productCategories index">
	<h2><?php echo __('Product Categories'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th><?php echo $this->Paginator->sort('short_description'); ?></th>
			<th><?php echo $this->Paginator->sort('parent_id'); ?></th>
	</tr>
	<?php
	foreach ($productCategories as $productCategory): ?>
	<tr>
		<td><?=$this->Html->link($productCategory['ProductCategory']['name'], array(
                            'plugin'=>'ecomm',
                            'controller'=>'product_categories',
                            'action'=>'view',
                            $productCategory['ProductCategory']['id']))?></td>
		<td><?php echo h($productCategory['ProductCategory']['short_description']); ?>&nbsp;</td>
		<td><?=($productCategory['ParentCategory']['name']) ? $productCategory['ParentCategory']['name'] : ''?>&nbsp;</td>
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
		<li><?php echo $this->Html->link(__('List Products'), array('controller' => 'products', 'action' => 'index')); ?> </li>
	</ul>
</div>
