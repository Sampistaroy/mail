<div class="assolivenouvs form">
<?php echo $this->Form->create('Assolivenouv'); ?>
	<fieldset>
		<legend><?php echo __('Edit Assolivenouv'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('titre');
		echo $this->Form->input('description');
		echo $this->Form->input('contenu');
		echo $this->Form->input('create');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Assolivenouv.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Assolivenouv.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Assolivenouvs'), array('action' => 'index')); ?></li>
	</ul>
</div>
