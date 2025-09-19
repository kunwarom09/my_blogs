<?php

namespace src;

use PDO;

class DatabaseAdapter
{
    protected ?PDO $conn = null;
    public function __construct(protected array $dbConfigs)
    {

    }
    public function getAdapter(): ?PDO
    {
        if($this->conn) return $this->conn;
        //$dbCredentials = require __DIR__ . '/config.php';
        try {
            $this->conn = new PDO("mysql:host={$this->dbConfigs['host']};dbname={$this->dbConfigs['dbname']};charset=utf8mb4", $this->dbConfigs['username'], $this->dbConfigs['password']);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $this->conn;
        } catch (\PDOException $e) {
            throw new \Exception("Failed to create database connection !");
            //todo log the critical error
            //Log::critical($e->getMessage());
        }
    }
}