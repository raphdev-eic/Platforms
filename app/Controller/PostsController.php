<?php
App::uses('AppController','Controller');
App::uses('Folder', 'Utility');
App::uses('File', 'Utility');
App::import('Vendor', 'Mustache/src/Mustache/Autoloader');
Mustache_Autoloader::register();
class PostsController extends AppController{

  /**
   * beforeFilter callback
   *
   * @return void
   */
  	public function beforeFilter() {
  		parent::beforeFilter();
  	}

    public function newsfeed(){
      $last = $this->Post->User->getLastSign();
      if(!empty($last)){
        $this->set(compact('last'));
      }
    }

    /**
     * @func add post in ajax
     */

    public function SendPosts(){
       if(!$this->Auth->user('User.id')){
         $this->redirect($this->Auth->logout());
       }
         //ajax post element
         if(!empty($this->request->data)){

            //testé l'avatar a refaire
             $avatars = $this->Session->read('Auth.User.Avatar');
             if(!empty($avatars)){
                $avatar = end($avatars);
             }else{
                $avatar = 'http://dummyimage.com/52x52/bbb/05071f.png&text=avatar';
             }

             $this->request->data['Post']['name'] = ucfirst($this->Auth->user('User.lastname')).' '.ucfirst($this->Auth->user('User.firstname'));
             $this->request->data['Post']['user_id'] = $this->Auth->user('User.id');
             $this->request->data['Post']['type_id'] = (int)1;
             $user = array();
             if($this->RequestHandler->isAjax()){
                 $this->Post->create();
                if($this->Post->save($this->request->data)){
                  $time = $this->Post->findById($this->Post->id);
                  // creation de l'objet de reponse
                  $user = array(
                    'reponse'=>1,
                    'names'=>$this->request->data['Post']['name'],
                    'userid'=>$this->request->data['Post']['user_id'],
                    'photo'=>$avatar,
                    'postid'=>$this->Post->id,
                    'duration'=> $time['Post']['upaded'],
                    'content'=>$this->request->data['Post']['content']
                  );
                  echo json_encode($user);
                  exit();
                }else{
                  $user = array(
                    'reponse'=>0
                  );
                  echo json_encode($user);
                  exit();
                }
            exit();
          } else{
          ///php post elt;
             if($this->request->is('post')){
                  $this->Post->create();
                  if($this->Post->save($this->request->data)){
                       //la cas ou la requete est en post et ok
                    $this->Session->setFlash(__("Enregistrement fait avec success"),'success');
                    $this->redirect($this->referer());
                  }else{
                    $this->Session->setFlash(__("Oops!!! Erreur d'enregistrement") ,'error');
                  }
              }
          }

       }
    }

    public function getNewfeedContent(){

        if(!$this->Auth->user('User.id')){
           $this->Auth->logout();
           exit();
        }

        if($this->RequestHandler->isAjax()){
            $all = array();
            $Postlist = $this->Post->find('all',array(
              'contain'=>array('Type',
              'Comment'=>array(
                  'User'=>array(
                      'fields'=>array('User.id','User.firstname','User.lastname','User.username'),
                      'Avatar'=>array(
                          'fields'=>array('id','url'),
                          'order'=>'Avatar.id DESC',
                          'limit'=>1
                        )
                      ),
                    'order'=>'Comment.updated DESC',
                    'limit'=>6
                    ),
              'User'=>array(
                  'fields'=>array('User.id','User.username','User.email'),
                  'Avatar'=>array(
                        'fields'=>array('id','url'),
                        'order'=>"Avatar.id DESC",
                        'limit'=>1
                      )
                    )),
                   'order'=>'Post.created DESC',
                   'limit'=>10,
                   'offset' =>0
                ));
                   if(!empty($Postlist)){
                      $all = array(
                         'feed'=>$Postlist
                      );
                     echo json_encode($all);
                     exit();
                   }else{
                       $all = array(
                         "reponse" => 0,
                         "errors" => "Aucune information à partager"
                       );
                       echo json_encode($all);
                       exit();
                   }
              exit();
        }
    }

    public function infinieScrolling(){
        if(!$this->Auth->user('User.id')){
                  $this->Auth->logout();
                  exit();
               }
               if($this->RequestHandler->isAjax()){
                if($this->request->query['item']){
                  $postid = $this->request->query['item'];
                }
                       $all = array();
                       //$Postlist = $this->Post->find('all',array('contain'=>array('Post')));
                       $Postlist = $this->Post->find('all',array(
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
                           'order'=>'Post.created DESC',
                           'limit'=>10,
                           'offset'=>$postid
                        ));
                           if(!empty($Postlist)){
                              $all = array(
                                 'feed'=>$Postlist
                              );
                             echo json_encode($all);
                             exit();
                           }else{
                               $all = array(
                                 "reponse" => 0,
                                 "errors" => "Aucune information à partager"
                               );
                               echo json_encode($all);
                               exit();
                           }
                      exit();
               }
    }

    public function UrlGet(){
      if($this->RequestHandler->isAjax()){
        if($this->request->query['url']){
          $url = $this->request->query['url'];
          echo file_get_contents($url);
          exit();
        }
      }
    }
}