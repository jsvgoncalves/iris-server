<?php
/**
 * TripInstanceFixture
 *
 */
class TripInstanceFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'user_id' => array('type' => 'biginteger', 'null' => false, 'default' => null, 'key' => 'primary'),
		'trip_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'timeinstance' => array('type' => 'timestamp', 'null' => false, 'default' => 'CURRENT_TIMESTAMP', 'key' => 'primary'),
		'lat' => array('type' => 'float', 'null' => false, 'default' => null, 'length' => 10),
		'long' => array('type' => 'float', 'null' => false, 'default' => null, 'length' => 10),
		'alt' => array('type' => 'float', 'null' => false, 'default' => null, 'length' => 10),
		'speed' => array('type' => 'float', 'null' => true, 'default' => null, 'length' => 10),
		'maxVelocityAllowed' => array('type' => 'integer', 'null' => true, 'default' => null),
		'valid' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 10, 'collate' => 'utf8_unicode_ci', 'charset' => 'utf8'),
		'motive' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 100, 'collate' => 'utf8_unicode_ci', 'charset' => 'utf8'),
		'indexes' => array(
			'PRIMARY' => array('column' => array('user_id', 'trip_id', 'timeinstance'), 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_unicode_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'user_id' => '',
			'trip_id' => 1,
			'timeinstance' => 1395167862,
			'lat' => 1,
			'long' => 1,
			'alt' => 1,
			'speed' => 1,
			'maxVelocityAllowed' => 1,
			'valid' => 'Lorem ip',
			'motive' => 'Lorem ipsum dolor sit amet'
		),
	);

}
