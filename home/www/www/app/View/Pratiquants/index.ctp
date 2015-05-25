<!-- Titre principal de la page -->
<div class="jumbotron">
    <h1><?php echo __('Pratiquants'); ?></h1>
</div>



      <?php  echo $this->element('gestion_structure/menu'); ?>






<div class="row">
  <div class="col-xs-4">
		<?php
			echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled')); ?>
  </div>
  <div class="col-xs-4 text-center">
		<p>
		<?php
		echo $this->Paginator->counter(array(
			'format' => __('Page {:page} of {:pages},<br>{:current} / {:count} enregistrements au total')
		));
		?>	</p>
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
					<th><?php echo $this->Paginator->sort('nom'); ?></th>
					<th><?php echo $this->Paginator->sort('prenom'); ?></th>
					<th>Actions</th>
			</tr>
			</thead>
			<tbody>
			<?php foreach ($pratiquants as $pratiquant){ ?>
			<tr>
				<td><?php echo h($pratiquant['Pratiquant']['nom']); ?>&nbsp;</td>
				<td><?php echo h($pratiquant['Pratiquant']['prenom']); ?>&nbsp;</td>
				<td class="actions">
					<?php echo $this->Html->link(__('Fiche'), array('action' => 'view', $structure_id, $pratiquant['Pratiquant']['id'])); ?>
					<?php echo $this->Html->link(__('Editer'), array('action' => 'edit', $structure_id, $pratiquant['Pratiquant']['id'])); ?>
					<?php echo $this->Form->postLink(__('Supprimer'), array('action' => 'delete', $structure_id, $pratiquant['Pratiquant']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $pratiquant['Pratiquant']['id']))); ?>
				</td>
			</tr>
			<?php } ?>
			</tbody>
		</table>
		<div>
			<h3>Actions</h3>
			<ul>
				<li><?php echo $this->Html->link(__('Ajouter Pratiquant'), array('controller' => 'pratiquants', 'action' => 'add', $structure_id)); ?></li>
			</ul>
		</div>
	</div>
</div>
