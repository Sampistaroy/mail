<?php
App::uses('AppController', 'Controller');
/**
 * Pratiquants Controller
 *
 * @property Pratiquant $Pratiquant
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class PratiquantsController extends AppController {

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
	public function index($structure_id = null) {
		$this->set('structure_id', $structure_id);
	    $this->Paginator->settings = array(
	        'conditions' => array('Pratiquant.structure_id' => $structure_id)
	    );
		$this->set('pratiquants', $this->Paginator->paginate('Pratiquant'));
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($structure_id = null, $id = null) {
		$this->set('structure_id', $structure_id);
		if (!$this->Pratiquant->exists($id)) {
			throw new NotFoundException(__('Invalid pratiquant'));
		}
		$options = array('conditions' => array('Pratiquant.' . $this->Pratiquant->primaryKey => $id));
		$this->set('pratiquant', $this->Pratiquant->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add($structure_id = null) {
		$this->set('structure_id', $structure_id);
		if ($this->request->is('post')) {
			$this->Pratiquant->create();
			$this->Pratiquant->set('structure_id', $structure_id);
			if ($this->Pratiquant->save($this->request->data)) {
				$this->Session->setFlash(__('Le pratiquant a été sauvegardé.'));
				return $this->redirect(array('action' => 'index',$structure_id));
			} else {
				$this->Session->setFlash(__('Le pratiquant n\'a pas pu être sauvegardé.'));
			}
		}
		$structures = $this->Pratiquant->Structure->find('list');
		$this->set(compact('structures'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($structure_id = null, $id = null) {
		$this->set('structure_id', $structure_id);
		if (!$this->Pratiquant->exists($id)) {
			throw new NotFoundException(__('Invalid pratiquant'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Pratiquant->save($this->request->data)) {
				$this->Session->setFlash(__('Le pratiquant a été sauvegardé.'));
				return $this->redirect(array('action' => 'index',$structure_id));
			} else {
				$this->Session->setFlash(__('Le pratiquant n\'a pas pu être sauvegardé.'));
			}
		} else {
			$options = array('conditions' => array('Pratiquant.' . $this->Pratiquant->primaryKey => $id));
			$this->request->data = $this->Pratiquant->find('first', $options);
		}
		$structures = $this->Pratiquant->Structure->find('list');
		$this->set(compact('structures'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($structure_id = null, $id = null) {
		$this->Pratiquant->id = $id;
		if (!$this->Pratiquant->exists()) {
			throw new NotFoundException(__('Invalid pratiquant'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Pratiquant->delete()) {
			$this->Session->setFlash(__('Le pratiquant a été supprimé.'));
		} else {
			$this->Session->setFlash(__('Le pratiquant n\' pas pu être supprimé.'));
		}
		return $this->redirect(array('action' => 'index', $structure_id));
	}
}
