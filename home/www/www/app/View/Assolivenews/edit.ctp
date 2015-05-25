<div class="row">
    <div class="col-xs-12">
        <h1>Ajouter la nouvelle</h1>

        <?php
        echo $this->Form->create('Assolivenew', array(
            'inputDefaults' => array(
             'label' => false,
             'div' => array(
                'class'=>"form-group")
            )
         ));
        echo $this->Form->input('titre', array(
            'label' => 'Titre',
            'class'=> 'form-control'
        ));
        echo $this->Form->input('description', array(
            'label' => 'Description',
            'class'=> 'form-control'
        ));
        echo $this->Form->textarea('contenu', array(
            'label' => 'Contenu',
            'class'=> 'form-control',
            'rows' => '10')
            );
        echo $this->Form->end('Sauvegarder');
        ?>
<div>
	<h3>Actions</h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Assolivenews.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Assolivenews.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Assolivenews'), array('action' => 'admin_index')); ?></li>
	</ul>
</div>

    </div>
</div>