<?php
App::uses('AppModel', 'Model');
/**
 * StructuresTag Model
 *
 * @property Structure $Structure
 * @property Tag $Tag
 */
class StructuresTag extends AppModel {

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Structure' => array(
			'className' => 'Structure',
			'foreignKey' => 'structure_id'
		),
		'Tag' => array(
			'className' => 'Tag',
			'foreignKey' => 'tag_id'
		)
	);
/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'structure_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'tag_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed

}
