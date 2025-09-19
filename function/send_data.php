<?php
require_once("../config/config.php");
require_once("../config/db_functions.php");

/**
 * save_data ??
 * save_blog
 *
 */
function send_data($name, $title, $blog)
{
    $sql = 'INSERT INTO blogs(blog_title,blog_desc,blog_writer) VALUES(:title,:desc,:writer)';
    $stmt = dbConnector()->prepare($sql);
    $stmt->bindParam(':title', $title);
    $stmt->bindParam(':desc', $blog);
    $stmt->bindParam(':writer', $name);
    return $stmt->execute();
}

//save_contact

function send_message($name, $email, $message)
{
    $sql = 'INSERT INTO contact(sender_name,sender_email,message) VALUES(:name,:email,:message)';
    $stmt = dbConnector()->prepare($sql);
    $stmt->bindParam(':name', $name);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':message', $message);
    return $stmt->execute();
}

?>