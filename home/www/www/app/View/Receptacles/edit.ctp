<div class="receptacles form">
<?php echo $this->Form->create('Receptacle'); ?>
	<fieldset>
		<legend><?php echo __('Edit Receptacle'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('receptaclename');
		echo $this->Form->input('nb_ticket');
		echo $this->Form->input('nb_place');
		echo $this->Form->input('structure_id');
		echo $this->Form->input('minute');
		echo $this->Form->input('heure');
		echo $this->Form->input('jour');
		echo $this->Form->input('mois');
		echo $this->Form->input('annee');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Receptacle.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Receptacle.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Receptacles'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Structures'), array('controller' => 'structures', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Structure'), array('controller' => 'structures', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Planches'), array('controller' => 'planches', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Planch'), array('controller' => 'planches', 'action' => 'add')); ?> </li>
	</ul>
</div>
