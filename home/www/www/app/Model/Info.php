<?php

class Info extends AppModel {
    public $belongsTo = array(
        'Structure' => array(
            'className' => 'Structure',
            'foreignKey' => 'structure_id'
        )
    );
    public $validate = array(
        'structurename' => array(
            'isUnique' => array(
                'rule'     => 'isUnique',
                'required' => true,
                'message'  => 'Ce nom de structure est deja prit'
            ),
            'between' => array(
                'rule'    => array('lengthBetween', 5, 80),
                'message' => 'Entre 5 et 80 caractères'
            )
        ),
        'description' => array(
            'between' => array(
                'rule'    => array('lengthBetween', 5, 250),
                'message' => 'Entre 5 et 80 caractères'
            )
        )
    );
}
