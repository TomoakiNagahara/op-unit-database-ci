<?php
/**	op-unit-database-ci:/Database/Quick.php
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
$message = 'Quick() is QQL() wrapper.';
$args    = [''];
$result  = 'Exception: SQLSTATE[HY000]: General error: 1 no such table: ';
$ci->Set( $method, $result, $args, message:$message );
