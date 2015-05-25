<!-- Titre principal de la page -->
<div class="jumbotron">
  <div class="container">
    <h1>Liste des structure</h1>
  </div>
</div>


      <?php  echo $this->element('menu_accueil'); ?>






<div class="row">
  <div class="col-xs-4">
		<?php
			echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled')); ?>
  </div>
  <div class="col-xs-4 text-center"><p>
		<?php
		echo $this->Paginator->counter(array(
			'format' => __(' Asso Live compte {:count} Structures,<br>Page {:page} / {:pages}')
		));
		?>	</p>
  </div>
  <div class="col-xs-4 text-right">
		<?php	echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled')); ?>
  </div>
</div>

		
<div class="row">
  <div class="col-xs-12">
  	<h4>Liste des activités</h4>
  	<?php foreach ($tags as $tag) {
  		?><a href="#<?php echo $tag['Tag']['tagname']; ?>"> <kbd><?php echo $tag['Tag']['tagname']; ?></kbd></a>
  		&nbsp;<?php
  	} ?>
  </div>
</div>
<div class="row">
  <div class="col-xs-12">
  	<h4>Options de trie</h4>
  	<br>Pays,Region,code postal,ville
  </div>
</div>

<div class="row">
  <div class="col-xs-12">
		<table class="table">
		<thead>
		<tr>
				<th><?php echo 'Tags'; ?></th>
				<th>nom de la structure</th>
		</tr>
		</thead>
		<tbody>
		<?php foreach ($tags as $tag){ ?>
		<tr>
			<td><kbd id="<?php echo $tag['Tag']['tagname']; ?>"><?php echo $tag['Tag']['tagname']; ?></kbd></td>
			<td>
				<?php foreach ($tag['structures_tags'] as $tag_structures_tag){ ?>
					<?php foreach ($structures_tags as $structures_tag){ ?>
						<?php if ($structures_tag['StructuresTag']['id']==$tag_structures_tag['id']) {?>
							<?php echo $this->Html->link($structures_tag['Structure']['Info']['structurename'],array(
								'controller'=>'sites', 'action'=>'infos',$structures_tag['Structure']['id']
							));?>
							<br>
						<?php } ?>
						<?php } ?>
				<?php } ?>
			</td>
		</tr>
	<?php } ?>
		</tbody>
		</table>
		<div class="paging">
		<?php
			echo $this->Paginator->numbers(array('separator' => ''));
		?>
		</div>

  </div>
</div>
		<hr>