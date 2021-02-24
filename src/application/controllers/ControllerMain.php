<?php

namespace application\controllers;

use application\core\Controller;
use application\models\ModelMain;

class ControllerMain extends Controller
{
    function actionIndex()
    {
        $this->view->generate('MainView.php', 'TemplateView.php');
    }

    function actionRegistration()
    {
        // Passing credentials to the model
        ModelMain::saveData($_POST);
    }
}