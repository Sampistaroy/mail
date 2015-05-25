<!-- Titre principal de la page -->
<div class="jumbotron">
    <h1>TaGs</h1>
</div>



<!-- Example row of columns -->
    <?php echo $this->element('samp/menu_admin'); ?>
<hr>







<div class="row">
	<div class="col-xs-12">
		<h2>Tag</h2>
		<?php echo __('Nom :'); ?>
		<?php echo h($tag['Tag']['tagname']); ?>

		<h3>Actions</h3>
		<ul>
			<li><?php echo $this->Html->link(__('Edit Tag'), array('action' => 'edit', $tag['Tag']['id'])); ?> </li>
			<li><?php echo $this->Form->postLink(__('Delete Tag'), array('action' => 'delete', $tag['Tag']['id']), array(), __('Are you sure you want to delete # %s?', $tag['Tag']['id'])); ?> </li>
			<li><?php echo $this->Html->link(__('List Tags'), array('action' => 'index')); ?> </li>
			<li><?php echo $this->Html->link(__('New Tag'), array('action' => 'add')); ?> </li>
		</ul>

		<hr>
		<h3><?php echo __('Related Structures'); ?></h3>
		<?php if (!empty($tag['Structure'])): ?>
		<table cellpadding = "0" cellspacing = "0">
		<tr>
			<th><?php echo __('Id'); ?></th>
			<th><?php echo __('Visible'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
		</tr>
		<?php foreach ($tag['Structure'] as $structure): ?>
			<tr>
				<td><?php echo $structure['id']; ?></td>
				<td><?php echo $structure['visible']; ?></td>
				<td class="actions">
					<?php echo $this->Html->link(__('View'), array('controller' => 'structures', 'action' => 'view', $structure['id'])); ?>
					<?php echo $this->Html->link(__('Edit'), array('controller' => 'structures', 'action' => 'edit', $structure['id'])); ?>
					<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'structures', 'action' => 'delete', $structure['id']), array(), __('Are you sure you want to delete # %s?', $structure['id'])); ?>
				</td>
			</tr>
		<?php endforeach; ?>
		</table>
	<?php endif; ?>
	</div>
</div>