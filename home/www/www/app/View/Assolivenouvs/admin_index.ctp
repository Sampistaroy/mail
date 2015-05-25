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
	<h2><?php echo __('Assolivenouvs'); ?></h2>
		<table class="table">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('titre'); ?></th>
			<th><?php echo $this->Paginator->sort('description'); ?></th>
			<th><?php echo $this->Paginator->sort('create'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($assolivenouvs as $assolivenouv): ?>
	<tr>
		<td><?php echo h($assolivenouv['Assolivenouv']['titre']); ?>&nbsp;</td>
		<td><?php echo h($assolivenouv['Assolivenouv']['description']); ?>&nbsp;</td>
		<td><?php echo h($assolivenouv['Assolivenouv']['create']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'admin_view', $assolivenouv['Assolivenouv']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $assolivenouv['Assolivenouv']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $assolivenouv['Assolivenouv']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $assolivenouv['Assolivenouv']['id']))); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Assolivenouv'), array('action' => 'add')); ?></li>
	</ul>
</div>
</div>
</div>
