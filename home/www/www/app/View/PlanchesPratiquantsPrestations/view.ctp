   <!-- Titre principal de la page -->
      <?php echo $this->element('planchespratiquantsprestations/titre'); ?>

      <hr>
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
            <span class="glyphicon glyphicon-chevron-right"></span><a href="#"><span >Agenda</span ></a>
        </div>
      </div>
      <hr>
      <!-- Example row of columns -->
      <div class="row">
        <div class="col-md-12">
          <?php echo $this->Html->link(
            'Ajouter un Type de Creneau',
            array('controller' => 'receptacles', 'action' => 'add',$structure_id),
            array('class'=>'btn btn-info')
          ); ?>
          <?php echo $this->Html->link(
            'Ajouter un créneau',
            array('controller' => 'planches', 'action' => 'add',$structure_id),
                array('class'=>'btn btn-info')
          );?>
          <?php echo $this->Html->link(
            'Ajouter un pratiquant',
            array('controller' => '', 'action' => '',$structure_id),
                array('class'=>'btn btn-info')
          );?>
        </div>
      </div>
      <hr>
      <!-- Example row of columns -->
      <div class="row deco">
        <h3>Creneau du : </h3>
        <h3>type de creneau : </h3>
          <?php foreach ($PlanchesPratiquantsPrestations as $PlanchesPratiquantsPrestation) { ?>
        <div class="col-md-12">
            <?php echo 'Pratiquant :'.$PlanchesPratiquantsPrestation['Pratiquant']['nom']
            .' <br> 
            Prestation : '.$PlanchesPratiquantsPrestation['PlanchesPratiquantsPrestation']['prestationname'].'. 
            Prix : '.$PlanchesPratiquantsPrestation['PlanchesPratiquantsPrestation']['prix']
            .'<br>'; ?>

        </div>
          <?php } ?>
        
      <?php debug($PlanchesPratiquantsPrestations); ?>

      </div>
      <hr>

