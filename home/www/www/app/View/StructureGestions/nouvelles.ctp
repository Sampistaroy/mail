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
            <span class="glyphicon glyphicon-chevron-right"></span><h3>News de la structure</h3>::Ajouter/Supprimer/Editer/Cacher/Dupliquer vos news
        </div>
      </div>
      <!-- Example row of columns -->
      <div class="row">
        <div class="col-md-12">
      <?php echo $this->Html->link(
        'Ajouter une news',
        array('controller' => 'nouvelles', 'action' => 'add',$infos['0']['Structure']['id']),
            array('class'=>'btn btn-primary btn-lg')
      );?>

        </div>
      </div>

    <?php if(isset($nouvelles)){ ?>
    <?php foreach ($nouvelles as $nouvelle){ ?>
      <!-- Example row of columns -->
      <div class="row">
        <div class="col-md-12">
          <ul>
            <li>
              <ul>
                <li><?php echo $nouvelle['Nouvelle']['titre']; ?>
                </li>
                <li><?php echo $nouvelle['Nouvelle']['description']; ?>
                </li>
                <li><?php echo $nouvelle['Nouvelle']['create']; ?>
                </li>
                <li><?php echo $nouvelle['Nouvelle']['contenu']; ?>
                </li>
              </ul>
            </li>
          </ul>

          <?php echo $this->Html->link(
            'Editer cette news',
            array('controller' => 'nouvelles', 'action' => 'edit',$nouvelle['Nouvelle']['id']),
                array('class'=>'btn btn-default btn-sm')
          );?>
          <?php echo $this->Form->postLink(
            'Supprimer une news',
            array('controller' => 'nouvelles', 'action' => 'suppr',$nouvelle['Nouvelle']['id'],$infos['0']['Structure']['id']),
                array('class'=>'btn btn-danger btn-sm'),
                array('confirm' => 'Etes-vous sûr ?')
          );?>
        </div>
      </div>    
    <?php } ?>   
    <?php } ?>

      <hr>