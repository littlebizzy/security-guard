<?php

// Subpackage namespace
namespace LittleBizzy\SecurityGuard\Modules\Disable_Post_Via_Email;

// Aliased namespaces
use \LittleBizzy\SecurityGuard\Helpers;

/**
 * Module class
 *
 * @package Security Guard
 * @subpackage Disable Post Via Email
 */
class Module extends Helpers\Module {



	/**
	 * Module constants
	 */
	const FILE = __FILE__;
	const PREFIX = 'dpveml';
	const MODULE_NAMESPACE = __NAMESPACE__;



	/**
	 * Run the core module
	 */
	protected function onConstruct() {
		Core\Core::instance($this);
	}



}