<div class="row">
	<div class="col-xs-12">
		<?php echo $this->Form->create('Tag'); ?>
		Edition du Tag
		<?php
			echo $this->Form->input('id');
            echo $this->Form->input('tagname', array(
                'label' => false,
                'class'=> 'form-control'
                )); ?>

		<?php echo $this->Form->end(__('Submit')); ?>
		<h3>Actions</h3>
		<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Tag.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Tag.id'))); ?>
		<br><?php echo $this->Html->link(__('List Tags'), array('action' => 'index')); ?>
	</div>
</div>
