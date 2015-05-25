<div class="receptacles view">
<h2><?php echo __('Receptacle'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($receptacle['Receptacle']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Receptaclename'); ?></dt>
		<dd>
			<?php echo h($receptacle['Receptacle']['receptaclename']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nb Ticket'); ?></dt>
		<dd>
			<?php echo h($receptacle['Receptacle']['nb_ticket']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nb Place'); ?></dt>
		<dd>
			<?php echo h($receptacle['Receptacle']['nb_place']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Structure'); ?></dt>
		<dd>
			<?php echo $this->Html->link($receptacle['Structure']['id'], array('controller' => 'structures', 'action' => 'view', $receptacle['Structure']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Minute'); ?></dt>
		<dd>
			<?php echo h($receptacle['Receptacle']['minute']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Heure'); ?></dt>
		<dd>
			<?php echo h($receptacle['Receptacle']['heure']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Jour'); ?></dt>
		<dd>
			<?php echo h($receptacle['Receptacle']['jour']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Mois'); ?></dt>
		<dd>
			<?php echo h($receptacle['Receptacle']['mois']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Annee'); ?></dt>
		<dd>
			<?php echo h($receptacle['Receptacle']['annee']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Receptacle'), array('action' => 'edit', $receptacle['Receptacle']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Receptacle'), array('action' => 'delete', $receptacle['Receptacle']['id']), array(), __('Are you sure you want to delete # %s?', $receptacle['Receptacle']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Receptacles'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Receptacle'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Structures'), array('controller' => 'structures', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Structure'), array('controller' => 'structures', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Planches'), array('controller' => 'planches', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Planch'), array('controller' => 'planches', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Planches'); ?></h3>
	<?php if (!empty($receptacle['Planch'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Debut'); ?></th>
		<th><?php echo __('Fin'); ?></th>
		<th><?php echo __('Receptacle Id'); ?></th>
		<th><?php echo __('Structure Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($receptacle['Planch'] as $planch): ?>
		<tr>
			<td><?php echo $planch['id']; ?></td>
			<td><?php echo $planch['debut']; ?></td>
			<td><?php echo $planch['fin']; ?></td>
			<td><?php echo $planch['receptacle_id']; ?></td>
			<td><?php echo $planch['structure_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'planches', 'action' => 'view', $planch['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'planches', 'action' => 'edit', $planch['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'planches', 'action' => 'delete', $planch['id']), array(), __('Are you sure you want to delete # %s?', $planch['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Planch'), array('controller' => 'planches', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
