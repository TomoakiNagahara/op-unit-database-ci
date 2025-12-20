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
$php = PHP_MAJOR_VERSION.PHP_MINOR_VERSION;
$ai  = 1;
$num = 2030;
if( $php == 80 ){
	$ai  = (string)$ai;
	$num = (string)$num;
}

//	...
$message = 'Positive case';
$args    = [' ai <- t_testcase.ai = 1 ', 'limit = 1'];
$result  = $ai;
$ci->Set( $method, $result, $args, message:$message );

//	...
$message = 'Positive case - limit is not set';
$args    = [' ai <- t_testcase.ai = 1 '];
$result  = [ 0 => $ai ];
$ci->Set( $method, $result, $args, message:$message );

//	...
$message = 'Positive case - ai, number';
$args    = ['ai, number <- t_testcase.ai = 1', 'limit = 1'];
$result  = ['ai'=>$ai, 'number'=>$num];
$ci->Set( $method, $result, $args, message:$message );

//	...
$message = 'Positive case - ai, number, empty option';
$args    = ['ai, number <- t_testcase.ai = 1'];
$result  = [0=>['ai'=>$ai, 'number'=>$num]];
$ci->Set( $method, $result, $args, message:$message );

//	...
$message = 'Positive case - ai > 0';
$args    = ['ai, number <- t_testcase.ai > 0', 'limit = 1'];
$result  = ['ai'=>$ai, 'number'=>$num];
$ci->Set( $method, $result, $args, message:$message );
