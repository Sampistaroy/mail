

    <!-- Titre principal de la page -->
      <?php echo $this->element('site/titre_site'); ?>
      <!-- Example row of columns -->
      <div class="row">
        <div class="col-xs-12">
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
        <div class="col-xs-12">
            <span class="glyphicon glyphicon-chevron-right"></span><a href="#"><span >Accueil</span ></a>
        </div>
      </div>
      <hr>
      <!-- Example row of columns -->
      <div class="row deco">
        <div class="col-xs-12 deco-sous-titre">
          <h4>Qui sommes nous:</h4>
        </div>
      </div>
      <!-- Example row of columns -->
      <div class="row">
        <div class="col-xs-12">
          <br><?php echo $infos['Info']['description']; ?>
          <br><?php echo $this->Html->link('Lire plus...',
                array('controller' => 'sites', 'action' => 'histo',$structure_id),
                array('class'=>'btn btn-success btn-sm pull-right')
              );?>
        </div>
      </div>
      <div class="row deco">
        <div class="col-xs-2 deco-sous-titre">
          <h4>Nos TAGS :</h4>
        </div>
        <div class="col-xs-10">
          <?php foreach ($structuresTags as $structurestag) {
            ?><span class='btn btn-success btn-xs'><?php echo $structurestag['Tag']['tagname']; ?></span>
            &nbsp;<?php
          } ?>
        </div>
      </div>
      <?php if(isset($news)){ ?>
        <!-- Example row of columns -->
        <div class="row deco">
          <div class="col-xs-12 deco-sous-titre">
            <h4>Les Dernières Nouvelles ! ! !</h4>
          </div>
        </div>
        <!-- Example row of columns -->
        <div class="row">
          <?php foreach ($news as $key => $nouvelle){ ?>
              <div class="col-xs-4">
                <h4><?php echo $nouvelle['Nouvelle']['titre']; ?></h4>
                <?php echo $nouvelle['Nouvelle']['create']; ?>
                <br><?php echo $nouvelle['Nouvelle']['description']; ?>
                <br><?php echo $this->Html->link('Lire plus...',
                  array('controller' => 'sites', 'action' => 'nouvelles',$structure_id),
                  array('class'=>'btn btn-success btn-sm pull-right')
                );?>
              </div>
          <?php } ?>
          <?php unset($nouvelle); ?>
        </div>
      <?php } ?>
      <?php if(isset($presta_infos)){ ?>
        <!-- Example row of columns -->
        <div class="row deco">
          <div class="col-xs-12 deco-sous-titre">
            <h4>Venez essayer ! ! !</h4>
          </div>
        </div>
        <div class="row">
          <?php foreach ($presta_infos as $key => $presta_info){ ?>
              <div class="col-xs-4">
                <h4><?php echo $presta_info['Nouvelle']['titre']; ?></h4>
                date: <?php echo $presta_info['Nouvelle']['create']; ?>
                <br>description:<?php echo $presta_info['Nouvelle']['description']; ?>
                <br><?php echo $this->Html->link('Lire plus...',
                  array('controller' => 'sites', 'action' => 'nouvelles',$structure_id),
                  array('class'=>'btn btn-success btn-sm')
                );?>
              </div>
          <?php } ?>
          <?php unset($presta_info); ?>
          <div class="col-xs-4">
            <ul>
              <li>
                Prestation à la Une
                <ul>
                  <li>titre
                  </li>
                  <li>description
                  </li>
                </ul>
              </li>
            </ul>
          </div>
      <?php } ?><!-- fin du if presta_infos-->
        </div>
      <?php if(isset($event_infos)){ ?>
        <!-- Example row of columns -->
        <div class="row deco">
          <div class="col-xs-12 deco-sous-titre">
            <h4>Les évènements en cours ! ! !</h4>
          </div>
        </div>
        <div class="row">
          <?php foreach ($event_infos as $key => $event_info){ ?>
              <div class="col-xs-4">
                <h4><?php echo $event_info['Nouvelle']['titre']; ?></h4>
                date: <?php echo $event_info['Nouvelle']['create']; ?>
                <br>description:<?php echo $event_info['Nouvelle']['description']; ?>
                <br><?php echo $this->Html->link('Lire plus...',
                  array('controller' => 'sites', 'action' => 'nouvelles'),
                  array('class'=>'btn btn-success btn-sm')
                );?>
              </div>
          <?php } ?>
          <?php unset($event_info); ?>
          <div class="col-xs-4">
            <ul>
              <li>
                Prestation à la Une
                <ul>
                  <li>titre
                  </li>
                  <li>description
                  </li>
                </ul>
              </li>
            </ul>
          </div>
      <?php } ?>
        </div><!-- fin du if event_infos -->

      <hr>