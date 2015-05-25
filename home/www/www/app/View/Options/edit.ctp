<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <h1>Modifier l'option</h1>
            <?php
            echo $this->Form->create('Option', array(
                'inputDefaults' => array(
                 'label' => false,
                 'div' => array(
                    'class'=>"form")
                )
             ));
            ?><h2><small>Option ...</small></h2><?php

            echo $this->Form->input('Option.optionname', array(
                'label' => 'Nom',
                'class'=> 'form-control'
            ));
            echo $this->Form->textarea('Option.description', array(
                'label' => 'Nom de la catégorie parente',
                'class'=> 'form-control',
                'row'=> 3
            ));
            echo $this->Form->input('Option.prestation_id', array('type' => 'hidden'));
            echo $this->Form->input('Option.option_id', array('type' => 'hidden'));
            echo $this->Form->end('Sauvegarder');

            ?>
		</div>
	</div>
</div>
