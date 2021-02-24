<?php

namespace application\core;

class View
{
    function generate($contentView, $templateView, $data = null)
    {
        // Generating the required template
        include 'application/views/' . $templateView;
    }
}