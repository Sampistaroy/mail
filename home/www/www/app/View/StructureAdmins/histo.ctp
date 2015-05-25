<!-- Titre principal de la page -->
  <?php echo $this->element('titre_sitesconfig'); ?>


    <div class="container">
      <!-- Example row of columns -->
      <div class="row">
        <div class="col-md-12">
          <?php echo $this->element('menu_sitesconfig'); ?>
        </div>
      </div>
      <hr>
      <!-- Example row of columns -->
          <div class="thumbnail">
            <?php echo $this->Html->image('pub/728x90.png', array('alt' => 'CakePHP')); ?>
          </div>
      <!-- Example row of columns -->
      <div class="row">
        <div class="col-md-12">
            <span class="glyphicon glyphicon-chevron-right"></span><a href="#">Accueil</a>
            <span class="glyphicon glyphicon-chevron-right"></span><h3>Présentation de la structure</h3>
          <?php echo $this->Html->link(
            'Editer',
            array('controller' => 'histos', 'action' => 'edit',$structure_id),
                array('class'=>'btn btn-default btn-sm')
          );?>
        </div>
      </div>

    <?php foreach ($histos as $histo){ ?>
      <!-- Example row of columns -->
      <div class="row">
        <div class="col-md-12">
          <?php echo $histo['contenu']; ?>
        </div>
      </div>    
    <?php } ?>
    <?php unset($histo); ?>

      <hr>