<div class="assolivenouvs view">
<h2><?php echo __('Assolivenouv'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($assolivenouv['Assolivenouv']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Titre'); ?></dt>
		<dd>
			<?php echo h($assolivenouv['Assolivenouv']['titre']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Description'); ?></dt>
		<dd>
			<?php echo h($assolivenouv['Assolivenouv']['description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Contenu'); ?></dt>
		<dd>
			<?php echo h($assolivenouv['Assolivenouv']['contenu']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Create'); ?></dt>
		<dd>
			<?php echo h($assolivenouv['Assolivenouv']['create']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Assolivenouv'), array('action' => 'edit', $assolivenouv['Assolivenouv']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Assolivenouv'), array('action' => 'delete', $assolivenouv['Assolivenouv']['id']), array(), __('Are you sure you want to delete # %s?', $assolivenouv['Assolivenouv']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Assolivenouvs'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Assolivenouv'), array('action' => 'add')); ?> </li>
	</ul>
</div>
