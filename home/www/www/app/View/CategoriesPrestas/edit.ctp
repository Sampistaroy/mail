<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <h1>editer la catégorie</h1>
            <?php
            echo $this->Form->create('Categories_presta', array(
                'inputDefaults' => array(
                 'label' => false,
                 'div' => array(
                	'class'=>"form-group")
                )
             ));
            echo $this->Form->input('Categories_presta.name', array(
                'label' => 'Nom de la catégorie',
                'class'=> 'form-control'
            ));
            echo $this->Form->input('Categories_presta.parent_id', array(
                'label' => 'Nom de la catégorie parente',
                'class'=> 'form-control',
                'options'=> $cat_prestas
            ));
            echo $this->Form->input('Categories_presta.id', array('type' => 'hidden'));
            echo $this->Form->input('Categories_presta.lft', array('type' => 'hidden'));
            echo $this->Form->input('Categories_presta.rght', array('type' => 'hidden'));
            echo $this->Form->input('Categories_presta.structure_id', array('type' => 'hidden'));
            echo $this->Form->end('Sauvegarder');
            debug($this->data);?>
        </div>
    </div>
</div>