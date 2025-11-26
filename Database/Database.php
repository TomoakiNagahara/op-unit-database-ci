<?php
/**	op-unit-database-ci:/Database/Database.php
 *
 * @created    2025-11-26
 * @version    1.0
 * @package    op-unit-database-ci
 * @author     Tomoaki Nagahara
 * @copyright  Tomoaki Nagahara All rights reserved.
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
$args   =  null;
$result = 'Notice: E_WARNING: Undefined array key "database"';
$ci->Set($method, $result, $args);
