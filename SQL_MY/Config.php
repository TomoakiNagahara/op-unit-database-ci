<?php
/**	op-unit-database-ci:/SQL_MY/Config.php
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
	$result = 'Exception: php-mysql is not installed.';
	$ci->Set($method, $result, $args);
}else{
	//	...
	$args   = [[]];
	$result = 'Notice: Empty host.';
	$ci->Set($method, $result, $args);
}
