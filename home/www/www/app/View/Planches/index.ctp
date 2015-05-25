<div class="planches index">
	<h2><?php echo __('Planches'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('debut'); ?></th>
			<th><?php echo $this->Paginator->sort('fin'); ?></th>
			<th><?php echo $this->Paginator->sort('receptacle_id'); ?></th>
			<th><?php echo $this->Paginator->sort('structure_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($planches as $planch): ?>
	<tr>
		<td><?php echo h($planch['Planch']['id']); ?>&nbsp;</td>
		<td><?php echo h($planch['Planch']['debut']); ?>&nbsp;</td>
		<td><?php echo h($planch['Planch']['fin']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($planch['Receptacle']['id'], array('controller' => 'receptacles', 'action' => 'view', $planch['Receptacle']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($planch['Structure']['id'], array('controller' => 'structures', 'action' => 'view', $planch['Structure']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $planch['Planch']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $planch['Planch']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $planch['Planch']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $planch['Planch']['id']))); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
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
		<li><?php echo $this->Html->link(__('New Planch'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Receptacles'), array('controller' => 'receptacles', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Receptacle'), array('controller' => 'receptacles', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Structures'), array('controller' => 'structures', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Structure'), array('controller' => 'structures', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Planch Pratiquant Prestations'), array('controller' => 'planch_pratiquant_prestations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Planch Pratiquant Prestation'), array('controller' => 'planch_pratiquant_prestations', 'action' => 'add')); ?> </li>
	</ul>
</div>
