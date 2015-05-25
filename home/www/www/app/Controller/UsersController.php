<?php
class UsersController extends AppController {


    public function beforeFilter() {
        parent::beforeFilter();
       $this->Auth->allow('logout');
       $this->Auth->allow('signup');
    }

		/** sauvegarde un nouvel utilisateur en bdd **/
	public function signup() {
		// verif si il y a bien une requete POST 
		if($this->request->is('post')){
			// recup les infos du POST
			$d = $this->request->data;
			// attribut la valeur nul si il y avait un champ $d['User']['id'] pour éviter de se faire pirater
			$d['User']['id'] = null;
			// si le pass n'est pas vide on le hash
			if(!empty($d['User']['password'])){
				$d['User']['password'] = Security::hash($d['User']['password'],null,true);
			}
			//génération du lien de validation
			$link = md5($d['User']['password']);
			// sauvegarde en bdd
			if($result=$this->User->save($d,true,array('username','password','mail'))){
				//on connecte l'utilisateur directement
					if($this->Auth->login($result['User'])){
						// on va créer sa structure, son role et donc la table associative de user et structure.
				        $this->loadModel('Structure');
				        $this->Structure->set('visible', 'cache');
				        $this->Structure->set('Info.structurename', 'cache');
				        $this->Structure->save();
					    $structure_id = $this->Structure->getInsertID();	
					    	//On relie l'user et la structure fraichement créée
					        $this->loadModel('Structures_user');
					        $this->Structures_user->set('structure_id', $structure_id);
					        $this->Structures_user->set('user_id', $this->Auth->user('id'));
					        $this->Structures_user->set('role', '1');
					        $this->Structures_user->save();
					        //On crée une table pour les infos de la structure
					        $this->loadModel('Info');
					        $this->Info->set('structure_id', $structure_id);
					        $this->Info->set('structurename', $d['User']['username']);
					        $this->Info->set('logo', 'logo.png');
					        $this->Info->save();
					        //On crée une table pour l'histo de la structure
					        $this->loadModel('Histo');
					        $this->Histo->set('structure_id', $structure_id);
					        $this->Histo->set('contenu', 'structure de :'.$d['User']['username']);
					        $this->Histo->save();
					        // ajouter l'id et le role de cet user dans sa structure a la session Auth(User)
					        $key= $this->Structures_user->getInsertID();
					        $value= $this->Structures_user->role;
							$this->Session->write('Auth.User.Structure.'.$key, $value);
							//génération d'un message de réussite pour l'utilisateur
							$this->Session->setFlash("<strong>Bravo</strong> votre utilisateur à bien été ajouté et vous etes connecté.","motif");
            				return $this->redirect($this->Auth->redirectUrl());
						}
					}else{
				//génération d'un message d'echec de l'ajout d'utilisateur
				$this->Session->setFlash("Merci de <strong>corriger</strong> vos erreurs.","motif", array('type'=>'danger'));
			}

			}
		}

	public function login(){
		// verif si il y a bien une requete POST 
		if($this->request->is('post')){
			
			// recup les infos du POST
			if($this->Auth->login()){
				$this->Session->setFlash("<strong>Bravo</strong> vous etes connecté.","motif");
		        // ajouter a la session Auth(User)
        		$this->loadModel('Structures_user');
		        $structure_users=$this->Structures_user->find('threaded', array(
		                'conditions' => array('user_id' => $this->Auth->user('id')),
		    			'recursive' => 0
		        ));
		        foreach ($structure_users as $key => $value) {
					$this->Session->write('Auth.User.Structure.'.$value['Structures_user']['structure_id'], $value['Structures_user']['role']);
				}
            return $this->redirect($this->Auth->redirectUrl());
			}else{
				$this->Session->setFlash("identifiants incorrects.","motif", array('type'=>'warning'));
			}
		}
	}

	public function edit(){
		$user_id = $this->Auth->user('id');
		if(!$user_id){
			$this->redirect('/users/login');
			die();
		}
		$this->User->id = $user_id;
		// verif si il y a bien une requete POST 
		if($this->request->is('put')){
			$d= $this->request->data;
			$d['User']['id'] = $user_id;
			if (!empty($d['User']['pass1'])) {
				if ($d['User']['pass1']==$d['User']['pass2']) {
					$d['User']['password'] =  Security::hash($d['User']['pass1'],null,true);
				}else{
					$this->User->validationErrors['pass2']=array("impossible sauv profil edition.");
				}
			}
			if($this->User->save($d, true,array('password'))){
				$this->Session->setFlash("votre profil est bien mis a jour", "motif");
			}else{
				$this->Session->setFlash("impossible sauv profil edition.","motif", array('type'=>'danger'));
			}
		}else{
			$this->request->data = $this->User->read();
		}
	}

	public function logout(){
		$this->Auth->logout();
				$this->Session->setFlash("<strong>Au revoir</strong> vous etes déconnecté.","motif");
		$this->redirect('/');
	}

		/** active grace à un lien generé dans la fonction users/signup lors de l'inscription un nouvel utilisateur en bdd **/
	public function activate($token) {
		$token = explode('-',$token);
		$user = $this->User->find('first', array(
			'conditions' => array('id'=>$token[0], 'MD5(User.password)'=> $token[0],'active'=> 0
				)
			));
		if (!empty($user)) {
			$this->Session->setFlash("votre utilisateur à bien été activé. ","motif");
			}else{
				//génération d'un message d'echec de activation d'utilisateur
				$this->Session->setFlash("Mauvais token.","motif", array('type'=>'error'));
			}
		$this->redirect('/users/activate');
	}
}
