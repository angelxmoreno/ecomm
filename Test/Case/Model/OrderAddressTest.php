<?php
App::uses('OrderAddress', 'Ecomm.Model');

/**
 * OrderAddress Test Case
 *
 */
class OrderAddressTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'plugin.ecomm.order_address',
		'plugin.ecomm.user'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->OrderAddress = ClassRegistry::init('Ecomm.OrderAddress');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->OrderAddress);

		parent::tearDown();
	}

}
