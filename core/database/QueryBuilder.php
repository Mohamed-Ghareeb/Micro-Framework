<?php


class QueryBuilder
{
    public $pdo;
    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }
    public function selectAll($table)
    {
        $statment = $this->pdo->prepare("select * from {$table}");

        $statment->execute();

        return $statment->fetchAll(PDO::FETCH_CLASS);
    }
}
