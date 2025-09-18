<?php
require_once __DIR__ . '/../config/config.php';
function get_data($table, $title = '')
{
    if ($title == '') {
        $sql = "SELECT * FROM `$table`";
    } else {
        $sql = "SELECT * FROM `$table` WHERE blog_title = '$title'";
    }
    $stmt = db()->prepare($sql);
    $stmt->execute();
    $result = $stmt->fetchAll();
    return $result;
}

// function get_data_from_title($table, $title)
// {
//     $sql = "SELECT * FROM `$table` WHERE blog_title = '$title'";
//     $stmt = db()->prepare($sql);
//     $stmt->execute();
//     $result = $stmt->fetchAll();
//     return $result;
// }
?>