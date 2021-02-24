<?php

namespace application\controllers;

use application\core\Controller;
use application\core\View;
use application\models\ModelList;

class ControllerList extends Controller
{

    function __construct()
    {
        $this->model = new ModelList();
        $this->view = new View();
    }

    function actionIndex()
    {
        // Getting a list of participants and generating a page with the received data
        $data = $this->model->getParticipantsList();
        $this->view->generate('ListView.php', 'TemplateView.php', $data);
    }
}