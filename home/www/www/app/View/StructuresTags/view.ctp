<div class="structuresTags view">
<h2><?php echo __('Structures Tag'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($structuresTag['StructuresTag']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Structure'); ?></dt>
		<dd>
			<?php echo $this->Html->link($structuresTag['Structure']['id'], array('controller' => 'structures', 'action' => 'view', $structuresTag['Structure']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tag'); ?></dt>
		<dd>
			<?php echo $this->Html->link($structuresTag['Tag']['id'], array('controller' => 'tags', 'action' => 'view', $structuresTag['Tag']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Structures Tag'), array('action' => 'edit', $structuresTag['StructuresTag']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Structures Tag'), array('action' => 'delete', $structuresTag['StructuresTag']['id']), array(), __('Are you sure you want to delete # %s?', $structuresTag['StructuresTag']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Structures Tags'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Structures Tag'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Structures'), array('controller' => 'structures', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Structure'), array('controller' => 'structures', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Tags'), array('controller' => 'tags', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tag'), array('controller' => 'tags', 'action' => 'add')); ?> </li>
	</ul>
</div>
