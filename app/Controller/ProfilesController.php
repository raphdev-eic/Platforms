<?php
/**
* class profile
*/

App::uses('AppController','Controller');



class ProfilesController extends AppController{

/**
 * [EditProfile function d'edition de profile utilisateur]
 * @param [type] $id [cle primaire char(36)]
 */
	public function EditProfile($id = null){
		$id = $this->Auth->user('User.id')
		//au cas ou l'id n'existepas
        if (!$id) {
            throw new NotFoundException(__('Vous etes deconnecter du système'));
            $this->Cookie->write('EicAuth','',true, time() - 3600 * 24 * 3);
            $this->Cookie->delete('EicAuth');
            return $this->redirect($this->Auth->logout());
        }
        // si le profile est vide
        $profil = $this->Profile->findById($id);
        if (!$profil) {
            throw new NotFoundException(__('Accès interdit'));
        }
        //si des données ont été posté
        if ($this->request->is(array('post', 'put'))) {
            $this->Profile->id = $id;
            if ($this->Profile->save($this->request->data)) {
                $this->Session->setFlash(__('Votre & été modifier avec success','default'));
                return $this->redirect(array('controller'=>'Users','action'=>'edit'));
            }
            $this->Session->setFlash(__('La modification à echouer, veuillez reéssayer','error'));
            $this->render('/User/edit');
        }
        //si les données n'ont pas été poster
        if (!$this->request->data) {
            $this->request->data = $profil;
        }
	}

}