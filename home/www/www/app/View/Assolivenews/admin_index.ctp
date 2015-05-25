<!-- Titre principal de la page -->
<div class="jumbotron">
    <h1><?php echo __('Assolivenews'); ?></h1>
</div>



      <?php  echo $this->element('menu_accueil'); ?>






<div class="row">
  <div class="col-xs-4">
		<?php
			echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled')); ?>
  </div>
  <div class="col-xs-4 text-center">
  </div>
  <div class="col-xs-4 text-right">
		<?php	echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled')); ?>
  </div>
</div>

<div class="row">
	<div class="col-xs-12">
		<table class="table">

	<h2><?php echo __('Assolivenews'); ?></h2>
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('titre'); ?></th>
			<th><?php echo $this->Paginator->sort('description'); ?></th>
			<th><?php echo $this->Paginator->sort('create'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php 
	foreach ($assolivenew as $key => $assolivenews){ ?>
	<tr>
		<td><?php echo $assolivenews['Assolivenews']['titre']; ?>&nbsp;</td>
		<td><?php echo h($assolivenews['Assolivenews']['description']); ?>&nbsp;</td>
		<td><?php echo h($assolivenews['Assolivenews']['create']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'admin_view', $assolivenews['Assolivenews']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $assolivenews['Assolivenews']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $assolivenews['Assolivenews']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $assolivenews['Assolivenews']['id']))); ?>
		</td>
	</tr>
<?php } ?>
	</tbody>
	</table>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Assolivenews'), array('action' => 'add')); ?></li>
	</ul>
</div>
	</div>
</div>
