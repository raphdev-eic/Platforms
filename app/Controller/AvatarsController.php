<?php
App::uses('AppController','Controller');
class AvatarsController extends AppController{

  /**
  * beforeFilter callback
  *
  * @return void
  */
 	public function beforeFilter() {
 		parent::beforeFilter();
 	}


 	public function ajaxUpload(){
     if(!empty($this->request->data) && $this->request->is('post')){
       $d = $this->request->data;
       $d['Avatar']['user_id'] = $this->Auth->user('User.id');
         $this->Avatar->create();
         if($this->Avatar->save($d)){
            $this->Session->setFlash('Upload du fichier effectué avec success', 'success');
            $this->redirect($this->referer());
         }
        $this->Session->setFlash('Une erreur est survenu au moment de l\'envoi du fichier', 'error');
        $this->redirect($this->referer());
     }

 	}
 
}