<?php
App::uses('CakeEventListener', 'Event');
class CasflowsEventListener implements CakeEventListener {

    public function implementedEvents() {
        return array(
            'Model.User.ActiveUser' => 'UpdatedCashflow',
        );
    }

    public function UpdatedCashflow($event) {
       debug($event); die();
    }
}