

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
          <?php echo $this->element('pub/pub_principal'); ?>
      <!-- Example row of columns -->
      <div class="row">
        <div class="col-md-12">
            <span class="glyphicon glyphicon-chevron-right"></span><a href="#"><span >Accueil</span ></a>
        </div>
      </div>
      <hr>
      <!-- Example row of columns -->
      <div class="row">
        <div class="col-md-4">
          <ul>
            <li>
              Qui sommes nous:
              <br><?php echo $infos['0']['Info']['description']; ?>
              <br><?php echo $this->Html->link('Lire plus...',
                    array('controller' => 'sitesconfigs', 'action' => 'histo',$structure_id),
                    array('class'=>'btn btn-default btn-sm')
                  );?>
                  <?php echo $this->Html->link('Editer',
                    array('controller' => 'infos', 'action' => 'edit',$structure_id),
                    array('class'=>'btn btn-default btn-sm')
                  );?>

            </li>
          </ul>
        </div>
        <div class="col-md-4">
          <ul>
            <li>
              Vos Tag, (catégorie d'activité):
              <br>
              <br>
            </li>
          </ul>
        </div>
      </div>
      <!-- Example row of columns -->
      <div class="row">
    <?php if(isset($nouvelles)){ ?>
      <?php foreach ($nouvelles as $nouvelle){ ?>
          <div class="col-md-4">
            <ul>
              <li>
                <ul>
                  <li><h4><?php echo $nouvelle['Nouvelle']['titre']; ?></h4>
                  </li>
                  <li>date: <?php echo $nouvelle['Nouvelle']['create']; ?>
                  </li>
                  <li><?php echo $nouvelle['Nouvelle']['description']; ?>
                  </li><?php echo $this->Html->link('Lire plus...',
                      array('controller' => 'sitesconfigs', 'action' => 'nouvelles', $structure_id),
                      array('class'=>'btn btn-default btn-sm')
                    );?>
                </ul>
              </li>
            </ul>
          </div>
      <?php }
      unset($nouvelle); 
    }else{?>
        <div class="col-md-4">
    <?php echo $this->Html->link('Ajouter une news...',
                    array('controller' => 'nouvelles', 'action' => 'add', $structure_id ),
                    array('class'=>'btn btn-default btn-sm'));
                    ?>
        </div><?php
    } ?>
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
              <ul>
                <li>HOHO
                  <ul>
                    <li>débuté à:, finis à:
                    </li>
                    <li>nom
                    </li>
                    <li>agenda
                    </li>
                  </ul>
                </li>
              </ul>
            </div>
          <?php } ?>

      </div>
      <!-- Example row of columns -->
      <div class="row">
        <div class="col-md-4">
          <ul>
            <li>Evenements en cours:
              <ul>
                <li>débuté à:, finis à:
                </li>
                <li>nom
                </li>
                <li>agenda
                </li>
              </ul>
            </li>
          </ul>
        </div>
        <div class="col-md-4">
          <ul>
            <li>Evenements proche:
              <ul>
                <li>débuté à:, finis à:
                </li>
                <li>nom
                </li>
                <li>agenda
                </li>
              </ul>
            </li>
          </ul>
        </div>
        <div class="col-md-4">
          <ul>
            <li>Evenements particuliers:
              <ul>
                <li>débuté à:, finis à:
                </li>
                <li>nom
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
        <div class="col-md-4">
          <ul>
            <li>Magasin:
              <ul>
                <li>article :
                </li>
              </ul>
            </li>
          </ul>
        </div>
        <div class="col-md-4">
          <ul>
            <li>Magasin:
              <ul>
                <li>article :
                </li>
              </ul>
            </li>
          </ul>
        </div>
        <div class="col-md-4">
          <ul>
            <li>Magasin:
              <ul>
                <li>article :
                </li>
              </ul>
            </li>
          </ul>
        </div>
      </div>

      <hr>