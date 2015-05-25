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
            <span class="glyphicon glyphicon-chevron-right"></span><a href="#"><span >Agenda</span ></a>
        </div>
      </div>
      <hr>
      <!-- Example row of columns -->
      <div class="row">
        <div class="col-md-12">
          <?php echo $this->Html->link(
            'Ajouter un Receptacle',
            array('controller' => 'receptacles', 'action' => 'add',$structure_id),
            array('class'=>'btn btn-info')
          ); ?>
          <?php echo $this->Html->link(
            'Ajouter un créneau',
            array('controller' => 'planches', 'action' => 'add',$structure_id),
                array('class'=>'btn btn-info')
          );?>
        </div>
      </div>
      <hr>
      <!-- Example row of columns -->
      <div class="row">
        <div class="col-md-12">
          <?php echo $this->Calendargestion->display('2015-04-27', $options=array(), $events, $structure_id,$planches);?>



          <br>planches
          <?php debug($planches); ?>
          events
          <?php debug($events); ?>
          event
          <?php debug($event); ?>
          d_h_planch_debut
          <?php // debug($d_h_planch_debut); ?>


        </div>
      </div>
      <hr>