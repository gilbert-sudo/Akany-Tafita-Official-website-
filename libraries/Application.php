<?php

class Application {
    public  static function process()
    {
        $controllerName = "Home";
        $task = "index";
        $param1= " ";
        $param2= " ";
        if (!empty($_GET['controller'])) {
            $controllerName = ucfirst($_GET['controller']);
        }
        else if(!empty($_GET['param1'])){
            $param1 = $_GET['param1'];
        }
        else if(!empty($_GET['param2'])){
            $param2 = $_GET['param2'];
        }
        if (!empty($_GET['task'])) {
            $task = $_GET['task'];
        }
        $controllerName = 'Controllers\\' . $controllerName;
        $controller = new $controllerName();
        $controller->$task($param1, $param2);

    }
}