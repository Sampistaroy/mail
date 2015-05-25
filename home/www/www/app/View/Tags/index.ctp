<!-- Titre principal de la page -->
<div class="jumbotron">
    <h1>TaGs</h1>
</div>



<!-- Example row of columns -->
    <?php echo $this->element('samp/menu_admin'); ?>
<hr>






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
		<h2>Tags</h2>
			<table class="table">
		<thead>
		<tr>
				<th><?php echo $this->Paginator->sort('Intitulé'); ?></th>
				<th>Actions</th>
		</tr>
		</thead>
		<tbody>
		<?php foreach ($tags as $tag){ ?>
		<tr>
			<td><?php echo h($tag['Tag']['tagname']); ?>&nbsp;</td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('action' => 'view', $tag['Tag']['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $tag['Tag']['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $tag['Tag']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $tag['Tag']['id']))); ?>
			</td>
		</tr>
		<?php } ?>
			</tbody>
			</table>
		<div class="actions">
			<h3><?php echo __('Actions'); ?></h3>
			<ul>
				<li><?php echo $this->Html->link(__('New Tag'), array('action' => 'add')); ?></li>
			</ul>
		</div>

	</div>
</div>