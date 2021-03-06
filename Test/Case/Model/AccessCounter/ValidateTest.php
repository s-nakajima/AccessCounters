<?php
/**
 * AccessCounter::validates()のテスト
 *
 * @property AccessCounter $AccessCounter
 *
 * @author Noriko Arai <arai@nii.ac.jp>
 * @author Shohei Nakajima <nakajimashouhei@gmail.com>
 * @link http://www.netcommons.org NetCommons Project
 * @license http://www.netcommons.org/license.txt NetCommons License
 * @copyright Copyright 2014, NetCommons Project
 */

App::uses('NetCommonsValidateTest', 'NetCommons.TestSuite');
App::uses('AccessCounter', 'AccessCounters.Model');

/**
 * AccessCounter::validates()のテスト
 *
 * @author Shohei Nakajima <nakajimashouhei@gmail.com>
 * @package NetCommons\AccessCounters\Test\Case\Model\AccessCounter
 */
class AccessCounterValidateTest extends NetCommonsValidateTest {

/**
 * Plugin name
 *
 * @var array
 */
	public $plugin = 'access_counters';

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'plugin.access_counters.access_counter',
		'plugin.access_counters.access_counter_frame_setting',
	);

/**
 * Model name
 *
 * @var array
 */
	protected $_modelName = 'AccessCounter';

/**
 * Method name
 *
 * @var array
 */
	protected $_methodName = 'saveAccessCounter';

/**
 * data
 *
 * @var array
 */
	private $__data = array(
		'Frame' => array(
			'id' => '6'
		),
		'Block' => array(
			'id' => '1',
			'key' => 'block_2',
			'language_id' => '2',
			'room_id' => '2',
			'plugin_key' => 'access_counters',
			'key' => 'block_2',
			'public_type' => '1',
		),
		'AccessCounter' => array(
			'id' => '1',
			'block_key' => 'block_2',
			'count' => '2',
			'count_start' => '0',
		),
		'AccessCounterFrameSetting' => array(
				'id' => 2,
				'frame_key' => 'frame_2',
				'display_type' => 2,
				'display_digit' => 5,
		),
	);

/**
 * ValidationErrorのDataProvider
 *
 * #### 戻り値
 *  - field フィールド名
 *  - value セットする値
 *  - message エラーメッセージ
 *  - overwrite 上書きするデータ
 *
 * @return void
 */
	public function dataProviderValidationError() {
		return array(
			array($this->__data, 'count', '-1',
				__d('net_commons', 'Invalid request.')),
			array($this->__data, 'count_start', '-1',
				__d('net_commons', 'The input %s must be a number bigger than %d and less than %d.',
					array(__d('access_counters', 'Starting Value'), 0, AccessCounter::MAX_VALUE))
				),
			array($this->__data, 'block_key', '',
				__d('net_commons', 'Invalid request.')),
		);
	}

}
