<?php
App::uses("AppController","Controller");
class DevisController extends AppController{
	/**
	 * beforeFilter callback
	 *
	 * @return void
	 */
		public function beforeFilter() {
			parent::beforeFilter();
		}

    public function AddDevis(){
    	// recherche de la valeur de la VL
			$this->loadModel('Value');
			$vl = $this->Value->find('first',array(
	           'order'=>array('Value.created Desc')
			));
			$this->set(compact('vl'));
         	if(!empty($this->request->data) && $this->request->is('post')){
         		//creation du tableau de données
         		$data = array(
	                'libelle'=>'Achat de parts',
	                'quantity'=>$this->request->data['Devi']['quantity'],
	                'price'=> $vl['Value']['current'],
	                'status'=> 0,
	                'user_id'=> $this->Auth->user('User.id')
         		);

         		$this->Devi->create();
         		if($this->Devi->save($data)){
                  $this->Session->setFlash("Votre Devis a été enregistré avec success .
                   Notez qu'il est valide seulement pour 24h !
                    Apres cette date il sera annulé <br> Veuillez vous rendre a l'agence ECOBANK 
                    la plus proche de votre localité pour effectuer votre Versement",'success');
         		  $this->redirect(array('action'=>'GetDevis'));
         		}else{
                  $this->Session->setFlash("Une erreur est survenu lors l'enregistrement",'error');
                  $this->redirect($this->referer());
         		}
         	}else{
              throw new BadRequestException("Cette requete n'est pas autorisé", 403);
         	}
    }

    public function GetDevis(){
    	$list = $this->Devi->find('first',array(
         'contain'=>array('User'=>array('fields'=>'parts','key_auth','email','firstname','lastname')),
         'order'=>array('Devi.created DESC')
    	));
        if(!empty($list)){
            $this->Session->write('transaction',$list);
            $now   = time();
            $date2 = strtotime($list['Devi']['created']);
            $datetime = $this->Devi->datediff($now , $date2);
            $this->set(compact('list','datetime'));
        }else{
           throw new NotFoundException("Cette page est inacessible", 404);
           exit();
        }
    }

}