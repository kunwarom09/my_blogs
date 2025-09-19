<?php

class BlogAdapter
{
    const TABLE = 'blogs';
    public function __construct(protected \PDO $connection)
    {

    }

    public function findAll(): array
    {
        $query = "SELECT * FROM " . self::TABLE;
        $stmt = $this->connection->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll();
    }

    public function findById(int $blogId): ?array
    {
        //$query = "SELECT * FROM ". self::TABLE. " WHERE id = '$blogId'";
        $query = "SELECT * FROM " . self::TABLE;
        $query .= " WHERE id = '$blogId'";
        $stmt = $this->connection->prepare($query);
        $stmt->execute();
        $items = $stmt->fetchAll();
        return $items ? current($items) : [];
    }
}