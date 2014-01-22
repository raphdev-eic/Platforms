<?php
App::uses('AppModel', 'Model');
/**
 * Ufund Model
 *
 * @property Fund $Fund
 */
class Ufund extends AppModel {


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Fund' => array(
			'className' => 'Fund',
			'foreignKey' => 'fund_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
