<?php
require_once("./send_data.php");
require_once("./head_to.php");
require_once("./flash.php");
$name = trim($_REQUEST["name"]??"");
$email = $_REQUEST["email"];
$message = $_REQUEST["message"];


if(!$name || strlen($name) < 3){
    throw new Exception("name is required and must be at least 3 characters long");
}
//validate email @.c...
if(!$email || !checkEmail($email)){
    throw new Exception("email is required and must be valid");
}
if(!$message){
    throw new Exception("message is required");
}

try {
    $is_sent = send_message($name, $email, $message);
    if (!$is_sent) {
        throw new Exception("Sorry! The message could not be sent");
    }
    flash('message_sent', 'success', 'Message is sent successfully');
} catch (\Exception $error) {
    flash('message_not_sent', 'error', $error->getMessage());
}


/*try {
    $is_sent = send_message($name, $email, $message);
    if ($is_sent) {
        flash('message_sent', 'success', 'Message is sent successfully');
    } else {
        flash('message_not_sent', 'error', 'Sorry! The message could not be sent');
    }
    head_to('contact');
} catch (error) {
    throw new Exception('error!');
}*/