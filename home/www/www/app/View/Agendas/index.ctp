<!-- Titre principal de la page -->
<div class="jumbotron">
  <div class="container">
    <h1>Agenda de votre site</h1>
    note de dèv. : a partir du niveau admin(il peut déléguer aux gestionnaires.
  </div>
</div>

    <div class="container">
      <!-- Example row of columns -->
      <div class="row">
        <div class="col-md-12">
          <?php echo $this->element('menu_site'); ?>
        </div>
      </div>
      <!-- Example row of columns -->
          <div class="thumbnail">
            <?php echo $this->Html->image('pub/728x90.png', array('alt' => 'ASSO LIVE')); ?>
          </div>
      <hr>
      <!-- Example row of columns -->
      <div class="row">
        <div class="col-md-12">
          <?php echo $this->element('menu_agenda'); ?>
        </div>
      </div>
      <!-- Example row of columns -->
      <div class="row">
        <div class="col-md-12">
      <?php echo $this->Calendar->display('2015-04-27', $options=array(), $events);?>
        </div>
      </div>
      <hr>
      <?php debug($events);?>