<div class="productCategories view">
<h2><?php  echo __('Product Category'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($productCategory['ProductCategory']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($productCategory['ProductCategory']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Short Description'); ?></dt>
		<dd>
			<?php echo h($productCategory['ProductCategory']['short_description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Long Description'); ?></dt>
		<dd>
			<?php echo h($productCategory['ProductCategory']['long_description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Parent Id'); ?></dt>
		<dd>
			<?php echo h($productCategory['ProductCategory']['parent_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Lft'); ?></dt>
		<dd>
			<?php echo h($productCategory['ProductCategory']['lft']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Rght'); ?></dt>
		<dd>
			<?php echo h($productCategory['ProductCategory']['rght']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($productCategory['ProductCategory']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($productCategory['ProductCategory']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Product Category'), array('action' => 'edit', $productCategory['ProductCategory']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Product Category'), array('action' => 'delete', $productCategory['ProductCategory']['id']), null, __('Are you sure you want to delete # %s?', $productCategory['ProductCategory']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Product Categories'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Product Category'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Products'), array('controller' => 'products', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Product'), array('controller' => 'products', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Products'); ?></h3>
	<?php if (!empty($productCategory['Product'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Short Description'); ?></th>
		<th><?php echo __('Long Description'); ?></th>
		<th><?php echo __('Price'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($productCategory['Product'] as $product): ?>
		<tr>
			<td><?php echo $product['id']; ?></td>
			<td><?php echo $product['name']; ?></td>
			<td><?php echo $product['short_description']; ?></td>
			<td><?php echo $product['long_description']; ?></td>
			<td><?php echo $product['price']; ?></td>
			<td><?php echo $product['created']; ?></td>
			<td><?php echo $product['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'products', 'action' => 'view', $product['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'products', 'action' => 'edit', $product['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'products', 'action' => 'delete', $product['id']), null, __('Are you sure you want to delete # %s?', $product['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Product'), array('controller' => 'products', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
