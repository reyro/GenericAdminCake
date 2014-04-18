<?php
App::uses('AdmModule', 'Model');

/**
 * AdmModule Test Case
 *
 */
class AdmModuleTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.adm_module'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->AdmModule = ClassRegistry::init('AdmModule');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->AdmModule);

		parent::tearDown();
	}

}
