<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php
			$this->assign('title', 'AL');
			echo $this->fetch('title');
		?>
	</title>
	<?php
		echo $this->Html->meta(
    'favicon.ico',
    'favicon/favicon.ico',
    array('type' => 'icon'));

		echo $this->Html->css(array('bootstrap.min','offcanvas','style','style-bootstrap'));
		echo $this->Html->script('https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js');
		echo $this->Html->scriptBlock(
    		'var $j = jQuery.noConflict();',
    		array('inline' => false)
		);
		$this->Js->JqueryEngine->jQueryObject = '$j';
		echo $this->Html->script(array('bootstrap/bootstrap.min'));
		echo $this->Html->script(array('tinymce/tinymce.min'));
		echo $this->Html->script(array('edit'));

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');

	?>
</head> 
<body>
    <nav class="navbar navbar-inverse navbar-fixed-top">
	    <div class="container">
	        <div class="navbar-header">
	          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
	            <span class="sr-only">Toggle navigation</span>
	            <span class="icon-bar"></span>
	            <span class="icon-bar"></span>
	            <span class="icon-bar"></span>
	          </button>
				<?php echo $this->Html->link(
		    		'AssoLive acueil',
		    		array('controller' => '/'),
		        		array('class'=>'navbar-brand btn-black')
		    	);?>
	        </div>
	        <div id="navbar" class="navbar-collapse collapse">
	        	<div class="nav navbar-form navbar-nav">
					<?php if(!AuthComponent::user('id')){ ?>
						<?php echo $this->Html->link(
	                		'Inscription',
	                		array('controller' => 'users', 'action' => 'signup'),
	                		array('class'=>'btn btn-success')
	                	);?>
	                <?php } ?>
				</div>
				<div class="navbar-form navbar-right">
					<?php if(!AuthComponent::user('id')){ ?>
					<?php echo $this->Form->create('User',array('action'=>'login')); ?>
					<div class="form-group">
						<?php echo $this->Form->input('username', array('class'=>"form-control",'label' => false,'type'=>"text", 'placeholder'=>"name")); ?>
					</div>
					<div class="form-group">
						<?php echo $this->Form->input('password', array('class'=>"form-control",'label' => false,'type'=>"password", 'placeholder'=>"Password")); ?>
					</div>	
					<?php echo $this->Form->button("Se connecter", array('class'=>"btn btn-success"));
					echo $this->Form->end(); ?>
		        	<?php }else{ ?>
						<?php echo $this->Html->link(
							'Ma Structure',
							array('controller' => 'structures', 'action' => 'dashboard'),
							array('class'=>'btn btn-primary')
							);?>
						<?php echo $this->Html->link(
		            		'mon Compte',
		            		array('controller' => 'users', 'action' => 'edit'),
		            		array('class'=>'btn btn-primary')
		            	);?>
						<?php echo $this->Html->link(
		            		'Deconnection',
		            		array('controller' => 'users', 'action' => 'logout'),
		            		array('class'=>'btn btn-success')
		            	);?>
		            <?php } ?>
				</div>
	        </div><!--/.navbar-collapse -->
	    </div>
    </nav>

	<div class="container">
		<div id="content">
		<?php echo $this->Session->flash(); ?>

		<?php echo $this->fetch('content'); ?>
		</div>
		<div id="footer" class="row">
			<div class="col-xs-6 col-xs-offset-3">
    			<p>&copy; AssoLive 2015</p>
    		</div>
		</div>
	</div>
</body>
</html>
