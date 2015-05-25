<?php
App::uses('AppModel', 'Model');
/**
 * Tagssouhait Model
 *
 * @property users_tagsouhaits $users_tagsouhaits
 * @property  $
 */
class Tagssouhait extends AppModel {

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'titre' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				'message' => 'Remplissez un nom pour votre tag',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
			'isUnique' => array(
				'rule' => array('isUnique'),
				'message' => 'ce tag existe déjà',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		)
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'users_tagssouhaits'
	);

}
