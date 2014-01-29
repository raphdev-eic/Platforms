<?php

App::uses('AppModel', 'Model');

/**
 * Post Model
 *
 * @property User $User
 * @property Type $Type
 * @property Comment $Comment
 */

class Post extends AppModel {

Public $actsAs = array('Containable');

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
		'User' => array(
			'className' => 'User',
			'foreignKey' => 'user_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),

		'Type' => array(
			'className' => 'Type',
			'foreignKey' => 'type_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);



/**
 * hasMany associations
 *
 * @var array
 */

	public $hasMany = array(
		'Comment' => array(
			'className' => 'Comment',
			'foreignKey' => 'post_id',
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
	);



	public $validate = array(
       'content'=>array(
            'rule'=>'notEmpty',
            'message'=>'Le contenu du champas est vide',
            'required'=>true
       	)
	);

	public function getAllPostByDate(){
	    $this->recursive = 1;
		$allPost = $this->find('all',array(
		         'order'=>array('Post.updated Desc'),
		         'group'=>array('Post.updated')
			));
		return $allPost;
	}



}

