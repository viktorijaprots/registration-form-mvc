<?php

namespace application\models;

use application\core\Model;
use application\core\DB;

class ModelMain extends Model
{
    public static function saveData($post)
    {
        // Initializing the connection to the database and saving the registration data
        $db = new DB();
        $pdo = $db->getConnect();
        $sql = "INSERT INTO `participants` (`name`, `surname`, `organization_name`, `birthday`, `sex`, `nationality`, `position`, `email`) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
        $pdo->prepare($sql)->execute([$post["name"], $post["surname"], $post["name-organization"], $post["birthday"], $post["sex"], $post["nationality"], $post["position"], $post["email"]]);
        $params = include('config.php');
        header("location: " . $params["main_url"] . "/list");
    }
}