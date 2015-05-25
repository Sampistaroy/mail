<!-- Titre principal de la page -->
<div class="jumbotron">
    <h1>Que proposons-nous ?</h1>
</div>

  <!-- Example row of columns -->
  <div class="row">
    <div class="col-md-12">
      <?php  echo $this->element('menu_accueil'); ?>
    </div>
  </div>
  <hr>
  <!-- Example row of columns -->
      <div class="thumbnail">
        <?php echo $this->Html->image('pub/728x90.png', array('alt' => 'CakePHP')); ?>
      </div>
  <!-- Example row of columns -->
  <div class="row">
    <div class="col-md-12">
        <span class="glyphicon glyphicon-chevron-right"></span><a href="#"><span >Découvrir étape: 1 / ?</span ></a>
    </div>
  </div>
  <hr>
  <!-- Example row of columns -->
  <div class="row">
    <div class="col-md-12">
    	Bonjour & Bienvenu,
    	<br><h4>AssoLive</h4> propose:
    	<h4>un site prédéfinis dont vous pouvez modifier le contenu:</h4>
    	<br>// mettre une image.
    	<br>Ne vous compliquez pas la tâches à l'inventer on l'a fait pour vous !!
    	<br>ce site comporte les principaux contenus nécessaires. Finis de se demander ce que l'on doit mettre sur son site.
    	<hr>

    	<h4>un moteur de recherche spécifique</h4>
    	Lorsque vous créez votre compte, une structure et un site vous sont attribués.
    	<br>Cette structure et ce site seront facile à retrouver dans Assolive grâce à sa page de recherche et aux tags que vous pouvez configurer dans votre interface structure
    	<br>// image photo

    	<hr>
    	<h4>un agenda facile à configurer:</h4>

		<hr>
    	<h4>une gestion des fiches de vos pratiquants simple</h4>
		<hr>
    	<h4>une possibilité de réserver en ligne</h4>
		<hr>
    	<h4>une carte du monde avec les points importants à vos yeux partagé ou non avec les autres</h4>
      <hr>

          <?php echo $this->Html->link(
              's\'inscrire',
              array('controller' => 'users', 'action' => 'signup'),
              array('class'=>'btn btn-primary btn-lg')
          );?>
    </div>
  </div>
  <hr>