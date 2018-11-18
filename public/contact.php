<?php

    $sender =   $_POST['email'];
    $title =    $_POST['subject'];
    $content =  $_POST['content'];

    $from = 'no-reply@u525916.gluweb.nl';

    ini_set( 'SMTP', 'mail.u525916.gluweb.nl');
    ini_set( 'SMTP_PORT', 25 );
    ini_set( 'sendmail_from', $sender);

    $to      = ('525916@student.glu.nl');
    $subject = 'New message received from ' . $sender . '(' . date("Y-m-d H:i:s") . ')';

    $message = '';

    $message .= "<!DOCTYPE html>";
    $message .= "<html>";
    $message .= "<h4>From: " . htmlspecialchars($sender) . " (" . $_SERVER['REMOTE_ADDR'] . ")</h4>";
    $message .= "<h4>Subject: " . htmlspecialchars($title) . "</h4>";
    $message .= "<h4>Message:<br></h4>";
    $message .= "<pre>" . $content . "</pre>";
    $message .= "</html>";

    $headers = 'From: ' . $sender . PHP_EOL
        . 'Reply-To: ' . $sender . PHP_EOL
        . 'X-Mailer: PHP/' . phpversion() . PHP_EOL
        . 'Content-type:text/html;charset=UTF-8' . PHP_EOL
        . 'MIME-Version: 1.0';

    $success = mail( $to, $subject, $message, $headers );

    if (isset($success))
    {
        echo "OK";
    } else {
        echo "ERR";
    }