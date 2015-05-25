<div class="row">
  <div class="col-md-12">
      <span class="glyphicon glyphicon-chevron-right"></span>Menu Site
  </div>
</div>
<div class="row">
    <div class="col-md-12">

      <?php echo $this->Html->link(
        'Accueil',
        array('controller' => 'structure_gestions', 'action' => 'index',$structure_id),
            array('class'=>'btn btn-info btn-lg')
      );?>
      <?php echo $this->Html->link(
        'Pratiquants',
        array('controller' => 'pratiquants', 'action' => 'index',$structure_id),
            array('class'=>'btn btn-info btn-lg')
      );?>
      <?php echo $this->Html->link(
        'Agenda',
        array('controller' => 'structure_gestions', 'action' => 'agenda',$structure_id),
            array('class'=>'btn btn-info btn-lg')
      );?>
      <?php echo $this->Html->link(
        'Souhaits',
        array('controller' => 'pratiquants', 'action' => 'index',$structure_id),
            array('class'=>'btn btn-info btn-lg')
      );?>
      <?php echo $this->Html->link(
        'Notes',
        array('controller' => 'structure_gestions', 'action' => 'agenda',$structure_id),
            array('class'=>'btn btn-info btn-lg')
      );?>


    </div>
</div>