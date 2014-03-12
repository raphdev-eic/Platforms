<?php

App::uses('AppController','Controller');

class UsersController extends AppController {

	public function beforeFilter(){
		parent::beforeFilter();
	}



  /**
   * function d"affichage du profil en cours
   * @return [type] [description]
   */

	public function index(){

		$user_id = $this->Auth->user('User.id');

		if(!$user_id){
			$this->redirect(Configure::read('apps'));
		}

		$parts = $this->User->find('first',array(
         'conditions'=>array('User.id'=>$user_id),
         'fields'=>array('User.parts')
		));

		$this->loadModel('Value');
		$vl = $this->Value->find('first',array(
           'order'=>array('Value.created Desc')
		));

    //recuperation des derniers inscrits

    $lastSign = $this->User->getLastSign();

    $count = $this->User->CountChild($user_id);

		$this->set(compact('vl','parts','count','lastSign'));

	}



/**
 * fonction d'affichage de profil
 */



    public function profil(){
    $user_id = $this->Auth->user('User.id');
       if(!$user_id){
		    $this->Cookie->write('EicAuth','',true, time() - 3600 * 24 * 3);
		    $this->Cookie->delete('EicAuth');
		    return $this->redirect($this->Auth->logout());
       }

       $userInfo = $this->User->getUserInfo($user_id);
    		$this->loadModel('Value');
    		$vl = $this->Value->find('first',array(
               'order'=>array('Value.created Desc')

    		));

        $avatar = $this->User->Avatar->find('all',array(

         'conditions'=>array('User.id'=>$this->Auth->user('User.id')),

         'order'=>'Avatar.id Desc',

         'limit'=>1

        ));

       $avatar = current($avatar);

       /*debug($avatar);

       die();*/

       $this->set(compact('userInfo','vl','avatar'));

    }



    /**
     * function d'edition de profil
     */



    public function edit($id = null){
        $id = $this->Auth->user('User.id');
    }



/**
 * les fonction de gestion des Fieuls
 */



    public function ListFeuil(){

      	if(!$this->Auth->user('User.id')){

      	   	 $this->redirect(Configure::read('apps'));

      	}

        $list = $this->User->find('first',array(

         'contain'=>array('ChildUser','Rank','City','Avatar'),

         'conditions'=>array('User.id'=>$this->Auth->user('User.id')),

         'order'=>'User.firstname Asc'

        ));

        $fieul = $list['ChildUser'];

        foreach ($fieul as $key => $v){

          $id[] = $v['id'];

        }

        if(!empty($id)){



        }

        $arr = $this->User->find('all',array(

          'contain'=>array('Avatar'),

          'fields'=>array('User.id','User.firstname','User.lastname','User.email'),

          'conditions'=>array('User.id'=>$id)

          ));

        $count_child = count($arr);

        /*debug($arr);

        die();*/

        $this->set(compact('arr','count_child'));

    }



	/**
	 * fonction d'ajout de feuil
	 */



	public function AddFeuil(){

      	if(!$this->Auth->user('User.id')){

      	   	 $this->redirect(Configure::read('apps'));

      	}

      // add function fieul

        if(!empty($this->request->data) && $this->request->is('post')){

        	 //affectation du champ parent_id

        	   $this->request->data['User']['parent_id'] = $this->Auth->user('User.id');

        	   //creer un nouvelle enregistrement en attentes

              $this->User->create();

  	            if($this->User->save($this->request->data,true,array('parent_id','firstname','email','lastname'))){

  		       	   $this->Session->write('fieul_id',$this->User->id);

  			    //envoi d'email

  			       $this->User->send($this->request->data['User']);

  	               $this->Session->write('fieul_id',$this->User->id);

  		      	   $this->Session->setFlash('Enregistrement  effectué avec success , un mail à été envoyé au fieul, Vous pouvez joindre le Bordero du fieul si vous l\'avez scanner','success');

  		      	   $this->redirect(array('controller'=>'Borderos','action'=>'AddFieulBordero'));

  		        }

  	            $this->Session->setFlash('Warning! Enregistrement Du fieul echoué ,  veuillez réessayer','error');
  	    }
    }


    /**
     * [logout description]
     * @return [type] [description]
     */


	  public function logout(){
	    $this->Cookie->write('EicAuth','',true, time() - 3600);
      $this->Cookie->delete('EicAuth');
	    return $this->redirect($this->Auth->logout());
    }
 }