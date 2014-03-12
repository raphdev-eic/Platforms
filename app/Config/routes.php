<?php
Router::connect('/', array('controller' => 'Users', 'action' => 'index'));
//Router::connect('/investor/:id-:username/', array('controller' => 'Users', 'action' => 'index'));
CakePlugin::routes();
require CAKE . 'Config' . DS . 'routes.php';