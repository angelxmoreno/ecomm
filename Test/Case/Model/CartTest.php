<?php
App::uses('Cart', 'Ecomm.Model');

/**
 * Cart Test Case
 *
 */
class CartTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'plugin.ecomm.cart',
		'plugin.ecomm.cart_item'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Cart = ClassRegistry::init('Ecomm.Cart');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Cart);

		parent::tearDown();
	}

}
