<?php
/**	op-unit-database-ci:/Database/Connect.php
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
$config = [
	'driver'   => 'mysql',
	'host'     => 'localhost',
	'port'     =>  null,
	'database' => 'testcase',
	'user'     => 'testcase',
	'password' => 'testcase',
	'charset'  => 'utf8',
];

//	...
$args   = [$config];
$result =  true;
$ci->Set($method, $result, $args);
