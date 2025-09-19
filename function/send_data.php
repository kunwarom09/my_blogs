<?php
require_once("../config/config.php");

function send_data($name, $title, $blog)
{
    $sql = 'INSERT INTO blogs(blog_title,blog_desc,blog_writer) VALUES(:title,:desc,:writer)';
    $stmt = db()->prepare($sql);
    $stmt->bindParam(':title', $title);
    $stmt->bindParam(':desc', $blog);
    $stmt->bindParam(':writer', $name);
    return $stmt->execute();
}

function send_message($name, $email, $message)
{
    $sql = 'INSERT INTO contact(sender_name,sender_email,message) VALUES(:name,:email,:message)';
    $stmt = db()->prepare($sql);
    $stmt->bindParam(':name', $name);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':message', $message);
    return $stmt->execute();
}

?>