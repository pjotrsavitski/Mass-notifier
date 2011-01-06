<?php

    function massnotifier_init() {
		// register page handler
		register_page_handler('massnotifier', 'massnotifier_page_handler');
	}

    function massnotifier_pagesetup() {
		global $CONFIG;

		if (get_context() == 'admin' && isadminloggedin()) {
			/*translation:Send mass Email*/
			add_submenu_item(elgg_echo('massnotifier:menu:massemail'), $CONFIG->wwwroot . 'pg/massnotifier/massemail');
		}
    }

    function massnotifier_page_handler($page) {
	   global $CONFIG;

	   if ($page[0]) {
		   switch($page[0]) {
		   case "massemail":
			   include($CONFIG->pluginspath . 'massnotifier/massemail.php');
			   break;
		   default:
			   include($CONFIG->pluginspath . 'massnotifier/massemail.php');
			   break;
		   }
	   }
   }

    // Initialize
    register_elgg_event_handler('init', 'system', 'massnotifier_init');
    register_elgg_event_handler('pagesetup', 'system', 'massnotifier_pagesetup');

	// Actions
	global $CONFIG;
	register_action('massnotifier/massemail',false,$CONFIG->pluginspath . 'massnotifier/actions/massemail.php', true);

?>
