<?php
App::uses('Vehicule', 'Model');

/**
 * Vehicule Test Case
 *
 */
class VehiculeTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.vehicule'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Vehicule = ClassRegistry::init('Vehicule');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Vehicule);

		parent::tearDown();
	}

}
