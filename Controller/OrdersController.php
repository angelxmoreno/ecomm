<?php
App::uses('EcommAppController', 'Ecomm.Controller');
/**
 * Orders Controller
 *
 * @property Order $Order
 */
class OrdersController extends EcommAppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Order->recursive = 0;
		$this->set('orders', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Order->id = $id;
		if (!$this->Order->exists()) {
			throw new NotFoundException(__('Invalid order'));
		}
		$this->set('order', $this->Order->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Order->create();
			if ($this->Order->save($this->request->data)) {
				$this->Session->setFlash(__('The order has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The order could not be saved. Please, try again.'));
			}
		}
		$users = $this->Order->User->find('list');
		$billToAddresses = $this->Order->BillToAddress->find('list');
		$shipToAddresses = $this->Order->ShipToAddress->find('list');
		$paymnetMethods = $this->Order->PaymnetMethod->find('list');
		$this->set(compact('users', 'billToAddresses', 'shipToAddresses', 'paymnetMethods'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Order->id = $id;
		if (!$this->Order->exists()) {
			throw new NotFoundException(__('Invalid order'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Order->save($this->request->data)) {
				$this->Session->setFlash(__('The order has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The order could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Order->read(null, $id);
		}
		$users = $this->Order->User->find('list');
		$billToAddresses = $this->Order->BillToAddress->find('list');
		$shipToAddresses = $this->Order->ShipToAddress->find('list');
		$paymnetMethods = $this->Order->PaymnetMethod->find('list');
		$this->set(compact('users', 'billToAddresses', 'shipToAddresses', 'paymnetMethods'));
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
		$this->Order->id = $id;
		if (!$this->Order->exists()) {
			throw new NotFoundException(__('Invalid order'));
		}
		if ($this->Order->delete()) {
			$this->Session->setFlash(__('Order deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Order was not deleted'));
		$this->redirect(array('action' => 'index'));
	}


/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->Order->recursive = 0;
		$this->set('orders', $this->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		$this->Order->id = $id;
		if (!$this->Order->exists()) {
			throw new NotFoundException(__('Invalid order'));
		}
		$this->set('order', $this->Order->read(null, $id));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Order->create();
			if ($this->Order->save($this->request->data)) {
				$this->Session->setFlash(__('The order has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The order could not be saved. Please, try again.'));
			}
		}
		$users = $this->Order->User->find('list');
		$billToAddresses = $this->Order->BillToAddress->find('list');
		$shipToAddresses = $this->Order->ShipToAddress->find('list');
		$paymnetMethods = $this->Order->PaymnetMethod->find('list');
		$this->set(compact('users', 'billToAddresses', 'shipToAddresses', 'paymnetMethods'));
	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		$this->Order->id = $id;
		if (!$this->Order->exists()) {
			throw new NotFoundException(__('Invalid order'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Order->save($this->request->data)) {
				$this->Session->setFlash(__('The order has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The order could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Order->read(null, $id);
		}
		$users = $this->Order->User->find('list');
		$billToAddresses = $this->Order->BillToAddress->find('list');
		$shipToAddresses = $this->Order->ShipToAddress->find('list');
		$paymnetMethods = $this->Order->PaymnetMethod->find('list');
		$this->set(compact('users', 'billToAddresses', 'shipToAddresses', 'paymnetMethods'));
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
		$this->Order->id = $id;
		if (!$this->Order->exists()) {
			throw new NotFoundException(__('Invalid order'));
		}
		if ($this->Order->delete()) {
			$this->Session->setFlash(__('Order deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Order was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
