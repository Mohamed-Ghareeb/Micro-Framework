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

    public function insert($table, $params)
    {
        $sql = sprintf('insert into %s (%s) values (%s)', $table, implode(', ', array_keys($params)), ':' . implode(', :', array_keys($params)));
        $statment = $this->pdo->prepare($sql);
        $statment->execute($params);

        // try {
        // } catch (Exception $e) {
        //   die('whoops, Something Went Wrong.');
        // }
    }
}
