<div class="planchesPratiquantsPrestations index">
	<h2><?php echo __('Planches Pratiquants Prestations'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('planch_id'); ?></th>
			<th><?php echo $this->Paginator->sort('pratiquant_id'); ?></th>
			<th><?php echo $this->Paginator->sort('prestation_id'); ?></th>
			<th><?php echo $this->Paginator->sort('structure_id'); ?></th>
			<th><?php echo $this->Paginator->sort('prestationname'); ?></th>
			<th><?php echo $this->Paginator->sort('description'); ?></th>
			<th><?php echo $this->Paginator->sort('prix'); ?></th>
			<th><?php echo $this->Paginator->sort('nb_places'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($planchesPratiquantsPrestations as $planchesPratiquantsPrestation): ?>
	<tr>
		<td><?php echo h($planchesPratiquantsPrestation['PlanchesPratiquantsPrestation']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($planchesPratiquantsPrestation['Planch']['id'], array('controller' => 'planches', 'action' => 'view', $planchesPratiquantsPrestation['Planch']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($planchesPratiquantsPrestation['Pratiquant']['id'], array('controller' => 'pratiquants', 'action' => 'view', $planchesPratiquantsPrestation['Pratiquant']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($planchesPratiquantsPrestation['Prestation']['id'], array('controller' => 'prestations', 'action' => 'view', $planchesPratiquantsPrestation['Prestation']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($planchesPratiquantsPrestation['Structure']['id'], array('controller' => 'structures', 'action' => 'view', $planchesPratiquantsPrestation['Structure']['id'])); ?>
		</td>
		<td><?php echo h($planchesPratiquantsPrestation['PlanchesPratiquantsPrestation']['prestationname']); ?>&nbsp;</td>
		<td><?php echo h($planchesPratiquantsPrestation['PlanchesPratiquantsPrestation']['description']); ?>&nbsp;</td>
		<td><?php echo h($planchesPratiquantsPrestation['PlanchesPratiquantsPrestation']['prix']); ?>&nbsp;</td>
		<td><?php echo h($planchesPratiquantsPrestation['PlanchesPratiquantsPrestation']['nb_places']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $planchesPratiquantsPrestation['PlanchesPratiquantsPrestation']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $planchesPratiquantsPrestation['PlanchesPratiquantsPrestation']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $planchesPratiquantsPrestation['PlanchesPratiquantsPrestation']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $planchesPratiquantsPrestation['PlanchesPratiquantsPrestation']['id']))); ?>
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
		<li><?php echo $this->Html->link(__('New Planches Pratiquants Prestation'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Planches'), array('controller' => 'planches', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Planch'), array('controller' => 'planches', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Pratiquants'), array('controller' => 'pratiquants', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Pratiquant'), array('controller' => 'pratiquants', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Prestations'), array('controller' => 'prestations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Prestation'), array('controller' => 'prestations', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Structures'), array('controller' => 'structures', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Structure'), array('controller' => 'structures', 'action' => 'add')); ?> </li>
	</ul>
</div>
