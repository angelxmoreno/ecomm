<?php
App::uses('EcommAppController', 'Ecomm.Controller');
/**
 * Carts Controller
 *
 * @property Cart $Cart
 */
class CartsController extends EcommAppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Cart->recursive = 0;
		$this->set('carts', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Cart->id = $id;
		if (!$this->Cart->exists()) {
			throw new NotFoundException(__('Invalid cart'));
		}
		$this->set('cart', $this->Cart->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Cart->create();
			if ($this->Cart->save($this->request->data)) {
				$this->Session->setFlash(__('The cart has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The cart could not be saved. Please, try again.'));
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
		$this->Cart->id = $id;
		if (!$this->Cart->exists()) {
			throw new NotFoundException(__('Invalid cart'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Cart->save($this->request->data)) {
				$this->Session->setFlash(__('The cart has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The cart could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Cart->read(null, $id);
		}
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
		$this->Cart->id = $id;
		if (!$this->Cart->exists()) {
			throw new NotFoundException(__('Invalid cart'));
		}
		if ($this->Cart->delete()) {
			$this->Session->setFlash(__('Cart deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Cart was not deleted'));
		$this->redirect(array('action' => 'index'));
	}


/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->Cart->recursive = 0;
		$this->set('carts', $this->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		$this->Cart->id = $id;
		if (!$this->Cart->exists()) {
			throw new NotFoundException(__('Invalid cart'));
		}
		$this->set('cart', $this->Cart->read(null, $id));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Cart->create();
			if ($this->Cart->save($this->request->data)) {
				$this->Session->setFlash(__('The cart has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The cart could not be saved. Please, try again.'));
			}
		}
	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		$this->Cart->id = $id;
		if (!$this->Cart->exists()) {
			throw new NotFoundException(__('Invalid cart'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Cart->save($this->request->data)) {
				$this->Session->setFlash(__('The cart has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The cart could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Cart->read(null, $id);
		}
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
		$this->Cart->id = $id;
		if (!$this->Cart->exists()) {
			throw new NotFoundException(__('Invalid cart'));
		}
		if ($this->Cart->delete()) {
			$this->Session->setFlash(__('Cart deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Cart was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
