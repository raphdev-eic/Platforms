<?php  
App::uses('AppModel','Model');
/**
* Type Model
*
* @property [Post] [$Post] 
*/
class Type extends AppModel{
	
/**
 * hasMany Associations
 * @var array
 */

 public $hasMany = array(
     'Post'=>array(
		'className' => 'Post',
		'foreignKey' => 'type_id',
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

}