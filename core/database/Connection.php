<?php


class Connection
{
    public static function make($config)
    {
        try {
            // return new PDO('mysql:host=127.0.0.1;dbname=my_todo', 'mohamed', '');
            return new PDO($config['connection'].';'.$config['name'], $config['username'], $config['password']);
        } catch (PDOException $e) {
            die($e->getMessage());
        }

    }
}
