<?php

namespace application\core;

class Controller
{

    public $model;
    public $view;

    function __construct()
    {
        $this->view = new View();
    }
}