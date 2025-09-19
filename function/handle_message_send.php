<?php
require_once("./send_data.php");
require_once("./head_to.php");
require_once("./flash.php");
$name = $_REQUEST["name"];
$email = $_REQUEST["email"];
$message = $_REQUEST["message"];
try {
    if (empty($name) || empty($email) || empty($message)) {
        throw new Exception("No filed should be left empty!");
    } else {
        $is_sent = send_message($name, $email, $message);
        if ($is_sent) {
            flash('message_sent', 'success', 'Message is sent successfully');
        } else {
            flash('message_not_sent', 'error', 'Sorry! The message could not be sent');
        }
    }
    head_to('contact');
} catch (error) {
    throw new Exception('error!');
}
?>