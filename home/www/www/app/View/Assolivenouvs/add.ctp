<div class="row">
    <div class="col-xs-12">
        <h1>Ajouter la nouvelle</h1>

        <?php
        echo $this->Form->create('Assolivenouv', array(
            'inputDefaults' => array(
             'label' => false,
             'div' => array(
                'class'=>"form-group")
            )
         ));
        echo $this->Form->input('titre', array(
            'label' => 'Titre',
            'class'=> 'form-control'
        ));
        echo $this->Form->input('description', array(
            'label' => 'Description',
            'class'=> 'form-control'
        ));
        echo $this->Form->textarea('contenu', array(
            'label' => 'Contenu',
            'class'=> 'form-control',
            'rows' => '10')
            );
        echo $this->Form->end('Sauvegarder');
        ?>
    </div>
</div>