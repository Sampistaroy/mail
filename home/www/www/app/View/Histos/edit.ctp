
<h1>editer votre présentation</h1>
<?php
echo $this->Form->create('Histo', array(
    'inputDefaults' => array(
     'label' => false,
     'div' => array(
        'class'=>"form-group")
    )
 ));
echo $this->Form->textarea('contenu', array(
    'label' => 'Contenu de votre page:',
    'class'=> 'form-control',
    'rows' => '10')
    );
echo $this->Form->input('id', array('type' => 'hidden'));
echo $this->Form->input('structure_id', array('type' => 'hidden'));
echo $this->Form->end('Sauvegarder');
?>