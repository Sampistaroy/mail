<?php
App::uses('AppController', 'Controller');
/**
 * StructuresTags Controller
 *
 * @property StructuresTag $StructuresTag
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class StructuresTagsController extends AppController {

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
	public function choix_tag($structure_id = null) {
		$this->set('structure_id', $structure_id);
		$this->loadModel('StructuresTag');
		$this->set('structuresTags',$this->StructuresTag->findAllByStructure_id($structure_id));

		$this->loadModel('Tag');
	    $this->Paginator->settings = array(
	        'order' => array('tagname' => 'ASC')
	    );
		$this->Tag->recursive = 0;
		$this->set('tags', $this->Paginator->paginate('Tag'));
	}
/**
 * index method
 *
 * @return void
 */
	public function choix_tag_assign($structure_id = null, $tag_id = null, $tag_id_a_modif = null) {
		if(!$tag_id){
			$this->Session->setFlash('Nous n\'avons pas compris votre Tag','motif',array('type'=>'danger'));
			return $this->redirect(array('controller' => 'structures_tags', 'action' => 'choix_tag',$structure_id));
		}
		// voir si la structure a des tags et combien.
		$this->loadModel('StructuresTag');

		//si structures_tags n'a pas ce tag_id et structure_id
		if(!$this->StructuresTag->findAllByStructure_idAndTag_id($structure_id,$tag_id)){
			// compter les tags de la structure
			$structures_tags_count = $this->StructuresTag->find('count', array(
	    		'conditions' => array('StructuresTag.structure_id' => $structure_id)));
			//si elle a moins de 2 tags
			if($structures_tags_count<2){
				$data=array('structure_id' => $structure_id, 'tag_id' => $tag_id);
				//insérer le tag et la structure dans la table asso
				if($this->StructuresTag->save($data)){//sinon afficher message d'erreur
					$this->Session->setFlash('Sauvegardé','motif');
					return $this->redirect(array('controller' => 'structures_tags', 'action' => 'choix_tag',$structure_id));
				}else{//sinon afficher message d'erreur
					$this->Session->setFlash('Sauvegarde impossible 2','motif',array('type'=>'danger'));
					return $this->redirect(array('controller' => 'structures_tags', 'action' => 'choix_tag',$structure_id));
				}

			}elseif($structures_tags_count>=2){//si elle a plus de 2 tags
				//si l'id du tag a modifier exist
				if(isset($tag_id_a_modif)){
					debug($tag_id_a_modif);
					//si l'id du tag a modifier est en bdd
					if ($data = $this->StructuresTag->findAllByStructure_idAndTag_id($structure_id,$tag_id_a_modif)) {
							debug($data);
						//modifier cette entrée en modifiant le tag_id
						$structures_tags_modif['StructuresTag']['tag_id']=(int) ($tag_id);
						$structures_tags_modif['StructuresTag']['structure_id']=(int) ($structure_id);
						$structures_tags_modif['StructuresTag']['id']=$data['0']['StructuresTag']['id'];
							debug($tag_id);
							debug($structures_tags_modif);
						//insérer le tag et la structure dans la table asso
						if($this->StructuresTag->save($structures_tags_modif)){
							$this->Session->setFlash('mis a jour','motif');
							return $this->redirect(array('controller' => 'structures_tags', 'action' => 'choix_tag',$structure_id));
						}else{// sinon afficher message d'erreur
							$this->Session->setFlash('Sauvegarde impossible','motif',array('type'=>'danger'));
							return $this->redirect(array('controller' => 'structures_tags', 'action' => 'choix_tag',$structure_id));
						}
						
					}else{// sinon afficher message d'erreur
						$this->Session->setFlash('Cette structure n\'a pas ce tag','motif',array('type'=>'danger'));
						return $this->redirect(array('controller' => 'structures_tags', 'action' => 'choix_tag_assign',$structure_id, $tag_id));
					}
				}else{//sinon
					//afficher la page avec les tags mettre un lien dessus avec l'id du tag a modifier
					$this->set('structuresTags',$this->StructuresTag->findAllByStructure_id($structure_id));
					$this->set('structure_id', $structure_id);
					$this->set('tag_id', $tag_id);
				}
			}
		}else{//sinon afficher message d'erreur
			$this->Session->setFlash('Vous avez déjà ce Tag','motif',array('type'=>'danger'));
			return $this->redirect(array('controller' => 'structures_tags', 'action' => 'choix_tag',$structure_id));

		}

	}




/**
 * index method
 *
 * @return void
 */
	public function index($structure_id = null) {
		$this->set('structure_id', $structure_id);
		$this->loadModel('StructuresTag');
	    $structures_tags = $this->StructuresTag->find('threaded',array(
	        'recursive'=>2
	        ));
		$this->set('structures_tags', $structures_tags);
		$this->loadModel('Tag');
	    $this->Paginator->settings = array(
	        'order' => array('tagname' => 'ASC')
	    );
		$this->Tag->recursive = 2;
		$this->set('tags', $this->Paginator->paginate('Tag'));
	}
/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->StructuresTag->exists($id)) {
			throw new NotFoundException(__('Invalid structures tag'));
		}
		$options = array('conditions' => array('StructuresTag.' . $this->StructuresTag->primaryKey => $id));
		$this->set('structuresTag', $this->StructuresTag->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->StructuresTag->create();
			if ($this->StructuresTag->save($this->request->data)) {
				$this->Session->setFlash(__('The structures tag has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The structures tag could not be saved. Please, try again.'));
			}
		}
		$structures = $this->StructuresTag->Structure->find('list');
		$tags = $this->StructuresTag->Tag->find('list');
		$this->set(compact('structures', 'tags'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->StructuresTag->exists($id)) {
			throw new NotFoundException(__('Invalid structures tag'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->StructuresTag->save($this->request->data)) {
				$this->Session->setFlash(__('The structures tag has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The structures tag could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('StructuresTag.' . $this->StructuresTag->primaryKey => $id));
			$this->request->data = $this->StructuresTag->find('first', $options);
		}
		$structures = $this->StructuresTag->Structure->find('list');
		$tags = $this->StructuresTag->Tag->find('list');
		$this->set(compact('structures', 'tags'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->StructuresTag->id = $id;
		if (!$this->StructuresTag->exists()) {
			throw new NotFoundException(__('Invalid structures tag'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->StructuresTag->delete()) {
			$this->Session->setFlash(__('The structures tag has been deleted.'));
		} else {
			$this->Session->setFlash(__('The structures tag could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
