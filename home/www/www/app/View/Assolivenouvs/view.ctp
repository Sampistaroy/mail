
<div class="row">
	<div class="col-xs-12">
<h2><?php echo __('Assolivenouv'); ?></h2>
	<dl>
		<dt><?php echo __('Titre'); ?></dt>
		<dd>
			<?php echo h($assolivenouv['Assolivenouv']['titre']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Create'); ?></dt>
		<dd>
			<?php echo h($assolivenouv['Assolivenouv']['create']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Description'); ?></dt>
		<dd>
			<?php echo h($assolivenouv['Assolivenouv']['description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Contenu'); ?></dt>
		<dd>
			<?php echo $assolivenouv['Assolivenouv']['contenu']; ?>
			&nbsp;
		</dd>
	</dl>

	<ul>
		<li><?php echo $this->Html->link(__('List Assolivenouvs'), array('action' => 'index')); ?> </li>
	</ul>
</div>
</div>
