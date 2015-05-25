<!-- Titre principal de la page -->
<?php  echo $this->element('titre_sitesconfig');  ?>


  <!-- Example row of columns -->
  <div class="row">
    <div class="col-xs-12">
      <?php  echo $this->element('menu_sitesconfig'); ?>
    </div>
  </div>
  <hr>
  <!-- Example row of columns -->
  <div class="thumbnail">
    <?php echo $this->Html->image('pub/728x90.png', array('alt' => 'CakePHP'));  ?>
  </div>
  <!-- Example row of columns -->
  <div class="row">
    <div class="col-xs-12">
        <span class="glyphicon glyphicon-chevron-right"></span><a href="#">Accueil</a>
        <span class="glyphicon glyphicon-chevron-right"></span><h3>Prestations de la structure</h3>
    </div>
  </div>
  <hr>
  <!-- Comment configurer la page -->
  <div class="row">
    <div class="col-xs-12">
      <div class="panel-heading" role="tab" id="headingOne">
        <h4 class="panel-title">
          <a class="btn btn-default" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
            Comment configurer vos prestations ? <span class="glyphicon glyphicon-chevron-down"></span>
          </a>
        </h4>
      </div>
      <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
        <div class="panel-body">
          <!-- Example row of columns -->
          <div class="row">
            <div class="col-xs-12">
              Les prestations pour plus de maniabilité et moins de saisie sont divisées en 4 objets que l'on va créer et ordonner.
              <br>
              <br>-L'objet catégorie-prestation, dans lequel on vient mettre un ou plusieurs différents objets prestations. seul les objets à
              l'intérieur d'une catégorie seront visibles pour les utilisateurs.
              <br>-L'objet prestation est le sous objet de catégorie-prestation. donc il vient dans une catégorie-prestations.
              <br>-L'objet Option, qui est un sous objet de prestation.
              <br>-L'objet catégorie-option qui vient vous permettre de mieux ranger vos options a l'intérieur de vos prestations.
              <br>
            </div>
          </div>              <!-- démo catégorie -->
          <div class="row">
            <div class="col-xs-4">
              <h4>Catégorie presta 1:</h4>
              nom.
            </div>
          </div>
          <!--fin démo catégorie -->
          <!-- démo prestation/receptacle/options -->
          <div class="row">
            <div class="col-xs-4">
              <h4>Prestation 1:</h4>
              <ul>
                <li>
                  Prestation :
                  <ul>
                    <li>nom prestation:
                    </li>
                    <li>description:
                    </li>
                    <li>tarifs:
                    </li>
                  </ul>
                </li>
              </ul>
            </div>
            <div class="col-xs-8">
              <ul>
                <li>Options
                  <ul>
                    <li class="dropdown-header">inclus (catégorie option)</li>
                    <ul>
                      <li>nom</li>
                      <li>description</li>
                      <li>tarif</li>
                    </ul>
                    <li class="dropdown-header">possibles (catégorie option)</li>
                    <ul>
                      <li>nom</li>
                      <li>description</li>
                      <li>tarif</li>
                    </ul>
                  </ul>
                </li>
              </ul>
            </div>
          </div>
          <div class="row">
            <div class="col-xs-12">
              Etape 1 : Créons une catégorie pour les prestations.
              <br>Etape 2 : Créons une prestation ou plusieurs.
              <br>Etape 3 : Relions la prestation avec la catégorie prestation en clickant tu le stylo a coté des prestations dans la section "Toutes vos prestations".
            </div>
          </div>
          <!-- fin démo prestation/receptacle/options -->
        </div>
      </div>
    <hr>
    </div>
  </div>


<!--
_-_-_-_         Démo CateGORIE / PRESTATION / OPTION
_-_-_
_-_-_
-_-_-
-_-_-
-_-_-              







<!--
_-_-_-_         BOUCLE POUR LES OPTIONS SANS  CateGORIE / PRESTATION
_-_-_
_-_-_
-_-_-
-_-_-
-_-_-    -->
  <div class="row deco">
      <div id="headingOptCatOpt">
          <a  class="text-center" data-toggle="collapse" data-parent="#accordion" href="#collapseOptCatOpt" aria-expanded="true" aria-controls="collapseOptCatOpt">
            <h3>1 - Toutes vos Options et leurs Catégories, Cette zone ne sera pas affichée aux visiteurs <span class="glyphicon glyphicon-chevron-down"></span> <small>clickez</small></h3> 
          </a>
      </div>
      <div id="collapseOptCatOpt" class="panel-collapse collapse" aria-labelledby="headingOptCatOpt">
        <div class="panel-body">
          <!-- Example row of columns -->
              <!-- débutliste des prestations -->
              <?php if (isset($options) && !empty($options)){ ?>
              <h4>Vos Options</h4>
                    <div class="row">
                <?php foreach ($options as $option ){ ?>
                    
                      <div class="col-xs-6"style="background-color:rgba(0, 50, 134, 0.4);">
                        <strong> <?php echo $option['Option']['optionname']; ?>:</strong><br>
                        <?php echo $option['Option']['description']; ?>
                        <?php echo ' | Prix : '.$option['Option']['prix']; ?>
                        <br>
                        <?php echo $this->Html->link(
                          '',
                          array('controller' => 'options', 'action' => 'edit',$structure_id,$option['Option']['id']),
                              array('class'=>'btn btn-default btn-xs glyphicon glyphicon-pencil',
                                "title"=>"rendre visible aux utilisateurs")
                        );?>
                        <?php echo $this->Form->postLink(
                          '',
                          array('controller' => 'options', 'action' => 'suppr',$structure_id,$option['Option']['id']),
                              array('class'=>'btn btn-danger btn-xs glyphicon glyphicon-remove',
                                "title"=>"supprimer lien Option/Prestation/catégorie"),
                              array('confirm' => 'Etes-vous sûr ?')
                        );?>
                        </div>
                <?php  } ?>
              <?php echo $this->Html->link(
                'nettoyer',
                array('controller' => 'categories_prestas', 'action' => 'visible',$structure_id),
                    array('class'=>'btn btn-danger btn-xs glyphicon glyphicon-pencil',
                      "title"=>"permet de supprimer les options et cat_opt non utilisées")
              );?>
                    </div>
              <h4>Vos Catégories d'option</h4>
              <div class="row">
                <!-- Boucle pour les categorie en générale ZONE 1 -->
                <?php foreach ($cat_opts as $cat_opt ){ ?>
                        <div class="col-xs-6"style="background-color:rgba(0, 75, 134, 0.4);">
                          <strong> <?php echo $cat_opt['Cat_opt']['cat_optname']; ?>:</strong><br>
                          <br>
                          <?php echo $this->Html->link(
                            '',
                            array('controller' => 'options', 'action' => 'edit',$structure_id,$cat_opt['Cat_opt']['id']),
                                array('class'=>'btn btn-default btn-xs glyphicon glyphicon-pencil',
                                  "title"=>"rendre visible aux utilisateurs")
                          );?>
                          <?php echo $this->Form->postLink(
                            '',
                            array('controller' => 'cat_opts', 'action' => 'suppr',$structure_id,$cat_opt['Cat_opt']['id']),
                                array('class'=>'btn btn-danger btn-xs glyphicon glyphicon-remove',
                                  "title"=>"supprimer lien Option/Prestation/catégorie"),
                                array('confirm' => 'Etes-vous sûr ?')
                          );?>
                        </div>
                    <?php  } ?>
              <?php echo $this->Html->link(
                'nettoyer',
                array('controller' => 'categories_prestas', 'action' => 'visible',$structure_id),
                    array('class'=>'btn btn-danger btn-xs glyphicon glyphicon-pencil',
                      "title"=>"permet de supprimer les options et cat_opt non utilisées")
              );?>
              </div>
              <?php  } ?> 
          <!-- fin démo prestation/receptacle/options -->
      </div>
    </div>
  </div>

<!--
  _-_-_-_         FIN  DE BOUCLE pour les OPTIONS sans CateGORIE / PRESTATION
  _-_-_
  _-_-_
  -_-_-
  -_-_-
  -_-_- -->
  <!--
  _-_-_-_         DEBUT BOUCLE pour les PRESTATIONS sans CateGORIES
  _-_-_
  _-_-_
  -_-_-
  -_-_-
  -_-_-
<!-- démo catégorie -->

  <div class="row deco">
      <div id="headingPrestasansCat">
          <a  class="text-center" data-toggle="collapse" data-parent="#accordion" href="#collapsePrestasansCat" aria-expanded="true" aria-controls="collapsePrestasansCat">
            <h3>2 - Prestation sans Catégorie, cette zone ne sera pas affichée aux visiteurs<span class="glyphicon glyphicon-chevron-down"></span><small>clickez</small></h3> 
          </a>
      </div>
      <div id="collapsePrestasansCat" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingPrestasansCat">
        <div class="panel-body">
          <!-- Example row of columns -->
          <?php if (isset($prestas) && !empty($prestas)){?>
            <?php foreach ($prestas as $presta ){ ?>
              <!-- Si la prestation n'a pas de categorie -->
              <?php  if ($presta['Prestation']['categories_presta_id']==0 || $presta['Prestation']['categories_presta_id']==null) { ?>
                <!-- Example row of columns -->
                    <div class="row">
                      <div class="col-xs-4"style="background-color:rgba(0, 50, 134, 0.4);">
                              
                        <h3><small style="color:rgba(225, 225, 225, 1);">Prestation:</small><br> <?php echo $presta['Prestation']['prestationname']; ?>:</h3>
                        <?php echo $presta['Prestation']['description']; ?>
                        <?php echo 'Prix : '.$presta['Prestation']['prix']; ?>
                        <br>
                        <?php echo $this->Html->link(
                          '',
                          array('controller' => 'prestations', 'action' => 'edit',$structure_id,$presta['Prestation']['id']),
                              array('class'=>'btn btn-default btn-xs glyphicon glyphicon-pencil',
                                "title"=>"éditer la prestation")
                        );?>
                        <?php echo $this->Form->postLink(
                          '',
                          array('controller' => 'prestations', 'action' => 'suppr',$structure_id,$presta['Prestation']['id']),
                              array('class'=>'btn btn-danger btn-xs glyphicon glyphicon-remove',
                                "title"=>"supprimer la prestation"),
                              array('confirm' => 'Etes-vous sûr ?')
                        );?>
                        <br>
                        <?php echo $this->Html->link(
                          '',
                          array('controller' => 'prestations', 'action' => 'moveuppresta',$structure_id,$presta['Prestation']['id']),
                              array('class'=>'btn btn-success btn-xs glyphicon glyphicon-menu-up',
                                "title"=>"monter la prestation dans cette catégorie")
                        );?>
                        <?php echo $this->Html->link(
                          '',
                          array('controller' => 'prestations', 'action' => 'movedownpresta',$structure_id,$presta['Prestation']['id']),
                              array('class'=>'btn btn-success btn-xs glyphicon glyphicon-menu-down',
                                "title"=>"descendre la prestation dans cette catégorie")
                        );?>
                      </div>


        <!--
          _-_-_-_         Cellule OPTION de cette PRESTATION(sans categorie)
          _-_-_
          _-_-_
          -_-_-
          -_-_-
        -_-_- -->

                      <div class="col-xs-8"style="background-color:rgba(0, 50, 134, 0.4);">
                        <h3><small style="color:rgba(225,225,225,1)">Option</small></h3>
                        <!-- menu intermédiaire ajouter presta à cette catégorie -->
                        <?php echo $this->Html->link(
                          'Ajouter une option à la prestation',
                          array('controller' => 'options', 'action' => 'add',$structure_id,$presta['Prestation']['id']),
                              array('class'=>'btn btn-default btn-xs ',
                        "title"=>"Ajouter une option à la prestation")
                        );?>
                        <?php echo $this->Html->link(
                          'Ajouter une Catégorie à vos options',
                          array('controller' => 'cat_opts', 'action' => 'add',$structure_id,$presta['Prestation']['id']),
                              array('class'=>'btn btn-default btn-xs ',
                        "title"=>"Ajouter une option à la prestation")
                        );?><br>
            <?php if (isset($cat_opt_prestas)) {?>
                        <!-- Option sans catégories pour cette prestation -->
                        <?php foreach ($cat_opt_prestas as $cat_opt_presta) { ?>
                          <!-- Test si l'option a une concordance avec la prestation et l'option n'a pas de catégorie -->
                          <?php  if ($cat_opt_presta['Cat_opt_presta']['cat_opt_id']==0 && 
                          $cat_opt_presta['Cat_opt_presta']['prestation_id']==$presta['Prestation']['id']) {
                            echo $cat_opt_presta['Option']['optionname'].' | prix : '.$cat_opt_presta['Option']['prix'];
                            echo $this->Html->link(
                              '',
                              array('controller' => 'options', 'action' => 'edit',$structure_id,$cat_opt_presta['Cat_opt_presta']['id']),
                                  array('class'=>'btn btn-default btn-xs glyphicon glyphicon-pencil',
                                    "title"=>"changer la catégorie de l'option")
                            );?>
                            <?php echo $this->Form->postLink(
                              '',
                              array('controller' => 'options', 'action' => 'suppr_check',$structure_id,$cat_opt_presta['Cat_opt_presta']['id']),
                                  array('class'=>'btn btn-warning btn-xs glyphicon glyphicon-remove',
                                    "title"=>"supprimer la catégorie de l'option"),
                                  array('confirm' => 'Etes-vous sûr ?')
                            );?>
                            <?php echo $this->Html->link(
                              '',
                              array('controller' => 'prestations', 'action' => 'visible',$structure_id,$cat_opt_presta['Option']['id']),
                                  array('class'=>'btn btn-primary btn-xs glyphicon glyphicon-eye-open',
                                    "title"=>"rendre visible aux utilisateurs")

                            );?><br>
                          <?php } ?><!-- fin du if  297.  -->
                        <?php  } ?><!-- fin du for  295.  -->
                        <!-- Option avec catégories pour cette prestation -->
                        <?php foreach ($cat_opt_prestas as $cat_opt_presta) { ?>
                          <!-- On ne prend que les OPTIONS avec categorie et qui correspondent à cette prestation -->
                            <?php  if ($cat_opt_presta['Cat_opt_presta']['cat_opt_id']!=0 && 
                            $cat_opt_presta['Cat_opt_presta']['prestation_id']==$presta['Prestation']['id']) {
                              // Construction de la liste des catégories
                              if(isset($cat_opt_nom) && $cat_opt_nom!=$cat_opt_presta['Cat_opt']['cat_optname']){
                                echo '<h4><small style="color:rgba(225,225,225,1)">'.$cat_opt_presta['Cat_opt']['cat_optname'].'</small></h4>';
                                $cat_opt_nom=$cat_opt_presta['Cat_opt']['cat_optname'];
                              }elseif (!isset($cat_opt_nom)) {
                                echo '<h4><small style="color:rgba(225,225,225,1)">'.$cat_opt_presta['Cat_opt']['cat_optname'].'</small></h4>';
                                $cat_opt_nom=$cat_opt_presta['Cat_opt']['cat_optname'];
                              }
                              // Remplissage des categories
                              foreach ($cat_opt_prestas as $cat_opt_presta2) {
                                if ($cat_opt_presta['Cat_opt_presta']['id']==$cat_opt_presta2['Cat_opt_presta']['id'] &&
                                  $cat_opt_presta['Cat_opt_presta']['cat_opt_id']==$cat_opt_presta2['Cat_opt_presta']['cat_opt_id']) {
                                  echo $cat_opt_presta['Option']['optionname'].' | prix : '.$cat_opt_presta['Option']['prix'];
                                  echo $this->Html->link(
                                    '',
                                    array('controller' => 'options', 'action' => 'edit',$structure_id,$cat_opt_presta2['Cat_opt_presta']['id']),
                                        array('class'=>'btn btn-default btn-xs glyphicon glyphicon-pencil',
                                          "title"=>"rendre visible aux utilisateurs")
                                  );?>
                                  <?php echo $this->Form->postLink(
                                    '',
                                    array('controller' => 'options', 'action' => 'suppr_check',$structure_id,$cat_opt_presta2['Cat_opt_presta']['id']),
                                        array('class'=>'btn btn-warning btn-xs glyphicon glyphicon-remove',
                                          "title"=>"rendre visible aux utilisateurs"),
                                        array('confirm' => 'Etes-vous sûr ?')
                                  );?>
                                  <?php echo $this->Html->link(
                                    '',
                                    array('controller' => 'prestations', 'action' => 'visible',$structure_id,$cat_opt_presta2['Option']['id']),
                                        array('class'=>'btn btn-primary btn-xs glyphicon glyphicon-eye-open',
                                          "title"=>"rendre visible aux utilisateurs")
                                  );?>
                                  <br>
                                <?php  } ?><!-- fin du if $c-o-p/c-o-p/o-id==c-o-p2/o/id & c-o-p/c-o-p/c-o-id==c-o-p2/c-o-p/c-o-id-->
                              <?php  }  ?><!-- fin du for pour 336??? -->
                            <?php  }  ?><!-- fin du if  325.  -->
                          <?php  } ;?><!-- fin du for  323.  -->
                        <?php  } ;?><!-- fin du if.  -->
                      </div>
                    </div>
              <?php  } ?>
            <?php  } ?>
          <?php  } ?>
          <?php unset($cat_opt_nom); ?>
          <!-- fin démo prestation/receptacle/options -->
        </div>
      </div>
  </div>
   
<!--
_-_-_-_         FIN BOUCLE pour les PRESTATIONS sans CateGORIES
_-_-_
_-_-_
-_-_-
-_-_-
-_-_- 
<!--
_-_-_-_         MENU DU HAUT-CONTENU PRINCIPAL AJOUT : CATEGORIE / PRESTATION / OPTION / CAT_OPT
_-_-_
_-_-_
-_-_-
-_-_-
-_-_-    

  <!-- Menu du haut -->
  <div class="row">
    <div class="col-xs-11 col-xs-offset-1">
      <?php echo $this->Html->link(
        'ajouter une catégorie pour les prestations',
        array('controller' => 'categories_prestas', 'action' => 'add',$structure_id),
            array('class'=>'btn btn-info ')
      );?>
      <?php echo $this->Html->link(
        'ajouter une prestation',
        array('controller' => 'prestations', 'action' => 'add',$structure_id),
            array('class'=>'btn btn-info ')
      );?>
      <?php echo $this->Html->link(
        'ajouter une option pour les prestations',
        array('controller' => 'options', 'action' => 'add',$structure_id),
            array('class'=>'btn btn-info ')
      );?>
      <?php echo $this->Html->link(
        'ajouter une catégorie pour les options',
        array('controller' => 'cat_opts', 'action' => 'add',$structure_id),
            array('class'=>'btn btn-info ')
      );?>
    </div>
  </div>
  <!-- Menu du haut -->

<!--
_-_-_-_         FIN MENU-HAUT CONTENU PRINCIPAL CateGORIE / PRESTATION / OPTION
_-_-_
_-_-_
-_-_-
-_-_-
-_-_-       
   
<!--
_-_-_-_         DEBUT DE LA GROSSE BOUCLE CateGORIE / PRESTATION / OPTION
_-_-_
_-_-_
-_-_-
-_-_-
-_-_-
      <!-- démo catégorie -->
      <div class="row">
        <div class="col-xs-12">
          <h3>3 - Ici Commence la zone de la page des prestations qui sera affichée aux visiteurs :</h3>
        </div>
      </div>


<!-- Example row of columns -->
<div class="row">
  <div class="col-xs-12">
    <!-- début liste categories -->
    <?php if (isset($cat_prestas)) {?>
      <?php foreach ($cat_prestas as $cat_presta_id => $cat_presta_name){ ?>
        <!-- Ligne d'une catégorie -->
        <div class="row"style="background-color:rgba(12, 12, 134, 0.1);">
          <div class="col-xs-4">
            <h3>
              <small>Catégories</small>
              <br><?php echo $cat_presta_name; ?>:
            </h3>
            <!--fin Ligne d'une catégorie -->
          </div>
          <div class="col-xs-4">
            <?php echo $this->Html->link(
              '',
              array('controller' => 'categories_prestas', 'action' => 'edit',$structure_id,$cat_presta_id),
              array('class'=>'btn btn-default btn-xs glyphicon glyphicon-pencil',
              "title"=>"rendre visible aux utilisateurs")
            );?>
            <?php echo $this->Form->postLink(
              '',
              array('controller' => 'categories_prestas', 'action' => 'suppr',$structure_id,$cat_presta_id),
              array('class'=>'btn btn-danger btn-xs glyphicon glyphicon-remove',
              "title"=>"rendre visible aux utilisateurs"),
              array('confirm' => 'Etes-vous sûr ?')
            );?>
            <?php echo $this->Html->link(
              '',
              array('controller' => 'categories_prestas', 'action' => 'visible',$structure_id,$cat_presta_id),
              array('class'=>'btn btn-primary btn-xs glyphicon glyphicon-eye-open',
              "title"=>"rendre visible aux utilisateurs")
            );?>
            <br>
            <?php echo $this->Form->postLink(
              '',
              array('controller' => 'categories_prestas', 'action' => 'moveupcat',$structure_id,$cat_presta_id),
              array('class'=>'btn btn-success btn-xs glyphicon glyphicon-menu-up',
              "title"=>"rendre visible aux utilisateurs")
            );?>
            <?php echo $this->Form->postLink(
              '',
              array('controller' => 'categories_prestas', 'action' => 'movedowncat',$structure_id,$cat_presta_id),
              array('class'=>'btn btn-success btn-xs glyphicon glyphicon-menu-down',
              "title"=>"rendre visible aux utilisateurs")
            );?>
            <br>
            <br>

            <!-- menu intermédiaire ajouter presta à cette catégorie -->
                <?php echo $this->Html->link(
                  'Ajouter une prestation à la catégorie',
                  array('controller' => 'prestations', 'action' => 'add',$structure_id,$cat_presta_id),
                      array('class'=>'btn btn-default btn-xs ',
                "title"=>"rendre visible aux utilisateurs")
                );?>
          </div>
        </div>
   
<!--
_-_-_-_
_-_-_-_          FIN DES CAT_PRESTA // 
_-_-_         MILIEU DE LA GROSSE BOUCLE CateGORIE / PRESTATION / OPTION
-_-_-            DEBUT PRESTAS
-_-_-
-_-_-    -->
<!-- débutliste des prestations -->
<?php if (isset($prestas) && !empty($prestas)){ ?>
  <?php foreach ($prestas as $presta ){ ?>

              <!-- Ligne d'une prestation -->
    <?php  if ($presta['Prestation']['categories_presta_id']==$cat_presta_id) { ?>
      <!-- Example row of columns -->
      <div class="row">
        <div class="col-xs-4"style="background-color:rgba(134, 12, 12, 0.5);">
          <h3><small style="color:rgba(225, 225, 225, 1);">Prestation:</small><br> <?php echo $presta['Prestation']['prestationname']; ?>:</h3>
          <?php echo '<small>'.$presta['Prestation']['description'].'</small><br>'; ?>
          <?php echo 'Prix : '.$presta['Prestation']['prix']; ?>
                <br>
          <?php echo $this->Html->link(
            '',
            array('controller' => 'prestations', 'action' => 'edit',$structure_id,$presta['Prestation']['id']),
                array('class'=>'btn btn-default btn-xs glyphicon glyphicon-pencil',
                  "title"=>"rendre visible aux utilisateurs")
          );?>
          <?php echo $this->Form->postLink(
            '',
            array('controller' => 'prestations', 'action' => 'suppr_check',$structure_id,$presta['Prestation']['id']),
                array('class'=>'btn btn-warning btn-xs glyphicon glyphicon-remove',
                  "title"=>"rendre visible aux utilisateurs"),
                array('confirm' => 'Etes-vous sûr ?')
          );?>
          <?php echo $this->Html->link(
            '',
            array('controller' => 'prestations', 'action' => 'visible',$structure_id,$presta['Prestation']['id']),
                array('class'=>'btn btn-primary btn-xs glyphicon glyphicon-eye-open',
                  "title"=>"rendre visible aux utilisateurs")
                
          );?>
        </div>
<!--
_-_-_-_         Cellule OPTION de cette PRESTATION avec categorie
_-_-_
_-_-_
-_-_-
-_-_-
-_-_- -->

            <div class="col-xs-8"style="background-color:rgba(134, 12, 12, 0.5);">
              <!-- menu intermédiaire ajouter presta à cette catégorie -->
              <?php echo $this->Html->link(
                'Ajouter une option à la prestation',
                array('controller' => 'options', 'action' => 'add',$structure_id,$presta['Prestation']['id']),
                    array('class'=>'btn btn-default btn-xs ',
              "title"=>"Ajouter une option à la prestation")
              );?>
              <?php echo $this->Html->link(
                'Ajouter une Catégorie à vos options',
                array('controller' => 'cat_opts', 'action' => 'add',$structure_id,$presta['Prestation']['id']),
                    array('class'=>'btn btn-default btn-xs ',
              "title"=>"Ajouter une option à la prestation")
              );?>
              <br>
              <h3><small style="color:rgba(225,225,225,1)">Option</small></h3>
            <?php if (isset($cat_opt_prestas)) {?>
              <!-- Option sans catégories pour cette prestation -->
              <?php foreach ($cat_opt_prestas as $cat_opt_presta) { ?>
                <!-- Test si l'option a une concordance avec la prestation et l'option n'a pas de catégorie -->
                <?php  if ($cat_opt_presta['Cat_opt_presta']['cat_opt_id']==0 && 
                $cat_opt_presta['Cat_opt_presta']['prestation_id']==$presta['Prestation']['id']) {
                  echo $cat_opt_presta['Option']['optionname'].' | prix : ';
                  if(isset($cat_opt_presta['Cat_opt_presta']['opt_nv_prix']) && $cat_opt_presta['Cat_opt_presta']['opt_nv_prix']!=0){
                    echo $cat_opt_presta['Cat_opt_presta']['opt_nv_prix'].'&emsp;&emsp;&emsp;&emsp;';
                  }else{
                    echo $cat_opt_presta['Option']['prix'].'&emsp;&emsp;&emsp;&emsp;';
                  } ?>
                  <?php echo $this->Html->link(
                    '',
                    array('controller' => 'cat_opt_prestas', 'action' => 'edit_cat_opt_id',$structure_id,$cat_opt_presta['Cat_opt_presta']['id']),
                        array('class'=>'btn btn-default btn-xs glyphicon glyphicon-pencil',
                          "title"=>"rendre visible aux utilisateurs")
                  );?>
                  <?php echo $this->Form->postLink(
                    '',
                    array('controller' => 'options', 'action' => 'suppr_check',$structure_id,$cat_opt_presta['Cat_opt_presta']['id']),
                        array('class'=>'btn btn-warning btn-xs glyphicon glyphicon-remove',
                          "title"=>"supprimer la catégorie de l'option"),
                        array('confirm' => 'Etes-vous sûr ?')
                  );?>
                  <?php echo $this->Html->link(
                    '',
                    array('controller' => 'prestations', 'action' => 'visible',$structure_id,$cat_opt_presta['Option']['id']),
                        array('class'=>'btn btn-primary btn-xs glyphicon glyphicon-eye-open',
                          "title"=>"rendre visible aux utilisateurs")

                  );?><br>
                <?php } ?><!-- fin du if  .  -->
              <?php  } ?><!-- fin du for  .  -->
              <!-- Option avec catégories pour cette prestation -->
              <?php foreach ($cat_opt_prestas as $cat_opt_presta) { ?>
                <!-- On ne prend que les OPTIONS avec categorie et qui correspondent à cette prestation -->
                  <?php  if ($cat_opt_presta['Cat_opt_presta']['cat_opt_id']!=0 && 
                  $cat_opt_presta['Cat_opt_presta']['prestation_id']==$presta['Prestation']['id']) {
                    // Construction de la liste des catégories
                    if(isset($cat_opt_nom) && $cat_opt_nom!=$cat_opt_presta['Cat_opt']['cat_optname']){
                      echo '<h4><small style="color:rgba(225,225,225,1)">'.$cat_opt_presta['Cat_opt']['cat_optname'].'</small> &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;';
                      $cat_opt_nom=$cat_opt_presta['Cat_opt']['cat_optname']; ?>
                      <?php echo $this->Form->postLink(
                      ' ',
                      array('controller' => 'cat_opts', 'action' => 'suppr_check',$structure_id,$cat_opt_presta['Cat_opt_presta']['id']),
                          array('class'=>'btn btn-warning btn-xs glyphicon glyphicon-remove',
                            "title"=>"supprimer la catégorie de l'option"),
                          array('confirm' => 'Etes-vous sûr ?')
                      );?>
                      <?php echo $this->Html->link(
                        ' ',
                        array('controller' => 'prestations', 'action' => 'visible',$structure_id,$cat_opt_presta['Option']['id']),
                            array('class'=>'btn btn-primary btn-xs glyphicon glyphicon-eye-open',
                              "title"=>"rendre visible aux utilisateurs")

                      );?></h4><?php
                    }elseif (!isset($cat_opt_nom)) {
                      echo '<h4><small style="color:rgba(225,225,225,1)">'.$cat_opt_presta['Cat_opt']['cat_optname'].'</small> &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;';
                      $cat_opt_nom=$cat_opt_presta['Cat_opt']['cat_optname'];?>
                      <?php echo $this->Form->postLink(
                        '',
                        array('controller' => 'cat_opts', 'action' => 'suppr_check',$structure_id,$cat_opt_presta['Prestation']['id'],$cat_opt_presta['Cat_opt']['id']),
                            array('class'=>'btn btn-warning btn-xs glyphicon glyphicon-remove',
                              "title"=>"supprimer la catégorie de l'option"),
                            array('confirm' => 'Etes-vous sûr ?')
                      );?>
                      <?php echo $this->Html->link(
                        '',
                        array('controller' => 'prestations', 'action' => 'visible',$structure_id,$cat_opt_presta['Option']['id']),
                            array('class'=>'btn btn-primary btn-xs glyphicon glyphicon-eye-open',
                              "title"=>"rendre visible aux utilisateurs")

                      );?></h4><?php
                    }
                    // Remplissage des categories
                    foreach ($cat_opt_prestas as $cat_opt_presta2) {
                      if ($cat_opt_presta['Cat_opt_presta']['id']==$cat_opt_presta2['Cat_opt_presta']['id'] &&
                        $cat_opt_presta['Cat_opt_presta']['cat_opt_id']==$cat_opt_presta2['Cat_opt_presta']['cat_opt_id']) {
                        echo $cat_opt_presta['Option']['optionname'].' | prix : ';
                        if(isset($cat_opt_presta['Cat_opt_presta']['opt_nv_prix']) && $cat_opt_presta['Cat_opt_presta']['opt_nv_prix']!=0){
                          echo $cat_opt_presta['Cat_opt_presta']['opt_nv_prix'].'&emsp;&emsp;&emsp;&emsp;';
                        }else{
                          echo $cat_opt_presta['Option']['prix'].'&emsp;&emsp;&emsp;&emsp;';
                        } ?>
                        <?php echo $this->Html->link(
                          '',
                          array('controller' => 'cat_opt_prestas', 'action' => 'edit_cat_opt_id',$structure_id,$cat_opt_presta['Cat_opt_presta']['id']),
                              array('class'=>'btn btn-default btn-xs glyphicon glyphicon-pencil',
                                "title"=>"rendre visible aux utilisateurs")
                        );?>
                        <?php echo $this->Form->postLink(
                          '',
                          array('controller' => 'options', 'action' => 'suppr_check',$structure_id,$cat_opt_presta['Cat_opt_presta']['id']),
                              array('class'=>'btn btn-warning btn-xs glyphicon glyphicon-remove',
                                "title"=>"supprimer l'option"),
                              array('confirm' => 'Etes-vous sûr ?')
                        );?>
                        <?php echo $this->Html->link(
                          '',
                          array('controller' => 'prestations', 'action' => 'visible',$structure_id,$cat_opt_presta2['Option']['id']),
                              array('class'=>'btn btn-primary btn-xs glyphicon glyphicon-eye-open',
                                "title"=>"rendre visible aux utilisateurs")
                        );?>
                        <br>
                      <?php  } ?><!-- fin du if $c-o-p/c-o-p/o-id==c-o-p2/o/id & c-o-p/c-o-p/c-o-id==c-o-p2/c-o-p/c-o-id-->
                    <?php  }  ?><!-- fin du for pour 336??? -->
                  <?php  }  ?><!-- fin du if  325.  -->
                <?php  } ;?><!-- fin du for  323.  -->
              <?php  } ;?><!-- fin du if  323.  -->
            </div>
          </div>
        <?php  } ?>
  <?php unset($cat_opt_nom); ?>
      <?php }; ?>
    <?php }; ?>
  <?php }; ?>
<?php }; ?>
<hr>
</div>
</div>