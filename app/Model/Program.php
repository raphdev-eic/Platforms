<?php
App::uses('AppModel', 'Model');
/**
 * Program Model
 *
 * @property User $User
 */
class Program extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'name';


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'User' => array(
			'className' => 'User',
			'foreignKey' => 'program_id',
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
	    'name' => array(
	        'rule' => 'notEmpty',
	        'message' => 'Veuillez remplir ce champs'
	    ),
	    'description' => array(
	        'rule' => 'notEmpty',
	        'message' => 'Veuillez remplir ce champs'
	    ),
	    'price_default' => array(
	    	'rule1'=>array(
		        'rule' => 'notEmpty',
		        'message' => 'Veuillez remplir ce champs'
	    		),
	    	'rule2'=>array(
		        'rule' => 'numeric',
		        'message' => 'Ce champs doit avoir une valeur numeric'
	    		)
	    ),
	    'price_max' => array(
	    	'rule1'=>array(
		        'rule' => 'notEmpty',
		        'message' => 'Veuillez remplir ce champs'
	    		),
	    	'rule2'=>array(
		        'rule' => 'numeric',
		        'message' => 'Ce champs doit avoir une valeur numeric'
	    		)
	    )
    );
}

