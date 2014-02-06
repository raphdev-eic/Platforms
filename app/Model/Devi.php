<?php

App::uses('AppModel', 'Model');


class Devi extends AppModel {





	//The Associations below have been created with all possible keys, those that are not needed can be removed


	public $belongsTo = array(

		'User' => array(

			'className' => 'User',

			'foreignKey' => 'user_id',

			'conditions' => '',

			'fields' => '',

			'order' => ''

		)

	);

	public $validate = array(

     'quantity'=>array(
     	'Rule1'=>array(
         	'rule'=>'notEmpty',
         	'message'=>'Veuillez rensignez une valeur',
         	'allowEmpty'=>false,
         	'required'=>true
     	),
     	'Rule2'=>array(
     		'rule'=>'numeric',
     		'message'=>'Renseignez une valeur numerique',
         	'allowEmpty'=>false,
         	'required'=>true
     	)
     )
	);

	public function datediff($date1, $date2){

		    $diff = $date1 - $date2; // abs pour avoir la valeur absolute, ainsi éviter d'avoir une différence négative
		    $retour = array();

		    $tmp = $diff;
		    $retour['second'] = $tmp % 60;

		    $tmp = floor( ($tmp - $retour['second']) /60 );
		    $retour['minute'] = $tmp % 60;
		    $tmp = floor( ($tmp - $retour['minute'])/60 );
		    $retour['hour'] = $tmp % 24;

		    $tmp = floor( ($tmp - $retour['hour'])  /24 );
		    $retour['day'] = $tmp;

		    return $retour;
	}

}

