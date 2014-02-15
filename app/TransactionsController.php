<?php
App::uses('AppController','Controller');
App::uses('DevisEventListener', 'Event');
class TransactionsController extends AppController{

/**
 * beforeFilter callback
 *
 * @return void
 */
	public function beforeFilter(){
		parent::beforeFilter();
	}

	public function PassOrder(){
		$this->loadModel('Value');
		$vl = $this->Value->find('first',array(
           'order'=>array('Value.created Desc')
		));
		$this->set(compact('vl'));
	}

	public function SetTransction(){
		if(!$this->Session->check('transaction')){
			$this->redirect($this->referer());
		}
		$this->Transaction->getEventManager()->attach(new DevisEventListener());
		$this->loadModel('User');
		$num = date('Y').'-'.$this->Transaction->User->generateKeyInvoce();
		$this->set(compact('num'));
		//creation de l'ordre d'achat de parts
		if($this->request->data && $this->request->is('post')){
			/*debug($this->request->data);
			die();*/
            $data = array(
              'libelle'=>$this->request->data['Transaction']['desc'],
              'quantity'=>$this->Session->read('transaction.Devi.quantity'),
              'price'=>$this->Session->read('transaction.Devi.price'),
              'numero'=>$num,
              'status'=>0,
              'user_id'=>$this->Auth->user('User.id'),
              'operation_id'=>1
            );
            $this->Transaction->create();
	        if($this->Transaction->save($data)){
                $this->Session->setFlash("Votre Devis a été enregistré avec succès .Notez qu'il est valide seulement pour 24h !
                    Après cette date il sera annulé <br> Veuillez vous rendre a l'agence ECOBANK
                    la plus proche de votre localité pour effectuer votre Versement",'success');
                //suppression de la session transcation
                    $this->Session->delete('transaction');
                //Cretion d'un nouvelle session qui recupre le id pour l'enregistrer dans le ref_id
                    $acc = $this->Transaction->getInsertID();
                    $this->Session->write('ref_id',$acc);
                $this->redirect(array('controller'=>'Borderos','action'=>'UploadBorderos'));
	        }else{
              $this->Session->setFlash("Désoler la Transaction à echouer",'error');
	        }
 		}
	}

	public function PurchasesHistrory(){
		 $sum = array();
		 $user_id = $this->Auth->user('User.id');
	     $history = $this->Transaction->find('all',array(
	     	'contain'=>array('User'=>array('fields'=>array('id','key_auth','email')),'Operation'),
	        'conditions'=>array(
	        	'Transaction.operation_id'=>1,
	        	'Transaction.user_id'=>$user_id,
	        	'Transaction.status'=>1
	        ),
	        'order'=>array('Transaction.created Desc'),
	        'group'=>array('Transaction.created')
	     ));
	     foreach ($history as $k => $v) {
	     	$sum[] = $v['Transaction']['quantity'] * $v['Transaction']['price'];
	     }
         $total = $this->Transaction->sommeDepot($user_id);
	     $this->set(compact('history','total'));
	}

}