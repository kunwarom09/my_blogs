<?php
function dbConnector(): ?PDO
{
    $dbCredentials = require __DIR__ . '/config.php';
    try {
        $conn = new PDO("mysql:host={$dbCredentials['db']['host']};dbname={$dbCredentials['db']['dbname']};charset=utf8mb4", $dbCredentials['db']['username'], $dbCredentials['db']['password']);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $conn;
    } catch (PDOException $e) {
        throw new \Exception("Failed to create database connection !");
        //todo log the critical error
        //Log::critical($e->getMessage());
    }
}