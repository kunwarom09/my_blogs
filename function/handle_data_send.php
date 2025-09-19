<?php
require_once("./send_data.php");
require_once("./head_to.php");
require_once("./flash.php");
$title = $_REQUEST["title"];
$name = $_REQUEST["writer_name"];
$blog = $_REQUEST["blog"];

$response = [];
try {
    if (empty($title) || empty($name) || empty($blog)) {
        throw new Exception("No filed should be left empty!");
    } else {
        $is_sent = send_data($name, $title, $blog);
        if ($is_sent) {
            $response['status'] = 200;
            $response['message'] = 'Blog is added successfully';
            //saveFlashMessage(key: 'blog_added', type: 'success', message: 'Blog is added successfully');
            //flash('blog_added', 'success', 'Blog is added successfully');
        } else {
            $response['status'] = 400;
            $response['message'] = 'Sorry! The blog could not be added';
            //saveFlashMessage(key: 'blog_not_added', type: 'error', message: 'Sorry! The blog could not be added');
            //flash('blog_not_added', 'error', 'Sorry! The blog could not be added');
        }
    }
    //head_to('write_blog');
} catch (\Exception $error) {
    //throw new Exception('error! '.  $error->getMessage());
    $response['status'] = 500;
    $response['message'] = 'Something went wrong!, please try again later';
    $response['original_message'] = $error->getMessage();
}

//
header('Content-Type: application/json; charset=utf-8');
echo json_encode($response);
