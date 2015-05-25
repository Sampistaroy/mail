<div class="tagssouhaits form">
<?php echo $this->Form->create('Tagssouhait'); ?>
	<fieldset>
		<legend><?php echo __('Add Tagssouhait'); ?></legend>
	<?php
		echo $this->Form->input('titre');
		echo $this->Form->input('contenu');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Tagssouhaits'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Users Tagssouhaits'), array('controller' => 'users_tagssouhaits', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Users Tagssouhaits'), array('controller' => 'users_tagssouhaits', 'action' => 'add')); ?> </li>
	</ul>
</div>
