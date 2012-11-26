<?php
/**
 * OrderProductFixture
 *
 */
class OrderProductFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 36, 'key' => 'primary', 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'order_id' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 36, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'product_id' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 36, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'quantity' => array('type' => 'integer', 'null' => false, 'default' => '1', 'length' => 10),
		'price' => array('type' => 'float', 'null' => false, 'default' => null, 'length' => '9,2'),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1)
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
			'id' => '50b2afda-ffa8-4122-8d05-2784b21b6772',
			'order_id' => 'Lorem ipsum dolor sit amet',
			'product_id' => 'Lorem ipsum dolor sit amet',
			'quantity' => 1,
			'price' => 1,
			'created' => '2012-11-25 23:55:06',
			'modified' => '2012-11-25 23:55:06'
		),
	);

}
