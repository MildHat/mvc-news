<?php

class Router
{
    private $routes;

    public function __construct()
    {
        $path = ROOT . '/config/routes.php';
        if (file_exists($path))
        {
            $this->routes = include_once($path);
        } else {
            echo "Error";
        }
    }

    private function getURI()
    {
        if ($_SERVER['REQUEST_URI'])
        {
            return trim($_SERVER['REQUEST_URI'], '/');
        }
    }

    public function run()
    {
        $uri = $this->getURI();

        foreach ($this->routes as $uriPattern => $path)
        {
            if(preg_match("~$uriPattern~", $uri))
            {
                $status = true;
                $internalRoute = preg_replace("~$uriPattern~", $path, $uri);
                $segments = explode('/', $internalRoute);

                $className = ucfirst(array_shift($segments)) . 'Controller';
                $actionName = 'action' . ucfirst(array_shift($segments));

                $parameters = $segments;

                $pathToClass = ROOT . '/controllers/' . $className . '.php';

                if (file_exists($pathToClass))
                {
                    require_once($pathToClass);
                    $classObject = new $className;
                    $result = call_user_func_array([$classObject, $actionName], $parameters);

                    if ($result = true)
                    {
                        break;
                    }
                }
                echo "Error";
            }
        }
        if (!$status) {
            header('Location: /');
        }
    }
}