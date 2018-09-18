<?php

// Subpackage namespace
namespace LittleBizzy\SecurityGuard\Modules\Header_Cleanup;

// Aliased namespaces
use \LittleBizzy\SecurityGuard\Helpers;

/**
 * Module class
 *
 * @package Security Guard
 * @subpackage Header Cleanup
 */
class Module extends Helpers\Module {



	/**
	 * Module constants
	 */
	const FILE = __FILE__;
	const PREFIX = 'hdrcln';
	const MODULE_NAMESPACE = __NAMESPACE__;



	/**
	 * Run the core module
	 */
	protected function onConstruct() {

		// Avoid admin area
		if (is_admin())
			return;

		// Check cron or xml-rpc context
		if (defined('DOING_CRON') || defined('XMLRPC_REQUEST'))
			return;

		// Wait for the init hook
		add_action('init', [$this, 'init'], PHP_INT_MAX);
	}



	/**
 	 * Start the module functionality
 	 */
	public function init() {

		// Last minute check
		if ($this->enabled()) {
			new Core\Cleaner;
		}
	}



}