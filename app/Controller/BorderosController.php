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
        if(isset($_FILES) && !empty($_FILES)){
              if(!file_exists(WWW_ROOT.'img/borderos'.DS.$this->Session->read('Auth.User.User.email'))){
                      mkdir(WWW_ROOT.'img/borderos/'.$this->Session->read('Auth.User.User.email'),0777,true);
              }
              $uploads_dir = WWW_ROOT.'img/borderos/'.$this->Session->read('Auth.User.User.email');

              $filerror = $_FILES['file']['error'];
              $filesize = $_FILES['file']['size'];
              $tmp_name =  $_FILES['file']['tmp_name'];
              $name = $_FILES['file']['name'];

              $extentions = array('jpg','png','gif','tiff');
              $url = 'img/borderos/'.$this->Session->read('Auth.User.User.email');

              $ext = strtolower(pathinfo($name, PATHINFO_EXTENSION));
              //verification nde l'extendtion du fichier
              if(in_array($ext,$extentions)){
                 if($filesize < 50000000){
                    //formatage des datas
                    $data = array(
                      'name'=>$name,
                      'url'=> $url,
                      'status'=>0,
                      'user_id'=> $this->Auth->user('User.id'),
                      'ref_id' => $this->Session->read('ref_id')
                    );
                     //creation de l'enregistrement du borderos
                     $this->Bordero->create();
                     $media = $this->Bordero->save($data);
                     if(!$media){
                       return false;
                     }
                     move_uploaded_file($tmp_name, "$uploads_dir/$name");
                 }
              }
          }
        }



}