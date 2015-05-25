<div class="row">
	<div class="col-xs-12">
		<?php echo $this->Form->create('Tag'); ?>

		<h4>Ajouter un Tag</h4>
            
            <?php echo $this->Form->input('tagname', array(
                'label' => false,
                'class'=> 'form-control'
                )); ?>
		<?php echo $this->Form->end(__('Submit')); ?>
		<hr>
		<?php echo $this->Html->link(__('List Tags'), array('action' => 'index')); ?>
	</div>
</div>
