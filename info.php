<?php

/**
 *  @module      	Library Formstone
 *  @version        see info.php of this module
 *  @author         cms-lab
 *  @copyright      2014-2018 CMS-LAB
 *  @license        http://opensource.org/licenses/MIT
 *  @license terms  see info.php of this addon
 *  @platform       see info.php of this addon
 */

// include class.secure.php to protect this file and the whole CMS!
if (defined('LEPTON_PATH')) {	
	include(LEPTON_PATH.'/framework/class.secure.php'); 
} else {
	$oneback = "../";
	$root = $oneback;
	$level = 1;
	while (($level < 10) && (!file_exists($root.'/framework/class.secure.php'))) {
		$root .= $oneback;
		$level += 1;
	}
	if (file_exists($root.'/framework/class.secure.php')) { 
		include($root.'/framework/class.secure.php'); 
	} else {
		trigger_error(sprintf("[ <b>%s</b> ] Can't include class.secure.php!", $_SERVER['SCRIPT_NAME']), E_USER_ERROR);
	}
}
// end include class.secure.php



$module_directory = 'lib_formstone';
$module_name      = 'Formstone Library';
$module_function  = 'library';
$module_version   = '1.4.3.0';
$module_platform  = '2.x';
$module_delete	  =  true;
$module_author    = 'cms-lab';
$module_license   = 'http://opensource.org/licenses/MIT';
$module_license_terms   = '-';
$module_description = '<a href="http://formstone.it" target="_blank">Formstone</a>: not a framework. Just a collection of thoughtfully crafted front-end components.';
$module_guid      = '907e2b79-ab45-4ef2-9215-f9c47d831bb3';
$module_home      = 'http://www.cms-lab.com';

?>