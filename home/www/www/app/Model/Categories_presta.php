<?php

class Categories_presta extends AppModel {
    public $actsAs = array('Tree');
    public $hasMany = array(
        'Prestation' => array(
            'className' => 'Prestation',
            'foreignKey' => 'categories_presta_id'
        )
    );
	// variable tableau avec les differentes regles de validation
	public $validate = array(
		'name' => array(
				'rule' => 'notEmpty',
				'required' => true,
				'allowEmpty' => false,
				'message' => "Votre catégorie doit avoir un nom"
			)
		);
}