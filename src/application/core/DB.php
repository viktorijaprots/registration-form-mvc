<?php

namespace application\core;

class DB
{
	protected static $instance;
    public static function getConnect()
    {
		if(empty(self::$instance)) {
			// Getting configurations and connecting to the database
			$params = include('config.php');
			$dsn = "mysql:host={$params['host']};dbname={$params['dbname']}";
			self::$instance = new \PDO($dsn, $params['user'], $params['password']);
			self::$instance->query('SET NAMES utf8');
			self::$instance->query('SET CHARACTER SET utf8');
			
		}
		return self::$instance;
    }
}