<div class="assolivenews view">
<h2><?php echo __('Assolivenews'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($assolivenews['Assolivenews']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Titre'); ?></dt>
		<dd>
			<?php echo h($assolivenews['Assolivenews']['titre']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Description'); ?></dt>
		<dd>
			<?php echo h($assolivenews['Assolivenews']['description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Contenu'); ?></dt>
		<dd>
			<?php echo h($assolivenews['Assolivenews']['contenu']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Create'); ?></dt>
		<dd>
			<?php echo h($assolivenews['Assolivenews']['create']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Assolivenews'), array('action' => 'edit', $assolivenews['Assolivenews']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Assolivenews'), array('action' => 'delete', $assolivenews['Assolivenews']['id']), array(), __('Are you sure you want to delete # %s?', $assolivenews['Assolivenews']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Assolivenews'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Assolivenews'), array('action' => 'add')); ?> </li>
	</ul>
</div>
