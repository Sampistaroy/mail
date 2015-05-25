<?php
App::uses('AppController', 'Controller');
/**
 * Planches Controller
 *
 * @property Planch $Planch
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class PlanchesController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator', 'Session');

/**
 * add method
 *
 * @return void
 */
	public function add($structure_id = null) {
        $this->set('structure_id',$structure_id);
		if ($this->request->is('post')) {
			$this->Planch->create();
			$this->request->data['Planch']['structure_id'] = $structure_id;
			if ($this->Planch->save($this->request->data)) {
				$this->Session->setFlash(__('The planch has been saved.'));
				return $this->redirect(array('controller'=>'structure_gestions', 'action' => 'agenda',$structure_id));
			} else {
				$this->Session->setFlash(__('The planch could not be saved. Please, try again.'));
				return $this->redirect(array('controller'=>'planches', 'action' => 'add',$structure_id));
			}
		}
		$receptacles_bdd = $this->Planch->Receptacle->find('list');
		$this->set(compact('receptacles_bdd'));
        // remplissage champ receptacle
        $this->loadModel('Receptacle');
        $receptacles_bdd = $this->Receptacle->find('list', array(
                'fields' => array('Receptacle.id', 'Receptacle.receptaclename'),
                'conditions' => array('structure_id' => $structure_id))
        );
        $this->set('receptacles_bdd', $receptacles_bdd);
        // préselection pour le formulaire du receptacle.id
        if(!isset($this->request->data['Receptacle']['id'])){
            $this->request->data['Receptacle']['id'] = 'new';  }
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Planch->exists($id)) {
			throw new NotFoundException(__('Invalid planch'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Planch->save($this->request->data)) {
				$this->Session->setFlash(__('The planch has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The planch could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Planch.' . $this->Planch->primaryKey => $id));
			$this->request->data = $this->Planch->find('first', $options);
		}
		$receptacles = $this->Planch->Receptacle->find('list');
		$structures = $this->Planch->Structure->find('list');
		$this->set(compact('receptacles', 'structures'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Planch->id = $id;
		if (!$this->Planch->exists()) {
			throw new NotFoundException(__('Invalid planch'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Planch->delete()) {
			$this->Session->setFlash(__('The planch has been deleted.'));
		} else {
			$this->Session->setFlash(__('The planch could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
