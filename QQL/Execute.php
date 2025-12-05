<?php
/**	op-unit-database-ci:/QQL/Execute.php
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
$message = 'Execute() is wrapper of Select()';
$args   = [' ai <- t_testcase.ai = 1 ','limit = 1'];
$result = '1';
$ci->Set( $method, $result, $args, message:$message );
