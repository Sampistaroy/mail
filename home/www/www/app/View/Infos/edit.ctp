<!-- Fichier: /app/View/Posts/edit.ctp -->
<div class="container">
    <div class="row">
        <div class="col-xs-12">
<h1>Editer les infos de la structure</h1>
<?php
echo $this->Form->create('Info', array(
    'inputDefaults' => array(
     'label' => false,
     'div' => array(
    	'class'=>"form-group")
    )
 ));
echo $this->Form->input('structurename', array(
    'label' => 'nom',
    'class'=> 'form-control'
));
echo $this->Form->input('logo', array(
    'label' => 'Description',
    'class'=> 'form-control'
));
echo $this->Form->input('pays', array(
    'label' => 'pays',
    'class'=> 'form-control'
));
echo $this->Form->input('region', array(
    'label' => 'region',
    'class'=> 'form-control'
));
echo $this->Form->input('ville', array(
    'label' => 'ville',
    'class'=> 'form-control'
));
echo $this->Form->input('rue_numero', array(
    'label' => 'rue_numero',
    'class'=> 'form-control'
));
echo $this->Form->input('rue_name', array(
    'label' => 'rue_name',
    'class'=> 'form-control'
));
echo $this->Form->input('rue_name', array(
    'label' => 'rue_name',
    'class'=> 'form-control'
));
echo $this->Form->input('code_postal', array(
    'label' => 'code_postal',
    'class'=> 'form-control'
));
echo $this->Form->input('geoloc_x', array(
    'label' => 'geoloc_x',
    'class'=> 'form-control'
));
echo $this->Form->input('geoloc_y', array(
    'label' => 'geoloc_y',
    'class'=> 'form-control'
));
echo $this->Form->input('telephone', array(
    'label' => 'telephone',
    'class'=> 'form-control'
));
echo $this->Form->input('mail', array(
    'label' => 'mail',
    'class'=> 'form-control'
));
echo $this->Form->input('description', array(
    'label' => 'description courte: "Qui sommes-nous ?"',
    'class'=> 'form-control'
));
echo $this->Form->input('id', array('type' => 'hidden'));
echo $this->Form->end('Sauvegarder');
?>
        </div>
    </div>
</div>