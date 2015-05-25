<div class="row">
    <div class="col-xs-12">
        <h1>Editer fiche du pratiquant</h1>
		<?php echo $this->Form->create('Pratiquant'); ?>
			<?php
				echo $this->Form->input('id');
				echo $this->Form->input('nom');
				echo $this->Form->input('prenom');
				echo $this->Form->input('téléphone');
				echo $this->Form->input('structure_id',array('type'=> 'hidden'));
			?>
		<?php echo $this->Form->end(__('Submit')); ?>
		<div>
			<ul>
				<li><?php echo $this->Html->link(__('List Pratiquants'), array('action' => 'index',$structure_id)); ?></li>
			</ul>
		</div>
	</div>
</div>