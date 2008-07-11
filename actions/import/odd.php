<?php
	/**
	 * Elgg OpenDD import action.
	 * 
	 * This action accepts data to import (in OpenDD format) and performs and import. It accepts 
	 * data as $data.
	 * 
	 * @package Elgg
	 * @subpackage Core
	 * @license http://www.gnu.org/licenses/old-licenses/gpl-2.0.html GNU Public License version 2
	 * @author Marcus Povey
	 * @copyright Curverider Ltd 2008
	 * @link http://elgg.org/
	 */

	// Safety
	gatekeeper();
	
	// Get input
	$data = get_input($data);
	
	// Import 
	$return = import($data);
	
	if ($return)
		system_message(elgg_echo('importsuccess'));
	else
		register_error(elgg_echo('importfail'));
?>