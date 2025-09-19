<?php

class DatabaseAdapter
{
    protected ?\PDO $connection = null;
    public function __construct(protected array $config)
    {
        
    }

    public function getConnection(): PDO
    {
        if($this->connection) return $this->connection;

        //todo add error handling
        $this->connection = new \PDO("mysql:host={$this->config['host']};dbname={$this->config['dbname']};charset=utf8mb4", $this->config['username'], $this->config['password']);
       return $this->connection;
    }
}