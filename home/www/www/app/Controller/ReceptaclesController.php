<?php
App::uses('AppController', 'Controller');
/**
 * Receptacles Controller
 *
 * @property Receptacle $Receptacle
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class ReceptaclesController extends AppController {

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
		$this->Receptacle->recursive = 0;
		$this->set('receptacles', $this->Paginator->paginate());
		$this->set('structure_id',$structure_id);
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Receptacle->exists($id)) {
			throw new NotFoundException(__('Invalid receptacle'));
		}
		$options = array('conditions' => array('Receptacle.' . $this->Receptacle->primaryKey => $id));
		$this->set('receptacle', $this->Receptacle->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Receptacle->create();
			if ($this->Receptacle->save($this->request->data)) {
				$this->Session->setFlash(__('The receptacle has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The receptacle could not be saved. Please, try again.'));
			}
		}
		$structures = $this->Receptacle->Structure->find('list');
		$this->set(compact('structures'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Receptacle->exists($id)) {
			throw new NotFoundException(__('Invalid receptacle'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Receptacle->save($this->request->data)) {
				$this->Session->setFlash(__('The receptacle has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The receptacle could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Receptacle.' . $this->Receptacle->primaryKey => $id));
			$this->request->data = $this->Receptacle->find('first', $options);
		}
		$structures = $this->Receptacle->Structure->find('list');
		$this->set(compact('structures'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Receptacle->id = $id;
		if (!$this->Receptacle->exists()) {
			throw new NotFoundException(__('Invalid receptacle'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Receptacle->delete()) {
			$this->Session->setFlash(__('The receptacle has been deleted.'));
		} else {
			$this->Session->setFlash(__('The receptacle could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
