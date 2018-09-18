<?php
/*
Plugin Name: Security Guard
Plugin URI: https://www.littlebizzy.com/plugins/security-guard
Description: A carefully selected security suite for WordPress that combines only the most effective methods of guarding against hackers and other common attacks.
Version: 1.0.0
Author: LittleBizzy
Author URI: https://www.littlebizzy.com
License: GPLv3
License URI: https://www.gnu.org/licenses/gpl-3.0.html
Prefix: SCRGRD
*/

// Plugin namespace
namespace LittleBizzy\SecurityGuard;

// Aliased namespaces
use LittleBizzy\SecurityGuard\Notices;

// Block direct calls
if (!function_exists('add_action'))
	die;

// Plugin constants
const FILE = __FILE__;
const PREFIX = 'scrgrd';
const VERSION = '1.0.0';

// Loader
require_once dirname(FILE).'/helpers/loader.php';

// Admin Notices
// Notices\Admin_Notices::instance(__FILE__);

/**
 * Admin Notices Multisite check
 * Uncomment "return;" to disable this plugin on Multisite installs
 */
if (false !== Notices\Admin_Notices_MS::instance(__FILE__)) { /* return; */ }

// Run the main class
Helpers\Runner::start('Core\Core', 'instance');
