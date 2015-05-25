<?php
App::uses('AppController', 'Controller');
/**
 * Assolivenouvs Controller
 *
 * @property Assolivenouv $Assolivenouv
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class AssolivenouvsController extends AppController {

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
    $this->Paginator->settings = array(
        'order' => array('Assolivenouv.create' => 'DESC')
    );
		$this->Assolivenouv->recursive = 0;
		$this->set('assolivenouvs', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Assolivenouv->exists($id)) {
			throw new NotFoundException(__('Invalid assolivenouv'));
		}
		$options = array('conditions' => array('Assolivenouv.' . $this->Assolivenouv->primaryKey => $id));
		$this->set('assolivenouv', $this->Assolivenouv->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Assolivenouv->create();
			if ($this->Assolivenouv->save($this->request->data)) {
				$this->Session->setFlash(__('The assolivenouv has been saved.'));
				return $this->redirect(array('action' => 'admin_index'));
			} else {
				$this->Session->setFlash(__('The assolivenouv could not be saved. Please, try again.'));
			}
		}
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Assolivenouv->exists($id)) {
			throw new NotFoundException(__('Invalid assolivenouv'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Assolivenouv->save($this->request->data)) {
				$this->Session->setFlash(__('The assolivenouv has been saved.'));
				return $this->redirect(array('action' => 'admin_index'));
			} else {
				$this->Session->setFlash(__('The assolivenouv could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Assolivenouv.' . $this->Assolivenouv->primaryKey => $id));
			$this->request->data = $this->Assolivenouv->find('first', $options);
		}
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Assolivenouv->id = $id;
		if (!$this->Assolivenouv->exists()) {
			throw new NotFoundException(__('Invalid assolivenouv'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Assolivenouv->delete()) {
			$this->Session->setFlash(__('The assolivenouv has been deleted.'));
		} else {
			$this->Session->setFlash(__('The assolivenouv could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

	/**
	 * admin_index method
	 *
	 * @return void
	 */
		public function admin_index() {
			$this->Assolivenouv->recursive = 0;
			$this->set('assolivenouvs', $this->Paginator->paginate());
		}


	/**
	 * admin_view method
	 *
	 * @throws NotFoundException
	 * @param string $id
	 * @return void
	 */
		public function admin_view($id = null) {
			if (!$this->Assolivenouv->exists($id)) {
				throw new NotFoundException(__('Invalid assolivenouv'));
			}
			$options = array('conditions' => array('Assolivenouv.' . $this->Assolivenouv->primaryKey => $id));
			$this->set('assolivenouv', $this->Assolivenouv->find('first', $options));
		}

}
