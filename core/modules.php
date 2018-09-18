<?php

// Subpackage namespace
namespace LittleBizzy\SecurityGuard\Core;

// Aliased namespaces
use \LittleBizzy\SecurityGuard\Helpers;

/**
 * Modules class
 *
 * @package Security Guard
 * @subpackage Core
 */
final class Modules extends Helpers\Singleton {



	/**
	 * Modules keys and declarations
	 */
	private $keys = [

		'disable-empty-trash' => [
			'classes'	=> '\LB_Disable_Empty_Trash',
		],

		'disable-post-via-email' => [
			'constants' => '\LittleBizzy\DisablePostViaEmail\FILE',
			'classes'	=> '\LittleBizzy\DisablePostViaEmail\Core\Core',
		],

		'disable-xml-rpc' => [
			'classes' 	=> ['\LB_Disable_XML_RPC', '\LittleBizzy\DisableXMLRPC\LB_Disable_XML_RPC'],
		],

		'force-strong-hashing' => [
			'classes'	=> '\LBizzy_Force_Strong_Hashing',
		],

		'header-cleanup' => [
			'constants' => '\LittleBizzy\HeaderCleanup\FILE',
			'classes'	=> '\LittleBizzy\HeaderCleanup\Core\Core',
		],
	];



	/**
	 * Run all modules
	 */
	protected function onConstruct() {

		// Enum all modules
		foreach ($this->keys as $key => $const) {

			// Check module availability
			if ($this->enabled($key)) {

// Debug point
//error_log($key);

				// Create instance
				$this->plugin->factory->module($key, $this);
			}
		}
	}



	/**
	 * Check if the plugin already exists or is disabled via constant
	 */
	public function enabled($key) {

		// Check module disabled mode
		if (!isset($this->keys[$key]) ||
			$this->invalidated($key)) {

// Debug point
//error_log('invalidated: '.$key);

			// Invalidated
			return false;
		}

		// Check defined constants
		if (!empty($this->keys[$key]['constants'])) {

			// Cast to array
			$constants = is_array($this->keys[$key]['constants'])? $this->keys[$key]['constants'] : [$this->keys[$key]['constants']];
			foreach ($constants as $constant) {

				// Check existence
				if (defined($constant)) {

// Debug point
//error_log('constant '.$constant.' - key: '.$key);

					// Disabled
					return false;
				}
			}
		}

		// Check existing classes
		if (!empty($this->keys[$key]['classes'])) {

			// Cast to array
			$classes = is_array($this->keys[$key]['classes'])? $this->keys[$key]['classes'] : [$this->keys[$key]['classes']];
			foreach ($classes as $class) {

				//  Check existence
				if (class_exists($class)) {

// Debug point
//error_log('class '.$class.' - key: '.$key);

					// Disabled
					return false;
				}
			}
		}

		// Enabled
		return true;
	}



	/**
	 * Specific module invalidation
	 */
	private function invalidated($key) {

		// Prepare constant name
		$name = explode('-', $key);
		$name = array_map('strtoupper', $name);
		$name = implode('_', $name);

		// Invalidated on existence and false value
		return defined($name) && !constant($name);
	}



	/**
	 * Access to the plugin object using a public
	 * method due the protected property declaration
	 */
	public function plugin() {
		return $this->plugin;
	}



}