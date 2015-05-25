   <!-- Titre principal de la page -->
      <?php echo $this->element('gestion_structure/titre'); ?>

      <!-- Example row of columns -->
      <div class="row">
        <div class="col-md-12">
          <?php echo $this->element('gestion_structure/menu'); ?>
        </div>
      </div>
      <hr>
      <!-- Example row of columns -->
          <?php echo $this->element('pub/pub_principal'); ?>
      <!-- Example row of columns -->
      <div class="row">
        <div class="col-md-12">
            <span class="glyphicon glyphicon-chevron-right"></span>
          <?php echo $this->Html->link(
            'Accueil',
            array('controller' => 'structure_admins', 'action' => 'index',$structure_id)
          );?>
            <span class="glyphicon glyphicon-chevron-right"></span><span >
          <?php echo $this->Html->link(
            'Ajout creneau',
            array('controller' => 'planches', 'action' => 'add',$structure_id)
          );?></span >
        </div>
      </div>
      <hr>
<div class="row">
	<div class="col-xs-12">
	      	<?php echo $this->Html->link(
	            'Récurrence',
	            array('controller' => 'agenda_gestions', 'action' => 'add_creneau'),
	            array('class'=>'btn btn-primary',
	            	 'data-toggle' => "modal",
	            	  'data-target' => "#myModal")
		        ); ?>
	      <?php echo $this->Form->create('Planch', array(
            'inputDefaults' => array(
             'label' => false,
             'div' => array(
              'class'=>"radio")
            )
            )); ?>
	      <?php echo $this->Form->input('debut', array(
			    'label' => 'Debut ',
			    'class'=> 'form-control form-inline',
                'div' => array(
                'class'=>"radio form-inline")
			)); ?>
	      <?php echo $this->Form->input('fin', array(
			    'label' => 'Fin ',
			    'class'=> 'form-control form-inline',
                'div' => array(
                'class'=>"radio form-inline")
			)); ?>

			<hr><h4><small>Facultatif</small></h4>
      <h5><small>Créer un nouveau type de créneau ou...</small></h5><?php

      //nouvelle option 3 champs
      echo $this->Form->input('receptaclename', array(
          'label' => 'Nom du Type de créneau',
          'class'=> 'form-control'
          ));
      echo $this->Form->input('nb_places', array(
              'label' => 'Nombre de Places',
              'class'=> 'form-control'
          )); ?>
      <h5><small>.. Utiliser un type existant</small></h5>
      <?php $receptacles = array('new' => 'nouveau type');
      foreach ($receptacles_bdd as $key => $value) {
          $receptacles[$key]=$value;
      }
      echo $this->Form->radio('Receptacle.id',
          $receptacles,array(
          'legend' => false,
          'class'=>'radio')); ?>

    	<?php echo $this->Form->input('structure_id',array(
         'type' => 'hidden')); ?>
    	<?php echo $this->Form->end('Sauvegarder') ?>

      <?php debug($receptacles_bdd); ?>
	</div>
</div>
