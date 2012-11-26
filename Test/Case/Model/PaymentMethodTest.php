<?php
App::uses('PaymentMethod', 'Ecomm.Model');

/**
 * PaymentMethod Test Case
 *
 */
class PaymentMethodTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'plugin.ecomm.payment_method',
		'plugin.ecomm.order'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->PaymentMethod = ClassRegistry::init('Ecomm.PaymentMethod');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->PaymentMethod);

		parent::tearDown();
	}

}
