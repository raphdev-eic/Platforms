<?php
App::uses('AppModel', 'Model');

class Action extends AppModel{

	public $hasMany = array(

		'Cashflow' => array(
			'className' => 'Cashflow',
			'foreignKey' => 'action_id',
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
}