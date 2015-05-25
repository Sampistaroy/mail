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
            <span class="glyphicon glyphicon-chevron-right"></span><a href="#">Accueil</a>
            <span class="glyphicon glyphicon-chevron-right"></span><h3>Spots fréquentés</h3>
        </div>
      </div>
      <!-- Example row of columns -->
      <div class="row">
        <div class="col-md-12">
          <ul>
            <li>
              Créé / vous
              <ul>
                <li>adresse
                </li>
                <li>géoloc google(petite map)
                </li>
                <li>agenda
                </li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
      <!-- Example row of columns -->
      <div class="row">
        <div class="col-md-12">
          <ul>
            <li>
              Créé / d'autres:
              <ul>
                <li>adresse
                </li>
                <li>géoloc google
                </li>
                <li>agenda
                </li>
              </ul>
            </li>
          </ul>
        </div>
      </div>

      <hr>
