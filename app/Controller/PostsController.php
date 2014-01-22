<?php
App::uses('AppController','Controller');

/**
* Posts controller
*/
class PostsController extends AppController{
      /**
      * beforeFilter callback
      *
      * @return void
      */
     	public function beforeFilter() {
     		parent::beforeFilter();
     	}

	/**
	 * @var [type] [description]
	 */

	public function getFil(){
	  if(!$this->Auth->user('User.id')){
	  	 $this->Auth->logout();
	  	 exit();
	  }
	  // liste des publications recuperé .
	  $photo = $this->Session->read('Auth.User.Avatar.0.url');
	  //recuperation des posts

	    $postList = $this->Post->find('all',array(
	         'contain'=>array('Type',
	         	'Comment'=>array(
	         	 'User'=>array(
                      'fields'=>array('User.id','User.firstname','User.lastname','User.username'),
                      'Avatar'=>array(
                         'fields'=>array('id','url'),
                         'order'=>'Avatar.id DESC',
                         'limit'=>1
                        )
	         	 	)
	         	),
	         	'User'=>array(
	         		'fields'=>array('User.id','User.username','User.email'),
	         		'Avatar'=>array(
		                'fields'=>array('id','url'),
		                'order'=>"Avatar.id DESC",
		                'limit'=>1
		         		)
	         	)),
	         'order'=>'Post.id DESC'
	    ));

        //recuperation de l'avatar du l'utilisateur courant
        $avatar = $this->Post->find('first',array(
           'contain'=>array(
           	'User'=>array(
           	  'fields'=>array('User.id','User.username'),
           	    'Avatar'=>array(
                     'fields'=>array('id','url'),
                     'order'=>'Avatar.id DESC'
           	 )
           	)),
           'conditions'=>array('User.id'=>$this->Auth->user('User.id'))
        ));
	    if($this->RequestHandler->isAjax()){
	    	$post = array();
		    if(empty($postList)){
		        $Post['reponse'] = 0;
		        echo json_encode($Post);
		        $this->autoRender = false;
		    }else{
	            $Post['reponse'] = 1;
	            foreach ($postList as $k => $v) {
	              $Post =  $postList;
	            }
	            echo json_encode($Post);
	            $this->autoRender = false;
		    }
		    exit();
	    }
	    $this->set(compact('postList','avatar','photo'));
	}

	public function AddPost(){
		//verifie si une personn est authentifie
		if(!$this->Auth->user('User.id')){
			$this->redirect($this->Auth->logout());
		}

			$user = array();
			if($this->RequestHandler->isAjax()){
				if(!empty($this->request->data)){
					 $this->request->data['Post']['name'] = $this->Auth->user('User.username'). " à publier la veille économique";
					 $this->request->data['Post']['user_id'] = $this->Auth->user('User.id');
					 $this->request->data['Post']['type_id'] = (int)1;
					 $this->Post->create();
						 if($this->Post->save($this->request->data)){
						 	$time = $this->Post->findById($this->Post->getInsertID());
		                    $user['reponse'] = 1;
		                    $user['username'] = $this->Auth->user('User.username');
		                    $user['avatar'] = $this->Auth->user('Avatar.url');
		                    $user['moment'] = $time['Post']['updated'];
						 	echo json_encode($user);
			                $this->autoRender = false;
						 }else{
		                    $user['reponse'] = 0;
						 	echo json_encode($user);
			                $this->autoRender = false;
						 }
			    }
			    exit();
		    }else{
			        $this->request->data['Post']['name'] = $this->Auth->user('User.username'). " à publier la veille économique";
			        $this->request->data['Post']['user_id'] = $this->Auth->user('User.id');
			        $this->request->data['Post']['type_id'] = (int)1;
			        $this->Post->create();
			        if($this->Post->save($this->request->data,true)){
			        	$this->redirect(array('action'=>'getFil'));
			        }else{
			        	$this->Session->setFlash('Votre publication n\'a pas été ajouter , merci de réessayer','error');
			        	$this->redirect($this->referer());
			        }
				   throw new BadRequestException("Envoie interdit", 400);
		        }
	    	$this->Session->setFlash('Aucune information n\'a été publié , le formulaire est vide','error');
	   }
}
