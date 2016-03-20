<?php

class Router
{
    private $routes;

    public function __construct()
    {
        $routesPath = ROOT.'/config/routes.php';
        $this->routes = include($routesPath);
    }

    private function getURI()
    {
        if(!empty($_SERVER['REQUEST_URI'])){
            return trim($_SERVER['REQUEST_URI'],'/');
        }
    }

    public function run()
    {
        // получить строку запроса
        $uri = $this->getURI();

        // проверить наличие такого запроса в routes.php
        foreach ($this->routes as $uriPattern => $path) {
            // сравниваем $uriPattern и $uri
            if(preg_match("~$uriPattern~", $uri)) {

                /*
                echo '<br>Где ищем запрос, который набрал пользователь): '.$uri;
                echo '<br>Что ищем (совпадение из правил): '.$uriPattern;
                echo '<br>Кто обрабатывает: '.$path;
                */

                // получаем внутренний путь из внешнего согласно правилу.

                $internalRoute = preg_replace("~$uriPattern~", $path, $uri);

                //echo '<br><br>Нужно сформировать: '.$internalRoute;

                //определить какой контроллер
                // и action обрабатывают запрос, и (параметры)
                $segments = explode('/', $internalRoute);

                $controllerName = array_shift($segments).'Controller';
                $controllerName = ucfirst($controllerName);

                //$actionName = 'action'.ucfirst(array_shift($segments));
                $className = ucfirst(array_shift($segments)).'Controller';

                /*
                echo '<br>controller name: '.$controllerName;
                echo '<br>action name: '.$actionName;
                */

                $actionName = 'action'.ucfirst(array_shift($segments));

                $parameters = $segments;

                /*
                echo '<pre>';
                print_r($parameters);
                die;
                */

                // подключить файл класса-контроллера
                $controllerFile = ROOT.'/controllers/'.$controllerName.'.php';

                if(file_exists($controllerFile)) {
                    include_once($controllerFile);
                }

                // создать объект, вызвать метод (т.е. action)
                $controllerObject = new $className;

                //$result = $controllerObject->$actionName($parameters);

                //$result = call_user_func_array(array($controllerObject, $actionName), $parameters);
                $result = $controllerObject->$actionName();

                if($result != null) {
                    break;
                }
            }
        }
    }
}