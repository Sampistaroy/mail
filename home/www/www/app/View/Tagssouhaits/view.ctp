<div class="tagssouhaits view">
<h2><?php echo __('Tagssouhait'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($tagssouhait['Tagssouhait']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Titre'); ?></dt>
		<dd>
			<?php echo h($tagssouhait['Tagssouhait']['titre']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Contenu'); ?></dt>
		<dd>
			<?php echo h($tagssouhait['Tagssouhait']['contenu']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Tagssouhait'), array('action' => 'edit', $tagssouhait['Tagssouhait']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Tagssouhait'), array('action' => 'delete', $tagssouhait['Tagssouhait']['id']), array(), __('Are you sure you want to delete # %s?', $tagssouhait['Tagssouhait']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Tagssouhaits'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tagssouhait'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users Tagssouhaits'), array('controller' => 'users_tagssouhaits', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Users Tagssouhaits'), array('controller' => 'users_tagssouhaits', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Users Tagssouhaits'); ?></h3>
	<?php if (!empty($tagssouhait['users_tagssouhaits'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Tagssouhait Id'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Last Wish'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($tagssouhait['users_tagssouhaits'] as $usersTagssouhaits): ?>
		<tr>
			<td><?php echo $usersTagssouhaits['id']; ?></td>
			<td><?php echo $usersTagssouhaits['tagssouhait_id']; ?></td>
			<td><?php echo $usersTagssouhaits['user_id']; ?></td>
			<td><?php echo $usersTagssouhaits['last_wish']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'users_tagssouhaits', 'action' => 'view', $usersTagssouhaits['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'users_tagssouhaits', 'action' => 'edit', $usersTagssouhaits['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'users_tagssouhaits', 'action' => 'delete', $usersTagssouhaits['id']), array(), __('Are you sure you want to delete # %s?', $usersTagssouhaits['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Users Tagssouhaits'), array('controller' => 'users_tagssouhaits', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
