<?php

spl_autoload_register(
    function ($className)
    {
        $folders = ['/components/', '/models/'];

        foreach ($folders as $key => $value)
        {
            $path =  ROOT . $value . $className . '.php';
            if (file_exists($path))
            {
                require_once($path);
                break;
            }
        }
});