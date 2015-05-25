<!-- Fichier: /app/View/Posts/edit.ctp -->
    <div class="row">
        <div class="col-xs-12">
        <h1>Ajouter une catégorie à cette Option</h1>
            <?php
            echo $this->Form->create(null, array(
                'inputDefaults' => array(
                 'label' => false,
                 'div' => array(
                  'class'=>"radio")
                )
             ));
            ?><h2><small>Créer une nouvelle catégorie ou ... :</small></h2><?php


            //nouvelle option 3 champs
            echo $this->Form->input('Cat_opt.cat_optname', array(
                'label' => 'Nom de la nouvelle catégorie pour les options',
                'class'=> 'form-control'
                ));

            ?><h2><small>..ou Utiliser une catégorie existante</small></h2><?php

            $cat_opts_array = array('new' => 'nouvelle catégorie pour les options');
            foreach ($cat_opts as $key => $value) {
                $cat_opts_array[$key]=$value;
            }
            echo $this->Form->radio('Cat_opt.id',
                $cat_opts_array,array(
                'legend' => false,
                'class'=>'radio'));

            ?><h2><small>Choisir qu'elle option ranger dedans</small></h2><?php

            foreach ($options_prestas as $key => $value) {
                $options[$key]=$value;
            }
            echo $this->Form->input('Cat_opt_presta.option_id', array(
                'label' => 'Nom de l\'option',
                'class'=> 'form-control',
                'options'=> $options
            ));

            echo $this->Form->input('Cat_opt_presta.prestation_id', array('type' => 'hidden'));
            echo $this->Form->end('Sauvegarder');
            ?>
        </div>
    </div>