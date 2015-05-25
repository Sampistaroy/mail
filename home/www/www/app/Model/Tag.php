<?php
App::uses('AppModel', 'Model');
/**
 * Tag Model
 *
 * @property Structure $Structure
 */
class Tag extends AppModel {

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'non' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed

    public $hasMany = array(
        'structures_tags'
    );

}
