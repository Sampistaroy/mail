<!-- Fichier: /app/View/Posts/edit.ctp -->
<div class="container">
    <div class="row">
        <div class="col-xs-12">
        <h1>Ajouter une CAT_option_PRESTA</h1>
            <?php
            echo $this->Form->create('Cat_opt_presta', array(
                'inputDefaults' => array(
                 'label' => false,
                 'div' => array(
                	'class'=>"form")
                )
             ));
            ?><h2><small>Créer une nouvelle option ou...</small></h2><?php

            //nouvelle option 3 champs
            echo $this->Form->input('optionname', array(
                'label' => 'Nom de l\'option',
                'class'=> 'form-control'
                ));
            echo $this->Form->input('description', array(
                    'label' => 'Description',
                    'class'=> 'form-control'
                ));
            echo $this->Form->input('prix', array(
                    'label' => 'Prix :',
                    'class'=> 'form-control'
            ));

            ?><h2><small>.. Utiliser une option existante</small></h2><?php

            $options = array('new' => 'nouvelle option');
            foreach ($options_prestas as $key => $value) {
                $options[$key]=$value;
            }
            echo $this->Form->radio('id',
                $options,array(
                'legend' => false,
                'class'=>'btn btn-default btn-xs glyphicon glyphicon-pencil'));


            ?><h2><small>Attribuer un prix particulier pour cette prestation/ categorie_options</small></h2><?php
            echo $this->Form->input('Cat_opt_presta.opt_nv_prix', array(
                'label' => 'prix différent :',
                'class'=> 'form-control'
            ));


            ?><h2><small>Choisir si cette option se range dans une/des prestations/catégories</small></h2><?php
            echo $this->Form->input('Cat_opt_presta.cat_opt_id', array(
                'label' => 'Nom de la catégorie parente',
                'class'=> 'form-control',
                'options'=> $cat_opts
            ));
            echo $this->Form->input('Cat_opt_presta.prestation_id', array(
                'label' => 'Nom de la prestation parente',
                'class'=> 'form-control',
                'options'=> $prestations
            ));
            echo $this->Form->input('visible', array('type' => 'hidden'));
            echo $this->Form->end('Sauvegarder');
            ?>
        </div>
    </div>
</div>