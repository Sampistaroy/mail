<?php
App::uses('AppController', 'Controller');
/**
 * Tagssouhaits Controller
 *
 * @property Tagssouhait $Tagssouhait
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class TagssouhaitsController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator', 'Session');

/**
 * index method
 *
 * @return void
 */
	public function choix_souhait($structure_id=null) {
		$this->set('structure_id', $structure_id);
		$this->Tagssouhait->recursive = 0;
		$this->set('tagssouhaits', $this->Paginator->paginate());
		if ($this->request->is('post')) {
			$this->Tagssouhait->create();

			// verifier si il peut sauvegarder ou voter donc ....
			//recup les 2 dernières dates dans le model users_tagssouhaits
			$this->loadModel('UsersTagssouhait');
			//recup la date d'aujourd'hui
			$aujourd = date('Y:m:d H:i:s',mktime(date("H"),date("i"),date("s"),date("m")-1, date("d"),   date("Y")));
			$tagssouhaits_count = $this->UsersTagssouhait->find('count', array(
        		'conditions' => array('UsersTagssouhait.last_wish >=' => $aujourd,
        								'UsersTagssouhait.user_id' => $this->Auth->User('id'))));
			//compare les dates celle d'aujourd'hui et l'avant dernière si elle existe.
			//si ca fait plus d'un mois c'est bon.
			if($tagssouhaits_count<2){
				// on rajoute 1 pour le premier vote
				$this->request->data['Tagssouhait']['taglike'] = 1;
				if ($this->Tagssouhait->save($this->request->data)) {
					// aller sauvegarder dans la table avec la date
					$this->UsersTagssouhait->create();
					$data=array('tagssouhait_id' => $this->Tagssouhait->getInsertID(), 'user_id' => $this->Auth->User('id'),'last_wish' => date('Y:m:d H:i:s'));
					if ($this->UsersTagssouhait->save($data)) {
						$this->Session->setFlash('Votre Tag a été sauvegarder, nous allons le prendre en compte','motif');
						return $this->redirect(array('action' => 'choix_souhait',$structure_id));
					} else {
					$this->Session->setFlash('imossible gfuyjygfjyfjuygfjude sauvegarder',"motif",array('type'=>'danger'));
					return $this->redirect(array('action' => 'choix_souhait',$structure_id));}
				} else {
					$this->Session->setFlash('Ce Tag existe déjà',"motif",array('type'=>'danger'));
				}
			} else {
				$this->Session->setFlash('vous avez déjà voté/sauvegrdé 2 fois en mois de 1 mois, vous devez attendre',"motif",array('type'=>'danger'));}
				return $this->redirect(array('action' => 'choix_souhait',$structure_id));
		}
	}

/**
 * voter_tag method
 *
 * @return void
 */
	public function voter_tag($structure_id=null,$tagssouhait_id=null) {
		if ($tagssouhait_id==null) {
				$this->Session->setFlash('Votre param tagssouhait_id manque',"motif",array('type'=>'danger'));
				return $this->redirect(array('controller' => 'pages', 'action' => 'display'));
		}

		$this->set('structure_id', $structure_id);

		// verifier si il peut sauvegarder ou voter donc ....
		// recup les 2 dernières dates dans le model users_tagssouhaits
		$this->loadModel('UsersTagssouhait');
		//recup la date d'aujourd'hui
		$aujourd = date('Y:m:d H:i:s',mktime(date("H"),date("i"),date("s"),date("m")-1, date("d"),   date("Y")));
		$tagssouhaits_count = $this->UsersTagssouhait->find('count', array(
    		'conditions' => array('UsersTagssouhait.last_wish >=' => $aujourd,
    								'UsersTagssouhait.user_id' => $this->Auth->User('id'))));
		//compare les dates celle d'aujourd'hui et l'avant dernière si elle existe.
		//si ca fait plus d'un mois c'est bon.
		if($tagssouhaits_count<2){
			$tagssouhait = $this->Tagssouhait->read(null,$tagssouhait_id);
			debug($tagssouhait['Tagssouhait']);
			$tag = $tagssouhait['Tagssouhait']['taglike'] + 1;
			$this->Tagssouhait->set('taglike', $tag );
			$tagssouhait_vote=$this->Tagssouhait->data;
			if ($this->Tagssouhait->save($tagssouhait_vote)) {
				// aller sauvegarder dans la table avec la date
				$this->UsersTagssouhait->create();
				$data=array('tagssouhait_id' => $tagssouhait['Tagssouhait']['id'], 'user_id' => $this->Auth->User('id'),'last_wish' => date('Y:m:d H:i:s'));
				if ($this->UsersTagssouhait->save($data)) {
					$this->Session->setFlash('Votre Tag a été sauvegarder, nous allons le prendre en compte','motif');
				return $this->redirect(array('action' => 'choix_souhait',$structure_id));
				} else {
				$this->Session->setFlash('imossible gfuyjygfjyfjuygfjude sauvegarder',"motif",array('type'=>'danger'));
				return $this->redirect(array('action' => 'choix_souhait'));}
			} else {
				$this->Session->setFlash('Ce Tag existe déjà',"motif",array('type'=>'danger'));
				return $this->redirect(array('action' => 'choix_souhait',$structure_id));
			}
		} else {
				$this->Session->setFlash('vous avez déjà voté/sauvegrdé 2 fois en mois de 1 mois, vous devez attendre',"motif",array('type'=>'danger'));}
				return $this->redirect(array('action' => 'choix_souhait',$structure_id));

	}

/**
 * edit method seulement pour samp
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Tagssouhait->recursive = 0;
		$this->set('tagssouhaits', $this->Paginator->paginate());
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Tagssouhait->save($this->request->data)) {
				$tagssouhait_id = $this->Tagssouhait->getInsertID;
				$this->Session->setFlash(__('The structures tag has been saved.'));
				return $this->redirect(array('action' => 'edit',$tagssouhait_id));
			} else {
				$this->Session->setFlash(__('The structures tag could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Tagssouhait.' . $this->Tagssouhait->primaryKey => $id));
			$this->request->data = $this->Tagssouhait->find('first', $options);
		}
	}


}
