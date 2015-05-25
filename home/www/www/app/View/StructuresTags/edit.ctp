<div class="structuresTags form">
<?php echo $this->Form->create('StructuresTag'); ?>
	<fieldset>
		<legend><?php echo __('Edit Structures Tag'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('structure_id');
		echo $this->Form->input('tag_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('StructuresTag.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('StructuresTag.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Structures Tags'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Structures'), array('controller' => 'structures', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Structure'), array('controller' => 'structures', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Tags'), array('controller' => 'tags', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tag'), array('controller' => 'tags', 'action' => 'add')); ?> </li>
	</ul>
</div>
