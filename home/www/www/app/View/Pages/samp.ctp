<!-- titre -->

<!-- Example row of columns -->
    <?php echo $this->element('samp/titre_admin_samp'); ?>

<!-- Example row of columns -->
    <?php echo $this->element('samp/menu_admin'); ?>
<hr>
<!-- Example row of columns -->
    <div class="thumbnail">
      <?php echo $this->Html->image('pub/728x90.png', array('alt' => 'CakePHP')); ?>
    </div>
<!-- Example row of columns -->
<div class="row">
  <div class="col-md-12">
    <h5>Ajout une news assolive</h5>
    <?php //Vers l'ajout d'une news assolive
    echo $this->Html->link(__('Nouvelle Assolivenews'), array('controller' => 'assolivenouvs','action' => 'add')); ?>
    <h5> Liste des news Assolive</h5>

    <?php //Vers la liste des news assolive
    echo $this->Html->link(__('Liste Assolivenouvs'), array('controller' => 'assolivenouvs','action' => 'admin_index')); ?>
    <br>

    <br><?php echo $this->Html->link(__('List Structures'), array('controller' => 'structures', 'action' => 'index')); ?> 
    <br><?php echo $this->Html->link(__('New Structure'), array('controller' => 'structures', 'action' => 'add')); ?> 

    <hr>

    <?php echo $this->Html->link(__('List Planch Pratiquant Prestations'), array('controller' => 'planch_pratiquant_prestations', 'action' => 'index')); ?> 
    <br><?php echo $this->Html->link(__('New Planch Pratiquant Prestation'), array('controller' => 'planch_pratiquant_prestations', 'action' => 'add')); ?>

    <hr>

    <?php echo $this->Html->link(__('liste des tags'), array('controller'=>'tags', 'action' => 'index')); ?>
    <br><?php echo $this->Html->link(__('New Tag'), array('controller'=>'tags', 'action' => 'add')); ?>

    <hr>
    <!-- edition du contenu des tags souhaités -->
    <h4>edition du contenu des tags souhaités</h4>
    <?php echo $this->Html->link(__('liste des tags souhaités'), array('controller'=>'tagssouhaits', 'action' => 'edit')); ?>
  </div>
</div>
