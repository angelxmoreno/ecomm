<?php
App::uses('CartItem', 'Ecomm.Model');

/**
 * CartItem Test Case
 *
 */
class CartItemTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'plugin.ecomm.cart_item',
		'plugin.ecomm.cart',
		'plugin.ecomm.product'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->CartItem = ClassRegistry::init('Ecomm.CartItem');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->CartItem);

		parent::tearDown();
	}

}
