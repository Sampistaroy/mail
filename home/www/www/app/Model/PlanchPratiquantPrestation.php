<?php
App::uses('AppModel', 'Model');
/**
 * PlanchPratiquantPrestation Model
 *
 * @property Planch $Planch
 * @property Pratiquant $Pratiquant
 * @property Prestation $Prestation
 * @property Structure $Structure
 */
class PlanchPratiquantPrestation extends AppModel {

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'planch_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'pratiquant_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'prestation_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
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
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Planch' => array(
			'className' => 'Planch',
			'foreignKey' => 'planch_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Pratiquant' => array(
			'className' => 'Pratiquant',
			'foreignKey' => 'pratiquant_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Prestation' => array(
			'className' => 'Prestation',
			'foreignKey' => 'prestation_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Structure' => array(
			'className' => 'Structure',
			'foreignKey' => 'structure_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
