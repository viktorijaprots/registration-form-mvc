<?php

namespace application\core;

use application\controllers\ControllerList;
use application\controllers\ControllerMain;
use application\models\ModelList;
use application\models\ModelMain;

class Route
{
    static function start()
    {
        // Default controller and action
        $controllerName = 'main';
        $actionName = 'Index';

        $routes = explode('/', $_SERVER['REQUEST_URI']);

        // Getting controller name
        if (!empty($routes[1])) {
            $controllerName = $routes[1];
        }

        // Getting the name of an action
        if (!empty($routes[2])) {
            $actionName = $routes[2];
        }

        // Adding prefixes
        $modelName = 'Model' . ucfirst($controllerName);
        $controllerName = 'Controller' . ucfirst($controllerName);
        $actionName = 'action' . $actionName;

        if (!file_exists("application/controllers/$controllerName.php")) {
            Route::errorPage404();
        }

        // Create a controller
        $test = '\application\controllers\\' . $controllerName;
        $controller = new $test;

        // If the action was found, then we call it
        if (method_exists($controller, $actionName)) {
            $controller->$actionName();
        } else {
            Route::errorPage404();
        }

    }

    static function errorPage404()
    {
        header('HTTP/1.1 404 Not Found');
        header("Status: 404 Not Found");
        exit();
    }
}