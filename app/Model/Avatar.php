<?php
App::uses('AppModel', 'Model');
/**
 * Avatar Model
 *
 * @property User $User
 */
class Avatar extends AppModel {


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */

	public $actsAs = array(
		'Upload.Upload' => array(
			'fields' => array(
				'url' => 'img/avatar/:id'
			)
		)
	);

	public $validate = array(
		'url_file' => array(
			'rule' => array('fileExtension', array('jpg','png','jepg'),true),
			'message'=>'vous ne pouvez pas envoyé de fichier de cette extension'
		)
	);

	public $belongsTo = array(
		'User' => array(
			'className' => 'User',
			'foreignKey' => 'user_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
