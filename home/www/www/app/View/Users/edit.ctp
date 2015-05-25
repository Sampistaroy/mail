
    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
      <div class="container">
        <h1>Mon Compte</h1>
        <p class="pull-right text-right">
        </p>
      </div>
    </div>

    <div class="container">
      <!-- Example row of columns -->
      <div class="row">
        <div class="col-xs-12">
          <?php echo $this->element('menu_compte'); ?>
        </div>
      </div>
      <hr>
      <!-- Example row of columns -->
      <div class="row">
        <div class="col-xs-12">
          <div class="thumbnail">
            <?php echo $this->Html->image('pub/728x90.png', array('alt' => 'CakePHP')); ?>
          </div>
        </div>
      </div>
      <!-- Example row of columns -->
      <div class="row">
        <div class="col-xs-12">
        	Modifier votre mot de pass<br>
			<?php $this->set('title_for_layout',"Editer mon profil"); ?>
			<?php echo $this->Form->create('User'); ?>
			<?php echo $this->Form->input('pass1',array('label'=>'nouveau mot de passe')); ?>
			<?php echo $this->Form->input('pass2',array('label' => 'confirmer mot de pass' )); ?>
			<?php echo $this->Form->end('Modifier'); ?>
        </div>
      </div>
      <!-- Example row of columns -->
      <div class="row">
        <div class="col-xs-12">
          <h2>Vos synchronisation</h2>

          <p>Google agenda
            <br>synchronise votre agenda google avec votre/vos agenda Asso Live</p>

          <p>Face Book
            <br>poster sur votre mur lorsque vous:
            <ul>
              <li>aller faire une activité: oui/non</li>
              <li>faites une activité: oui/non</li>
              <li>avez fais une activité: oui/non</li>
            </ul>
          </p>
          <p>Twitter
            <br>poster sur votre mur lorsque vous:
            <ul>
              <li>aller faire une activité: oui/non</li>
              <li>faites une activité: oui/non</li>
              <li>avez fais une activité: oui/non</li></p>
            </ul>
          
        </div>
      </div>
      <hr>