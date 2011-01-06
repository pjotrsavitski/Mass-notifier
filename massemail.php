<?php

    // Load engine
    require_once(dirname(dirname(dirname(__FILE__))) . "/engine/start.php");

    // Admin-omly restriction
    admin_gatekeeper();
    set_context('admin');

	/*translation:Send e-mail messages to all users*/
	$title = elgg_echo('massnotifier:title:send_mass_messages');

	$body = "";

	$body .= elgg_view_title($title);
	$body .= '<div class="contentWrapper">';
	$body .= elgg_view('massnotifier/forms/massemail', array());
	$body .= '</div>';

	page_draw($title, elgg_view_layout('two_column_left_sidebar', '', $body));
?>
