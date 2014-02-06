<?php

App::uses('AppModel', 'Model');


class User extends AppModel {

	//The Associations below have been created with all possible keys, those that are not needed can be removed

	public $hasOne = array(

		'Cashflow' => array(

			'className' => 'Cashflow',

			'foreignKey' => 'user_id',

			'conditions' => '',

			'fields' => '',

			'order' => ''

		),

		'Compte' => array(

			'className' => 'Compte',

			'foreignKey' => 'user_id',

			'conditions' => '',

			'fields' => '',

			'order' => ''

		),

		'Profile' => array(

			'className' => 'Profile',

			'foreignKey' => 'user_id',

			'conditions' => '',

			'fields' => '',

			'order' => ''

		)

	);



/**

 * belongsTo associations

 *

 * @var array

 */

	public $belongsTo = array(

		'Rank' => array(

			'className' => 'Rank',

			'foreignKey' => 'rank_id',

			'conditions' => '',

			'fields' => '',

			'order' => ''

		),

		'Team' => array(

			'className' => 'Team',

			'foreignKey' => 'team_id',

			'conditions' => '',

			'fields' => '',

			'order' => ''

		),

		'Domaine' => array(

			'className' => 'Domaine',

			'foreignKey' => 'domaine_id',

			'conditions' => '',

			'fields' => '',

			'order' => ''

		),

		'Role' => array(

			'className' => 'Role',

			'foreignKey' => 'role_id',

			'conditions' => '',

			'fields' => '',

			'order' => ''

		),

		'Program' => array(

			'className' => 'Program',

			'foreignKey' => 'program_id',

			'conditions' => '',

			'fields' => '',

			'order' => ''

		),

		'Country' => array(

			'className' => 'Country',

			'foreignKey' => 'country_id',

			'conditions' => '',

			'fields' => '',

			'order' => ''

		),

		'City' => array(

			'className' => 'City',

			'foreignKey' => 'city_id',

			'conditions' => '',

			'fields' => '',

			'order' => ''

		),

		'ParentUser' => array(

			'className' => 'User',

			'foreignKey' => 'parent_id',

			'conditions' => '',

			'fields' => '',

			'order' => ''

		)

	);



/**

 * hasMany associations

 *

 * @var array

 */

	public $hasMany = array(

		'Avatar' => array(

			'className' => 'Avatar',

			'foreignKey' => 'user_id',

			'dependent' => false,

			'conditions' => '',

			'fields' => '',

			'order' => '',

			'limit' => '',

			'offset' => '',

			'exclusive' => '',

			'finderQuery' => '',

			'counterQuery' => ''

		),

		'Bordero' => array(

			'className' => 'Bordero',

			'foreignKey' => 'user_id',

			'dependent' => false,

			'conditions' => '',

			'fields' => '',

			'order' => '',

			'limit' => '',

			'offset' => '',

			'exclusive' => '',

			'finderQuery' => '',

			'counterQuery' => ''

		),

		'Comment' => array(

			'className' => 'Comment',

			'foreignKey' => 'user_id',

			'dependent' => false,

			'conditions' => '',

			'fields' => '',

			'order' => '',

			'limit' => '',

			'offset' => '',

			'exclusive' => '',

			'finderQuery' => '',

			'counterQuery' => ''

		),

		'Devi' => array(

			'className' => 'Devi',

			'foreignKey' => 'user_id',

			'dependent' => false,

			'conditions' => '',

			'fields' => '',

			'order' => '',

			'limit' => '',

			'offset' => '',

			'exclusive' => '',

			'finderQuery' => '',

			'counterQuery' => ''

		),

		'Innoice' => array(

			'className' => 'Innoice',

			'foreignKey' => 'user_id',

			'dependent' => false,

			'conditions' => '',

			'fields' => '',

			'order' => '',

			'limit' => '',

			'offset' => '',

			'exclusive' => '',

			'finderQuery' => '',

			'counterQuery' => ''

		),

		'Last' => array(

			'className' => 'Last',

			'foreignKey' => 'user_id',

			'dependent' => false,

			'conditions' => '',

			'fields' => '',

			'order' => '',

			'limit' => '',

			'offset' => '',

			'exclusive' => '',

			'finderQuery' => '',

			'counterQuery' => ''

		),

		'Notification' => array(

			'className' => 'Notification',

			'foreignKey' => 'user_id',

			'dependent' => false,

			'conditions' => '',

			'fields' => '',

			'order' => '',

			'limit' => '',

			'offset' => '',

			'exclusive' => '',

			'finderQuery' => '',

			'counterQuery' => ''

		),

		'Post' => array(

			'className' => 'Post',

			'foreignKey' => 'user_id',

			'dependent' => false,

			'conditions' => '',

			'fields' => '',

			'order' => '',

			'limit' => '',

			'offset' => '',

			'exclusive' => '',

			'finderQuery' => '',

			'counterQuery' => ''

		),

		'Transaction' => array(

			'className' => 'Transaction',

			'foreignKey' => 'user_id',

			'dependent' => false,

			'conditions' => '',

			'fields' => '',

			'order' => '',

			'limit' => '',

			'offset' => '',

			'exclusive' => '',

			'finderQuery' => '',

			'counterQuery' => ''

		),

		'Ucashflow' => array(

			'className' => 'Ucashflow',

			'foreignKey' => 'user_id',

			'dependent' => false,

			'conditions' => '',

			'fields' => '',

			'order' => '',

			'limit' => '',

			'offset' => '',

			'exclusive' => '',

			'finderQuery' => '',

			'counterQuery' => ''

		),

		'Ugrade' => array(

			'className' => 'Ugrade',

			'foreignKey' => 'user_id',

			'dependent' => false,

			'conditions' => '',

			'fields' => '',

			'order' => '',

			'limit' => '',

			'offset' => '',

			'exclusive' => '',

			'finderQuery' => '',

			'counterQuery' => ''

		),

		'Upart' => array(

			'className' => 'Upart',

			'foreignKey' => 'user_id',

			'dependent' => false,

			'conditions' => '',

			'fields' => '',

			'order' => '',

			'limit' => '',

			'offset' => '',

			'exclusive' => '',

			'finderQuery' => '',

			'counterQuery' => ''

		),

		'ChildUser' => array(

			'className' => 'User',

			'foreignKey' => 'parent_id',

			'dependent' => false,

			'conditions' => '',

			'fields' => '',

			'order' => '',

			'limit' => '',

			'offset' => '',

			'exclusive' => '',

			'finderQuery' => '',

			'counterQuery' => '',

			'counterCache'=>true

		)

	);





/**

 * hasAndBelongsToMany associations

 *

 * @var array

 */

	public $hasAndBelongsToMany = array(

		'Badge' => array(

			'className' => 'Badge',

			'joinTable' => 'badges_users',

			'foreignKey' => 'user_id',

			'associationForeignKey' => 'badge_id',

			'unique' => 'keepExisting',

			'conditions' => '',

			'fields' => '',

			'order' => '',

			'limit' => '',

			'offset' => '',

			'finderQuery' => '',

		)

	);



	 public function ListRank(){

			$list = $this->Rank->find('list');

			return $list;

		}



		public function ListTeam(){

			$list = $this->Team->find('list');

			return $list;

		}



		public function ListDomaine(){

			$list = $this->Domaine->find('list');

			return $list;

		}



		public function ListRole(){

			$list = $this->Role->find('list');

			return $list;

		}



		public function ListProgm(){

			$list = $this->Program->find('list');

			return $list;

		}



		public function ListCountry(){

			$list = $this->Country->find('list');

			return $list;

		}



		public function ListCity(){

			$list = $this->City->find('list');

			return $list;

		}





		//regle de validation des données

		

		public $validate = array(

		'username'=>array(

			'rule1username'=>array(

				   'rule'=>'isUnique',

				   'message'=>'Ce username est déja utiliser',

				   'allowEmpty'=>false,

				   'required'=>true

				 ),

			'rule2username'=>array(

				  'rule'=> array('between', 5, 10),

				  'message' => 'Le username doit avoir une longueur comprise entre 5 et 10 caractères.'

				)

		),

		'password'=>array(

			  'rule'=>'notEmpty',

			  'message'=>'Ce champs doit pas rester vide',

			  'allowEmpty'=>false,

			  'required'=>true

		),

		'email'=>array(

			  'rule'=>'isUnique',

			  'message'=>'Cette adresse email est déja prise',

			  'allowEmpty'=>false,

			  'required'=>true

		),

		'code'=>array(

			  'rule'=>'isUnique',

			  'message'=>"Ce code d'accès est deja utiliser",

			  'allowEmpty'=>false,

			  'required'=>true

		),

		'key_auth'=>array(

			  'rule'=>'isUnique',

			  'message'=>'Ce investor code est déja utiliser',

			  'allowEmpty'=>false,

			  'required'=>true

		),

		'firstname'=>array(

			  'rule'=>'notEmpty',

			  'message'=>'Renseignez une valeur',

			  'allowEmpty'=>false,

			  'required'=>true

		),    

		'lastname'=>array(

			  'rule'=>'notEmpty',

			  'message'=>'Renseignez une valeur',

			  'allowEmpty'=>false,

			  'required'=>true

		),

		/*'membership'=>array(

			  'rule'=>'numeric',

			  'message'=>'Ce valeur doit être numerique',

			  'required'=>true

		),*/

		'parts'=>array(

			 'rule'=>'numeric',

			 'message'=>'Le nombre de parts doit être numerique'

		 ),

		'pass'=>array(

			'rule'=>'CheckPassword',

			'message'=>'Les mots de passe ne correspond pas'

			)

		);



		//generation de code d'inscription

		

		public function genarateCodeinc( $num = 12 ){

				$resultat = array();

				$user ="";

				$username = "abcdefghijklmnpqrstuvwxy123456789ABCDEFGHIJKLMNPQRSTUVWXY";

				srand((double)microtime()*1000000);

					for($i=0; $i<$num; $i++) {

					$user .= $username[rand()%strlen($username)];

					}

				$resultat=$user; 

				return $resultat;

		}



		//generation du key auth

		

		public function generateKeyAuth( $num = 32){

				$resultat = array();

				$user ="";

				$username = "abcdefghijklmnpqrstuvwxy123456789ABCDEFGHIJKLMNPQRSTUVWXY";

				srand((double)microtime()*1000000);

					for($i=0; $i<$num; $i++) {

					$user .= $username[rand()%strlen($username)];

					}

				$resultat = $user;

				return $resultat;

		}



		/**

		 * function de comparaison du mot de passe

		 */



		public function CheckPassword(){

			if($this->data[$this->alias]['password'] == Security::hash($this->data[$this->alias]['pass'],null,true)){

				return true;

			}

			return false;

		}



		/**

		 * function d'envoi de mail

		 * @param  [type] $data [description]

		 * @return [type]       [description]

		 */

		

		public function send($data){

			  $this->set($data);

				App::uses('CakeEmail','Network/Email');

				$mail = new CakeEmail();

				$mail->from('supports@eic-corporation.com')

					 ->to($data['email'])

					 ->subject("Message d'information EiC Corporation")

					 ->emailFormat('html')

					 ->template('info')

					 ->viewVars($data);

				return $mail->send();

		} 

		



		/**

		 * User find info

		 */

		

		public function getUserInfo($id_Auth){

			$UserInfo = $this->find('first',array(

			   'conditions'=>array('User.id'=>$id_Auth)

			  ));

			if(empty($UserInfo)){

				throw new NotFoundException("Utilisateur introuvable", 404);

			}

			return $UserInfo;

		}

        

        /**

         * [CountChild description]

         */

		public function CountChild($id){

			$count = $this->ChildUser->find('count',array(

             'conditions'=>array('ParentUser.id'=>$id)

			));

			return $count;

		}



		public function getLastSign(){

           $last = $this->find('all',array(

           	'contain'=>array('Avatar','Rank'),

           	'fields'=>array('User.firstname','User.lastname','User.id','Rank.name'),

            'conditions'=>array('User.status'=>1),

            'order'=>'User.id DESC',

            'limit'=>2

           ));

           return $last;

		}

}

