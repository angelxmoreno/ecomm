<?php
/**
 * OrderFixture
 *
 */
class OrderFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 36, 'key' => 'primary', 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'name' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 100, 'key' => 'unique', 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'user_id' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 36, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'bill_to_address_id' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 36, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'ship_to_address_id' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 36, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'subtotal' => array('type' => 'float', 'null' => false, 'default' => null, 'length' => '9,2'),
		'tax_amount' => array('type' => 'float', 'null' => false, 'default' => null, 'length' => '9,2'),
		'shipping_amount' => array('type' => 'float', 'null' => false, 'default' => null, 'length' => '9,2'),
		'paymnet_method_id' => array('type' => 'integer', 'null' => false, 'default' => null),
		'is_paid' => array('type' => 'integer', 'null' => false, 'default' => '0', 'length' => 4),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'name_UNIQUE' => array('column' => 'name', 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => '50b2ab28-3d30-45db-b949-29e0b21b6772',
			'name' => 'Lorem ipsum dolor sit amet',
			'user_id' => 'Lorem ipsum dolor sit amet',
			'bill_to_address_id' => 'Lorem ipsum dolor sit amet',
			'ship_to_address_id' => 'Lorem ipsum dolor sit amet',
			'subtotal' => 1,
			'tax_amount' => 1,
			'shipping_amount' => 1,
			'paymnet_method_id' => 1,
			'is_paid' => 1,
			'created' => '2012-11-25 23:35:04',
			'modified' => '2012-11-25 23:35:04'
		),
	);

}
