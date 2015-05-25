
        <span class="dropdown">
          <a href="#" class="dropdown-toggle btn btn-primary btn-lg" data-toggle="dropdown" role="button" aria-expanded="false">Ma Structure <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li class="dropdown-header">Votre site</li>
            <li>    <?php echo $this->Html->link(
                    'Visiter',
                    array('controller' => 'sites', 'action' => 'index'),
                        array('class'=>'btn btn-success')
                );?></li>
            <li><a href="#">Configurer</a></li>
            <li class="dropdown-header">Votre agenda</li>
            <li><a href="#">Visiter</a></li>
            <li><a href="#">Gérer</a></li>
            <li><a href="#">Configurer</a></li>
          </ul>
        </span>