<?php
/**
 * EmployeeFixture
 *
 */
class EmployeeFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'birth_date' => array('type' => 'date', 'null' => false, 'default' => null),
		'first_name' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 14, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'last_name' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 16, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'hire_date' => array('type' => 'date', 'null' => false, 'default' => null),
		'department_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'index'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'dep_emp_FK' => array('column' => 'department_id', 'unique' => 0)
		),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'birth_date' => '2014-06-23',
			'first_name' => 'Lorem ipsum ',
			'last_name' => 'Lorem ipsum do',
			'hire_date' => '2014-06-23',
			'department_id' => 1
		),
	);

}
