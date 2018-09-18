<?php

// Subpackage namespace
namespace LittleBizzy\SecurityGuard\Modules\Force_Strong_Hashing;

// Aliased namespaces
use \LittleBizzy\SecurityGuard\Helpers;

/**
 * Module class
 *
 * @package Security Guard
 * @subpackage Force Strong Hashing
 */
class Module extends Helpers\Module {



	/**
	 * Module constants
	 */
	const FILE = __FILE__;
	const PREFIX = 'fsthsg';
	const MODULE_NAMESPACE = __NAMESPACE__;



	/**
	 * Wait to start on WP init hook
	 */
	protected function onConstruct() {
		Core\Core::instance($this);
	}



}