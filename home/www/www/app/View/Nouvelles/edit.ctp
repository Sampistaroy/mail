<!-- Fichier: /app/View/Posts/edit.ctp -->

<h1>Editer la nouvelle</h1>
<?php
echo $this->Form->create('Nouvelle', array(
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
    'class'=> 'form-control editor',
	'rows' => '10')
    );
echo $this->Form->input('id', array('type' => 'hidden'));
echo $this->Form->end('Sauvegarder');
?>