<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <h1>Editer la prestation</h1>
            <?php
            echo $this->Form->create('Prestation', array(
                'inputDefaults' => array(
                 'label' => false,
                 'div' => array(
                	'class'=>"form-group")
                )
             ));
            echo $this->Form->input('prestationname', array(
                'label' => 'Nom :',
                'class'=> 'form-control editor'
                ));
            echo $this->Form->textarea('description', array(
                'label' => 'Description :',
                'class'=> 'form-control editor',
                'rows'=> '3'
                ));
            echo $this->Form->input('prix', array(
                'label' => 'Prix',
                'class'=> 'form-control'
            ));
            echo $this->Form->input('categories_presta_id', array(
                'label' => 'Nom de la catégorie parente',
                'class'=> 'form-control',
                'options'=> $cat_prestas
            ));
            echo $this->Form->input('id', array('type' => 'hidden'));
            echo $this->Form->end('Sauvegarder');
            ?>
        </div>
    </div>
</div>