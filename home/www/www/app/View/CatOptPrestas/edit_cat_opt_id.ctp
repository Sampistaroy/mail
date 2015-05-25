<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <h1>Modifier la catégorie et/ou le prix de cette l'option pour cette prestation</h1>
            <?php
            echo $this->Form->create('Cat_opt_presta', array(
                'inputDefaults' => array(
                 'label' => false,
                 'div' => array(
                    'class'=>"form")
                )
             ));
            ?><h2><small>Option : </small><?php echo $cat_opt_prestas['Option']['optionname'];?></h2>
            <br>
            <?php echo $this->Html->link(
              'éditer le nom',
              array('controller' => 'options', 'action' => 'edit',$structure_id,$cat_opt_prestas['Option']['id']),
                  array('class'=>'btn btn-default btn-xs glyphicon glyphicon-pencil',
                    "title"=>"supprimer l'option"),
                  array('confirm' => 'Etes-vous sûr ?')
            ); ?> (si vous editer le nom de l'option cela changera le nom de partout ou vous avez utilisé cette option).

            <?php
            echo $this->Form->input('Cat_opt_presta.opt_nv_prix', array(
                'label' => '<h2><small>Prix spécifique à cette prestation</small></h2>',
                'class'=> 'form-control'
            ));


            echo $this->Form->input('Cat_opt_presta.cat_opt_id', array(
                'label' => '<h2><small>Choisir si cette option se range dans une des catégories de cette prestation</small></h2>',
                'class'=> 'form-control',
                'options'=> $cat_opts
            ));
            echo $this->Form->input('Cat_opt_presta.structure_id', array('type' => 'hidden'));
            echo $this->Form->input('Cat_opt_presta.prestation_id', array('type' => 'hidden'));
            echo $this->Form->input('Cat_opt_presta.option_id', array('type' => 'hidden'));
            echo $this->Form->input('Cat_opt_presta.id', array('type' => 'hidden'));
            echo $this->Form->end('Sauvegarder',
                array(
                            'class' => 'btn btn-default'
            ));
            ?>
            <hr>
            <?php echo $this->Html->link(
                'Retour',
                array('controller' => 'sitesconfigs', 'action' => 'prestations',$structure_id),
                array('class'=>'btn btn-default',
                      "title"=>"rendre visible aux utilisateurs")

            );?>
		</div>
	</div>
</div>
