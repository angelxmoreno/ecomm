<?php
App::uses('Product', 'Ecomm.Model');

/**
 * Product Test Case
 *
 */
class ProductTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'plugin.ecomm.product',
		'plugin.ecomm.cart_item',
		'plugin.ecomm.order',
		'plugin.ecomm.order_product',
		'plugin.ecomm.product_category',
		'plugin.ecomm.products_product_category'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Product = ClassRegistry::init('Ecomm.Product');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Product);

		parent::tearDown();
	}

}
