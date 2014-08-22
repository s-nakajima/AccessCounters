<?php
/**
 * AccessCountersBlockFixture
 *
 * @author      Noriko Arai <arai@nii.ac.jp>
 * @author      Shohei Nakajima <nakajimashouhei@gmail.com>
 * @link        http://www.netcommons.org NetCommons Project
 * @license     http://www.netcommons.org/license.txt NetCommons License
 * @copyright   Copyright 2014, NetCommons Project
 * @package     app.Plugin.AccessCounter.Test.Fixture
 */

/**
 * AccessCountersBlockFixture
 *
 * @author      Shohei Nakajima <nakajimashouhei@gmail.com>
 * @package     app.Plugin.AccessCounter.Test.Case
 */
class AccessCountersBlockFixture extends CakeTestFixture {

/**
 * use table
 *
 * @author  Shohei Nakajima <nakajimashouhei@gmail.com>
 * @var     bool
 */
	public $table = 'blocks';

/**
 * Fields
 *
 * @author   Shohei Nakajima <nakajimashouhei@gmail.com>
 * @var      array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'room_id' => array('type' => 'integer', 'null' => false, 'default' => null),
		'created_user_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'modified_user_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
		),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB'),
	);

/**
 * Records
 *
 * @author   Shohei Nakajima <nakajimashouhei@gmail.com>
 * @var      array
 */
	public $records = array(
		array(
			'id' => 1,
			'room_id' => 1,
			'created_user_id' => 1,
			'created' => '2014-07-08 15:34:16',
			'modified_user_id' => 1,
			'modified' => '2014-07-08 15:34:16',
		),
		array(
			'id' => 2,
			'room_id' => 1,
			'created_user_id' => 1,
			'created' => '2014-07-08 15:34:16',
			'modified_user_id' => 1,
			'modified' => '2014-07-08 15:34:16',
		),
		array(
			'id' => 3,
			'room_id' => 1,
			'created_user_id' => 1,
			'created' => '2014-07-08 15:34:16',
			'modified_user_id' => 1,
			'modified' => '2014-07-08 15:34:16',
		),
		array(
			'id' => 10,
			'room_id' => 1,
			'created_user_id' => 1,
			'created' => '2014-07-08 15:34:16',
			'modified_user_id' => 1,
			'modified' => '2014-07-08 15:34:16',
		),
		array(
			'id' => 11,
			'room_id' => 1,
			'created_user_id' => 1,
			'created' => '2014-07-08 15:34:16',
			'modified_user_id' => 1,
			'modified' => '2014-07-08 15:34:16',
		),
		array(
			'id' => 12,
			'room_id' => 1,
			'created_user_id' => 1,
			'created' => '2014-07-08 15:34:16',
			'modified_user_id' => 1,
			'modified' => '2014-07-08 15:34:16',
		),
		array(
			'id' => 13,
			'room_id' => 1,
			'created_user_id' => 1,
			'created' => '2014-07-08 15:34:16',
			'modified_user_id' => 1,
			'modified' => '2014-07-08 15:34:16',
		),
		array(
			'id' => 14,
			'room_id' => 1,
			'created_user_id' => 1,
			'created' => '2014-07-08 15:34:16',
			'modified_user_id' => 1,
			'modified' => '2014-07-08 15:34:16',
		),
	);

}
