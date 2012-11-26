<?php
App::uses('EcommAppController', 'Ecomm.Controller');
/**
 * OrderAddresses Controller
 *
 * @property OrderAddress $OrderAddress
 */
class OrderAddressesController extends EcommAppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->OrderAddress->recursive = 0;
		$this->set('orderAddresses', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->OrderAddress->id = $id;
		if (!$this->OrderAddress->exists()) {
			throw new NotFoundException(__('Invalid order address'));
		}
		$this->set('orderAddress', $this->OrderAddress->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->OrderAddress->create();
			if ($this->OrderAddress->save($this->request->data)) {
				$this->Session->setFlash(__('The order address has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The order address could not be saved. Please, try again.'));
			}
		}
		$users = $this->OrderAddress->User->find('list');
		$this->set(compact('users'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->OrderAddress->id = $id;
		if (!$this->OrderAddress->exists()) {
			throw new NotFoundException(__('Invalid order address'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->OrderAddress->save($this->request->data)) {
				$this->Session->setFlash(__('The order address has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The order address could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->OrderAddress->read(null, $id);
		}
		$users = $this->OrderAddress->User->find('list');
		$this->set(compact('users'));
	}

/**
 * delete method
 *
 * @throws MethodNotAllowedException
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		if (!$this->request->is('post')) {
			throw new MethodNotAllowedException();
		}
		$this->OrderAddress->id = $id;
		if (!$this->OrderAddress->exists()) {
			throw new NotFoundException(__('Invalid order address'));
		}
		if ($this->OrderAddress->delete()) {
			$this->Session->setFlash(__('Order address deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Order address was not deleted'));
		$this->redirect(array('action' => 'index'));
	}


/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->OrderAddress->recursive = 0;
		$this->set('orderAddresses', $this->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		$this->OrderAddress->id = $id;
		if (!$this->OrderAddress->exists()) {
			throw new NotFoundException(__('Invalid order address'));
		}
		$this->set('orderAddress', $this->OrderAddress->read(null, $id));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->OrderAddress->create();
			if ($this->OrderAddress->save($this->request->data)) {
				$this->Session->setFlash(__('The order address has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The order address could not be saved. Please, try again.'));
			}
		}
		$users = $this->OrderAddress->User->find('list');
		$this->set(compact('users'));
	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		$this->OrderAddress->id = $id;
		if (!$this->OrderAddress->exists()) {
			throw new NotFoundException(__('Invalid order address'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->OrderAddress->save($this->request->data)) {
				$this->Session->setFlash(__('The order address has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The order address could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->OrderAddress->read(null, $id);
		}
		$users = $this->OrderAddress->User->find('list');
		$this->set(compact('users'));
	}

/**
 * admin_delete method
 *
 * @throws MethodNotAllowedException
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		if (!$this->request->is('post')) {
			throw new MethodNotAllowedException();
		}
		$this->OrderAddress->id = $id;
		if (!$this->OrderAddress->exists()) {
			throw new NotFoundException(__('Invalid order address'));
		}
		if ($this->OrderAddress->delete()) {
			$this->Session->setFlash(__('Order address deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Order address was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
