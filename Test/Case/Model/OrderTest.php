<?php
App::uses('Order', 'Ecomm.Model');

/**
 * Order Test Case
 *
 */
class OrderTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'plugin.ecomm.order',
		'plugin.ecomm.user',
		'plugin.ecomm.bill_to_address',
		'plugin.ecomm.ship_to_address',
		'plugin.ecomm.paymnet_method',
		'plugin.ecomm.order_product'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Order = ClassRegistry::init('Ecomm.Order');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Order);

		parent::tearDown();
	}

}
