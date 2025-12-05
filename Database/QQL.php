<?php
/**	op-unit-database-ci:/Database/QQL.php
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
$message = 'Positive case';
$args    = [' ai <- t_testcase.ai = 1 ', 'limit = 1'];
$result  = '1';
$ci->Set( $method, $result, $args, message:$message );

//	...
$message = 'Positive case - limit is not set';
$args    = [' ai <- t_testcase.ai = 1 '];
$result  = [ 0 => '1' ];
$ci->Set( $method, $result, $args, message:$message );

//	...
$message = 'Positive case - ai, number';
$args    = ['ai, number <- t_testcase.ai = 1', 'limit = 1'];
$result  = ['ai'=>'1', 'number'=>'2030'];
$ci->Set( $method, $result, $args, message:$message );

//	...
$message = 'Positive case - ai, number, empty option';
$args    = ['ai, number <- t_testcase.ai = 1'];
$result  = [0=>['ai'=>'1', 'number'=>'2030']];
$ci->Set( $method, $result, $args, message:$message );

//	...
$message = 'Positive case - ai > 0';
$args    = ['ai, number <- t_testcase.ai > 0', 'limit = 1'];
$result  = ['ai'=>'1', 'number'=>'2030'];
$ci->Set( $method, $result, $args, message:$message );
