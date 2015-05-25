<div class="row">
        <div class="col-xs-12">
<h1>changer la catégorie de l'option</h1>
<?php
echo $this->Form->create('Cat_opt_presta', array(
    'inputDefaults' => array(
     'label' => false,
     'div' => array(
        'class'=>"form")
    )
 ));
?><h2><small>Option ...</small></h2><?php
echo $cat_opt_prestas['Option']['optionname'];



?><h2><small>Choisir si cette option se range dans une des catégories de cette prestation</small></h2><?php
echo $this->Form->input('Cat_opt_presta.cat_opt_id', array(
    'label' => 'Nom de la catégorie parente',
    'class'=> 'form-control',
    'options'=> $cat_opts
));
echo $this->Form->input('Cat_opt_presta.prestation_id', array('type' => 'hidden'));
echo $this->Form->input('Cat_opt_presta.option_id', array('type' => 'hidden'));
echo $this->Form->end('Sauvegarder');

?>
		</div>
	</div>