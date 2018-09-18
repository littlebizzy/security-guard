<?php

// Subpackage namespace
namespace LittleBizzy\SecurityGuard\Modules\Force_Strong_Hashing\Core;

// Aliased namespaces
use \LittleBizzy\SecurityGuard\Helpers;

/**
 * Core class
 *
 * @package Security Guard / Force Strong Hashing
 * @subpackage Core
 */
final class Core extends Helpers\Singleton {



	/**
	 * Error messages
	 */
	private $error;
	private $errors = [
		'password_hash' => 'Your current system configuration does not support password hashing with password_hash() function. Please upgrade your PHP version to PHP 5.5 or later, or disable the "Force Strong Hashing" module.',
		'overridden'	=> 'Another plugin has already overridden the password hashing mechanism. The "Force Strong Hashing" module that implements Bcrypt will not work.',
	];



	/**
	 * Pseudo-constructor
	 */
	protected function onConstruct() {

		// Add cusstom functions
		if ($this->allowed()) {
			include_once $this->plugin->root.'/includes/functions.php';
		}
	}



	/**
	 * Determines if this plugin can override functions
	 */
	private function allowed() {

		// Function check
		if (!function_exists('password_hash')) {
			$this->error = 'password_hash';

		// Override check
		} elseif ($this->rewritten()) {
			$this->error = 'overridden';
		}

		// Check current error
		if (isset($this->error) && isset($this->errors[$this->error])) {
			add_action('admin_notices', [$this, 'error']);
			return false;
		}

		// Allowed
		return true;
	}



	/**
	 * Chek if required functions was already rewritten
	 */
	private function rewritten() {

		// Target functions
		$functions = ['wp_check_password', 'wp_hash_password', 'wp_set_password'];

		// Check each function
		foreach ($functions as $function) {
			if (function_exists($function)) {
				return true;
			}
		}

		// Not found
		return false;
	}



	/**
	 * Show plugin notice error
	 */
	public function error() {
		printf('<div class="notice notice-error"><p>%s</p></div>', $this->errors[$this->error]);
	}



}