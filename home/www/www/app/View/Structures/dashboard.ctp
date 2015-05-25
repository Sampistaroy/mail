<!-- Titre principal de la page -->
<div class="jumbotron">
  <div class="container">
    <h1>Liste de vos structure et actions dessus</h1>
    note de dèv. : a partir du niveau membre.
  </div>
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
        <span class="glyphicon glyphicon-chevron-right"></span><a href="#"><span >Accueil_structure</span ></a>
    </div>
  </div>
  <hr>
  <!-- Example row of columns -->
  <div class="row">
    <div class="col-md-12">
        <h3>Dont vous êtes propriétaires</h3>

    <?php foreach ($structures_users as $structure){ 
    	if($structure['Structures_user']['role']=='1'){ ?>
	        <!-- Example row of columns -->
	        <div class="row">
	        	<div class="col-md-12">
					      	<div class="row">
					        	<div class="col-md-6">
					        		<?php  echo $structure['Structure']['Info']['structurename'].', statut : ';?>
					        		<?php echo $structure['Structure']['visible'];?>
					        	</div>
					        <div class="col-md-6">
									<span class="dropdown-header">Votre site</span>
									<?php echo $this->Html->link(
									    'Visiter',
									    array('controller' => 'sites', 'action' => 'infos',$structure['Structure']['id']),
									    array('class'=>'btn btn-default')
									    );?>
									<?php echo $this->Html->link(
										'Configurer',
										array('controller' => 'sitesconfigs', 'action' => 'index',$structure['Structure']['id']),
										array('class'=>'btn btn-default')
										);?>
				  				<span class="dropdown-header">Votre structure</span>
								<?php echo $this->Html->link(
				        			'Gérer',
				       				 array('controller' => 'structure_gestions', 'action' => 'index',$structure['Structure']['id']),
				        			array('class'=>'btn btn-default')
				        			);?>
								<?php echo $this->Html->link(
									'Configurer',
									array('controller' => 'structure_admins', 'action' => 'index',$structure['Structure']['id']),
									array('class'=>'btn btn-default')
									);?>
				  				<span class="dropdown-header">Paramètres Globaux</span>
				  				<?php echo $this->Html->link(
				        			'Configurer',
				        			array('controller' => 'params', 'action' => 'index',$structure['Structure']['id']),
				        			array('class'=>'btn btn-default')
				        			);?>
						        </div>
						    </div>
        </div>
      </div>
    <?php }} ?>
    <?php unset($structure); ?>
    </div>
  </div>
  <hr>
  <!-- Example row of columns -->
  <div class="row">
    <div class="col-md-12">
        <h3>Dont vous êtes administrateur</h3>

    <?php foreach ($structures_users as $structure){ 
    	if($structure['Structures_user']['role']=='2'){ ?>
	        <!-- Example row of columns -->
	        <div class="row">
	        	<div class="col-md-12">
					      	<div class="row">
					        	<div class="col-md-6">
					        		<?php  echo $structure['Structure']['Info']['structurename'].', statut : ';?>
					        		<?php echo $structure['Structure']['visible'];?>
					        	</div>
					        <div class="col-md-6">
									<span class="dropdown-header">Votre site</span>
									<?php echo $this->Html->link(
									    'Visiter',
									    array('controller' => 'sites', 'action' => 'infos',$structure['Structure']['id']),
									    array('class'=>'btn btn-default')
									    );?>
									<?php echo $this->Html->link(
										'Configurer',
										array('controller' => 'sitesconfigs', 'action' => 'index',$structure['Structure']['id']),
										array('class'=>'btn btn-default')
										);?>
				  				<span class="dropdown-header">Votre structure</span>
								<?php echo $this->Html->link(
				        			'Gérer',
				       				 array('controller' => 'structure_gestions', 'action' => 'index',$structure['Structure']['id']),
				        			array('class'=>'btn btn-default')
				        			);?>
								<?php echo $this->Html->link(
									'Configurer',
									array('controller' => 'structure_admins', 'action' => 'index',$structure['Structure']['id']),
									array('class'=>'btn btn-default')
									);?>
						        </div>
						    </div>
        </div>
      </div>
    <?php }} ?>
    <?php unset($structure); ?>
    </div>
  </div>
  <hr>
  <!-- Example row of columns -->
  <div class="row">
    <div class="col-md-12">
        <h3>Dont vous êtes gestionnaires</h3>

    <?php foreach ($structures_users as $structure){
    	if($structure['Structures_user']['role']=='3'){ ?>
	        <!-- Example row of columns -->
	        <div class="row">
	        	<div class="col-md-12">
					<div class="row">
					        	<div class="col-md-6">
					        		<?php  echo $structure['Structure']['Info']['structurename'].', statut : ';?>
					        		<?php echo $structure['Structure']['visible'];?>
					        	</div>
					        <div class="col-md-6">
									<span class="dropdown-header">Votre site</span>
									<?php echo $this->Html->link(
									    'Visiter',
									    array('controller' => 'sites', 'action' => 'infos',$structure['Structure']['id']),
									    array('class'=>'btn btn-default')
									    );?>
				  				<span class="dropdown-header">Votre structure</span>
								<?php echo $this->Html->link(
				        			'Gérer',
				       				 array('controller' => 'structure_gestions', 'action' => 'index',$structure['Structure']['id']),
				        			array('class'=>'btn btn-default')
				        			);?>
						        </div>
						    </div>
        </div>
      </div>
    <?php }} ?>
    <?php unset($structure); ?>
    </div>
  </div>
  <hr>