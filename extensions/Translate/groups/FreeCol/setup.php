<?php
/**
 * Support for FreeCol
 * http://www.freecol.org
 *
 * @file
 * @ingroup Extensions
 *
 * @author Niklas Laxström
 * @copyright Copyright © 2008-2009, Niklas Laxström
 * @license http://www.gnu.org/copyleft/gpl.html GNU General Public License 2.0 or later
 */


$dir = dirname( __FILE__ );

/**
 * Add the FreeColMessageChecker class to the autoloader.
 */
$wgAutoloadClasses['FreeColMessageChecker'] = dirname( __FILE__ ) . '/Checker.php';
