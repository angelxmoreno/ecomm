<?php
App::uses('EcommAppController', 'Ecomm.Controller');
/**
 * ProductCategories Controller
 *
 * @property ProductCategory $ProductCategory
 */
class ProductCategoriesController extends EcommAppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->ProductCategory->recursive = 0;
                $categories = $this->paginate();
		$this->set('productCategories', $categories);
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->ProductCategory->id = $id;
		if (!$this->ProductCategory->exists()) {
			throw new NotFoundException(__('Invalid product category'));
		}
		$this->set('productCategory', $this->ProductCategory->read(null, $id));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->ProductCategory->recursive = 0;
		$this->set('productCategories', $this->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		$this->ProductCategory->id = $id;
		if (!$this->ProductCategory->exists()) {
			throw new NotFoundException(__('Invalid product category'));
		}
		$this->set('productCategory', $this->ProductCategory->read(null, $id));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->ProductCategory->create();
			if ($this->ProductCategory->save($this->request->data)) {
				$this->Session->setFlash(__('The product category has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The product category could not be saved. Please, try again.'));
			}
		}
		$products = $this->ProductCategory->Product->find('list');
		$this->set(compact('products'));
                
                $parents = $this->ProductCategory->find('list');
		$this->set(compact('parents'));
	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		$this->ProductCategory->id = $id;
		if (!$this->ProductCategory->exists()) {
			throw new NotFoundException(__('Invalid product category'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->ProductCategory->save($this->request->data)) {
				$this->Session->setFlash(__('The product category has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The product category could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->ProductCategory->read(null, $id);
		}
		$products = $this->ProductCategory->Product->find('list');
		$this->set(compact('products'));
                
                $parents = $this->ProductCategory->find('list');
		$this->set(compact('parents'));
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
		$this->ProductCategory->id = $id;
		if (!$this->ProductCategory->exists()) {
			throw new NotFoundException(__('Invalid product category'));
		}
		if ($this->ProductCategory->delete()) {
			$this->Session->setFlash(__('Product category deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Product category was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
