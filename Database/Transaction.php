<?php
/**	op-unit-database-ci:/Database/Transaction.php
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

//	1st time
$args    = [];
$result  = true;
$message = '1st time';
$ci->Set( $method, $result, $args, message:$message );

//	2nd time
$args    = [];
$result  = 'Exception: There is already an active transaction';
$message = '2nd time';
$ci->Set( $method, $result, $args, message:$message );
