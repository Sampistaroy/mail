<!-- Titre principal de la page -->
  <?php echo $this->element('site/titre_site'); ?>


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
      <span class="glyphicon glyphicon-chevron-right"></span><h3>Prestations de la structure</h3>
  </div>
</div>
<hr>

<?php if(isset($cat_prestas)){ ?>
  <?php foreach ($cat_prestas as $cat_presta_id => $cat_presta_name){ ?>
    <!-- Example row of columns -->
    <div class="row">
      <div class="col-md-6 deco-sous-titre">
        <h2><?php echo $cat_presta_name; ?></h2>
      </div>
    </div><!-- div row cat_presta -->
    <!--  -->
    <!-- fin affichage CAT_PRESTA -->
    <!-- DeBUT Boucle et affichage PRESTATIONS -->
    <!--  -->

    <?php if (isset($prestas) && !empty($prestas)){ ?>
      <?php foreach ($prestas as $presta ){ ?>
        <!-- Ligne d'une prestation -->
        <?php  if ($presta['Prestation']['categories_presta_id']==$cat_presta_id) { ?>
          <!-- Example row of columns -->
          <div class="row">
            <div class="col-xs-4 col-xs-offset-1 text-right">
              <h4><?php echo $presta['Prestation']['prestationname']; ?></h4>
              <p><?php echo $presta['Prestation']['description']; ?></p>
              <p>prix : <?php echo $presta['Prestation']['prix']; ?></p>
            </div>
            <!--  -->
            <!--  -->
            <!-- Debut des OPTIONS-->
            <!--  -->
            <?php if (isset($cat_opt_prestas)) { ?>
              <!-- Option sans catégories pour cette prestation -->
              <?php foreach ($cat_opt_prestas as $cat_opt_presta) { ?>
                <!-- Test si l'option a une concordance avec la prestation et l'option n'a pas de catégorie -->
                <?php  if ($cat_opt_presta['Cat_opt_presta']['cat_opt_id']==0 && 
                $cat_opt_presta['Cat_opt_presta']['prestation_id']==$presta['Prestation']['id']) { ?>
                  <?php if (!isset($cat_opt_exist)) { ?>
                    <div class="col-xs-7">
                    <?php $cat_opt_exist=1; ?>
                  <?php } ?>
                  option : <?php  echo $cat_opt_presta['Option']['optionname'].' | prix : ';?>
                <?php } ?><!-- if opt  sans catégorie  -->
              <?php } ?><!-- for opt  sans catégorie  -->
              <?php unset($cat_opt_presta); ?>
                <!-- FIN Options sans catégorie -->
                <!--  -->
                <!--  -->
                <!-- Debut des OPTIONS-->
                <!--  -->
                <!-- Option avec catégories pour cette prestation -->
                <?php foreach ($cat_opt_prestas as $cat_opt_presta) { ?>
                  <!-- On ne prend que les OPTIONS avec categorie et qui correspondent à cette prestation -->
                  <?php  if ($cat_opt_presta['Cat_opt_presta']['cat_opt_id']!=0 && 
                  $cat_opt_presta['Cat_opt_presta']['prestation_id']==$presta['Prestation']['id']) {
                    // Construction de la liste des catégories
                    if(isset($cat_opt_nom) && $cat_opt_nom!=$cat_opt_presta['Cat_opt']['cat_optname']){?>
                      <?php if (!isset($cat_opt_exist)) { ?>
                        <div class="col-xs-7">
                        <?php $cat_opt_exist=1; ?>
                      <?php } ?>
                      <?php echo '<h4><span style="color:rgba(0,0,0,1)">'.$cat_opt_presta['Cat_opt']['cat_optname'].'</span> &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;';
                      $cat_opt_nom=$cat_opt_presta['Cat_opt']['cat_optname']; ?></h4><?php
                    }elseif (!isset($cat_opt_nom)) { ?>
                      <?php if (!isset($cat_opt_exist)) { ?>
                        <div class="col-xs-7">
                        <?php $cat_opt_exist=1; ?>
                      <?php } ?>
                      <?php echo '<h4><span style="color:rgba(0,0,0,1)">'.$cat_opt_presta['Cat_opt']['cat_optname'].'</span> &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;';
                      $cat_opt_nom=$cat_opt_presta['Cat_opt']['cat_optname'];?></h4><?php
                    }
                    // Remplissage des categories
                    foreach ($cat_opt_prestas as $cat_opt_presta2) {
                      if ($cat_opt_presta['Cat_opt_presta']['id']==$cat_opt_presta2['Cat_opt_presta']['id'] &&
                      $cat_opt_presta['Cat_opt_presta']['cat_opt_id']==$cat_opt_presta2['Cat_opt_presta']['cat_opt_id']) {
                        echo $cat_opt_presta['Option']['optionname'].' | prix : ';
                        if(isset($cat_opt_presta['Cat_opt_presta']['opt_nv_prix']) && $cat_opt_presta['Cat_opt_presta']['opt_nv_prix']!=0){ ?>
                          <?php if (!isset($cat_opt_exist)) { ?>
                            <div class="col-xs-7">
                            <?php $cat_opt_exist=1; ?>
                          <?php } ?>
                          <?php echo $cat_opt_presta['Cat_opt_presta']['opt_nv_prix'].'&emsp;&emsp;&emsp;&emsp;';
                        }else{ ?>
                          <?php if (!isset($cat_opt_exist)) { ?>
                            <div class="col-xs-7">
                            <?php $cat_opt_exist=1; ?>
                          <?php } ?>
                          <?php echo $cat_opt_presta['Option']['prix'].'&emsp;&emsp;&emsp;&emsp;'; ?>
                        <?php } ?>
                      <br>
                      <?php  } ?><!-- fin du if $c-o-p/c-o-p/o-id==c-o-p2/o/id & c-o-p/c-o-p/c-o-id==c-o-p2/c-o-p/c-o-id-->
                    <?php  }  ?><!-- fin du for pour ??? -->
                  <?php  }  ?><!-- fin du if  .  -->
                <?php  } ;?><!-- fin du for  pour Option avec catégories pour cette prestation -->
              </div>
              <?php unset($cat_opt_exist); ?>
          </div><!-- div row presta  FIN PRESTATIONS -->
            <?php } ?><!-- if opt FIN Options  -->
        <?php } ?><!-- if presta id == -->
      <?php } ?><!-- for prestas -->
      <?php unset($presta); ?>
    <?php } ?><!-- if prestas -->
      <!--  -->
      <!--  -->
      <!-- FIN DU IF ET FOR DE CAT_PRESTA -->
  <?php } ?><!-- for cat_prestas -->
  <?php unset($cat_presta); ?>
<?php } ?><!-- if cat_prestas -->


  <hr>
