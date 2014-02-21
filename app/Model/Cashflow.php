<?php
App::uses("AppModel","Model");


class Cashflow extends AppModel{


	public $useTable = 'cashflows';

    public $belongsTo =	array(

		'User' => array(
			'className' => 'User',
			'foreignKey' => 'user_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Action' => array(
			'className' => 'Action',
			'foreignKey' => 'action_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)

	);

	public function TypeCash(){
		$action = $this->Action->find('list',array(
         'fields'=>array('name')
		));
		return $action;
	}

}