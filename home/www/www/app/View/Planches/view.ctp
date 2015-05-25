<div class="planches view">
<h2><?php echo __('Planch'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($planch['Planch']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Debut'); ?></dt>
		<dd>
			<?php echo h($planch['Planch']['debut']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fin'); ?></dt>
		<dd>
			<?php echo h($planch['Planch']['fin']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Receptacle'); ?></dt>
		<dd>
			<?php echo $this->Html->link($planch['Receptacle']['id'], array('controller' => 'receptacles', 'action' => 'view', $planch['Receptacle']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Structure'); ?></dt>
		<dd>
			<?php echo $this->Html->link($planch['Structure']['id'], array('controller' => 'structures', 'action' => 'view', $planch['Structure']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Planch'), array('action' => 'edit', $planch['Planch']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Planch'), array('action' => 'delete', $planch['Planch']['id']), array(), __('Are you sure you want to delete # %s?', $planch['Planch']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Planches'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Planch'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Receptacles'), array('controller' => 'receptacles', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Receptacle'), array('controller' => 'receptacles', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Structures'), array('controller' => 'structures', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Structure'), array('controller' => 'structures', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Planch Pratiquant Prestations'), array('controller' => 'planch_pratiquant_prestations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Planch Pratiquant Prestation'), array('controller' => 'planch_pratiquant_prestations', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Planch Pratiquant Prestations'); ?></h3>
	<?php if (!empty($planch['PlanchPratiquantPrestation'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Planch Id'); ?></th>
		<th><?php echo __('Pratiquant Id'); ?></th>
		<th><?php echo __('Prestation Id'); ?></th>
		<th><?php echo __('Structure Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($planch['PlanchPratiquantPrestation'] as $planchPratiquantPrestation): ?>
		<tr>
			<td><?php echo $planchPratiquantPrestation['id']; ?></td>
			<td><?php echo $planchPratiquantPrestation['planch_id']; ?></td>
			<td><?php echo $planchPratiquantPrestation['pratiquant_id']; ?></td>
			<td><?php echo $planchPratiquantPrestation['prestation_id']; ?></td>
			<td><?php echo $planchPratiquantPrestation['structure_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'planch_pratiquant_prestations', 'action' => 'view', $planchPratiquantPrestation['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'planch_pratiquant_prestations', 'action' => 'edit', $planchPratiquantPrestation['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'planch_pratiquant_prestations', 'action' => 'delete', $planchPratiquantPrestation['id']), array(), __('Are you sure you want to delete # %s?', $planchPratiquantPrestation['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Planch Pratiquant Prestation'), array('controller' => 'planch_pratiquant_prestations', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
