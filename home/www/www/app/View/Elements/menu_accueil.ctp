<div class="row">
    <div class="col-md-12">
        <?php echo $this->Html->link(
            'Liste des structures',
            array('controller' => 'structures_tags', 'action' => 'index'),
            array('class'=>'btn btn-info btn-lg')
        );?>
        a venir:
        <span class="dropdown">
          <a href="#" class="dropdown-toggle btn btn-info btn-sm" data-toggle="dropdown" role="button" aria-expanded="false">rechercher une structure <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="#">par activité &raquo;</a></li>
            <li><a href="#">par région &raquo;</a></li>
            <li class="divider"></li>
            <li><a href="#">par Nom &raquo;</a></li>
          </ul>
        </span>
        <span class="dropdown">
          <a href="#" class="dropdown-toggle btn btn-info btn-sm" data-toggle="dropdown" role="button" aria-expanded="false">rechercher un spot <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="#">par activité &raquo;</a></li>
            <li><a href="#">par région &raquo;</a></li>
            <li class="divider"></li>
            <li><a href="#">par Nom &raquo;</a></li>
          </ul>
        </span>
        <span class="dropdown">
          <a href="#" class="dropdown-toggle btn btn-info btn-sm" data-toggle="dropdown" role="button" aria-expanded="false">rechercher une fonction <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="#">rémunérée &raquo;</a></li>
            <li><a href="#">bénévole &raquo;</a></li>
            <li class="divider"></li>
            <li><a href="#">par Activité &raquo;</a></li>
          </ul>
        </span>
        <a class="btn btn-success btn-sm text-right">mon agenda &raquo;</a>
        <span class="dropdown">
          <a href="#" class="dropdown-toggle btn btn-success btn-sm" data-toggle="dropdown" role="button" aria-expanded="false">Favoris <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="#">structure &raquo;</a></li>
            <li><a href="#">spot &raquo;</a></li>
            <li><a href="#">fonction &raquo;</a></li>
          </ul>
        </span>
    </div>
</div>