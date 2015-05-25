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
	  	Choisissez le Tag que vous souhaitez modifier:
	  	<br>
	  	<?php foreach ($structuresTags as $structurestag) { ?>
	  		<?php echo $this->Html->link($structurestag['Tag']['tagname'], array(
	  		'controller'=>'structures_tags', 'action' => 'choix_tag_assign',$structure_id,$tag_id,$structurestag['Tag']['id']),
	  		array('class' => "btn btn-success")); ?>
	  		<br>
	  	<?php } ?>
		<br>Nombre max permis : 2.
	</div>
</div>
<hr>