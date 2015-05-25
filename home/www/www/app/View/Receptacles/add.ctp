<!-- Titre principal de la page -->
  <?php echo $this->element('admin_structure/titre'); ?>

  <!-- Example row of columns -->
  <div class="row">
    <div class="col-md-12">
      <?php echo $this->element('admin_structure/menu'); ?>
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
        <span class="glyphicon glyphicon-chevron-right"></span>
      <?php echo $this->Html->link(
        'Type de créneau',
        array('controller' => 'structure_admins', 'action' => 'index',$structure_id)
      );?>
    </div>
  </div>
  <div class="row">
	<div class="col-xs-12">
	<?php echo $this->Form->create('Receptacle'); ?>
	<h4>Ajouter un Type de créneau</h4>
			<?php echo $this->Form->input('receptaclename'); ?>
			<?php echo $this->Form->input('nb_ticket'); ?>
			<?php echo $this->Form->input('nb_place'); ?>

			<?php echo $this->Form->input('minute'); ?>
			<?php echo $this->Form->input('heure'); ?>
			<?php echo $this->Form->input('jour'); ?>
			<?php echo $this->Form->input('mois'); ?>
			<?php echo $this->Form->input('annee'); ?>


			<?php echo $this->Form->input('structure_id'); ?>



	<?php echo $this->Form->end(__('Submit')); ?>
	<hr>
	<div>
		<?php echo $this->Html->link(__('List Receptacles'), array('action' => 'index')); ?>
	</div>
</div>
