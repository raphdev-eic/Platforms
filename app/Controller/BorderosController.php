<?php

App::uses('AppController','Controller');

class BorderosController extends AppController{

   public function beforeFilter(){

   	parent::beforeFilter();

   }



  //function du borderos deu fieul pas le parrai


	public function AddFieulBordero(){

     if(!empty($this->request->data) && $this->request->is('post')){

       $d = $this->request->data;

       $d['Bordero']['user_id'] = $this->Session->read('fieul_id');

         $this->Bordero->create();

         if($this->Bordero->save($d)){

            $this->Session->setFlash('Upload du fichier effectué avec success', 'success');

            $this->Session->delete('fieul_id');

            $this->redirect($this->referer());

         }

        $this->Session->setFlash('Une erreur est survenu au moment de l\'envoi du fichier', 'error');

     }


	}

    public function UploadBorderos(){
        if($this->RequestHandler->isAjax()){
          $uploads_dir = WWW_ROOT.DS.'img/borderos';
          $file = $this->request->data['Bordero']['f_url'];
            $tmp_name =  $file["tmp_name"];
            $name = $file["name"];
            move_uploaded_file($tmp_name, "$uploads_dir/$name");
        }
    }



}