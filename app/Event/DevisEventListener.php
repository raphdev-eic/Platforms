<?php
App::uses('CakeEventListener', 'Event');
class DevisEventListener implements CakeEventListener {

    public function implementedEvents() {
        return array(
            'Model.Transaction.add' => 'updateStatusDevis',
        );
    }

    public function updateStatusDevis($event) {
        $user_id = $event->subject->data['Transaction']['user_id'];
        $Devi = classRegistry::init('Devi');
        $Transaction = classRegistry::init('Transaction');
        //debug( $event->subject->data);
        $find = $Devi->find('first',array(
           'conditions'=>array('Devi.user_id'=>$user_id,'Devi.status'=>0)
        ));
        if(!empty($find)){
          $id = $find['Devi']['id'];
          $Devi->id = $id;
          $Devi->saveField('status',1);
        }else{
         $Transaction->delete($event->subject->data['Transaction']['id']);
         SessionComponent::setFlash("Votre devis d'achat est n'est plus valide",'error');
        }
    }
}