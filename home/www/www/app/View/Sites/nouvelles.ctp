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
      <div class="row">
        <div class="col-md-12">
          <div class="thumbnail">
            <?php echo $this->Html->image('pub/728x90.png', array('alt' => 'CakePHP')); ?>
          </div>
        </div>
      </div>
      <!-- Example row of columns -->
      <div class="row">
        <div class="col-md-12">
            <span class="glyphicon glyphicon-chevron-right"></span><a href="#">Accueil</a>
            <span class="glyphicon glyphicon-chevron-right"></span><h3>News de la structure</h3>
        </div>
      </div>
      <?php if(isset($news)){ ?>
        <?php foreach ($news as $nouvelle){ ?>
          <!-- Example row of columns -->
          <div class="row">
            <div class="col-md-12">
              <h3><?php echo $nouvelle['Nouvelle']['titre']; ?></h3>
              <small><?php echo $nouvelle['Nouvelle']['create']; ?><br>
              <?php echo $nouvelle['Nouvelle']['description']; ?></small>
              <hr>
              <?php echo $nouvelle['Nouvelle']['contenu']; ?>
            </div>
          </div>    
        <?php } ?>
        <?php unset($nouvelle); ?>
      <?php } ?><!-- end if isset $news -->
      <hr>
    </div><!-- div container -->