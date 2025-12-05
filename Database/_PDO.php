<?php
/**	op-unit-database-ci:/Database/_PDO.php
 *
 * @created    2025-12-04
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
$args   = 'default';
$result = 'Notice: No PDO with this label name has been set: default';
$ci->Set($method, $result, $args);
