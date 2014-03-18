<?php
App::uses('PlayTrip', 'Model');

/**
 * PlayTrip Test Case
 *
 */
class PlayTripTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.play_trip'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->PlayTrip = ClassRegistry::init('PlayTrip');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->PlayTrip);

		parent::tearDown();
	}

}
