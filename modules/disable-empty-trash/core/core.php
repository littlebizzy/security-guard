<?php

// Subpackage namespace
namespace LittleBizzy\SecurityGuard\Modules\Disable_Empty_Trash\Core;

/**
 * Core class
 *
 * @package Security Guard / Disable Empty Trash
 * @subpackage Core
 */
final class Core {



	// Properties
	// ---------------------------------------------------------------------------------------------------



	/**
	 * Single class instance
	 */
	private static $instance;



	// Initialization
	// ---------------------------------------------------------------------------------------------------



	/**
	 * Create or retrieve instance
	 */
	public static function instance() {

		// Check instance
		if (!isset(self::$instance))
			self::$instance = new self;

		// Done
		return self::$instance;
	}



	/**
	 * Constructor
	 */
	private function __construct() {

		/**
		 * Removes wp_scheduled_delete action to avoid periodic executions
		 */
		remove_action('wp_scheduled_delete', 'wp_scheduled_delete');
	}



}