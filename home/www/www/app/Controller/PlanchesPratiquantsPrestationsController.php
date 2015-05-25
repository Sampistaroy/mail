<?php
App::uses('AppController', 'Controller');
/**
 * PlanchesPratiquantsPrestations Controller
 *
 * @property PlanchesPratiquantsPrestation $PlanchesPratiquantsPrestation
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class PlanchesPratiquantsPrestationsController extends AppController {

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
	public function index() {
		$this->PlanchesPratiquantsPrestation->recursive = 0;
		$this->set('planchesPratiquantsPrestations', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($structure_id = null,$planch_id = null) {
		$this->set('structure_id', $structure_id);
		if (!isset($planch_id)) {
			throw new NotFoundException(__('Invalid planches pratiquants prestation'));
		}
		$options = array(
			'conditions' => array(
				'PlanchesPratiquantsPrestation.structure_id' => $structure_id,
				'PlanchesPratiquantsPrestation.planch_id' => $planch_id));
		$this->set('PlanchesPratiquantsPrestations', $this->PlanchesPratiquantsPrestation->find('threaded', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->PlanchesPratiquantsPrestation->create();
			if ($this->PlanchesPratiquantsPrestation->save($this->request->data)) {
				$this->Session->setFlash(__('The planches pratiquants prestation has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The planches pratiquants prestation could not be saved. Please, try again.'));
			}
		}
		$planches = $this->PlanchesPratiquantsPrestation->Planch->find('list');
		$pratiquants = $this->PlanchesPratiquantsPrestation->Pratiquant->find('list');
		$prestations = $this->PlanchesPratiquantsPrestation->Prestation->find('list');
		$structures = $this->PlanchesPratiquantsPrestation->Structure->find('list');
		$this->set(compact('planches', 'pratiquants', 'prestations', 'structures'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->PlanchesPratiquantsPrestation->exists($id)) {
			throw new NotFoundException(__('Invalid planches pratiquants prestation'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->PlanchesPratiquantsPrestation->save($this->request->data)) {
				$this->Session->setFlash(__('The planches pratiquants prestation has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The planches pratiquants prestation could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('PlanchesPratiquantsPrestation.' . $this->PlanchesPratiquantsPrestation->primaryKey => $id));
			$this->request->data = $this->PlanchesPratiquantsPrestation->find('first', $options);
		}
		$planches = $this->PlanchesPratiquantsPrestation->Planch->find('list');
		$pratiquants = $this->PlanchesPratiquantsPrestation->Pratiquant->find('list');
		$prestations = $this->PlanchesPratiquantsPrestation->Prestation->find('list');
		$structures = $this->PlanchesPratiquantsPrestation->Structure->find('list');
		$this->set(compact('planches', 'pratiquants', 'prestations', 'structures'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->PlanchesPratiquantsPrestation->id = $id;
		if (!$this->PlanchesPratiquantsPrestation->exists()) {
			throw new NotFoundException(__('Invalid planches pratiquants prestation'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->PlanchesPratiquantsPrestation->delete()) {
			$this->Session->setFlash(__('The planches pratiquants prestation has been deleted.'));
		} else {
			$this->Session->setFlash(__('The planches pratiquants prestation could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
