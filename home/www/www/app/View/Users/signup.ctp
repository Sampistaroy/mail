<div class="container">
    <div class="row">
        <div class="col-xs-12">
        	<h2> S'enregistrer</h2>
		<?php
			echo $this->Form->create('User');
			echo $this->Form->input('username', array('label'=>"Login :"));
			echo $this->Form->input('password', array('label'=>"Mot de pass :"));
			echo $this->Form->input('mail', array('label'=>"Email :"));
			echo $this->Form->end("S enregistrer"); ?>
		</div>
	</div>
  <div class="row">
    <div class="col-md-12">
    	Bonjour & Bienvenu,
    	<br><h4>AssoLive</h4> propose:
    	<h4>un site prédéfinis dont vous pouvez modifier le contenu:</h4>
    	<br>ce site se compose de l'essentielle pour une structure souhaitant avoir une vitrine interactive sur le web.
    	<hr>

    	<h4>un moteur de recherche spécifique</h4>
    	Lorsque vous créez votre compte, une structure et un site vous sont attribués.
    	<br>Cette structure et ce site seront facile à retrouver dans Assolive grâce à sa page de recherche et aux tags.
    	<hr>
    	<h4>un agenda facile à configurer:</h4>
		<hr>
    	<h4>une gestion des fiches de vos pratiquants simple</h4>
		<hr>
    	<h4>une possibilité de réserver en ligne</h4>
		<hr>
    	<h4>une carte du monde avec les points importants à vos yeux partagé ou non avec les autres</h4>
    </div>
  </div>
</div>