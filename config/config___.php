<?php
function db()
{
    $localhost = "localhost";
    $username = "root";
    $password = "";
    $dbname = "my_blog";
    try {
        $conn = new PDO("mysql:host=$localhost;dbname=$dbname;charset=utf8mb4", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $conn;
    } catch (PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
        return null;
    }
}
?>