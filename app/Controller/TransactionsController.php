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
		$year = $this->Transaction->Year();
		$old = $year['Year']['id'];
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
              'operation_id'=>1,
              'year_id'=>$old
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
		 $user_id = $this->Auth->user('User.id');
		 /*if(!$user){
		 	throw new NoFoundException("Vous n'etes plus connecté veuillez vous reconnecter", 404);
		 }*/
		 $sum = array();
		 $history = $this->Transaction->Year->find('all',array(
          'contain'=>array(
            'Transaction'=>array(
                 'conditions'=>array(
                      'Transaction.user_id'=>$user_id,
                      'Transaction.operation_id'=>1,
                      'Transaction.status'=>1
                 )
            ),
          ),
          'order'=>array('Year.year Asc'),
          'limit'=>2
		 ));
		 $total = $this->Transaction->sommeDepot($user_id);
	     $this->set(compact('history','total'));
	}

	public function Rendement(){
		 $user_id = $this->Auth->user('User.id');
		 /*if(!$user){
		 	throw new NoFoundException("Vous n'etes plus connecté veuillez vous reconnecter", 404);
		 }*/
		 $sum = array();
		 $rendement = $this->Transaction->Year->find('all',array(
          'contain'=>array(
            'Transaction'=>array(
                 'conditions'=>array(
                      'Transaction.user_id'=>$user_id,
                      'Transaction.operation_id'=>1,
                      'Transaction.status'=>1
                 )
            ),
          ),
          'order'=>array('Year.year Asc'),
          'limit'=>2
		 ));
		 $this->loadModel('Value');
		 $val = $this->Value->find('first',array(
           'order'=>array('Value.created Desc')
		 ));
         $vl = $val['Value']['current'];
         $fund = $this->Transaction->FundsValue($user_id,$vl);
		 $this->set(compact('rendement','vl','fund'));
	}

}