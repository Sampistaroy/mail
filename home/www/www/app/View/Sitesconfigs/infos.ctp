

    <!-- Titre principal de la page -->
      <?php echo $this->element('titre_sitesconfig'); ?>

      <!-- Example row of columns -->
      <div class="row">
        <div class="col-md-12">
          <?php echo $this->element('menu_sitesconfig'); ?>
        </div>
      </div>
      <hr>
      <!-- Example row of columns -->
          <div class="thumbnail">
            <?php echo $this->Html->image('pub/728x90.png', array('alt' => 'ASSO')); ?>
          </div>
      <!-- Example row of columns -->
      <div class="row">
        <div class="col-md-12">
            <span class="glyphicon glyphicon-chevron-right"></span>
                  <?php echo $this->Html->link('Accueil',
                    array('controller' => 'sitesconfigs', 'action' => 'index',$structure_id)
                  );?>
        </div>
      </div>
      <hr>
      <!-- Example row of columns -->
      <div class="row">
        <div class="col-md-8">
              Qui sommes nous:
              <br><?php echo $infos['0']['Info']['description']; ?>
                  <?php echo $this->Html->link('Editer',
                    array('controller' => 'infos', 'action' => 'edit',$structure_id),
                    array('class'=>'btn btn-success btn-sm')
                  );?>
        </div>
        <div class="col-md-4">
          <?php if (isset($structuresTags)) { ?>
            <h4>Vos tags (catégorie d'activité)</h4>
            <?php foreach ($structuresTags as $structurestag) { ?>
              <kbd><?php echo $structurestag['Tag']['tagname']; ?></kbd>
              &nbsp;
            <?php } ?>
          <?php }else{ ?>
            Choisissez vos Tags, cela est important, surtout si vous souhaitez que l'on vous retrouve dans la recherche de structure.
          <?php } ?>
          <br>Nombre max permis : 2.
              <br><?php echo $this->Html->link('Choisissez vos tags',
                    array('controller' => 'structures_tags', 'action' => 'choix_tag',$structure_id),
                    array('class'=>'btn btn-success btn-sm')
                  );?>
        </div>
      </div>
      <!-- Example row of columns -->
      <div class="row">
    <?php if(isset($nouvelles)){ ?>
      <?php $nouvelles_count=0; ?>
      <?php foreach ($nouvelles as $nouvelle){ ?>
        <?php $nouvelles_count++; ?>
          <div class="col-md-4">
            <h4><?php echo $nouvelle['Nouvelle']['titre']; ?></h4>
            <?php echo $nouvelle['Nouvelle']['create']; ?>
            <br><?php echo $nouvelle['Nouvelle']['description']; ?>
            <br><?php echo $this->Html->link('Lire plus...',
                      array('controller' => 'sitesconfigs', 'action' => 'nouvelles', $structure_id,$nouvelle['Nouvelle']['id']),
                      array('class'=>'btn btn-default btn-sm')
                    );?>
          </div>
      <?php }
      unset($nouvelle); 
    }else{?>
        <div class="col-md-4">
    <?php echo $this->Html->link('Ajouter une news...',
                    array('controller' => 'nouvelles', 'action' => 'add', $structure_id ),
                    array('class'=>'btn btn-success btn-sm'));
                    ?>
        </div>
    <?php } ?>
    <?php if (isset($nouvelles_count)) { ?>
      <?php if ($nouvelles_count<3) { ?>
          <div class="col-md-4">
            <?php echo $this->Html->link('Ajouter une news...',
                                  array('controller' => 'nouvelles', 'action' => 'add', $structure_id ),
                                  array('class'=>'btn btn-success btn-sm'));
                                  ?>
          </div>
      <?php } ?>
    <?php } ?>
  </div>
      <div class="row">
        <?php if(isset($prestations)){ ?>
          <?php foreach ($prestations as $prestation){ ?>
            <?php if (isset($prestation['Prestation']['a_la_Une']) && $prestation['Prestation']['a_la_Une']==1 ) { ?>
              <div class="col-md-4">
                Rejoingnez nous, venez tester :
                <ul>
                  <li>
                    <ul>
                      <li> <?php echo $prestation['Prestation']['prestationname']; ?>
                      </li>
                      <li><?php echo $prestation['Prestation']['description']; ?>
                      </li>
                      <?php echo $this->Html->link('Lire plus...',
                        array('controller' => 'sitesconfigs', 'action' => 'prestations', $structure_id),
                        array('class'=>'btn btn-default btn-sm')
                      );?>
                      <?php echo $this->Html->link('Essayer...',
                        array('controller' => 'sitesconfigs', 'action' => 'a_la_Une', $structure_id),
                        array('class'=>'btn btn-default btn-sm')
                      );?>
                      <?php echo $this->Html->link('changer...',
                        array('controller' => 'prestations', 'action' => 'a_la_Une', $structure_id),
                        array('class'=>'btn btn-default btn-sm')
                      );?>
                    </ul>
                  </li>
                </ul>
              </div>
              <?php }elseif(!isset($prestation['Prestation']['a_la_Une']) || $prestation['Prestation']['a_la_Une']!=2){?>
                <div class="col-md-4">
                  <?php echo $this->Html->link('Ajouter une prestation à la une...',
                  array('controller' => 'prestations', 'action' => 'a_la_Une', $structure_id ),
                  array('class'=>'btn btn-default btn-sm'));
                  ?>
                </div>
          <?php } ?>
            <?php if (isset($prestation['Prestation']['a_la_Une']) && $prestation['Prestation']['a_la_Une']==2 ) { ?>
              <div class="col-md-4">
                Rejoingnez nous, venez tester :
                <ul>
                  <li>
                    <ul>
                      <li><?php echo $prestation['Prestation']['prestationname']; ?>
                      </li>
                      <li><?php echo $prestation['Prestation']['description']; ?>
                      </li>
                      <?php echo $this->Html->link('Lire plus...',
                        array('controller' => 'sitesconfigs', 'action' => 'prestations', $structure_id),
                        array('class'=>'btn btn-default btn-sm')
                      );?>
                      <?php echo $this->Html->link('Essayer...',
                        array('controller' => 'sitesconfigs', 'action' => 'a_la_Une', $structure_id),
                        array('class'=>'btn btn-default btn-sm')
                      );?>
                      <?php echo $this->Html->link('changer...',
                        array('controller' => 'prestations', 'action' => 'a_la_Une', $structure_id),
                        array('class'=>'btn btn-default btn-sm')
                      );?>
                    </ul>
                  </li>
                </ul>
              </div>
            <?php }elseif(!isset($prestation['Prestation']['a_la_Une']) || $prestation['Prestation']['a_la_Une']!=1){ ?>
              <div class="col-md-4">
                <?php echo $this->Html->link('Ajouter une prestation à la Deux...',
                array('controller' => 'prestations', 'action' => 'a_la_Une', $structure_id ),
                array('class'=>'btn btn-default btn-sm'));
                ?>
              </div>
            <?php } ?>
          <?php } ?>
          <?php }else{?>
            <div class="col-md-4">
              <?php echo $this->Html->link('Ajouter une prestation à la une...',
              array('controller' => 'prestations', 'action' => 'a_la_Une', $structure_id ),
              array('class'=>'btn btn-default btn-sm'));
              ?>
            </div>
            <div class="col-md-4">
              <?php echo $this->Html->link('Ajouter une prestation à la Deux...',
              array('controller' => 'prestations', 'action' => 'a_la_Une', $structure_id ),
              array('class'=>'btn btn-default btn-sm'));
              ?>
            </div>
            <div class="col-md-4">
              <!-- Example row of columns -->
              <div class="thumbnail">
                <?php echo $this->Html->image('temporaire/336x280-bientot_vos_images.png', array('alt' => 'ASSO')); ?>
              </div>
            </div>
          <?php } ?>

      </div>

      <hr>