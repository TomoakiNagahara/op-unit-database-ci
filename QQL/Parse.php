<?php
/**	op-unit-database-ci:/QQL/Parse.php
 *
 * @created    2025-11-26
 * @license    Apache-2.0
 * @package    op-unit-database-ci
 * @copyright  (C) 2025 Tomoaki Nagahara
 */

/**	Declare strict type
 *
 */
declare(strict_types=1);

/**	Namespace
 *
 */
namespace OP;

//	...
$method = basename(__FILE__);
$method = explode('.', $method)[0];

/* @var $ci \OP\UNIT\CI\CI_Config */

//	...
$message = 'Passed QQL is empty string.';
$args   = [''];
$result = [
	'database' => null,
	'table'    => '``',
	'field'    => '*',
	'where'    => null,
	'order'    => null,
	'limit'    => null,
	'offset'   => null,
	'group'    => null,
];
$ci->Set( $method, $result, $args, message:$message );

//	...
$message = 'Add table and where.';
$args   = ['t_testcase.ai = 1'];
$result = [
	'database' => null,
	'table'    => '`t_testcase`',
	'field'    => '*',
	'where'    => 'WHERE `ai` = \'1\'',
	'order'    => null,
	'limit'    => null,
	'offset'   => null,
	'group'    => null,
];
$ci->Set( $method, $result, $args, message:$message );

//	...
$message = 'Add database.';
$args   = ['testcase.t_testcase.ai = 1'];
$result = [
	'database' => '`testcase`',
	'table'    => '`t_testcase`',
	'field'    => '*',
	'where'    => 'WHERE `ai` = \'1\'',
	'order'    => null,
	'limit'    => null,
	'offset'   => null,
	'group'    => null,
];
$ci->Set( $method, $result, $args, message:$message );

//	...
$message = 'Add limit by string';
$args   = ['testcase.t_testcase.ai = 1','limit=1'];
$result = [
	'database' => '`testcase`',
	'table'    => '`t_testcase`',
	'field'    => '*',
	'where'    => 'WHERE `ai` = \'1\'',
	'order'    => '',
	'limit'    => 'LIMIT 1',
	'offset'   => '',
	'order'    => '',
	'group'    => null,
];
$ci->Set( $method, $result, $args, message:$message );

//	...
$message = 'Add offset by string';
$args   = ['testcase.t_testcase.ai = 1','limit=1, offset=1'];
$result = [
	'database' => '`testcase`',
	'table'    => '`t_testcase`',
	'field'    => '*',
	'where'    => 'WHERE `ai` = \'1\'',
	'order'    => '',
	'limit'    => 'LIMIT 1',
	'offset'   => 'OFFSET 1',
	'order'    => '',
	'group'    => null,
];
$ci->Set( $method, $result, $args, message:$message );

//	...
$message = 'Add order by string';
$args   = ['testcase.t_testcase.ai = 1','limit=1, offset=1, order=timestamp'];
$result = [
	'database' => '`testcase`',
	'table'    => '`t_testcase`',
	'field'    => '*',
	'where'    => 'WHERE `ai` = \'1\'',
	'order'    => 'ORDER BY `timestamp`',
	'limit'    => 'LIMIT 1',
	'offset'   => 'OFFSET 1',
	'group'    => null,
];
$ci->Set( $method, $result, $args, message:$message );

//	...
$message = 'Add desc by string';
$args   = ['testcase.t_testcase.ai = 1','limit=1, offset=1, order=timestamp desc'];
$result = [
	'database' => '`testcase`',
	'table'    => '`t_testcase`',
	'field'    => '*',
	'where'    => 'WHERE `ai` = \'1\'',
	'order'    => 'ORDER BY `timestamp`  desc',
	'limit'    => 'LIMIT 1',
	'offset'   => 'OFFSET 1',
	'group'    => null,
];
$ci->Set( $method, $result, $args, message:$message );

//	...
$message = 'Option is array';
$args   = ['testcase.t_testcase.ai = 1',['limit'=>'1','offset'=>'1','order'=>'timestamp desc']];
$result = [
	'database' => '`testcase`',
	'table'    => '`t_testcase`',
	'field'    => '*',
	'where'    => 'WHERE `ai` = \'1\'',
	'order'    => 'ORDER BY `timestamp`  desc',
	'limit'    => 'LIMIT 1',
	'offset'   => 'OFFSET 1',
	'group'    => null,
];
$ci->Set( $method, $result, $args, message:$message );
