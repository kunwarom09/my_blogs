<?php
require_once __DIR__ . '/../config/config.php';
function get_data($table, $id = '')
{
    if ($id == '') {
        $sql = "SELECT * FROM `$table`";
    } else {
        $sql = "SELECT * FROM `$table` WHERE id = '$id'";
    }
    $stmt = db()->prepare($sql);
    $stmt->execute();
    $result = $stmt->fetchAll();
    return $result;
}
?>