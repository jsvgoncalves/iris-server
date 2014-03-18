<?php
App::uses('TripInstance', 'Model');

/**
 * TripInstance Test Case
 *
 */
class TripInstanceTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.trip_instance',
		'app.trip'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->TripInstance = ClassRegistry::init('TripInstance');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->TripInstance);

		parent::tearDown();
	}

}
