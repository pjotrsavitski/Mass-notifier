<?php

    $en_translation = array(

    
        /* 
        File: /massnotifier/start.php
        Lines: 13
        Text: Send mass Email
        _missing_translation_
        */
        "massnotifier:menu:massemail" => "Send mass Email",
        
        /* 
        File: /massnotifier/actions/massemail.php
        Lines: 46
        Text: Successfully notified %d users
        _missing_translation_
        */
        "massnotifier:success:successfully_notified_number_of_users" => "Successfully notified %d users",
        
        /* 
        File: /massnotifier/views/default/massnotifier/forms/massemail.php
        Lines: 7
        Text: Please note that identical Email messages will be sent to all users. This system will ignore notification settings of the user.
        _missing_translation_
        */
        "massnotifier:text:email_will_be_sent_to_all_users" => "Please note that identical Email messages will be sent to all users. This system will ignore notification settings of the user.",
        
        /* 
        File: /massnotifier/views/default/massnotifier/forms/massemail.php
        Lines: 11
        Text: Message subject
        _missing_translation_
        */
        "massnotifier:label:message_subject" => "Message subject",
        
        /* 
        File: /massnotifier/actions/massemail.php
        Lines: 54
        Text: No users could be notified
        _missing_translation_
        */
        "massnotifier:error:no_users_could_be_notified" => "No users could be notified",
        
        /* 
        File: /massnotifier/views/default/massnotifier/forms/massemail.php
        Lines: 19
        Text: Send messages
        _missing_translation_
        */
        "massnotifier:input:send_mass_mail" => "Send messages",
        
        /* 
        File: /massnotifier/massemail.php
        Lines: 11
        Text: Send e-mail messages to all users
        _missing_translation_
        */
        "massnotifier:title:send_mass_messages" => "Send e-mail messages to all users",
        
        /* 
        File: /massnotifier/actions/massemail.php
        Lines: 50
        Text: %d users could not be notified
        _missing_translation_
        */
        "massnotifier:error:some_users_could_not_be_notified" => "%d users could not be notified",
        
        /* 
        File: /massnotifier/actions/massemail.php
        Lines: 58
        Text: Message subject or body was empty
        _missing_translation_
        */
        "massnotifier:error:message_subject_or_body_not_provided" => "Message subject or body was empty",
        
        /* 
        File: /massnotifier/views/default/massnotifier/forms/massemail.php
        Lines: 15
        Text: Message body
        _missing_translation_
        */
        "massnotifier:label:messgae_body" => "Message body",
        
    );

    if ( function_exists("add_translation") ) {
        add_translation("en",$en_translation);
    }

?>