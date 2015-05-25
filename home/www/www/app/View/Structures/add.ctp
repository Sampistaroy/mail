<div class="structures form">
<?php echo $this->Form->create('Structure'); ?>
	<fieldset>
		<legend><?php echo __('Add Structure'); ?></legend>
	<?php
		echo $this->Form->input('visible');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Structures'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Infos'), array('controller' => 'infos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Info'), array('controller' => 'infos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Structures Users'), array('controller' => 'structures_users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Structures Users'), array('controller' => 'structures_users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Nouvelles'), array('controller' => 'nouvelles', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Nouvelles'), array('controller' => 'nouvelles', 'action' => 'add')); ?> </li>
	</ul>
</div>
