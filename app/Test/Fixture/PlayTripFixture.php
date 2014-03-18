<?php
/**
 * PlayTripFixture
 *
 */
class PlayTripFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'user_id' => array('type' => 'biginteger', 'null' => false, 'default' => null, 'key' => 'primary'),
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'submited' => array('type' => 'timestamp', 'null' => false, 'default' => 'CURRENT_TIMESTAMP'),
		'dataurl' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 200, 'collate' => 'utf8_unicode_ci', 'charset' => 'utf8'),
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
			'submited' => 1395167862,
			'dataurl' => 'Lorem ipsum dolor sit amet'
		),
	);

}
