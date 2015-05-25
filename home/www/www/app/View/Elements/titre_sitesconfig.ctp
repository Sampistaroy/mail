<div class="jumbotron">
    <h1><?php echo $infos['0']['Info']['structurename']; ?></h1>
    <p class=" pull-right">
      <span class="thumbnail pull-right" >
        <?php echo $this->Html->image('temporaire/336x280-bientot_vos_images.png', array('alt' => 'Logo','style'=>"max-height:150px")); ?>
      </span>
    </p>
    <p>
      <ul>
        <li>
          Coordonnées de la structure:
          <ul>
            <li><?php echo $infos['0']['Info']['rue_name'].', '.$infos['0']['Info']['rue_numero'].'<br>'.$infos['0']['Info']['code_postal'].', '.$infos['0']['Info']['ville'].
            '<br>'.$infos['0']['Info']['pays'].', '.$infos['0']['Info']['region']; ?>
          </li>
          <li>map: <?php echo $infos['0']['Info']['geoloc_x'].' | '.$infos['0']['Info']['geoloc_y']; ?>
          </li>
          <li>téléphone: <?php echo $infos['0']['Info']['telephone']; ?>
          </li>
          <li>Email:  <?php echo $infos['0']['Info']['mail']; ?>
          </li>
          <li>
            <?php echo $this->Html->link(
              'Agenda',
              array('controller' => 'sites', 'action' => 'agenda')
              );?>
            </li>
          </ul>
        </li>
      </ul>
      <?php echo $this->Html->link('Editer',
                    array('controller' => 'infos', 'action' => 'edit',$structure_id),
                    array('class'=>'btn btn-default btn-sm')
                  );?>
    </p>
</div>