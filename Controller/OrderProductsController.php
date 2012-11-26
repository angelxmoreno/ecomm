<?php
App::uses('EcommAppController', 'Ecomm.Controller');
/**
 * OrderProducts Controller
 *
 * @property OrderProduct $OrderProduct
 */
class OrderProductsController extends EcommAppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->OrderProduct->recursive = 0;
		$this->set('orderProducts', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->OrderProduct->id = $id;
		if (!$this->OrderProduct->exists()) {
			throw new NotFoundException(__('Invalid order product'));
		}
		$this->set('orderProduct', $this->OrderProduct->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->OrderProduct->create();
			if ($this->OrderProduct->save($this->request->data)) {
				$this->Session->setFlash(__('The order product has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The order product could not be saved. Please, try again.'));
			}
		}
		$orders = $this->OrderProduct->Order->find('list');
		$products = $this->OrderProduct->Product->find('list');
		$this->set(compact('orders', 'products'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->OrderProduct->id = $id;
		if (!$this->OrderProduct->exists()) {
			throw new NotFoundException(__('Invalid order product'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->OrderProduct->save($this->request->data)) {
				$this->Session->setFlash(__('The order product has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The order product could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->OrderProduct->read(null, $id);
		}
		$orders = $this->OrderProduct->Order->find('list');
		$products = $this->OrderProduct->Product->find('list');
		$this->set(compact('orders', 'products'));
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
		$this->OrderProduct->id = $id;
		if (!$this->OrderProduct->exists()) {
			throw new NotFoundException(__('Invalid order product'));
		}
		if ($this->OrderProduct->delete()) {
			$this->Session->setFlash(__('Order product deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Order product was not deleted'));
		$this->redirect(array('action' => 'index'));
	}


/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->OrderProduct->recursive = 0;
		$this->set('orderProducts', $this->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		$this->OrderProduct->id = $id;
		if (!$this->OrderProduct->exists()) {
			throw new NotFoundException(__('Invalid order product'));
		}
		$this->set('orderProduct', $this->OrderProduct->read(null, $id));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->OrderProduct->create();
			if ($this->OrderProduct->save($this->request->data)) {
				$this->Session->setFlash(__('The order product has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The order product could not be saved. Please, try again.'));
			}
		}
		$orders = $this->OrderProduct->Order->find('list');
		$products = $this->OrderProduct->Product->find('list');
		$this->set(compact('orders', 'products'));
	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		$this->OrderProduct->id = $id;
		if (!$this->OrderProduct->exists()) {
			throw new NotFoundException(__('Invalid order product'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->OrderProduct->save($this->request->data)) {
				$this->Session->setFlash(__('The order product has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The order product could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->OrderProduct->read(null, $id);
		}
		$orders = $this->OrderProduct->Order->find('list');
		$products = $this->OrderProduct->Product->find('list');
		$this->set(compact('orders', 'products'));
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
		$this->OrderProduct->id = $id;
		if (!$this->OrderProduct->exists()) {
			throw new NotFoundException(__('Invalid order product'));
		}
		if ($this->OrderProduct->delete()) {
			$this->Session->setFlash(__('Order product deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Order product was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
