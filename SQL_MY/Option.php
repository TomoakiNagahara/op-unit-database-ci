<?php
/**	op-unit-database-ci:/SQL_MY/Option.php
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
if(!defined('\PDO::MYSQL_ATTR_INIT_COMMAND') ){
	//	...
	$args   = [[]];
	$result = 'Exception: Undefined constant PDO::MYSQL_ATTR_INIT_COMMAND';
	$ci->Set($method, $result, $args);
}else{
	//	...
	$args   = [[]];
	$result = [
		1002 => 'SET NAMES utf8',
		1013 => false,
		12   => false,
	];
	$ci->Set($method, $result, $args);
}
