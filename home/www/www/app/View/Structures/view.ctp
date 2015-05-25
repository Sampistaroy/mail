<div class="structures view">
<h2><?php echo __('Structure'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($structure['Structure']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Visible'); ?></dt>
		<dd>
			<?php echo h($structure['Structure']['visible']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Structure'), array('action' => 'edit', $structure['Structure']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Structure'), array('action' => 'delete', $structure['Structure']['id']), array(), __('Are you sure you want to delete # %s?', $structure['Structure']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Structures'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Structure'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Infos'), array('controller' => 'infos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Info'), array('controller' => 'infos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Structures Users'), array('controller' => 'structures_users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Structures Users'), array('controller' => 'structures_users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Nouvelles'), array('controller' => 'nouvelles', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Nouvelles'), array('controller' => 'nouvelles', 'action' => 'add')); ?> </li>
	</ul>
</div>
	<div class="related">
		<h3><?php echo __('Related Infos'); ?></h3>
	<?php if (!empty($structure['Info'])): ?>
		<dl>
			<dt><?php echo __('Id'); ?></dt>
		<dd>
	<?php echo $structure['Info']['id']; ?>
&nbsp;</dd>
		<dt><?php echo __('Structurename'); ?></dt>
		<dd>
	<?php echo $structure['Info']['structurename']; ?>
&nbsp;</dd>
		<dt><?php echo __('Logo'); ?></dt>
		<dd>
	<?php echo $structure['Info']['logo']; ?>
&nbsp;</dd>
		<dt><?php echo __('Pays'); ?></dt>
		<dd>
	<?php echo $structure['Info']['pays']; ?>
&nbsp;</dd>
		<dt><?php echo __('Region'); ?></dt>
		<dd>
	<?php echo $structure['Info']['region']; ?>
&nbsp;</dd>
		<dt><?php echo __('Ville'); ?></dt>
		<dd>
	<?php echo $structure['Info']['ville']; ?>
&nbsp;</dd>
		<dt><?php echo __('Rue Numero'); ?></dt>
		<dd>
	<?php echo $structure['Info']['rue_numero']; ?>
&nbsp;</dd>
		<dt><?php echo __('Rue Name'); ?></dt>
		<dd>
	<?php echo $structure['Info']['rue_name']; ?>
&nbsp;</dd>
		<dt><?php echo __('Code Postal'); ?></dt>
		<dd>
	<?php echo $structure['Info']['code_postal']; ?>
&nbsp;</dd>
		<dt><?php echo __('Geoloc X'); ?></dt>
		<dd>
	<?php echo $structure['Info']['geoloc_x']; ?>
&nbsp;</dd>
		<dt><?php echo __('Geoloc Y'); ?></dt>
		<dd>
	<?php echo $structure['Info']['geoloc_y']; ?>
&nbsp;</dd>
		<dt><?php echo __('Telephone'); ?></dt>
		<dd>
	<?php echo $structure['Info']['telephone']; ?>
&nbsp;</dd>
		<dt><?php echo __('Mail'); ?></dt>
		<dd>
	<?php echo $structure['Info']['mail']; ?>
&nbsp;</dd>
		<dt><?php echo __('Description'); ?></dt>
		<dd>
	<?php echo $structure['Info']['description']; ?>
&nbsp;</dd>
		<dt><?php echo __('Structure Id'); ?></dt>
		<dd>
	<?php echo $structure['Info']['structure_id']; ?>
&nbsp;</dd>
		</dl>
	<?php endif; ?>
		<div class="actions">
			<ul>
				<li><?php echo $this->Html->link(__('Edit Info'), array('controller' => 'infos', 'action' => 'edit', $structure['Info']['id'])); ?></li>
			</ul>
		</div>
	</div>
	<div class="related">
	<h3><?php echo __('Related Structures Users'); ?></h3>
	<?php if (!empty($structure['structures_users'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Structure Id'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Role'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($structure['structures_users'] as $structuresUsers): ?>
		<tr>
			<td><?php echo $structuresUsers['id']; ?></td>
			<td><?php echo $structuresUsers['structure_id']; ?></td>
			<td><?php echo $structuresUsers['user_id']; ?></td>
			<td><?php echo $structuresUsers['role']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'structures_users', 'action' => 'view', $structuresUsers['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'structures_users', 'action' => 'edit', $structuresUsers['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'structures_users', 'action' => 'delete', $structuresUsers['id']), array(), __('Are you sure you want to delete # %s?', $structuresUsers['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Structures Users'), array('controller' => 'structures_users', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Nouvelles'); ?></h3>
	<?php if (!empty($structure['nouvelles'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Titre'); ?></th>
		<th><?php echo __('Description'); ?></th>
		<th><?php echo __('Contenu'); ?></th>
		<th><?php echo __('Create'); ?></th>
		<th><?php echo __('Update'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Structure Id'); ?></th>
		<th><?php echo __('Visible'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($structure['nouvelles'] as $nouvelles): ?>
		<tr>
			<td><?php echo $nouvelles['id']; ?></td>
			<td><?php echo $nouvelles['titre']; ?></td>
			<td><?php echo $nouvelles['description']; ?></td>
			<td><?php echo $nouvelles['contenu']; ?></td>
			<td><?php echo $nouvelles['create']; ?></td>
			<td><?php echo $nouvelles['update']; ?></td>
			<td><?php echo $nouvelles['user_id']; ?></td>
			<td><?php echo $nouvelles['structure_id']; ?></td>
			<td><?php echo $nouvelles['visible']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'nouvelles', 'action' => 'view', $nouvelles['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'nouvelles', 'action' => 'edit', $nouvelles['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'nouvelles', 'action' => 'delete', $nouvelles['id']), array(), __('Are you sure you want to delete # %s?', $nouvelles['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Nouvelles'), array('controller' => 'nouvelles', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
