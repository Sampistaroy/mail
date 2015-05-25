<div class="row">
  <div class="col-md-12">
      <span class="glyphicon glyphicon-chevron-right"></span>Menu Site
  </div>
</div>
<div class="row">
    <div class="col-md-12">

      <?php echo $this->Html->link(
        'Accueil',
        array('controller' => 'structure_admins', 'action' => 'index',$structure_id),
            array('class'=>'btn btn-info btn-lg')
      );?>
      <?php echo $this->Html->link(
        'Receptacle',
        array('controller' => 'receptacles', 'action' => 'index',$structure_id),
            array('class'=>'btn btn-info btn-lg')
      );?>
      <?php echo $this->Html->link(
        'Pratiquant',
        array('controller' => 'pratiquants', 'action' => 'index',$structure_id),
            array('class'=>'btn btn-info btn-lg')
      );?>


    </div>
</div>