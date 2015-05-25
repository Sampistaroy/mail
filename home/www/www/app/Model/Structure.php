<?php

class Structure extends AppModel {
    public $hasMany = array(
        'structures_users','nouvelles','structures_tags'
    );
    public $hasOne = array(
        'Info' => array(
            'className' => 'Info',
            'foreignKey'=> 'structure_id',
            'dependent' => true // à true, Supprime en Cascade les models Associés
        )
    );

}