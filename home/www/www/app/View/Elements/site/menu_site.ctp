<div class="row">
  <div class="col-md-12">
      <span class="glyphicon glyphicon-chevron-right"></span>Menu Site
  </div>
</div>
<div class="row">
    <div class="col-md-12">

      <?php echo $this->Html->link(
        'Infos',
        array('controller' => 'sites', 'action' => 'infos',$structure_id),
            array('class'=>'btn btn-info btn-lg')
      );?>

      <?php echo $this->Html->link(
        'News',
        array('controller' => 'sites', 'action' => 'nouvelles',$structure_id),
            array('class'=>'btn btn-primary btn-lg')
      );?>

      <?php echo $this->Html->link(
        'Historique/présentation',
        array('controller' => 'sites', 'action' => 'histo',$structure_id),
            array('class'=>'btn btn-primary btn-lg')
      );?>
      <?php echo $this->Html->link(
        'Prestations',
        array('controller' => 'sites', 'action' => 'prestations',$structure_id),
            array('class'=>'btn btn-primary btn-lg')
      );?>

      <?php echo $this->Html->link(
        'Agenda',
        array('controller' => 'agendas', 'action' => 'index',$structure_id),
            array('class'=>'btn btn-primary btn-lg')
      );?>




    </div>
</div>