<?php

// Subpackage namespace
namespace LittleBizzy\SecurityGuard\Modules\Disable_Empty_Trash;

// Aliased namespaces
use \LittleBizzy\SecurityGuard\Helpers;

/**
 * Module class
 *
 * @package Security Guard
 * @subpackage Disable Empty Trash
 */
class Module extends Helpers\Module {



	/**
	 * Module constants
	 */
	const FILE = __FILE__;
	const PREFIX = 'dsmptr';
	const MODULE_NAMESPACE = __NAMESPACE__;



	/**
	 * Run the core module
	 */
	protected function onConstruct() {

		// Plays very early at init hook
		add_action('init', [$this, 'init'], -999);
	}



	/**
	 * Start the module functionality
	 */
	public function init() {

		// Last minute check
		if ($this->enabled()) {
			Core\Core::instance();
		}
	}


}