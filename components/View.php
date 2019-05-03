<?php

class View
{
    public static function render($template, $data = 0)
    {
        $pathToTemplate = ROOT . '/templates/' . $template . '.php';

        if (file_exists($pathToTemplate))
        {
            $data = $data;
            require_once($pathToTemplate);
        }
    }
}