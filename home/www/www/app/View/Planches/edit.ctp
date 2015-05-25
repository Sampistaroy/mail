<div class="planches form">
<?php echo $this->Form->create('Planch'); ?>
	<fieldset>
		<legend><?php echo __('Edit Planch'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('debut');
		echo $this->Form->input('fin');
		echo $this->Form->input('receptacle_id');
		echo $this->Form->input('structure_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Planch.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Planch.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Planches'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Receptacles'), array('controller' => 'receptacles', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Receptacle'), array('controller' => 'receptacles', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Structures'), array('controller' => 'structures', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Structure'), array('controller' => 'structures', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Planch Pratiquant Prestations'), array('controller' => 'planch_pratiquant_prestations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Planch Pratiquant Prestation'), array('controller' => 'planch_pratiquant_prestations', 'action' => 'add')); ?> </li>
	</ul>
</div>
