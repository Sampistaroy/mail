<!-- Titre principal de la page -->
<div class="jumbotron">
  <div class="container">
    <h1>Configurer votre site</h1>
    note de dèv. : a partir du niveau admin(il peut déléguer aux gestionnaires.
  </div>
</div>

    <div class="container">
      <!-- Example row of columns -->
      <div class="row">
        <div class="col-md-12">
          <?php echo $this->element('menu_sitesconfig'); ?>
        </div>
      </div>
      <hr>
      <!-- Example row of columns -->
          <div class="thumbnail">
            <?php echo $this->Html->image('pub/728x90.png', array('alt' => 'ASSO LIVE')); ?>
          </div>
      <!-- Example row of columns -->
      <div class="row">
        <div class="col-md-12">
            <span class="glyphicon glyphicon-chevron-right"></span><a href="#"><span >Accueil_config_site</span ></a>
        </div>
      </div>
      <hr>
      <!-- Example row of columns -->
      <div class="row">
        <div class="col-md-12">
          <div class="panel-heading" role="tab" id="headingOne">
            <h4 class="panel-title">
              <a class="btn btn-default" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                Que va-t-on configurer ? <span class="glyphicon glyphicon-chevron-down"></span>
              </a>
            </h4>
          </div>
          <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
            <div class="panel-body">
              Cette section de pages vous permet de configurer:
               <br>-les pages de votre site:
               <br>-suivez les étapes pour tout configurer à votre convenance.
               <br>

            </div>
          </div>
      <!-- Example row of columns -->
      <div class="row">
        <div class="col-md-12">
          Commencer la configuration de votre site.
          <?php echo $this->Html->link(
            'Commencer',
            array('controller' => 'sitesconfigs', 'action' => 'infos',$structure_id),
                array('class'=>'btn btn-info btn-lg')
          );?>
        </div>
      </div>
        </div>
      </div>
      <hr>