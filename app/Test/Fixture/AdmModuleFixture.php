<?php
/**
 * AdmModuleFixture
 *
 */
class AdmModuleFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 11, 'key' => 'primary'),
		'name' => array('type' => 'string', 'null' => false, 'length' => 15),
		'initials' => array('type' => 'string', 'null' => false, 'length' => 5),
		'description' => array('type' => 'string', 'null' => false, 'length' => 60),
		'lc_state' => array('type' => 'string', 'null' => false, 'default' => 'ELABORATED', 'length' => 30),
		'lc_transaction' => array('type' => 'string', 'null' => false, 'default' => 'CREATE', 'length' => 30),
		'creator' => array('type' => 'integer', 'null' => false),
		'date_created' => array('type' => 'datetime', 'null' => false, 'default' => 'now()'),
		'modifier' => array('type' => 'integer', 'null' => true),
		'date_modified' => array('type' => 'datetime', 'null' => true),
		'indexes' => array(
			'PRIMARY' => array('unique' => true, 'column' => 'id'),
			'uc_admmodules_initials' => array('unique' => true, 'column' => 'initials')
		),
		'tableParameters' => array()
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'name' => 'Lorem ipsum d',
			'initials' => 'Lor',
			'description' => 'Lorem ipsum dolor sit amet',
			'lc_state' => 'Lorem ipsum dolor sit amet',
			'lc_transaction' => 'Lorem ipsum dolor sit amet',
			'creator' => 1,
			'date_created' => '2014-04-16 22:01:38',
			'modifier' => 1,
			'date_modified' => '2014-04-16 22:01:38'
		),
	);

}
