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

	public function AddComment(){

		if(!empty($this->request->data)){
			$d = $this->request->data;
			//enregistre l'id du user courant
			$d['Comment']['user_id'] = $this->Auth->user('User.id');
            $postId = explode('_/#', $d['Comment']['post_id']);
            //recherch un post avec le id explode dans $postId[1]
            $checkpost = $this->Comment->findPost($postId[1]);
            if(!empty($checkpost)){
	            $this->Comment->create();
	            if($this->Comment->save(array(
	               'content'=>$d['Comment']['content'],
	               'user_id'=>$d['Comment']['user_id'],
	               'post_id'=>  $postId[1]
	             )
	            ));
	            $this->redirect($this->referer());
            }else{
            	throw new Exception("Erreur de procedure d'ajout de commentaire", 305);
            	die();
            }
		}
	}

}
