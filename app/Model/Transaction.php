<?php

App::uses('AppModel', 'Model');

/**
 * Transaction Model
 *
 * @property User $User
 * @property Operation $Operation
 * @property Cost $Cost
 */

class Transaction extends AppModel {

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

		'Operation' => array(

			'className' => 'Operation',

			'foreignKey' => 'operation_id',

			'conditions' => '',

			'fields' => '',

			'order' => ''

		),

		'Cost' => array(

			'className' => 'Cost',

			'foreignKey' => 'cost_id',

			'conditions' => '',

			'fields' => '',

			'order' => ''

		),
		'Year' => array(

			'className' => 'Year',

			'foreignKey' => 'year_id',

			'conditions' => '',

			'fields' => '',

			'order' => ''

		)

	);

     /**
	 * afterSave callback
	 *
	 * @param $created boolean
	 * @param $options array
	 * @return void
	 */
		public function afterSave($created){
			if($created){
				$this->getEventManager()->dispatch(new CakeEvent('Model.Transaction.add',$this));
			}
		}

		public function Year(){
			$result = $this->Year->find('first',array(
			  'contain'=>false,
	          'fields'=>array('Year.id'),
	          'conditions'=>array('Year.year'=> date('Y'))
			));
			return $result;
	    }

	    public function sommeDepot($id = null){
		 $sum = array();
		     $history = $this->find('all',array(
		     	'contain'=>array('User'=>array('fields'=>array('id','key_auth','email')),'Operation'),
		        'conditions'=>array(
		        	'Transaction.operation_id'=>1,
		        	'Transaction.user_id'=>$id,
		        	'Transaction.status'=>1
		        ),
		        'order'=>array('Transaction.created Desc'),
		        'group'=>array('Transaction.created')
		     ));
		     foreach ($history as $k => $v){
		     	$sum[] = $v['Transaction']['quantity'] * $v['Transaction']['price'];
		     }

             $totals = array_sum($sum);
             return $totals;
	    }

	    public function FundsValue($id = null, $vl = array()){
		     $sum = array();
		     $history = $this->find('all',array(
		     	'contain'=>array('User'=>array('fields'=>array('id','key_auth','email')),'Operation'),
		        'conditions'=>array(
		        	'Transaction.operation_id'=>1,
		        	'Transaction.user_id'=>$id,
		        	'Transaction.status'=>1
		        ),
		        'order'=>array('Transaction.created Desc'),
		        'group'=>array('Transaction.created')
		     ));
		     foreach ($history as $k => $v){
		     	$sum[] = $v['Transaction']['quantity'] * $vl;
		     }

             $totals = array_sum($sum);
             return $totals;
	    }
}