<?php
App::uses('AppController','Controller');
App::uses('SessionComponent', 'Controller/Component');

class Year extends AppModel{

   /* public $options = array(
	    'Transaction.operation_id'=>1,
	    'Transaction.user_id'=> SessionComponent::read('Auth.User.User.id'),
	    'Transaction.status'=>1
    );*/

	public $hasMany = array(
		'Transaction' => array(
			'className' => 'Transaction',
			'foreignKey' => 'year_id',
			'dependent' => false,
			'conditions'=>'',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		)
	);

   /* public function HistoryTransactionYears($id = null){
    	$history = $this->find('all');
    	debug($history); die();
	}*/
}