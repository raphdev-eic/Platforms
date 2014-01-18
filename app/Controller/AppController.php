<?php
App::uses('Controller', 'Controller');
class AppController extends Controller {

  public $helpers = array('Form', 'Html', 'Js', 'Time','Image.Image');
  public $components = array(
      'Session',
      'Cookie',
      'Auth'=>array(
        'authenticate' => array(
            'Form' => array(
                'fields' => array('username' => 'email'),
                'scope'=>array('User.status'=>1)
        )
      )
      ),
      'RequestHandler'
    );

	public function beforeFilter(){
       parent::beforeFilter();

       // parametrage du cookie

        $this->Cookie->name ='EicCorporation';
        $this->Cookie->domain ='.eic-corporation.com';
        $this->Cookie->path = '/';
        $this->Cookie->time = '3 Days';
        $this->Cookie->key = 'qSI232qs*&11~_+!@#HKAv!@*(XSL#$%)asGb$@is~#sXOw!adre@34S^';
        $this->Cookie->httpOnly = true;

        $this->Auth->loginAction = Configure::read('accounts');

        //detection d'une requete en ajax

        if($this->RequestHandler->isAjax()){
             $this->layout = false;
             Configure::write('debug',0);
                  if($this->request->is('ajax')){
                      $this->disableCache();
                  }
        }

        // detection de cookie

       if($this->Cookie->check('eagleinvestkey') && !$this->Auth->loggedIn()){
            $this->loadModel('User'); //je charge le model

            // recherche un User qui a ce cookie dans la bd

           $user = $this->User->find('first', array(
                  'conditions' => array('User.id' => $this->Cookie->read('eagleinvestkey'))
              ));

            if(!empty($user)){
                    $this->Auth->login($user);
                    $this->Cookie->write('eagleinvestkey', $this->Cookie->read('eagleinvestkey'),true, time() + 3600 * 24 * 3);
              }else{
                    $this->Cookie->destroy();
                    $this->redirect(Configure::read('accounts'));
              }
       }else{
        // Au cas ou le cookie n'existe pas
           $this->redirect(Configure::read('accounts'));
       }
	}

}