<?php

namespace application\core;

class DB
{
    public static function getConnect()
    {
        // Getting configurations and connecting to the database
        $params = include('config.php');
        $dsn = "mysql:host={$params['host']};dbname={$params['dbname']}";
        $db = new \PDO($dsn, $params['user'], $params['password']);
        return $db;
    }
}