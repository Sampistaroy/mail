<?php

class Prestation extends AppModel {
    public $hasMany = array(
        'Cat_opt_presta' => array(
            'className' => 'Cat_opt_presta',
            'foreignKey' => 'prestation_id'
        ),
        'PlanchesPratiquantsPrestation' => array(
            'className' => 'PlanchesPratiquantsPrestation',
            'foreignKey' => 'prestation_id',
            'dependent' => false,
            'conditions' => '',
            'fields' => '',
            'order' => '',
            'limit' => '',
            'offset' => '',
            'exclusive' => '',
            'finderQuery' => '',
            'counterQuery' => ''
        )

    );
    public $belongsTo = array(
        'Categories_presta' => array(
            'className' => 'Categories_presta',
            'foreignKey' => 'categories_presta_id'
        )
    );
}
