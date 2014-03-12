<?php

App::uses('AppModel', 'Model');

/**
 * Profile Model
 *
 * @property User $User
 */

class Profile extends AppModel {





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

		)

	);

/**
 *
 */

	public $validate = array(

		'phone'=>array(
           'rule'=>'notEmpty',
           'message' => 'Nous avons besoins de votre numéro de téléphone',
           'required'=>true,
           'allowEmpty'=>false
		),
		'mobile'=>array(
           'rule'=>'notEmpty',
           'message' => 'Nous avons besoins de votre numéro de téléphone',
           'required'=>true,
           'allowEmpty'=>false
		),
		'mobile'=>array(
           'rule'=>'notEmpty',
           'message' => 'Nous avons besoins de votre numéro de téléphone',
           'required'=>true,
           'allowEmpty'=>false
		),
		'fonction'=>array(
           'rule'=>'notEmpty',
           'message' => 'Nous avons besoins de votre numéro de téléphone',
           'required'=>true,
           'allowEmpty'=>false
		)
	);

}

