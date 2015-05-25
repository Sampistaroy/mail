<?php

class User extends AppModel {
	// variable tableau avec les differentes regles de validation
	public $validate = array(
		'username' => array(
			array(
				'rule' => 'alphanumeric',
				'required' => true,
				'allowEmpty' => false,
				'message' => "Votre pseudo n'est pas valide"
			),
			
			array(
				'rule' => 'isUnique',
				'message' => 'Ce pseudo est déjà pris'
			),
			
			array(
                'rule'    => array('lengthBetween', 5, 80),
                'message' => 'Entre 5 et 80 caractères'
			)
		),
		'mail' => array(
			array(
				'rule' => 'email',
				'required' => true,
				'allowEmpty' => false,
				'message' => "Cet email n'est pas valide"
			),
			
			array(
				'rule' => 'isUnique',
				'message' => 'Cet email est déjà pris'
			)
		),
		'password' => array(
			'rule' => 'notEmpty',
			// 'required' => true,
			'allowEmpty' => false,
			'message' => "Vous devez entrer un mot de pass"
		)
	);


    public $hasMany = array(
        'structures_users','nouvelles'
    );
}
