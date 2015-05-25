<div class="row">
    <div class="col-xs-12">
        <h1>Ajouter un pratiquant</h1>
		<?php echo $this->Form->create('Pratiquant'); ?>
			<?php
				echo $this->Form->input('nom');
				echo $this->Form->input('prenom');
				echo $this->Form->input('téléphone');
			?>
		<?php echo $this->Form->end(__('Submit')); ?>
		<div>
			<?php echo $this->Html->link(__('Liste Pratiquants'), array('action' => 'index',$structure_id)); ?>
		</div>
	</div>
</div>