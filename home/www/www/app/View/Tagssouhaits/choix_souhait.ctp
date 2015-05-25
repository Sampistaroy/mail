<div class="jumbotron">
	<h1>Tagssouhaits</h1>
	ajout
	<br>
	<?php echo $this->Html->link('Retour au choix des Tags',array(
		'controller'=>'structures_tags', 'action'=>'choix_tag',$structure_id
	),array('class'=>'btn btn-success pull-right'));?>
</div>
<!-- Example row of columns -->
    <?php echo $this->element('menu_sitesconfig'); ?>
<hr>

<div class="row">
	<div class="col-xs-2">
		<?php echo $this->Paginator->sort('titre'); ?>
	</div>
	<div class="col-xs-10">
		<?php echo $this->Paginator->sort('contenu'); ?>
	</div>
</div>
<div class="row">
	<div class="col-xs-12">

	<?php echo $this->Form->create('Tagssouhait'); ?>
	<h4>Ajoutez un Tag<small> qui n'existe pas</small></h4>
		<?php
			echo $this->Form->input('titre',array(
					'label'=>false
				));
		?>
	<?php echo $this->Form->end(__('Submit')); ?>
	</div>
</div>
<div class="row">
	<?php foreach ($tagssouhaits as $tagssouhait){ ?>
	<div class="col-xs-3">
			<?php echo h($tagssouhait['Tagssouhait']['titre']); ?>&nbsp;
			<?php if (isset($tagssouhait['Tagssouhait']['taglike'])) { ?>
			<?php echo '<span class="label label-info">'.$tagssouhait['Tagssouhait']['taglike'].'</span>'; ?>&nbsp;
			<?php } ?>
			<?php echo $this->Html->link('voter pour ce tag+ 1 ',array('controller'=> 'tagssouhaits','action'=>'voter_tag', $structure_id,$tagssouhait['Tagssouhait']['id']),array('class'=>'pull-right')); ?>
	</div>
	<div class="col-xs-9">
		<?php echo (!empty($tagssouhait['Tagssouhait']['contenu']))?$tagssouhait['Tagssouhait']['contenu']:'non traité'; ?>&nbsp; 
	</div>
	<?php } ?>
</div>
<hr>