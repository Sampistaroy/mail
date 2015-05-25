<!-- Titre principal de la page -->
<div class="jumbotron">
    <h1>TaGs</h1>
</div>



<!-- Example row of columns -->
    <?php echo $this->element('menu_sitesconfig'); ?>
<hr>





<div class="row">
	<div class="col-xs-12">
	  	<h4>Vos tags</h4>
	  	<?php foreach ($structuresTags as $structurestag) {
	  		?><kbd><?php echo $structurestag['Tag']['tagname']; ?></kbd>
	  		&nbsp;<?php
	  	} ?>
		<br>Nombre max permis : 2.
	</div>
</div>
<hr>

<div class="row">
  <div class="col-xs-4">
		<?php
			echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled')); ?>
  </div>
  <div class="col-xs-4 text-center">
		<p>
		<?php
		echo $this->Paginator->counter(array(
			'format' => __('Page {:page} of {:pages},<br>{:current} / {:count} enregistrements au total')
		));
		?>	</p>
  </div>
  <div class="col-xs-4 text-right">
		<?php	echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled')); ?>
  </div>
</div>

<div class="row">
	<div class="col-xs-12">
  	<h4>Choisissez un Tag dans la liste suivante</h4>
  	<?php foreach ($tags as $tag) {?>
  	<kbd>
		<?php echo $this->Html->link($tag['Tag']['tagname'], array('controller'=>'structures_tags', 'action' => 'choix_tag_assign',$structure_id,$tag['Tag']['id'])); ?>
	</kbd>
  		&nbsp;
  	<?php } ?>
	</div>
</div>
<div class="row">
  <div class="col-xs-12">
  	<h4>Votre tag n'existe pas ?</h4>
  	<?php echo $this->Html->link('Créez-le', array('controller'=>'tagssouhaits', 'action' => 'choix_souhait',$structure_id)); ?>
  </div>
</div>