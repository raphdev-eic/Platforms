<?php

App::uses('AppController', 'Controller');

/**
 * PostsUsers Controller
 *
 * @property Comment $Comment
 * @property PaginatorComponent $Paginator
 */

class CommentsController extends AppController {

/**
 * Components
 *
 * @var array
 */

	public $components = array('Paginator');



	public function SendComment(){
	    if(!$this->Auth->user('User.id')){
	      $this->redirect($this->Auth->logout());
	    }

	    //on test si ya des données
        if($this->RequestHandler->isAjax()){
 	    	//recuperation de l'id du postes
	    	$postId = explode('_/#', $this->request->data['Comment']['post_id']);
	        $this->request->data['Comment']['post_id'] = (int)$postId[1];
	        $this->request->data['Comment']['user_id'] = $this->Auth->user('User.id');
	        $comment = array();
                $this->Comment->create();
                if($this->Comment->save($this->request->data)){
                	$cmt = $this->Comment->findById($this->Comment->id);
                //creation de l'objet a retourner
                $comment = array(
                   'reponse' => 1,
                   'userid'=>$this->request->data['Comment']['user_id'],
                   'postid'=> $this->Comment->id,
                   'contentcom'=> $this->request->data['Comment']['contentcom'],
                   'duration'=>$cmt['Comment']['updated']
                );
	                echo json_encode($comment);
	                exit();
	            }else{

	            $comment = array(
	                'reponse' => 0
	            );
	                echo json_encode($comment);
	                exit();
	            }
            exit();

	        }else{

	        	if($this->request->is('post')){
					//enregistre l'id du user courant
			    	$postId = explode('_/#', $this->request->data['Comment']['post_id']);
			        $this->request->data['Comment']['post_id'] = (int)$postId[1];
					$this->request->data['Comment']['user_id'] = $this->Auth->user('User.id');
			        $this->Comment->create();
					    if($this->Comment->save($this->request->data)){
				           $this->redirect($this->referer());
			            }else{
			            	throw new Exception("Erreur de procedure d'ajout de commentaire", 305);
			            	die();
			            }
	            }
	        }
    }
}