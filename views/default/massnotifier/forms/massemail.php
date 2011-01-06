<?php

    if (isadminloggedin()) {
		$form_body = "";
		$form_body .= '<p><label>';
		/*translation:Please note that identical Email messages will be sent to all users. This system will ignore notification settings of the user.*/
		$form_body .= elgg_echo('massnotifier:text:email_will_be_sent_to_all_users');
		$form_body .= '</label></p>';
		$form_body .= '<p>';
		/*translation:Message subject*/
		$form_body .= '<label>'.elgg_echo('massnotifier:label:message_subject').'</label>';
		$form_body .= elgg_view('input/text', array('internalname' => 'message_subject', 'value' => ''));
		$form_body .= '</p>';
		/*translation:Message body*/
		$form_body .= '<label>'.elgg_echo('massnotifier:label:messgae_body').'</label>';
		$form_body .= elgg_view('input/plaintext', array('internalname' => 'message_body', 'value' => ''));
		$form_body .= '</p>';
		/*translation:Send messages*/
		$form_body .= elgg_view('input/submit', array('value' => elgg_echo('massnotifier:input:send_mass_mail')));

		echo elgg_view('input/form', array('body' => $form_body, 'action' => "{$vars['url']}action/massnotifier/massemail"));
		unset($form_body);
	}
?>
