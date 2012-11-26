<?php
App::uses('OrderProduct', 'Ecomm.Model');

/**
 * OrderProduct Test Case
 *
 */
class OrderProductTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'plugin.ecomm.order_product',
		'plugin.ecomm.order',
		'plugin.ecomm.product'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->OrderProduct = ClassRegistry::init('Ecomm.OrderProduct');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->OrderProduct);

		parent::tearDown();
	}

}
