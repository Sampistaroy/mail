<div class="container">
  <div class="row">
    <div class="col-xs-12">
      <h1>Ajouter une catégorie de prestation</h1>
      <?php
      echo $this->Form->create('Categories_presta', array(
          'inputDefaults' => array(
           'label' => false,
           'div' => array(
          	'class'=>"form-group")
          )
       ));
      echo $this->Form->input('name', array(
          'label' => 'Nom de la catégorie',
          'class'=> 'form-control'
      ));
      echo $this->Form->input('parent_id', array(
          'label' => 'Nom de la catégorie parente',
          'class'=> 'form-control',
          'options'=> $cat_prestas
      ));
      echo $this->Form->input('structure_id', array('type' => 'hidden'));
      echo $this->Form->end('Sauvegarder');
      echo $this->Html->link(
      'Retour',
      array('controller' => 'sitesconfigs', 'action' => 'prestations',$structure_id),
        array('class'=>'btn btn-success btn-xs',
          "title"=>"rendre visible aux utilisateurs")
      );
      ?>
    </div>
  </div>
</div>