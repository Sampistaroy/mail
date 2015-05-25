<div class="planchesPratiquantsPrestations form">
<?php echo $this->Form->create('PlanchesPratiquantsPrestation'); ?>
	<fieldset>
		<legend><?php echo __('Add Planches Pratiquants Prestation'); ?></legend>
	<?php
		echo $this->Form->input('planch_id');
		echo $this->Form->input('pratiquant_id');
		echo $this->Form->input('prestation_id');
		echo $this->Form->input('structure_id');
		echo $this->Form->input('prestationname');
		echo $this->Form->input('description');
		echo $this->Form->input('prix');
		echo $this->Form->input('nb_places');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Planches Pratiquants Prestations'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Planches'), array('controller' => 'planches', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Planch'), array('controller' => 'planches', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Pratiquants'), array('controller' => 'pratiquants', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Pratiquant'), array('controller' => 'pratiquants', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Prestations'), array('controller' => 'prestations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Prestation'), array('controller' => 'prestations', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Structures'), array('controller' => 'structures', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Structure'), array('controller' => 'structures', 'action' => 'add')); ?> </li>
	</ul>
</div>
