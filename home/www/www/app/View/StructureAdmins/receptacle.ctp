    <!-- Titre principal de la page -->
      <?php echo $this->element('admin_structure/titre'); ?>

    <div class="container">
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
            <span class="glyphicon glyphicon-chevron-right"></span><a href="#"><span >Receptacle</span ></a>
        </div>
      </div>
      <hr>
      <!-- Example row of columns -->
      <div class="row">
        <div class="col-md-12">
          <div class="panel-heading" role="tab" id="headingOne">
            <h4 class="panel-title">
              <a class="btn btn-default" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                Qu'appelle-t-on "Receptacle", comment le configurer ? <span class="glyphicon glyphicon-chevron-down"></span>
              </a>
            </h4>
          </div>
          <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
            <div class="panel-body">
              Le "réceptacle" est le batiment, le véhicule, la propriété qui va permettre de réaliser vos prestations.
              <br>Ils vont permettre de créer des créneaux dans l'agenda et de relier plus facilement vos prestations votre agenda et vos pratiquants.

            </div>
          </div>

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
        array('controller' => 'structure_gestions', 'action' => 'agenda',$structure_id),
            array('class'=>'btn btn-info')
      );?>

        </div>
      </div>
      <hr>
      <!-- Example row of columns -->
      <div class="row">
        <div class="col-md-12">
          Liste des receptacles.
      <?php if(isset($receptacles)){ ?>
        <?php foreach ($receptacles as $key => $receptacle) { ?>
          <?php echo '<br>'.$receptacle['Receptacle']['receptaclename']; ?>
        <?php } ?>
      <?php } ?>

        </div>
      </div>
      <hr>
    </div>