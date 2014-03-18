<?php
/**
 * TripFixture
 *
 */
class TripFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'trip';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'user_id' => array('type' => 'biginteger', 'null' => false, 'default' => null, 'key' => 'primary'),
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'start' => array('type' => 'timestamp', 'null' => true, 'default' => null),
		'end' => array('type' => 'timestamp', 'null' => true, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => array('user_id', 'id'), 'unique' => 1)
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
			'id' => 1,
			'start' => 1395167862,
			'end' => 1395167862
		),
	);

}
