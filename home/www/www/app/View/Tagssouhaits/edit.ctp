<div class="jumbotron">
	<h1>Tagssouhaits</h1>
	edition
</div>

<div class="row">
	<div class="col-xs-12">
		<?php echo $this->Form->create('Tagssouhait'); ?>
			editez un Tag 
			<?php
				echo $this->Form->input('id');
				echo $this->Form->input('titre');
				echo $this->Form->input('contenu');
			?>
		<?php echo $this->Form->end(__('Submit')); ?>
	</div>
</div>
<div class="row">
	<div class="col-xs-2">
		<?php echo $this->Paginator->sort('titre'); ?>
	</div>
	<div class="col-xs-10">
		<?php echo $this->Paginator->sort('contenu'); ?>
	</div>
</div>
<div class="row">
	<?php foreach ($tagssouhaits as $tagssouhait){ ?>
	<div class="col-xs-2">
		<?php echo $this->Html->link(h($tagssouhait['Tagssouhait']['titre']),array(
				'controller'=>'tagssouhaits', 'action' => 'edit',$tagssouhait['Tagssouhait']['id']
			)
		); ?>&nbsp; 
	</div>
	<div class="col-xs-10">
		<?php echo ($tagssouhait['Tagssouhait']['contenu']); ?>&nbsp; 
	</div>
	<?php } ?>
</div>
<hr>