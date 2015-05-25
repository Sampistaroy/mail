<!-- Titre principal de la page -->
  <?php echo $this->element('admin_structure/titre'); ?>

  <!-- Example row of columns -->
  <div class="row">
    <div class="col-md-12">
      <?php echo $this->element('admin_structure/menu'); ?>
    </div>
  </div>
  <hr>
  <!-- Example row of columns -->
      <?php echo $this->element('pub/pub_principal'); ?>
  <!-- Example row of columns -->
  <div class="row">
    <div class="col-md-12">
        <span class="glyphicon glyphicon-chevron-right"></span>
      <?php echo $this->Html->link(
        'Accueil',
        array('controller' => 'structure_admins', 'action' => 'index',$structure_id)
      );?>
    </div>
  </div>
  <hr>
  <div class="row">
	<div class="col-xs-12">
		<h2>Receptacles</h2>
		<table class="table">
		<thead>
		<tr>
				<th><?php echo $this->Paginator->sort('id'); ?></th>
				<th><?php echo $this->Paginator->sort('receptaclename'); ?></th>
				<th><?php echo $this->Paginator->sort('nb_ticket'); ?></th>
				<th><?php echo $this->Paginator->sort('nb_place'); ?></th>
				<th><?php echo $this->Paginator->sort('structure_id'); ?></th>
				<th><?php echo $this->Paginator->sort('minute'); ?></th>
				<th><?php echo $this->Paginator->sort('heure'); ?></th>
				<th><?php echo $this->Paginator->sort('jour'); ?></th>
				<th><?php echo $this->Paginator->sort('mois'); ?></th>
				<th><?php echo $this->Paginator->sort('annee'); ?></th>
				<th class="actions"><?php echo __('Actions'); ?></th>
		</tr>
		</thead>
		<tbody>
		<?php foreach ($receptacles as $receptacle){ ?>
			<tr>
				<td><?php echo h($receptacle['Receptacle']['id']); ?>&nbsp;</td>
				<td><?php echo h($receptacle['Receptacle']['receptaclename']); ?>&nbsp;</td>
				<td><?php echo h($receptacle['Receptacle']['nb_ticket']); ?>&nbsp;</td>
				<td><?php echo h($receptacle['Receptacle']['nb_place']); ?>&nbsp;</td>
				<td>
					<?php echo $this->Html->link($receptacle['Structure']['id'], array('controller' => 'structures', 'action' => 'view', $receptacle['Structure']['id'])); ?>
				</td>
				<td><?php echo h($receptacle['Receptacle']['minute']); ?>&nbsp;</td>
				<td><?php echo h($receptacle['Receptacle']['heure']); ?>&nbsp;</td>
				<td><?php echo h($receptacle['Receptacle']['jour']); ?>&nbsp;</td>
				<td><?php echo h($receptacle['Receptacle']['mois']); ?>&nbsp;</td>
				<td><?php echo h($receptacle['Receptacle']['annee']); ?>&nbsp;</td>
				<td>
					<?php echo $this->Html->link(__('View'), array('action' => 'view', $receptacle['Receptacle']['id'])); ?>
					<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $receptacle['Receptacle']['id'])); ?>
					<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $receptacle['Receptacle']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $receptacle['Receptacle']['id']))); ?>
				</td>
			</tr>
		<?php } ?>
			<?php echo $this->Html->link(__('New Receptacle'), array('action' => 'add')); ?>
	</div>
</div>
