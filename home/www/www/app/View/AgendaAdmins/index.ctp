

    <!-- Titre principal de la page -->
      <?php echo $this->element('admin_agenda/titre_admin_agenda'); ?>

    <div class="container">
      <!-- Example row of columns -->
      <div class="row">
        <div class="col-md-12">
          <?php echo $this->element('admin_agenda/menu_admin_agenda'); ?>
        </div>
      </div>
      <hr>
      <!-- Example row of columns -->
          <?php echo $this->element('pub/pub_principal'); ?>
      <!-- Example row of columns -->
      <div class="row">
        <div class="col-md-12">
            <span class="glyphicon glyphicon-chevron-right"></span><a href="#"><span >Accueil</span ></a>
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
               <br>-les creneaux de votre agenda. Cela sera rapide.
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