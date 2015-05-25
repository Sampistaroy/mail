<div class="row">
    <div class="col-xs-12">
		<h2><?php echo __('Pratiquant'); ?></h2>
			<dl>
				<dt><?php echo __('Nom'); ?></dt>
				<dd>
					<?php echo h($pratiquant['Pratiquant']['nom']); ?>
					&nbsp;
				</dd>
				<dt><?php echo __('Prenom'); ?></dt>
				<dd>
					<?php echo h($pratiquant['Pratiquant']['prenom']); ?>
					&nbsp;
				</dd>
				<dt><?php echo __('Téléphone'); ?></dt>
				<dd>
					<?php echo h($pratiquant['Pratiquant']['téléphone']); ?>
					&nbsp;
				</dd>
			</dl>
		<div class="actions">
			<h3><?php echo __('Actions'); ?></h3>
			<ul>
				<li><?php echo $this->Html->link(__('Edit Pratiquant'), array('action' => 'edit', $structure_id, $pratiquant['Pratiquant']['id'])); ?> </li>
				<li><?php echo $this->Form->postLink(__('Delete Pratiquant'), array('action' => 'delete', $structure_id, $pratiquant['Pratiquant']['id']), array(), __('Are you sure you want to delete # %s?', $structure_id, $pratiquant['Pratiquant']['id'])); ?> </li>
				<li><?php echo $this->Html->link(__('List Pratiquants'), array('action' => 'index', $structure_id)); ?> </li>
				<li><?php echo $this->Html->link(__('New Pratiquant'), array('action' => 'add')); ?> </li>
				<li><?php echo $this->Html->link(__('New Planch Pratiquant Prestation'), array('controller' => 'planch_pratiquant_prestations', 'action' => 'add', $structure_id)); ?> </li>
			</ul>
		</div>
		<div class="related">
			<h3><?php echo __('Related Planch Pratiquant Prestations'); ?></h3>
			<?php if (!empty($pratiquant['PlanchPratiquantPrestation'])): ?>
			<table cellpadding = "0" cellspacing = "0">
			<tr>
				<th><?php echo __('Id'); ?></th>
				<th><?php echo __('Planch Id'); ?></th>
				<th><?php echo __('Pratiquant Id'); ?></th>
				<th><?php echo __('Prestation Id'); ?></th>
				<th><?php echo __('Structure Id'); ?></th>
				<th class="actions"><?php echo __('Actions'); ?></th>
			</tr>
			<?php foreach ($pratiquant['PlanchPratiquantPrestation'] as $planchPratiquantPrestation): ?>
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
	</div>
</div>
