<div class="row">
    <div class="col-md-12">

      <?php echo $this->Html->link(
        'Mois',
        array('controller' => 'agendas', 'action' => 'gestion',$structure_id),
            array('class'=>'btn btn-success btn-lg')
      );?>

      <?php echo $this->Html->link(
        'Semaine',
        array('controller' => 'agendas', 'action' => 'gestion',$structure_id),
            array('class'=>'btn btn-success btn-lg')
      );?>


      <?php echo $this->Html->link(
        'Jour',
        array('controller' => 'agendas', 'action' => 'gestion',$structure_id),
            array('class'=>'btn btn-success btn-lg')
      );?>



    </div>
</div>