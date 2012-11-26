<?php
App::uses('ProductCategory', 'Ecomm.Model');

/**
 * ProductCategory Test Case
 *
 */
class ProductCategoryTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'plugin.ecomm.product_category',
		'plugin.ecomm.product',
		'plugin.ecomm.products_product_category'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->ProductCategory = ClassRegistry::init('Ecomm.ProductCategory');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->ProductCategory);

		parent::tearDown();
	}

}
