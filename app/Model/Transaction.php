<?php
App::uses('AppModel', 'Model');
/**
 * Transaction Model
 *
 * @property User $User
 * @property Operation $Operation
 * @property Cost $Cost
 */
class Transaction extends AppModel {


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'User' => array(
			'className' => 'User',
			'foreignKey' => 'user_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Operation' => array(
			'className' => 'Operation',
			'foreignKey' => 'operation_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Cost' => array(
			'className' => 'Cost',
			'foreignKey' => 'cost_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
