<?php
/**	op-unit-database-ci:/Database/Quote.php
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
$message = 'MySQL - first character';
$args    = '`Quote';
$result  = 'Exception: The string contains invalid characters: `Quote --> `';
$ci->Set( $method, $result, $args, message:$message );

//	...
$message = 'MySQL - last character';
$args    = 'Quote`';
$result  = 'Exception: The string contains invalid characters: Quote` --> `';
$ci->Set( $method, $result, $args, message:$message );

//	...
$message = 'MySQL - middle character';
$args    = 'Quo`e';
$result  = 'Exception: The string contains invalid characters: Quo`e --> `';
$ci->Set( $method, $result, $args, message:$message );

//	...
$message = 'MySQL - both sides characters';
$args    = '`Quote`';
$result  = 'Exception: The string contains invalid characters: `Quote` --> `';
$ci->Set( $method, $result, $args, message:$message );

//	...
$message = 'SQLite - first character';
$args    = '"Quote';
$result  = 'Exception: The string contains invalid characters: "Quote --> "';
$ci->Set( $method, $result, $args, message:$message );

//	...
$message = 'SQLite - last character';
$args    = 'Quote"';
$result  = 'Exception: The string contains invalid characters: Quote" --> "';
$ci->Set( $method, $result, $args, message:$message );

//	...
$message = 'SQLite - middle character';
$args    = 'Quo"e';
$result  = 'Exception: The string contains invalid characters: Quo"e --> "';
$ci->Set( $method, $result, $args, message:$message );

//	...
$message = 'SQLite - both sides characters';
$args    = '"Quote"';
$result  = 'Exception: The string contains invalid characters: "Quote" --> "';
$ci->Set( $method, $result, $args, message:$message );
