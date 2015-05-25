<div class="jumbotron">
  <div class="container">
    <h1><?php echo $infos['Info']['structurename']; ?></h1>
    <p class=" pull-right">
      <span class="thumbnail pull-right" >
        <?php echo $this->Html->image('logo/'.$infos['Info']['logo'], array('alt' => 'Logo','style'=>"max-height:150px")); ?>
      </span>
      <br><a class="btn btn-primary btn-lg" href="#" role="button">+ Suivre l'actualité de cette structure</a>
      <a class="btn btn-primary btn-lg" href="#" role="button" title="Asso Like">+<span class="glyphicon glyphicon-heart"></span></a>
    </p>
    <p>
      <ul>
        <li>
          Coordonnées de la structure:
          <ul>
            <li><?php echo $infos['Info']['rue_name'].', '.$infos['Info']['rue_numero'].'<br>'.$infos['Info']['code_postal'].', '.$infos['Info']['ville'].
            '<br>'.$infos['Info']['pays'].', '.$infos['Info']['region']; ?>
          </li>
          <li>téléphone: <?php echo $infos['Info']['telephone']; ?>
          </li>
          <li>Email:  <?php echo $infos['Info']['mail']; ?>
          </li>
          </ul>
        </li>
      </ul>
    </p>
  </div>
</div>