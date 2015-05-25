
<!-- Example row of columns -->
<div class="row">
  <div class="col-md-12">
      <span class="glyphicon glyphicon-chevron-right"></span>Menu Sitesconfig
  </div>
</div>
<div class="row">
    <div class="col-md-12">

      <?php echo $this->Html->link(
        'Accueil',
        array('controller' => 'sitesconfigs', 'action' => 'Index',$structure_id),
            array('class'=>'btn btn-info btn-lg')
      );?>
      <?php echo $this->Html->link(
        'Infos',
        array('controller' => 'sitesconfigs', 'action' => 'infos',$structure_id),
            array('class'=>'btn btn-primary btn-lg')
      );?>

      <?php echo $this->Html->link(
        'News',
        array('controller' => 'sitesconfigs', 'action' => 'nouvelles',$structure_id),
            array('class'=>'btn btn-primary btn-lg')
      );?>

      <?php echo $this->Html->link(
        'Présentation',
        array('controller' => 'sitesconfigs', 'action' => 'histo',$structure_id),
            array('class'=>'btn btn-primary btn-lg')
      );?>
      <?php echo $this->Html->link(
        'Prestations',
        array('controller' => 'sitesconfigs', 'action' => 'prestations',$structure_id),
            array('class'=>'btn btn-primary btn-lg')
      );?>
      <span class="pull-right">

      <?php echo $this->Html->link(
        'Spots',
        array('controller' => 'sites', 'action' => 'albums'),
            array('class'=>'btn btn-info btn-lg')
      );?>

      <?php echo $this->Html->link(
        'ALbums',
        array('controller' => 'sites', 'action' => 'albums'),
            array('class'=>'btn btn-info btn-lg')
      );?>

      <?php echo $this->Html->link(
        'Magasin',
        array('controller' => 'magasins', 'action' => 'index'),
            array('class'=>'btn btn-success btn-lg')
      );?>

      <?php echo $this->Html->link(
        'Nous contacter',
        array('controller' => 'site', 'action' => 'contact_us'),
            array('class'=>'btn btn-success btn-lg')
      );?>
      </span>



    </div>
</div>