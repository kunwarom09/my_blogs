<?php
require_once("./send_data.php");
require_once("./head_to.php");
$title = $_REQUEST["title"];
$name = $_REQUEST["writer_name"];
$blog = $_REQUEST["blog"];
try {
    if (empty($title) || empty($name) || empty($blog)) {
        throw new Exception("No filed should be left empty!");
    } else {
        $is_sent = send_data($name, $title, $blog);
        if ($is_sent) {
            echo "The blog is added";
        } else {
            echo "Sorry! The blog could not be added";
        }
    }
    head_to('write_blog');
} catch (error) {
    throw new Exception('error!');
}
echo $title;
?>