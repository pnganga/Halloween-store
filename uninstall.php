<?php 
	// if uninstall/delete not called from wordpress exit 
	if (!defined('ABSPATH') && !defined('WP_UNINSTALL_PLUGIN')) 
		exit();
	// Delere options array from options table 
	delete_option('halloween_options');
 ?>