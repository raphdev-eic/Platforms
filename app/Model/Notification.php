<?php
App::uses('AppModel', 'Model');
/**
 * Notification Model
 *
 * @property Tnotification $Tnotification
 * @property User $User
 */
class Notification extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'name';


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Tnotification' => array(
			'className' => 'Tnotification',
			'foreignKey' => 'tnotification_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'User' => array(
			'className' => 'User',
			'foreignKey' => 'user_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
