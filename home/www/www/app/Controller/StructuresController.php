<?php
App::uses('AppController', 'Controller');
/**
 * Structures Controller
 *
 * @property Structure $Structure
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class StructuresController extends AppController {



/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Structure->exists($id)) {
			throw new NotFoundException(__('Invalid structure'));
		}
		$options = array('conditions' => array('Structure.' . $this->Structure->primaryKey => $id));
		$this->set('structure', $this->Structure->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Structure->create();
			if ($this->Structure->save($this->request->data)) {
				$this->Session->setFlash(__('The structure has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The structure could not be saved. Please, try again.'));
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
		if (!$this->Structure->exists($id)) {
			throw new NotFoundException(__('Invalid structure'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Structure->save($this->request->data)) {
				$this->Session->setFlash(__('The structure has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The structure could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Structure.' . $this->Structure->primaryKey => $id));
			$this->request->data = $this->Structure->find('first', $options);
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
		$this->Structure->id = $id;
		if (!$this->Structure->exists()) {
			throw new NotFoundException(__('Invalid structure'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Structure->delete()) {
			$this->Session->setFlash(__('The structure has been deleted.'));
		} else {
			$this->Session->setFlash(__('The structure could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

/**
 * dashboard method
 *
 * 
 */

        //va chercher toutes les structures auxquelles on est lié.
	public function dashboard(){
        $this->loadModel('Structures_user');
        $structure_users=$this->Structures_user->find('threaded', array(
                'conditions' => array('user_id' => $this->Auth->user('id')),
    			'recursive' => 2
        ));
        $this->set('structures_users', $structure_users);
	}
}
