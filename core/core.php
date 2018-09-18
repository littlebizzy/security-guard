<?php

// Subpackage namespace
namespace LittleBizzy\SecurityGuard\Core;

// Aliased namespaces
use \LittleBizzy\SecurityGuard\Helpers;

/**
 * Core class
 *
 * @package Security Guard
 * @subpackage Core
 */
final class Core extends Helpers\Singleton {



	/**
	 * Pseudo-constructor
	 */
	protected function onConstruct() {

		// Factory object
		$this->plugin->factory = new Factory($this->plugin);

		// Attempt to run all modules
		$this->plugin->factory->modules();
	}



}