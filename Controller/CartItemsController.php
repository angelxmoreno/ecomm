<?php
App::uses('EcommAppController', 'Ecomm.Controller');
/**
 * CartItems Controller
 *
 * @property CartItem $CartItem
 */
class CartItemsController extends EcommAppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->CartItem->recursive = 0;
		$this->set('cartItems', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->CartItem->id = $id;
		if (!$this->CartItem->exists()) {
			throw new NotFoundException(__('Invalid cart item'));
		}
		$this->set('cartItem', $this->CartItem->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->CartItem->create();
			if ($this->CartItem->save($this->request->data)) {
				$this->Session->setFlash(__('The cart item has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The cart item could not be saved. Please, try again.'));
			}
		}
		$carts = $this->CartItem->Cart->find('list');
		$products = $this->CartItem->Product->find('list');
		$this->set(compact('carts', 'products'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->CartItem->id = $id;
		if (!$this->CartItem->exists()) {
			throw new NotFoundException(__('Invalid cart item'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->CartItem->save($this->request->data)) {
				$this->Session->setFlash(__('The cart item has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The cart item could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->CartItem->read(null, $id);
		}
		$carts = $this->CartItem->Cart->find('list');
		$products = $this->CartItem->Product->find('list');
		$this->set(compact('carts', 'products'));
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
		$this->CartItem->id = $id;
		if (!$this->CartItem->exists()) {
			throw new NotFoundException(__('Invalid cart item'));
		}
		if ($this->CartItem->delete()) {
			$this->Session->setFlash(__('Cart item deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Cart item was not deleted'));
		$this->redirect(array('action' => 'index'));
	}


/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->CartItem->recursive = 0;
		$this->set('cartItems', $this->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		$this->CartItem->id = $id;
		if (!$this->CartItem->exists()) {
			throw new NotFoundException(__('Invalid cart item'));
		}
		$this->set('cartItem', $this->CartItem->read(null, $id));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->CartItem->create();
			if ($this->CartItem->save($this->request->data)) {
				$this->Session->setFlash(__('The cart item has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The cart item could not be saved. Please, try again.'));
			}
		}
		$carts = $this->CartItem->Cart->find('list');
		$products = $this->CartItem->Product->find('list');
		$this->set(compact('carts', 'products'));
	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		$this->CartItem->id = $id;
		if (!$this->CartItem->exists()) {
			throw new NotFoundException(__('Invalid cart item'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->CartItem->save($this->request->data)) {
				$this->Session->setFlash(__('The cart item has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The cart item could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->CartItem->read(null, $id);
		}
		$carts = $this->CartItem->Cart->find('list');
		$products = $this->CartItem->Product->find('list');
		$this->set(compact('carts', 'products'));
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
		$this->CartItem->id = $id;
		if (!$this->CartItem->exists()) {
			throw new NotFoundException(__('Invalid cart item'));
		}
		if ($this->CartItem->delete()) {
			$this->Session->setFlash(__('Cart item deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Cart item was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
