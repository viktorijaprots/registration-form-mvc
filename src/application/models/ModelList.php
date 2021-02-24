<?php

namespace application\models;

use application\core\Model;
use application\core\DB;

class ModelList extends Model
{
    public function getParticipantsList()
    {
        // Initializing a database connection and getting a list of all participants
        $db = new DB();
        $pdo = $db->getConnect();
        $sql = "SELECT `id`, `name`, `surname`, `organization_name`, `email` FROM `participants` ORDER BY `id` DESC";
        return $pdo->query($sql)->fetchAll();
    }
}