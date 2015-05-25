

    <!-- Titre principal de la page -->
      <?php echo $this->element('site/titre_site'); ?>

    <div class="container">
      <!-- Example row of columns -->
      <div class="row">
        <div class="col-md-12">
          <?php echo $this->element('site/menu_site'); ?>
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
            <span class="glyphicon glyphicon-chevron-right"></span><a href="#"><span >Accueil</span ></a>
            <span class="glyphicon glyphicon-chevron-right"></span><a href="#"><span >Historique/Présentation</span ></a>
        </div>
      </div>
      <hr>

    <?php foreach ($histos as $histo){ ?>
      <!-- Example row of columns -->
      <div class="row deco">
        <div class="col-md-12">
          <?php echo $histo['contenu']; ?>
        </div>
      </div>    
    <?php } ?>
    <?php unset($histo); ?>
</div><!-- div container -->
