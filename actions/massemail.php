<?php

    // Protect the action with gatekeepers
    admin_gatekeeper();
    action_gatekeeper();
    global $CONFIG;

    $message_subject = get_input('message_subject');
    $message_body = get_input('message_body');

	if ($message_subject && $message_body) {

	    $limit = 100;
	    $offset = 0;
	    $batches_count = 1;
	    $success_count = 0;
	    $failure_count = 0;

	    $users_count = elgg_get_entities(array('type' => 'user', 'count' => true));

	    if ($users_count>$limit) {
		    $batches_count = (int)($users_count/$limit);
	    }

	    if (($users_count - ($batches_count*$limit)) > 0) {
		    $batches_count += 1;
	    }

	    for ($i=1;$i<=$batches_count;$i++) {
		    $batch = elgg_get_entities(array('type' => 'user', 'offset' => $offset, 'limit' => $limit));

		    foreach ($batch as $user) {
			    $notified = notify_user($user->guid, $CONFIG->site->guid, $message_subject, $message_body, NULL, 'email');
				if (is_array($notified) && $notified[$user->guid]['email']) {
					$success_count++;
				} else {
					$failure_count++;
				}
			}
			unset($batch);
			$offset += $limit;
		}

		if ($success_count > 0) {
		    /*translation:Successfully notified %d users*/
			system_message(sprintf(elgg_echo('massnotifier:success:successfully_notified_number_of_users'), $success_count));

            if ($failure_count > 0) {
				/*translation:%d users could not be notified*/
				register_error(sprintf(elgg_echo('massnotifier:error:some_users_could_not_be_notified')));
		    }
		} else {
			/*translation:No users could be notified*/
			register_error(elgg_echo('massnotifier:error:no_users_could_be_notified'));
		}
	} else {
		/*translation:Message subject or body was empty*/
		register_error(elgg_echo('massnotifier:error:message_subject_or_body_not_provided'));
	}

	forward(REFERER);
?>
